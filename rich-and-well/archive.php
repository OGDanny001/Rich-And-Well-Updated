<?php
/**
 * Archive template.
 *
 * @package Rich_And_Well
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container-pro py-16 md:py-24 pt-28">
		<header class="page-header mb-10">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header>

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-10' ); ?>>
					<header class="entry-header mb-3">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</header>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'Nothing found.', 'rich-and-well' ); ?></p>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
