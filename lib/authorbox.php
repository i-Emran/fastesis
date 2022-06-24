<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\authorbox
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Customizing default Author box.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}

add_filter( 'genesis_author_box', 'custom_author_box', 10, 6 );
function custom_author_box( $output, $context, $pattern, $gravatar, $title, $description ) {
  
  $name = get_the_author();
  $title = get_the_author_meta( 'title' );
	$output = '';
	
	$output .= '<div class="author-box">';
	$output .= get_avatar( get_the_author_meta( 'email' ), 100 );
		if( !empty( $title ) )
		$name .= ', ' . $title;
		$output .= '<h4 class="author-box-title"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '">' . $name . '</a></h4>';
		$output .= '<p class="author-box-description">' . get_the_author_meta( 'description' ) . '</p>';
		$output .= '</div>';
	
	return $output;
}


