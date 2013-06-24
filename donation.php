<?php
/*
Plugin Name: Headway Block: Donation
Plugin URI: http://www.headway101.com/blocks/donation
Description: Headway Donation is built to let you easily create PayPal donate buttons.
Version: 1.0
Author: Headway101
Author URI: http://www.headway101.com
License: GNU GPL v2
*/

/**
 * Everything is ran at the after_setup_theme action to insure that all of Headway's classes and functions are loaded.
 **/
add_action('after_setup_theme', 'donation_block_register');
function donation_block_register() {

	if ( !class_exists('Headway') )
		return;
	
	require_once 'block.php';
	require_once 'block-options.php';
	return headway_register_block('HeadwayDonationBlock', plugins_url(false, __FILE__));

}
/**
 * If you plan on adding your block to Headway Extend, then this will be the code that will enable auto-updates for the block/plugin.
 **/
define('DONATION_BLOCK_VERSION', '1.0');
add_action('init', 'donation_block_extend_updater');
function donation_block_extend_updater() {

	if ( !class_exists('HeadwayUpdaterAPI') )
		return;

	$updater = new HeadwayUpdaterAPI(array(
		'slug' => 'donation-block',
		'path' => plugin_basename(__FILE__),
		'name' => 'Donation',
		'type' => 'block',
		'current_version' => DONATION_BLOCK_VERSION
	));

}