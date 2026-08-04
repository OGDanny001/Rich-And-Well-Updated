<?php
/**
 * Main template fallback.
 *
 * @package Rich_And_Well
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container-pro py-16 md:py-24">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header mb-6">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No content found.', 'rich-and-well' ); ?></p>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
