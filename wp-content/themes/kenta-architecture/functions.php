<?php
/**
 * Theme functions
 *
 * @package Kenta Architecture
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'KENTA_ARCHITECTURE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'KENTA_ARCHITECTURE_VERSION', '1.0.0' );
}

if ( ! defined( 'KENTA_ARCHITECTURE_PATH' ) ) {
	define( 'KENTA_ARCHITECTURE_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'KENTA_ARCHITECTURE_URL' ) ) {
	define( 'KENTA_ARCHITECTURE_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

//
// One click demo import
//
if ( ! function_exists( 'kenta_architecture_demo_slug' ) ) {
	function kenta_architecture_demo_slug() {
		return 'architecture';
	}
}
add_filter( 'kenta_welcome_demo_slug', 'kenta_architecture_demo_slug' );

if ( ! function_exists( 'kenta_architecture_demo_name' ) ) {
	function kenta_architecture_demo_name() {
		return __( 'Kenta Architecture', 'kenta-architecture' );
	}
}
add_filter( 'kenta_welcome_demo_name', 'kenta_architecture_demo_name' );

if ( ! function_exists( 'kenta_architecture_demo_screenshot' ) ) {
	function kenta_architecture_demo_screenshot() {
		return KENTA_ARCHITECTURE_URL . 'screenshot.png';
	}
}
add_filter( 'kenta_welcome_demo_screenshot', 'kenta_architecture_demo_screenshot' );

//
// Dynamic css cache
//
if ( ! function_exists( 'kenta_architecture_cache_key' ) ) {
	function kenta_architecture_cache_key() {
		return 'kenta_architecture_dynamic_css';
	}
}
add_filter( 'kenta_filter_dynamic_css_cache_key', 'kenta_architecture_cache_key' );

if ( ! function_exists( 'kenta_architecture_cache_version' ) ) {
	function kenta_architecture_cache_version() {
		return KENTA_ARCHITECTURE_VERSION;
	}
}
add_filter( 'kenta_filter_cached_dynamic_css_version', 'kenta_architecture_cache_version' );

// Customizer settings hook
require_once KENTA_ARCHITECTURE_PATH . 'customizer.php';
