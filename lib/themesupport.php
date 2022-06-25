<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\themesupport
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Add theme support.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}


//* HTML5 markup
add_theme_support( 'html5',
array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	)
);
//* Register Genesis menu
add_theme_support( 'genesis-menus', 
    array( 
    'primary' => __( 'Header Menu', 'fastesis' ),
    'secondary' => __( 'Footer Menu', 'fastesis' ),
    ) );
//* Accessibility Ready
add_theme_support( 'genesis-accessibility', array(
    '404-page',
    //'drop-down-menu',
    'headings',
    'rems',
    'search-form',
    'skip-links',
) );
//* Add Widget After Entry Post On Single
add_theme_support( 'genesis-after-entry-widget-area' );
//* Add widgets before footer
add_theme_support( 'genesis-footer-widgets', 3 );
//* Lazy Load Images
add_theme_support( 'genesis-lazy-load-images' );
//* Add Viewport meta tag
add_theme_support( 'genesis-responsive-viewport' );
// Display Thumbnail
add_post_type_support( 'post', 'genesis-singular-images' );
add_post_type_support( 'page', 'genesis-singular-images' );
