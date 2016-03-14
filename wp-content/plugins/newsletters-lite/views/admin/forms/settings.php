<!-- Form Settings -->

<div class="wrap newsletters">
	
	<h2><?php _e('Form Settings', $this -> plugin_name); ?></h2>
	
	<?php $this -> render('forms' . DS . 'navigation', array('form' => $form), true, 'admin'); ?>
	
	<div id="newsletters-forms-settings-tabs">
		<ul>
			<li><a href="#newsletters-forms-settings-tabs-general"><?php _e('General', $this -> plugin_name); ?></a></li>
			<li><a href="#newsletters-forms-settings-tabs-notifications"><?php _e('Notifications', $this -> plugin_name); ?></a></li>
		</ul>
		
		<div id="newsletters-forms-settings-tabs-general">
			<div class="inside">
				<h3><i class="fa fa-cogs"></i> <?php _e('General Settings', $this -> plugin_name); ?></h3>
			</div>
		</div>
		
		<div id="newsletters-forms-settings-tabs-notifications">
			<h3><i class="fa fa-envelope"></i> <?php _e('Notification Settings', $this -> plugin_name); ?></h3>
		</div>
	</div>
	
	<p class="submit">
		<input type="submit" name="" value="<?php _e('Save Settings', $this -> plugin_name); ?>" class="button button-primary" />
	</p>
</div>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery( "#newsletters-forms-settings-tabs" ).tabs();
});
</script>