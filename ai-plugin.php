<?php
/*
Plugin Name: AI Plugin
Plugin URI: http://site.com
Description: Ololo
Version: 1.0
Text Domain: ai
Domain Path: /languages
Author: Alex Ilin
Author URI: http://site.com
*/

//require styles
require_once( plugin_dir_path(__FILE__).'ai-style.php' );

//require script
require_once( plugin_dir_path(__FILE__).'ai-script.php' );

//require functions
require_once( plugin_dir_path(__FILE__).'ai-functions.php' );

//require admin
require_once( plugin_dir_path(__FILE__).'ai-admin.php' );

