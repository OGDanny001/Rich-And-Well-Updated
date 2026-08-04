<?php
/**
 * 404 template.
 *
 * @package Rich_And_Well
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container-pro py-16 md:py-24 pt-28 text-center">
		<header class="page-header mb-6">
			<h1 class="page-title"><?php esc_html_e( 'Page not found', 'rich-and-well' ); ?></h1>
		</header>
		<p class="mb-8"><?php esc_html_e( 'The page you are looking for could not be found.', 'rich-and-well' ); ?></p>
		<p>
			<a class="btn-blue px-6 py-3 rounded-full inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html_e( 'Back to Home', 'rich-and-well' ); ?>
			</a>
		</p>
	</div>
</main>

<?php
get_footer();
