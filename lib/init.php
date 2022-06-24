<?php
/*
 * Fastesis
 *
 * @package     fastesis\lib\init
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Starting Engine of fastesis theme.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}

require_once(STYLESHEETPATH.'/lib/setup.php');
require_once(STYLESHEETPATH.'/lib/themesupport.php');
require_once(STYLESHEETPATH.'/lib/update.php');
require_once(STYLESHEETPATH.'/lib/optimize.php');
require_once(STYLESHEETPATH.'/lib/functionality.php');
require_once(STYLESHEETPATH.'/lib/authorbox.php');
require_once(STYLESHEETPATH.'/lib/breadcrumbs.php');
require_once(STYLESHEETPATH.'/lib/relatedpost.php');
