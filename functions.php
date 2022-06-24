<?php
/*
 * Fastesis
 *
 * @package     fastesis\functions
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description The main functions of fastesis theme.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}


// Start The Main Engine
require_once(TEMPLATEPATH.'/lib/init.php');
// Start The Child Engine
require_once(STYLESHEETPATH.'/lib/init.php');
