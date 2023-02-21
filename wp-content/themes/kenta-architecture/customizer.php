<?php
/**
 * Theme Customizer
 *
 * @package Kenta Architecture
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'kenta_architecture_return_yes' ) ) {
	function kenta_architecture_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'kenta_architecture_return_no' ) ) {
	function kenta_architecture_return_no() {
		return 'no';
	}
}

// Disable site wrap by default
add_filter( 'kenta_enable_site_wrap_default_value', 'kenta_architecture_return_no' );

//
//  Card style
//
if ( ! function_exists( 'kenta_architecture_card_preset' ) ) {
	function kenta_architecture_card_preset() {
		return 'mixed';
	}
}
add_filter( 'kenta_card_style_preset_default_value', 'kenta_architecture_card_preset' );
add_filter( 'kenta_store_card_style_preset_default_value', 'kenta_architecture_card_preset' );
add_filter( 'kenta_global_sidebar_widgets-style_default_value', 'kenta_architecture_card_preset' );


//
// Default color preset
//

if ( ! function_exists( 'kenta_architecture_default_color_presets' ) ) {
	function kenta_architecture_default_color_presets() {
		return 'kenta-architecture';
	}
}
add_filter( 'kenta_color_palettes_default_value', 'kenta_architecture_default_color_presets' );

if ( ! function_exists( 'kenta_architecture_color_presets' ) ) {
	function kenta_architecture_color_presets( $presets ) {
		$presets['kenta-architecture'] = array(
			'kenta-primary-color'  => '#4338ca',
			'kenta-primary-active' => '#6366f1',
			'kenta-accent-color'   => '#1a1829',
			'kenta-accent-active'  => '#212033',
			'kenta-base-300'       => '#e2e8f0',
			'kenta-base-200'       => '#f1f5f9',
			'kenta-base-100'       => '#f8fafc',
			'kenta-base-color'     => '#ffffff',
		);

		return $presets;
	}
}
add_filter( 'kenta_filter_color_presets', 'kenta_architecture_color_presets' );

//
// Global typography
//
if ( ! function_exists( 'kenta_architecture_global_typography' ) ) {
	function kenta_architecture_global_typography() {
		return [
			'family'     => 'jost',
			'fontSize'   => [
				'desktop' => '16px',
				'tablet'  => '__INITIAL_VALUE__',
				'mobile'  => '__INITIAL_VALUE__'
			],
			'variant'    => '400',
			'lineHeight' => '1',
		];
	}
}
add_filter( 'kenta_site_global_typography_default_value', 'kenta_architecture_global_typography' );

//
// Preloader
//
if ( ! function_exists( 'kenta_architecture_preloader_preset' ) ) {
	function kenta_architecture_preloader_preset() {
		return 'preset-5';
	}
}
add_filter( 'kenta_preloader_preset_default_value', 'kenta_architecture_preloader_preset' );

if ( ! function_exists( 'kenta_architecture_form_style' ) ) {
	function kenta_architecture_form_style() {
		return 'modern';
	}
}
add_filter( 'kenta_content_form_style_default_value', 'kenta_architecture_form_style' );

//
// Header primary navbar
//

if ( ! function_exists( 'kenta_architecture_header_primary_row_elements' ) ) {
	function kenta_architecture_header_primary_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '30%' ]
				],
				[
					'elements' => [ 'menu-1', 'button-1' ],
					'settings' => [ 'width' => '70%', 'justify-content' => 'flex-end' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '70%', ]
				],
				[
					'elements' => [ 'socials', 'trigger' ],
					'settings' => [ 'width' => '30%', 'justify-content' => 'flex-end' ]
				],
			],
		];
	}
}
add_filter( 'kenta_header_primary_row_default_value', 'kenta_architecture_header_primary_row_elements' );

if ( ! function_exists( 'kenta_architecture_header_row_border' ) ) {
	function kenta_architecture_header_row_border() {
		return [
			'width' => 1,
			'style' => 'solid',
			'color' => 'var(--kenta-base-300)',
		];
	}
}
add_filter( 'kenta_header_primary_navbar_row_border_bottom_default_value', 'kenta_architecture_header_row_border' );

//
// Header top row
//

if ( ! function_exists( 'kenta_architecture_header_top_row_elements' ) ) {
	function kenta_architecture_header_top_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'menu-2' ],
					'settings' => [ 'width' => '50%' ]
				],
				[
					'elements' => [ 'socials' ],
					'settings' => [ 'width' => '50%', 'justify-content' => 'flex-end' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [],
					'settings' => [ 'width' => '50%', ]
				],
				[
					'elements' => [],
					'settings' => [ 'width' => '50%', 'justify-content' => 'flex-end' ]
				],
			],
		];
	}
}
add_filter( 'kenta_header_top_row_default_value', 'kenta_architecture_header_top_row_elements' );

// bottom border
add_filter( 'kenta_header_top_bar_row_border_bottom_default_value', 'kenta_architecture_header_row_border' );

if ( ! function_exists( 'kenta_architecture_top_bar_row_visibility' ) ) {
	function kenta_architecture_top_bar_row_visibility() {
		return [
			'desktop' => 'yes',
			'tablet'  => 'no',
			'mobile'  => 'no',
		];
	}
}
add_filter( 'kenta_header_top_bar_row_visibility_default_value', 'kenta_architecture_top_bar_row_visibility' );

if ( ! function_exists( 'kenta_architecture_top_bar_row_background' ) ) {
	function kenta_architecture_top_bar_row_background() {
		return [
			'type'     => 'gradient',
			'gradient' => 'linear-gradient(to right, #6a11cb 0%, #2575fc 100%)',
		];
	}
}
add_filter( 'kenta_header_top_bar_row_background_default_value', 'kenta_architecture_top_bar_row_background' );

if ( ! function_exists( 'kenta_architecture_top_bar_row_primary_color' ) ) {
	function kenta_architecture_top_bar_row_primary_color() {
		return [
			'default' => '#ffffff',
			'active'  => '__INITIAL_VALUE__',
		];
	}
}
add_filter( 'kenta_header_top_bar_row_primary_color_default_value', 'kenta_architecture_top_bar_row_primary_color' );

if ( ! function_exists( 'kenta_architecture_top_bar_row_accent_color' ) ) {
	function kenta_architecture_top_bar_row_accent_color() {
		return [
			'default' => 'rgba(255,255,255,0.7)',
			'active'  => '__INITIAL_VALUE__',
		];
	}
}
add_filter( 'kenta_header_top_bar_row_accent_color_default_value', 'kenta_architecture_top_bar_row_accent_color' );

//
// Header elements
//

// socials element
if ( ! function_exists( 'kenta_architecture_header_socials_icons_color_type' ) ) {
	function kenta_architecture_header_socials_icons_color_type() {
		return 'custom';
	}
}
add_filter( 'kenta_header_el_socials_icons_color_type_default_value', 'kenta_architecture_header_socials_icons_color_type' );

// button element
if ( ! function_exists( 'kenta_architecture_header_button_icon' ) ) {
	function kenta_architecture_header_button_icon() {
		return [
			'library' => 'fa-solid',
			'value'   => 'fas fa-phone',
		];
	}
}
add_filter( 'kenta_header_el_button_1_arrow_default_value', 'kenta_architecture_header_button_icon' );

if ( ! function_exists( 'kenta_architecture_header_button_text' ) ) {
	function kenta_architecture_header_button_text() {
		return '+1 123-456-7890';
	}
}
add_filter( 'kenta_header_el_button_1_text_default_value', 'kenta_architecture_header_button_text' );

// logo element
if ( ! function_exists( 'kenta_architecture_header_logo_title_typography' ) ) {
	function kenta_architecture_header_logo_title_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '28px',
			'variant'       => '700',
			'lineHeight'    => '1.5',
			'textTransform' => 'capitalize',
		];
	}
}
add_filter( 'kenta_header_el_logo_site_title_typography_default_value', 'kenta_architecture_header_logo_title_typography' );

// menu element
if ( ! function_exists( 'kenta_architecture_header_menu_preset' ) ) {
	function kenta_architecture_header_menu_preset() {
		return 'border-bottom';
	}
}
add_filter( 'kenta_header_el_menu_1_top_level_preset_default_value', 'kenta_architecture_header_menu_preset' );

if ( ! function_exists( 'kenta_architecture_header_menu_top_level_height' ) ) {
	function kenta_architecture_header_menu_top_level_height() {
		return '100%';
	}
}
add_filter( 'kenta_header_el_menu_1_top_level_height_default_value', 'kenta_architecture_header_menu_top_level_height' );
