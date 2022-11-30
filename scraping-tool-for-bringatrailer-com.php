<?php
/**
 * Plugin Name: Scraping Tool for Bringatrailer.com
 * Version: 1.0.0
 * Plugin URI: http://maximus-sallam.com/
 * Description: A tool for scraping data from bringatrailer.com and posting it internally.
 * Author: Maximus Sallam
 * Author URI: http://maximus-sallam.com/
 * License: GPL v3.0
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: scraping-tool-for-bringatrailer-com
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Maximus Sallam
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-scraping-tool-for-bringatrailer-com.php';
require_once 'includes/class-scraping-tool-for-bringatrailer-com-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-scraping-tool-for-bringatrailer-com-admin-api.php';
require_once 'includes/lib/class-scraping-tool-for-bringatrailer-com-post-type.php';
require_once 'includes/lib/class-scraping-tool-for-bringatrailer-com-taxonomy.php';

/**
 * Returns the main instance of Scraping_Tool_for_Bringatrailer_com to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Scraping_Tool_for_Bringatrailer_com
 */
function scraping_tool_for_bringatrailer_com() {
	$instance = Scraping_Tool_for_Bringatrailer_com::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Scraping_Tool_for_Bringatrailer_com_Settings::instance( $instance );
	}

	return $instance;
}

scraping_tool_for_bringatrailer_com();
