<?php
/*
 * Plugin Name: VRBO WP
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: vrbo-wp
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-vrbo-wp.php' );
require_once( 'includes/class-vrbo-wp-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-vrbo-wp-admin-api.php' );
require_once( 'includes/lib/class-vrbo-wp-post-type.php' );
require_once( 'includes/lib/class-vrbo-wp-taxonomy.php' );

/**
 * Returns the main instance of VRBO_WP to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object VRBO_WP
 */
function VRBO_WP () {
	$instance = VRBO_WP::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = VRBO_WP_Settings::instance( $instance );
	}

	return $instance;
}

VRBO_WP();
