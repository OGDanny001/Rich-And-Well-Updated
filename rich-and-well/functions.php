<?php
/**
 * Rich & Well theme bootstrap.
 *
 * @package Rich_And_Well
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'RAW_THEME_VERSION', '1.0.0' );
define( 'RAW_THEME_DIR', get_template_directory() );
define( 'RAW_THEME_URI', get_template_directory_uri() );

$raw_includes = array(
	'/inc/setup.php',
	'/inc/enqueue.php',
	'/inc/template-tags.php',
	'/inc/customizer.php',
	'/inc/compatibility.php',
);

foreach ( $raw_includes as $raw_file ) {
	$raw_path = RAW_THEME_DIR . $raw_file;
	if ( is_readable( $raw_path ) ) {
		require_once $raw_path;
	}
}
