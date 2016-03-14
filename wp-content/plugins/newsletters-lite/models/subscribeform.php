<?php

if (!class_exists('wpmlSubscribeform')) {
	class wpmlSubscribeform extends wpmlDbHelper {
		var $model = 'Subscribeform';
		var $controller = 'forms';
		
		var $tv_fields = array(
			'id'					=>	array("INT(11)", "NOT NULL AUTO_INCREMENT"),
			'title'					=>	array("VARCHAR(255)", "NOT NULL DEFAULT ''"),
			'created'				=>	array("DATETIME", "NOT NULL DEFAULT '0000-00-00 00:00:00'"),
			'modified'				=>	array("DATETIME", "NOT NULL DEFAULT '0000-00-00 00:00:00'"),
			'key'					=>	"PRIMARY KEY (`id`), INDEX(`title`)"
		);
		
		var $indexes = array('title');
		
		function wpmlSubscribeform($data = null) {
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
				
				$this -> form_fields = $this -> FieldsForm() -> find_all(array('form_id' => $this -> id));
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
				if (empty($title)) { $this -> errors['title'] = __('Please fill in a title', $this -> plugin_name); }
			} else {
				$this -> errors[] = __('No data was provided', $this -> plugin_name);
			}
			
			return $this -> errors;
		}
	}
}

?>