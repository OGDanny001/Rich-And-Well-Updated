<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Rich_And_Well
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Front-end assets.
 */
function raw_enqueue_assets() {
	$version = RAW_THEME_VERSION;

	wp_enqueue_style(
		'raw-google-fonts',
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'raw-font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
		array(),
		'6.5.0'
	);

	wp_enqueue_style(
		'raw-main',
		RAW_THEME_URI . '/assets/css/main.css',
		array( 'raw-google-fonts', 'raw-font-awesome' ),
		$version
	);

	wp_enqueue_style(
		'raw-theme',
		get_stylesheet_uri(),
		array( 'raw-main' ),
		$version
	);

	wp_enqueue_script(
		'raw-main',
		RAW_THEME_URI . '/assets/js/main.js',
		array(),
		$version,
		true
	);

	wp_localize_script(
		'raw-main',
		'rawTheme',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'homeUrl'  => home_url( '/' ),
		)
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'raw_enqueue_assets' );

/**
 * Resource hints for external fonts/CDN.
 *
 * @param array  $urls          URLs to print.
 * @param string $relation_type Relation type.
 * @return array
 */
function raw_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href'        => 'https://fonts.googleapis.com',
			'crossorigin' => 'anonymous',
		);
		$urls[] = 'https://fonts.gstatic.com';
		$urls[] = 'https://cdnjs.cloudflare.com';
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'raw_resource_hints', 10, 2 );
