<?php
/*
* Plugin Name: Crowdfunding Login Redirect
* Plugin URI: https://wordpress.org/plugins/crowdfunding-login-redirect
* Description: WP Crowdfunding Login Redirect to CF Dashboard
* Version: 1.0.0
* Author: FahimMurshed
* Author URI: https://murshidalam.com
* License: GNU/GPL V2 or Later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function admin_default_page() {
	return '/cf-dashboard/';
  }
  
  add_filter('login_redirect', 'admin_default_page');