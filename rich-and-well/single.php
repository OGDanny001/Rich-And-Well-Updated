<?php
/**
 * Single post template.
 *
 * @package Rich_And_Well
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container-pro py-16 md:py-24 pt-28">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header mb-8">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="entry-meta text-sm text-gray-500">
						<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
							<?php echo esc_html( get_the_date() ); ?>
						</time>
					</p>
				</header>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail mb-8">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
		?>
	</div>
</main>

<?php
get_footer();
