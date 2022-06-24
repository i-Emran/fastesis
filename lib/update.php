<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\update
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Update settings on theme activation.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}

add_action( 'after_switch_theme', 'update_default_settings' );

function update_default_settings() {

 if( ! function_exists( 'genesis_update_settings' ) )
   return;

 $settings = array(
   'update'                    => 0,
   'update_email_address'      => '',
   'feed_uri'                  => '',
   'redirect_feed'             => 0,
   'comments_feed_uri'         => '',
   'redirect_comments_feed'    => 0,
   'site_layout'               => 'content-sidebar',
   'blog_title'                => 'text',
   'blog_cat_num'                => 6,
   'breadcrumb_front_page'     => 0,
   'breadcrumb_posts_page'     => 0,
   'breadcrumb_single'         => 1,
   'breadcrumb_page'           => 0,
   'breadcrumb_archive'        => 1,
   'breadcrumb_404'            => 0,
   'breadcrumb_attachment'     => 0,
   'comments_posts'            => 1,
   'comments_pages'            => 0,
   'trackbacks_posts'          => 0,
   'trackbacks_pages'          => 0,
   'content_archive'           => 'full',
   'content_archive_limit'     => '150',
   'content_archive_thumbnail' => 1,
   'image_size'                => 'none',
   'image_alignment'           => 'none',
   'show_featured_image_post'  => 1,
   'posts_nav'                 => 'numberic',
   'author_box_single'         => 1,
   'author_box_archive'         => 0,

 );

 genesis_update_settings( $settings );

}
