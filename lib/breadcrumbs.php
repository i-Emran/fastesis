<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\breadcrumbs
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Modify Breadcrumb
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}


add_filter( 'genesis_breadcrumb_args', 'customize_breadcrumb' );
function customize_breadcrumb( $args ) {
	$args['home'] = 'Home';
	$args['sep'] = ' / ';
	$args['list_sep'] = ', '; 
	$args['prefix'] = '<div class="breadcrumb">';
	$args['suffix'] = '</div>';
	$args['heirarchial_attachments'] = true;
	$args['heirarchial_categories'] = true; 
	$args['display'] = true;
	$args['labels']['prefix'] = '';
	$args['labels']['author'] = 'Archives for ';
	$args['labels']['category'] = 'Archives for '; 
	$args['labels']['tag'] = 'Archives for ';
	$args['labels']['date'] = 'Archives for ';
	$args['labels']['search'] = 'Search for ';
	$args['labels']['tax'] = 'Archives for ';
	$args['labels']['post_type'] = 'Archives for ';
	$args['labels']['404'] = 'Not found: '; 
return $args;
}

