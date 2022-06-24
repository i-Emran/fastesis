<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\relatedpost
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Add related post after entry
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}


add_action( 'genesis_after_entry', 'related_posts', 6 );

function related_posts($args = array()) {
    if ( is_singular('post') ) {
?>
   
<?php
  global $post;
   $args = wp_parse_args($args, array(
       'post_id'         => !empty($post) ? $post->ID : '',
       'taxonomy'         => 'category',
       'limit'             => 6,
       'post_status' => 'published',
       'orderby'         => 'rand',
       'order'             => 'DESC'
            ));
if (!taxonomy_exists($args['taxonomy'])) {
           return;
     }
     $taxonomies = wp_get_post_terms($args['post_id'], $args['taxonomy'], array('fields' => 'ids'));
     if (empty($taxonomies)) {
            return;
         }

$related_posts = get_posts(array(
   'post__not_in' => (array) $args['post_id'],
    'post_type' => $args['post_type'],
				'tax_query' => array(
         array(
          'taxonomy' => $args['taxonomy'],
          'field' => 'term_id',
          'terms' => $taxonomies),
           ),
        'posts_per_page' => $args['limit'],
        'orderby' => $args['orderby'],
        'order' => $args['order']
       ));
            
 if (!empty($related_posts)) {
 ?>
  <div class="related-posts">
    <h4 class="widget-title">
    <span class="related-text">Related Posts</span></h4>
 <ul class="related-post">
<?php
foreach ($related_posts as $post) {
 setup_postdata($post);
?>
  <li>
  
<?php
  if (has_post_thumbnail()) {
?>
  <div class="related-thumb">
     <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php
   echo get_the_post_thumbnail(null, 'featured-image', array(
   'alt' => the_title_attribute(array(
   'echo' => false))));
 ?>
 </a>
</div>
<?php } ?>
  <div class="related-title">
  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><br>
    <?php the_author(); ?>
   </div></li>
  
<?php }
?>
   </ul>
   <div class="clearfix"></div></div>
<?php
  }
  wp_reset_postdata();
        ?>
        <?php
    }
}





