<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\setup
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Define & Setup theme before activation.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}
define( 'CHILD_THEME_NAME', 'Fastesis' );
define( 'CHILD_THEME_URL', 'https://hindistaan.com/' );
define( 'CHILD_THEME_VERSION', '1.0' );
