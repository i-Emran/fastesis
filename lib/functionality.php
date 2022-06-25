<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\functionality
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Custom Functionality.
 */



remove_action( 'genesis_entry_content', 'genesis_do_singular_image', 8 );
add_action( 'genesis_[your_choice]', 'genesis_do_singular_image' );

