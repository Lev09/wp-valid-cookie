<?php
	/*
	Plugin Name: wp-valid-cookie
	Plugin URI: https://github/lev09/wp-valid-cookie
	Description: Plugin to check if cookies are valid send back curent user information.
	Version: 1.0
	Author: Levon Hakopyan
	Author URI: https://github/lev09
	License: GPL2
	*/
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
