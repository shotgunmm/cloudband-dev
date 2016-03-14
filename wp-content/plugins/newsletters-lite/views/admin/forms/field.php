<div id="newsletters_forms_field_<?php echo $field -> id; ?>" class="postbox ">
	<?php /*<div class="handlediv" title="Click to toggle"><br></div>
	<div class="newsletters_delete_handle"><a href="" onclick="if (confirm('<?php _e('Are you sure you want to delete this field?', $this -> plugin_name); ?>')) { newsletters_forms_field_delete('<?php echo $field -> id; ?>'); } return false;"><i class="fa fa-times"></i></a></div>
	<h3 class="hndle ui-sortable-handle"><span><?php echo __($field -> title); ?> (<?php echo $Html -> field_type($field -> type); ?>)</span></h3>*/ ?>
	
	<button type="button" class="handlediv button-link" aria-expanded="true"><span class="screen-reader-text">Toggle panel: First</span><span class="toggle-indicator" aria-hidden="true"></span></button>
	<div class="newsletters_delete_handle"><a href="" onclick="if (confirm('<?php _e('Are you sure you want to delete this field?', $this -> plugin_name); ?>')) { newsletters_forms_field_delete('<?php echo $field -> id; ?>'); } return false;"><i class="fa fa-times"></i></a></div>
	<h2 class="hndle ui-sortable-handle"><span><?php echo __($field -> title); ?></span></h2>
	
	<div class="inside">		
		<?php $this -> render('metaboxes' . DS . 'forms' . DS . 'field', array('field' => $field), true, 'admin'); ?>
		
		<?php /*<div id="minor-publishing-actions">
			<div id="save-action">
				<input id="savedraftbutton" style="float:left;" type="submit" name="draft" value="<?php _e('Save Draft', $this -> plugin_name); ?>" class="button button-highlighted" />
			</div>
			<div id="preview-action">
				<input type="button" name="previewemail_button" id="previewemail_button" class="button" value="<?php echo apply_filters('newsletters_admin_createnewsletter_sendpreview_text', __('Send Preview', $this -> plugin_name)); ?>" />
			</div>
			<br class="clear" />
		</div>*/ ?>
		<?php /*<div id="misc-publishing-actions">
			<div class="misc-pub-section">
				
			</div>
			<div class="misc-pub-section sendfromwrapper">
				
			</div>
		</div>*/ ?>
		<?php /*<div id="major-publishing-actions">
			<?php if (!empty($_POST['ishistory'])) : ?>
				<div id="delete-action">
					<a href="?page=<?php echo $this -> sections -> history; ?>&amp;method=delete&amp;id=<?php echo $_POST['ishistory']; ?>" onclick="if (!confirm('<?php _e('Are you sure you wish to remove this newsletter from your history?', $this -> plugin_name); ?>')) { return false; }" title="<?php _e('Remove this newsletter from your history', $this -> plugin_name); ?>" class="submitdelete deletion"><?php _e('Delete Email', $this -> plugin_name); ?></a>
					<?php echo $Html -> help(__('Since this is a saved sent/draft email, you can click this "Delete Email" link to permanently delete it from your history. Please note that this is undoable.', $this -> plugin_name)); ?>
				</div>
			<?php endif; ?>
			<div id="publishing-action">
				<?php $sendbutton = ($this -> get_option('sendingprogress') == "N") ? __('Queue Newsletter', $this -> plugin_name) : __('Send Newsletter', $this -> plugin_name); ?>
				<input class="button button-primary button-large" type="submit" name="send" id="sendbutton" disabled="disabled" value="<?php echo $sendbutton; ?>" />
			</div>
			<br class="clear" />
			<?php
				
			$sendingprogress = $this -> get_option('sendingprogress');
			
			?>
			<div class="publishing-action-inside">
				<label><input <?php echo (!empty($sendingprogress) && $sendingprogress == "Y") ? 'checked="checked"' : ''; ?> type="checkbox" name="sendingprogress" value="1" id="sendingprogress" /> <?php _e('Use progress bar to queue/send', $this -> plugin_name); ?></label>
			</div>
		</div>*/ ?>
	</div>
</div>