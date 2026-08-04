<?php
/**
 * Third-party compatibility: Elementor, WPBakery, WooCommerce, CF7.
 *
 * @package Rich_And_Well
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Declare Elementor locations / support when available.
 */
function raw_elementor_support() {
	if ( ! did_action( 'elementor/loaded' ) ) {
		return;
	}

	add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'raw_elementor_support' );

/**
 * Register Elementor theme locations when Elementor Pro is present.
 *
 * @param \ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager Locations manager.
 */
function raw_register_elementor_locations( $elementor_theme_manager ) {
	if ( ! method_exists( $elementor_theme_manager, 'register_all_core_location' ) ) {
		return;
	}
	$elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'raw_register_elementor_locations' );

/**
 * WPBakery: allow VC on pages/posts.
 */
function raw_wpbakery_support() {
	if ( ! function_exists( 'vc_set_as_theme' ) ) {
		return;
	}
	vc_set_as_theme( true );
}
add_action( 'vc_before_init', 'raw_wpbakery_support' );

/**
 * WooCommerce wrapper open.
 */
function raw_woocommerce_wrapper_before() {
	echo '<main id="primary" class="site-main raw-woocommerce"><div class="container-pro">';
}

/**
 * WooCommerce wrapper close.
 */
function raw_woocommerce_wrapper_after() {
	echo '</div></main>';
}

/**
 * Adjust WooCommerce wrappers after WooCommerce is available.
 */
function raw_woocommerce_setup_wrappers() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

	add_action( 'woocommerce_before_main_content', 'raw_woocommerce_wrapper_before', 10 );
	add_action( 'woocommerce_after_main_content', 'raw_woocommerce_wrapper_after', 10 );
}
add_action( 'after_setup_theme', 'raw_woocommerce_setup_wrappers' );

/**
 * Contact Form 7: forms via shortcode/blocks only — no theme business logic.
 */
function raw_cf7_compat() {
	// Reserved for presentation-only CF7 tweaks.
}
add_action( 'init', 'raw_cf7_compat' );
