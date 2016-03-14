<input type="hidden" name="form_fields[<?php echo $field -> id; ?>][id]" value="<?php echo esc_attr(stripslashes($form_field -> id)); ?>" />

<div class="misc-pub-section">
	<table class="form-table">
		<tbody>
			<tr>
				<th><label for=""><?php _e('Label', $this -> plugin_name); ?></label></th>
				<td>
					<input type="text" name="form_fields[<?php echo $field -> id; ?>][label]" id="form_fields_<?php echo $field -> id; ?>_label" value="<?php echo esc_attr(stripslashes((empty($form_field -> label) ? __($field -> title) : __($form_field -> label)))); ?>" />
				</td>
			</tr>
			<tr>
				<th><label for=""><?php _e('Caption', $this -> plugin_name); ?></label></th>
				<td>
					<input type="text" name="form_fields[<?php echo $field -> id; ?>][caption]" id="form_fields_<?php echo $field -> id; ?>_caption" value="<?php echo esc_attr(stripslashes((empty($form_field -> caption) ? __($field -> caption) : __($form_field -> caption)))); ?>" />
				</td>
			</tr>
			<tr>
				<th><label for=""><?php _e('Placeholder', $this -> plugin_name); ?></label></th>
				<td>
					<input type="text" name="form_fields[<?php echo $field -> id; ?>][placeholder]" id="form_fields_<?php echo $field -> id; ?>_placeholder" value="<?php echo esc_attr(stripslashes((empty($form_field -> placeholder) ? __($field -> watermark) : __($form_field -> placeholder)))); ?>" />
				</td>
			</tr>
		</tbody>
	</table>
</div>