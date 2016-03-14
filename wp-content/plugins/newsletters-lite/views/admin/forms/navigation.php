<div class="wp-filter">
	<ul class="filter-links">
		<li><a href="<?php echo admin_url('admin.php?page=' . $this -> sections -> forms . '&method=save&id=' . $form -> id); ?>" data-sort="featured" <?php echo ($_GET['method'] == "save") ? 'class="current"' : ''; ?>><i class="fa fa-edit"></i> Form Editor</a></li>
		<li><a href="<?php echo admin_url('admin.php?page=' . $this -> sections -> forms . '&method=settings&id=' . $form -> id); ?>" data-sort="popular" <?php echo ($_GET['method'] == "settings") ? 'class="current"' : ''; ?>><i class="fa fa-cogs"></i> Settings</a></li>
		<li><a href="<?php echo admin_url('admin.php?page=' . $this -> sections -> forms . '&method=preview&id=' . $form -> id); ?>" <?php echo ($_GET['method'] == "preview") ? 'class="current"' : ''; ?>><i class="fa fa-eye"></i> <?php _e('Preview', $this -> plugin_name); ?></a></li>
	</ul>
</div>