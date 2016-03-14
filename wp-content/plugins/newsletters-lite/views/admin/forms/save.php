<?php

global $ID, $post, $post_ID, $wp_meta_boxes, $errors;

$imagespost = $this -> get_option('imagespost');
$p_id = (empty($_POST['p_id'])) ? $imagespost : $_POST['p_id'];
$ID = $p_id;
$post_ID = $p_id;

wp_enqueue_media(array('post' => $p_id));
wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false);
wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false);

$manualpostboxes = array();
if (!empty($form -> form_fields)) {
	foreach ($form -> form_fields as $form_field) {		
	    add_meta_box('newsletters_forms_field_' . $form_field -> field_id, __($form_field -> label), array($Metabox, 'forms_field'), "newsletters_page_" . $this -> sections -> forms, 'normal', 'core', array('form_field' => $form_field));
	    $manualpostboxes[] = $form_field -> field_id;
	}
}

?>

<div class="wrap <?php echo $this -> pre; ?> <?php echo $this -> sections -> forms; ?> newsletters">
	<?php if (!empty($_GET['id'])) : ?>
		<h2><?php _e('Edit Form', $this -> plugin_name); ?> <a href="?page=<?php echo $this -> sections -> forms; ?>" class="add-new-h2"><?php _e('Add New', $this -> plugin_name); ?></a></h2>
	<?php else : ?>
		<h2><?php _e('Create Form', $this -> plugin_name); ?></h2>
	<?php endif; ?>
	
	<?php $this -> render('forms' . DS . 'navigation', array('form' => $form), true, 'admin'); ?>
	
	<form action="<?php echo admin_url('admin.php?page=' . $this -> sections -> forms . '&amp;method=save'); ?>" method="post" id="post" name="post" enctype="multipart/form-data">
		<?php wp_nonce_field($this -> sections -> forms); ?>
		
		<?php /*<input type="hidden" name="group" value="all" />
		<input type="hidden" id="ishistory" name="ishistory" value="<?php echo $_POST['ishistory']; ?>" />
		<input type="hidden" id="p_id" name="p_id" value="<?php echo $_POST['p_id']; ?>" />
		<input type="hidden" name="inctemplate" value="<?php echo $_POST['inctemplate']; ?>" />
		<input type="hidden" name="recurringsent" value="<?php echo esc_attr(stripslashes($_POST['sendrecurringsent'])); ?>" />
		<input type="hidden" name="post_id" value="<?php echo esc_attr(stripslashes($_POST['post_id'])); ?>" />*/ ?>
		
		<?php /*<?php $this -> render('send-navigation', false, true, 'admin'); ?>*/ ?>
		
		<input type="hidden" name="fields" id="fields" value="" />
		<input type="hidden" name="id" id="id" value="<?php echo esc_attr(stripslashes($form -> id)); ?>" />
		
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">
				<div id="post-body-content">
					<div id="titlediv">
						<div id="titlewrap">
							<label class="screen-reader-text" for="title"></label>
							<input onclick="jQuery('iframe#content_ifr').attr('tabindex', '2');" tabindex="1" id="title" autocomplete="off" type="text" placeholder="<?php echo esc_attr(stripslashes(__('Enter form name here', $this -> plugin_name))); ?>" name="title" value="<?php echo esc_attr(stripslashes($form -> title)); ?>" />
						</div>
						<?php if (!empty($errors['title'])) : ?>
							<div class="ui-state-error ui-corner-all">
								<p><i class="fa fa-exclamation-triangle"></i> <?php echo $errors['title']; ?></p>
							</div>
						<?php endif; ?>
						<div class="inside">
						<div id="edit-slug-box" class="hide-if-no-js" style="display:<?php echo (!empty($_POST['ishistory'])) ? 'block' : 'none'; ?>;">
							<?php $newsletter_url = $Html -> retainquery($this -> pre . 'method=newsletter&id=' . $_POST['ishistory'], home_url()); ?>
							<strong><?php _e('Permalink:', $this -> plugin_name); ?></strong>
							<span id="sample-permalink" tabindex="-1"><?php echo $newsletter_url; ?></span>
							<span id="view-post-btn"><a href="<?php echo $newsletter_url; ?>" target="_blank" class="button button-small"><?php _e('View Newsletter', $this -> plugin_name); ?></a></span>
							<input id="shortlink" type="hidden" value="<?php echo $newsletter_url; ?>">
							<a href="#" class="button button-small" onclick="prompt('URL:', jQuery('#shortlink').val()); return false;"><?php _e('Get Link', $this -> plugin_name); ?></a></div>
						</div>
					</div>
					<div id="<?php echo (user_can_richedit()) ? 'postdivrich' : 'postdiv'; ?>" class="postarea edit-form-section" style="position:relative;">
						<?php /*<!-- The Editor -->
						
						<?php
						
						$setup = "";
						ob_start();
						
						echo "function (ed) {
							
							ed.on('change', function(e) {
								jQuery('#previewiframe').contents().find('html div.newsletters_content').html(ed.getContent());
							});
							
							ed.on('keyup', function(e) {
								var content = ed.getContent();
								var div = document.createElement('div');
								div.innerHTML = content;
								var preheader = div.textContent || div.innerText || '';
								preheader = preheader.substr(0,100);
								jQuery('.newsletters-preview-preheader').text(preheader);
							});
						
							//ed.onKeyDown.add(function (ed, evt) {
							ed.on('keydown', function(e) {
				            	//var content = jQuery('iframe#content_ifr').contents().find('body#tinymce').html();
				            	var content = ed.getContent();
				            	jQuery('#previewiframe').contents().find('html div.newsletters_content').html(content);
				            	
								var val = jQuery.trim(content),  
								words = val.replace(/\s+/gi, ' ').split(' ').length,
								chars = val.length;
								if(!chars)words=0;
								
								jQuery('#word-count').html(words + ' " . __('words and', $this -> plugin_name) . " ' + chars + ' " . __('characters', $this -> plugin_name) . "');
				            });
						}";
						
						$setup = ob_get_clean();
						
						$tinymce = array('setup' => $setup);
						
						?>
						
						<?php if (version_compare(get_bloginfo('version'), "3.3") >= 0) : ?>
							<?php wp_editor(stripslashes($_POST['content']), 'content', array('tabindex' => "2", 'tinymce' => $tinymce)); ?>
						<?php else : ?>
							<?php the_editor(stripslashes($_POST['content']), 'content', 'title', true, 2); ?>
						<?php endif; ?>
						
						<table id="post-status-info" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td id="wp-word-count">
										<?php _e('Word Count:', $this -> plugin_name); ?>
										<span id="word-count">0</span>
									</td>
									<td class="autosave-info">
										<span id="autosave" style="display:none;">
											
										</span>
									</td>
								</tr>
							</tbody>
						</table>
						
						<?php if (!empty($errors['content'])) : ?>
							<div class="ui-state-error ui-corner-all">
								<p><i class="fa fa-exclamation-triangle"></i> <?php echo $errors['content']; ?></p>
							</div>
						<?php endif; ?>
						
						<p>
							<a href="" onclick="addcontentarea(); return false;" id="addcontentarea_button" class="button button-secondary"><?php _e('Add Content Area', $this -> plugin_name); ?></a>
							<span id="contentarea_loading" style="display:none;"><i class="fa fa-refresh fa-spin fa-fw"></i></span>
						</p>
						<div id="contentareas">
							<!-- Content Areas Go Here -->
						</div>*/ ?>
					</div>
				</div>
				<div id="postbox-container-1" class="postbox-container">
					<?php do_action('submitpage_box'); ?>
					<?php do_meta_boxes("newsletters_page_" . $this -> sections -> forms, 'side', $post); ?>
				</div>
				<div id="postbox-container-2" class="postbox-container">
					<?php do_meta_boxes("newsletters_page_" . $this -> sections -> forms, 'normal', $post); ?>
                    <?php do_meta_boxes("newsletters_page_" . $this -> sections -> forms, 'advanced', $post); ?>
				</div>
			</div>
		</div>
	</form>
