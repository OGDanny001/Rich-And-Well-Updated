<?php
/**
 * Theme Customizer registration (presentation only).
 *
 * @package Rich_And_Well
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function raw_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'raw_theme_options',
		array(
			'title'    => __( 'Rich & Well Options', 'rich-and-well' ),
			'priority' => 160,
		)
	);

	$wp_customize->add_setting(
		'raw_footer_tagline',
		array(
			'default'           => __( 'Designed for Wellness. Built for Impact.', 'rich-and-well' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'raw_footer_tagline',
		array(
			'label'   => __( 'Footer tagline', 'rich-and-well' ),
			'section' => 'raw_theme_options',
			'type'    => 'text',
		)
	);
}
add_action( 'customize_register', 'raw_customize_register' );
