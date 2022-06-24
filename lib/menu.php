<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\menu
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Reposition Menu & add Menu toggle
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}


//* Reposition the navigation menu
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav');

remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 10);




add_filter( 'genesis_markup_title-area_close', 'menu_toggle', 10, 2 );
function menu_toggle( $close_html, $args ) {
    if ( $close_html ) {
      $additional_html = '<button class="menu-toggle" role="button" type="button"><span class="hamburger"></span><span class="screen-reader-text">Menu</span></button>';
      $close_html = $close_html . $additional_html;
    }
    return $close_html;
}