</div>

<style type="text/css">
.sortable-placeholder {
	width: 100% !important;
	height: 35px !important;
	background: #FFFFFF !important;
	box-shadow: none !important;
}
</style>

<script type="text/javascript">
var warnMessage = "<?php echo addslashes(__('You have unsaved changes on this page! All unsaved changes will be lost and it cannot be undone.', $this -> plugin_name)); ?>";

function newsletters_forms_field_delete(field_id) {
	jQuery('#newsletters_forms_field_' + field_id).remove();
	jQuery('#newsletters_forms_availablefield_' + field_id).removeAttr('disabled');
	
	jQuery.ajax({
		url: newsletters_ajaxurl + "?action=newsletters_forms_deletefield",
		method: "POST",
		data: {field_id:field_id, form_id:jQuery('input#id').val()},
	}).done(function(response) {
		//all good
	});
	
	return true;
}

var index;
var hasdropped = false;

jQuery(document).ready(function() {
	
	jQuery('form#post').on('submit', function() {
		var sortable = jQuery('#normal-sortables').sortable('toArray');
		jQuery('#fields').val(sortable);
	});
	
	jQuery('#normal-sortables').sortable({
		placeholder: 'ui-placeholder',
		start: function(e, ui) {						
	        ui.placeholder.width(ui.item.width());
	    },
	    receive: function(event, ui) {
		    
	    },
	    update: function(event, ui) {		  
		    var element = ui.item;
		    index = jQuery(element).index();
		    hasdropped = true;
		    
		    window.onbeforeunload = function () {			    
		        if (warnMessage != null) return warnMessage;
		    }
	    }
	});
	
	jQuery('#form_availablefields li input').draggable({
		cancel: false,
		connectToSortable: "#normal-sortables",
		helper: "clone",
		revert: "invalid",
		start: function(event, ui) {		
			hasdropped = false;	
			jQuery(ui.helper).css('width', jQuery('#normal-sortables').width());	
		},
		stop: function(event, ui) {		
			if (hasdropped == true) {
				jQuery(event.target).attr('disabled', "disabled");
				
				var element = ui.helper;
				var field_id = jQuery(element).data('id');
				var field_type = jQuery(element).data('type');
				var field_slug = jQuery(element).data('slug');
				var loading = '<div id="newsletters_forms_loading_' + field_id + '" class="newsletters_loading postbox"><h3 class="hndle ui-sortable-handle"><span><i class="fa fa-refresh fa-spin"></i> <?php _e('Loading field...', $this -> plugin_name); ?></span></h3></div>';
			    
			    if (jQuery('#normal-sortables > div').length > 0 && index != 0) {					    	    
				    jQuery("#normal-sortables > div:nth-child(" + index + ")").after(loading);
				} else {								
					jQuery('#normal-sortables').prepend(loading);
				}
				
				jQuery.ajax({
					url: newsletters_ajaxurl + '?action=newsletters_forms_addfield',
					method: "POST",
					data: {
						id: field_id,
						type: field_type,
						slug: field_slug,
					},
					success: function(response) {					
						jQuery('#newsletters_forms_loading_' + field_id).remove();
											
						if (jQuery('#normal-sortables > div').length > 0 && index != 0) {						
							jQuery("#normal-sortables > div:nth-child(" + index + ")").after(response);
						} else {						
							jQuery('#normal-sortables').prepend(response);
						}
							
						postboxes.add_postbox_toggles("newsletters_page_newsletters-forms");
						jQuery('#newsletters_forms_field_' + field_id).addClass("closed");
					}
				});
			}
				
			jQuery(ui.helper).remove();
		}
	});
	
	jQuery('ul, li').disableSelection();
	postboxes.add_postbox_toggles("newsletters_page_newsletters-forms");
	jQuery('#normal-sortables .postbox').addClass('closed');
	
	jQuery('.postbox .hndle, .postbox .handlediv').on('click', function() {
		jQuery(this).parent('.postbox').toggleClass('closed');
	});
	
	<?php if (!empty($manualpostboxes)) : ?>
		<?php foreach ($manualpostboxes as $postbox) : ?>
			var postboxhtml = '<div class="newsletters_delete_handle"><a href="" onclick="if (confirm(\'<?php _e('Are you sure you want to delete this field?', $this -> plugin_name); ?>\')) { newsletters_forms_field_delete(\'<?php echo $postbox; ?>\'); } return false;"><i class="fa fa-times"></i></a></div>';
			jQuery('#newsletters_forms_field_<?php echo $postbox; ?>').find('.hndle').before(postboxhtml);
		<?php endforeach; ?>
	<?php endif; ?>
	
	/*jQuery('#title').on('keyup', function(e) {
		jQuery('.newsletters-preview-subject').html(jQuery(this).val());
	});
	
	jQuery('#fromname').on('change', function(e) {
		jQuery('.newsletters-preview-fromname').html(jQuery(this).val());
	});
	
	var media = wp.media;

	if ( media ) {

		media.view.MediaFrame.Select.prototype.initialize = function() {

			media.view.MediaFrame.prototype.initialize.apply( this, arguments );

			_.defaults( this.options, {
				selection: [],
				library: { 
							uploadedTo: media.view.settings.post.id, 
							orderby: 'menuOrder', 
							order: 'ASC' 
				},
				multiple: false,
				state: 'library'
			});

			this.createSelection();
			this.createStates();
			this.bindHandlers();
		};
		
		media.controller.FeaturedImage.prototype.initialize = function() {

			var library, comparator;

			if ( ! this.get('library') ) {
				this.set( 'library', media.query( { 
												type: 'image', 
												uploadedTo: media.view.settings.post.id, 
												orderby: 'menuOrder', 
												order: 'ASC' 
											} ) );
			}

			media.controller.Library.prototype.initialize.apply( this, arguments );

			library    = this.get('library');
			comparator = library.comparator;

			library.comparator = function( a, b ) {
				var aInQuery = !! this.mirroring.get( a.cid ),
					bInQuery = !! this.mirroring.get( b.cid );

				if ( ! aInQuery && bInQuery ) {
					return -1;
				} else if ( aInQuery && ! bInQuery ) {
					return 1;
				} else {
					return comparator.apply( this, arguments );
				}
			};

			library.observe( this.get('selection') );
		};
		
	}
	
	_wpMediaViewsL10n.insertIntoPost = "<?php _e('Insert into Newsletter', $this -> plugin_name); ?>";
	_wpMediaViewsL10n.uploadedToThisPost = "<?php _e('Uploaded to this Newsletter', $this -> plugin_name); ?>";
	
	jQuery('iframe#content_ifr').attr('tabindex', "2");*/

    jQuery('input:not(:button,:submit),textarea,select').change(function() {
	    /*setTimeout(function() {
	    	<?php $createpreview = $this -> get_option('createpreview'); ?>
	    	<?php if (!empty($createpreview) && $createpreview == "Y") : ?>
	    		previewrunner();
	    	<?php endif; ?>
	    	<?php $createspamscore = $this -> get_option('createspamscore'); ?>
	    	<?php if (!empty($createspamscore) && $createspamscore == "Y") : ?>
	    		//spamscorerunner();
	    	<?php endif; ?>
	    }, 0);*/
    
        window.onbeforeunload = function () {
            if (warnMessage != null) return warnMessage;
        }
    });
    
    jQuery('input:submit').click(function(e) {
        warnMessage = null;
    });
});
</script>