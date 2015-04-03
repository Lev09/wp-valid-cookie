<?php

	//include wp-load.php to be able use wordpress functionality without activating plugin;

	@include "../../../wp-load.php";

	if (!empty($_COOKIE)) {
	
		if (is_user_logged_in()) {
			$user = wp_get_current_user();
			$logged_in_user_login = $user->data->user_login;
			print_r($logged_in_user_login);
		}else {
			print_r("");
		}

	}else {
		print_r("");
	}

?>
