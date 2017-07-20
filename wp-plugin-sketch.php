<?php namespace wp_plugin_sketch;

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
Plugin Name: WP Plugin Sketch
Description: This is an example plugin.
Version: 0.1.0
Author: IamTheAuthor
*/

include_once(realpath(__DIR__.'/Class/DB.php'));

include_once(realpath(__DIR__.'/variables.php'));
include_once(realpath(__DIR__.'/functions.php'));
include_once(realpath(__DIR__.'/install.php'));
include_once(realpath(__DIR__.'/setup.php'));
