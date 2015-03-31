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
	//@include "../../../wp-load.php";

	@include "../../../wp-load.php";

	if (!empty($_COOKIE)) {
	
		if (is_user_logged_in()) {
			$user = wp_get_current_user();
			$logged_in_user["id"] = $user->data->ID;
			$logged_in_user["login"] = $user->data->user_login;
			$logged_in_user["roles"] = $user->roles;
			print_r(json_encode($logged_in_user));
			exit();
		}
	
		$response = array("code"=>401, "status"=>"unauthorized");
		print_r(json_encode($response));

	}

?>
