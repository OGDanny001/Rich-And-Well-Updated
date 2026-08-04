<?php
/**
 * Theme setup: supports, menus, image sizes.
 *
 * @package Rich_And_Well
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme supports and navigation menus.
 */
function raw_theme_setup() {
	load_theme_textdomain( 'rich-and-well', RAW_THEME_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );

	// Page builders / WooCommerce — declared early for compatibility.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'rich-and-well' ),
			'footer'  => __( 'Footer Menu', 'rich-and-well' ),
			'mobile'  => __( 'Mobile Menu', 'rich-and-well' ),
		)
	);
}
add_action( 'after_setup_theme', 'raw_theme_setup' );

/**
 * Register widget areas (kept minimal; builders may replace layouts).
 */
function raw_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'rich-and-well' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here.', 'rich-and-well' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raw_widgets_init' );

/**
 * Content width for embeds and media.
 */
function raw_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'raw_content_width', 1280 );
}
add_action( 'after_setup_theme', 'raw_content_width', 0 );
