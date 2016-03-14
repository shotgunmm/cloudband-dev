<form action="" method="post">
	<table class="widefat">
		<thead>
			<td class="check-column"><input type="checkbox" name="checkboxall" id="checkboxall" value="1" /></td>
			<th class="column-id <?php echo ($orderby == "id") ? 'sorted ' . $order : 'sortable desc'; ?>">
				<a href="<?php echo $Html -> retainquery('orderby=id&order=' . (($orderby == "id") ? $otherorder : "asc")); ?>">
					<span><?php _e('ID', $this -> plugin_name); ?></span>
					<span class="sorting-indicator"></span>
				</a>
			</th>
			<th class="column-title <?php echo ($orderby == "title") ? 'sorted ' . $order : 'sortable desc'; ?>">
				<a href="<?php echo $Html -> retainquery('orderby=title&order=' . (($orderby == "title") ? $otherorder : "asc")); ?>">
					<span><?php _e('Title', $this -> plugin_name); ?></span>
					<span class="sorting-indicator"></span>
				</a>
			</th>
		</thead>
		<tfoot>
			
		</tfoot>
		<tbody>
			<?php if (!empty($forms)) : ?>
				<?php foreach ($forms as $form) : ?>
					<?php $class = ($class == 'alternate') ? '' : 'alternate'; ?>
					<tr class="<?php echo $class; ?>" id="form_row_<?php echo $form -> id; ?>">
						<th class="check-column"><input type="checkbox" name="forms[]" value="<?php echo $form -> id; ?>" id="form_check_<?php echo $form -> id; ?>" /></th>
						<td><label for="form_check_<?php echo $form -> id; ?>"><?php echo __($form -> id); ?></label></td>
						<td>
							<a class="row-title" href="<?php echo admin_url('admin.php?page=' . $this -> sections -> forms . '&method=save&id=' . $form -> id); ?>"><?php echo __($form -> title); ?></a>
							<div class="row-actions">
								<span class="edit"><a href="<?php echo admin_url('admin.php?page=' . $this -> sections -> forms . '&method=save&id=' . $form -> id); ?>"><?php _e('Edit', $this -> plugin_name); ?></a> |</span>
								<span class="delete"><a href="<?php echo admin_url('admin.php?page=' . $this -> sections -> forms . '&method=delete&id=' . $form -> id); ?>" class="submitdelete" onclick="if (!confirm('<?php _e('Are you sure you want to delete this form?', $this -> plugin_name); ?>')) { return false; }"><?php _e('Delete', $this -> plugin_name); ?></a></span>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td class="" colspan=""><?php echo sprintf(__('No forms available, %s', $this -> plugin_name), '<a href="' . admin_url('admin.php?page=' . $this -> sections -> forms . '&amp;method=save') . '">' . __('add one', $this -> plugin_name) . '</a>'); ?></td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
</form>