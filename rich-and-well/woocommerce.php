<?php
/**
 * WooCommerce template fallback — uses WooCommerce templates with theme wrappers.
 *
 * @package Rich_And_Well
 */

if ( ! class_exists( 'WooCommerce' ) ) {
	get_template_part( 'index' );
	return;
}

get_header();
?>

<main id="primary" class="site-main raw-woocommerce">
	<div class="container-pro py-16 pt-28">
		<?php woocommerce_content(); ?>
	</div>
</main>

<?php
get_footer();
