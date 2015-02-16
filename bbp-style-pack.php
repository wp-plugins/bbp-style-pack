<?php

/*
Plugin Name: bbp style pack
Plugin URI: http://www.rewweb.co.uk/bbp-styling-pack
Description: This plugin adds styling and features to bbPress
Version: 1.5
Author: Robin Wilson
Author URI: http://www.rewweb.co.uk
License: GPL2
*/
/*  Copyright 2015  PLUGIN_AUTHOR_NAME  (email : wilsonrobine@btinternet.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	*/

/*******************************************
* global variables
*******************************************/

// load the plugin options
//$bsp_style_settings = get_option( 'bsp_style_settings' );
$bsp_style_settings_f = get_option( 'bsp_style_settings_f' );
$bsp_style_settings_ti = get_option( 'bsp_style_settings_ti' );
$bsp_style_settings_t = get_option( 'bsp_style_settings_t' );
$bsp_style_settings_form = get_option( 'bsp_style_settings_form' );
$bsp_forum_display = get_option( 'bsp_forum_display' );
$bsp_login = get_option( 'bsp_login' );
$bsp_breadcrumb = get_option( 'bsp_breadcrumb' );

if(!defined('BSP_PLUGIN_DIR'))
	define('BSP_PLUGIN_DIR', dirname(__FILE__));




/*******************************************
* file includes 
*******************************************/

include(BSP_PLUGIN_DIR . '/includes/settings.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingsf.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingst.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingsti.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingsform.php');
include(BSP_PLUGIN_DIR . '/includes/forum_display.php');
include(BSP_PLUGIN_DIR . '/includes/functions.php');
include(BSP_PLUGIN_DIR . '/includes/generate_css.php');
include(BSP_PLUGIN_DIR . '/includes/login.php');
include(BSP_PLUGIN_DIR . '/includes/breadcrumb.php');
include(BSP_PLUGIN_DIR . '/includes/shortcode_display.php');
include(BSP_PLUGIN_DIR . '/includes/shortcodes.php');
include(BSP_PLUGIN_DIR . '/includes/extras.php');
include(BSP_PLUGIN_DIR . '/includes/help.php');

/**************************************
*Versioning 
***************************************/

if (!defined('BSP_VERSION_KEY'))
    define('BSP_VERSION_KEY', 'bsp_version');

if (!defined('BSP_VERSION_NUM'))
    define('BSP_VERSION_NUM', '1.5');

add_option(BSP_VERSION_KEY, BSP_VERSION_NUM);

$new_version = '1.5';

if (get_option(BSP_VERSION_KEY) != $new_version) {
    // Execute the save to update the css file
	generate_style_css() ;

    // Then update the version value
    update_option(BSP_VERSION_KEY, $new_version);
}










	