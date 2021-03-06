<?php

if (!class_exists('wpmlFieldsForm')) {
	class wpmlFieldsForm extends wpmlDbHelper {
		var $model = 'FieldsForm';
		var $controller = 'fieldsforms';
		
		var $tv_fields = array(
			'id'					=>	array("INT(11)", "NOT NULL AUTO_INCREMENT"),
			'form_id'				=>	array("INT(11)", "NOT NULL DEFAULT '0'"),
			'field_id'				=>	array("INT(11)", "NOT NULL DEFAULT '0'"),
			'label'					=>	array("VARCHAR(255)", "NOT NULL DEFAULT ''"),
			'caption'				=>	array("TEXT", "NOT NULL"),
			'placeholder'			=>	array("VARCHAR(255)", "NOT NULL DEFAULT ''"),
			'order'					=>	array("INT(11)", "NOT NULL DEFAULT '0'"),
			'created'				=>	array("DATETIME", "NOT NULL DEFAULT '0000-00-00 00:00:00'"),
			'modified'				=>	array("DATETIME", "NOT NULL DEFAULT '0000-00-00 00:00:00'"),
			'key'					=>	"PRIMARY KEY (`id`), INDEX(`field_id`), INDEX(`order`)"
		);
		
		var $indexes = array('field_id', 'order');
		
		function wpmlFieldsForm($data = null) {
			$this -> table = $this -> pre . $this -> controller;
			
			foreach ($this -> tv_fields as $field => $attributes) {
				if (is_array($attributes)) {
					$this -> fields[$field] = implode(" ", $attributes);
				} else {
					$this -> fields[$field] = $attributes;
				}
			}
			
			if (!empty($data)) {
				foreach ($data as $dkey => $dval) {
					$this -> {$dkey} = stripslashes_deep($dval);
				}
			}
			
			return;
		}
		
		function defaults() {
			global $Html;
			
			$defaults = array(
				'created'			=>	$Html -> gen_date(),
				'modified'			=>	$Html -> gen_date(),
			);
			
			return $defaults;
		}
		
		function validate($data = array()) {
			global $Html;
			$this -> errors = array();			
			$data = (empty($data[$this -> model])) ? $data : $data[$this -> model];
			$r = wp_parse_args($data, $defaults);
			extract($r, EXTR_SKIP);
			
			if (!empty($data)) {
				// Check for empty or invalid values
				if (empty($field_id)) { $this -> errors['field_id'] = __('No field was specified', $this -> plugin_name); }
				if (empty($label)) { $this -> errors['label'] = __('Fill in a label', $this -> plugin_name); }
			} else {
				$this -> errors[] = __('No data was provided', $this -> plugin_name);
			}
			
			return $this -> errors;
		}
	}
}

?>