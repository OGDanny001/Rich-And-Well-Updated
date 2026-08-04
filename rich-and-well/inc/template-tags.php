<?php
/**
 * Template tags and helpers.
 *
 * @package Rich_And_Well
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Print the site logo or site name fallback.
 */
function raw_the_site_logo() {
	if ( has_custom_logo() ) {
		the_custom_logo();
		return;
	}

	printf(
		'<a class="raw-site-title" href="%1$s" rel="home">%2$s</a>',
		esc_url( home_url( '/' ) ),
		esc_html( get_bloginfo( 'name' ) )
	);
}

/**
 * Whether the current view is using a page builder canvas-style layout.
 *
 * @return bool
 */
function raw_is_builder_page() {
	if ( ! is_singular() ) {
		return false;
	}

	$post_id = get_queried_object_id();

	if ( ! $post_id ) {
		return false;
	}

	// Elementor.
	if ( class_exists( '\Elementor\Plugin' ) ) {
		$document = \Elementor\Plugin::$instance->documents->get( $post_id );
		if ( $document && $document->is_built_with_elementor() ) {
			return true;
		}
	}

	// WPBakery.
	if ( get_post_meta( $post_id, '_wpb_vc_js_status', true ) === 'true' ) {
		return true;
	}

	return (bool) apply_filters( 'raw_is_builder_page', false, $post_id );
}
