<?php 
	
$params = array(
	'who' 		=> 	"authors", 
	'name' 		=> 	'user_id', 
	'selected' 	=> 	((empty($_POST['user_id'])) ? get_current_user_id() : $_POST['user_id']),
);
	
wp_dropdown_users($params); 

?>