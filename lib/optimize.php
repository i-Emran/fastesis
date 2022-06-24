<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\optimize
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Wp & Head optimization
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}


// Remove query string from static files
function _remove_script_version($src)
{
    $parts = explode('?ver', $src);
    return $parts[0];
}


// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

add_action('init', 'optimization');
function optimization()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
    remove_action('template_redirect', 'wp_shortlink_header', 11);
    add_filter('run_wptexturize', '__return_false');
    add_filter('xmlrpc_enabled', '__return_false');
    add_filter('show_admin_bar', '__return_false');
    add_filter('genesis_edit_post_link', '__return_false');
}

