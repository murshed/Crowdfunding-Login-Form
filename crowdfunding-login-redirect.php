<?php
/*
* Plugin Name: Crowdfunding Login Redirect
* Plugin URI: https://wordpress.org/plugins/crowdfunding-login-redirect
* Description: WP Crowdfunding Login Redirect to CF Dashboard
* Version: 1.0.0
* Author: FahimMurshed
* Author URI: https://murshidalam.com
* License: GNU/GPL v3
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wpcf_login_redirect_to_dashboard() {
	return '/cf-dashboard';
  }
  
  add_filter('login_redirect', 'wpcf_login_redirect_to_dashboard');
