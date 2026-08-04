<?php
/**
 * The footer for our theme.
 *
 * @package Rich_And_Well
 */
?>
	<footer id="colophon" class="site-footer pt-10 pb-8 md:pt-12 md:pb-12 border-t relative overflow-hidden" style="background:#050e17;border-color:rgba(20,82,177,0.2)" role="contentinfo">
		<div class="container-pro relative z-10">
			<?php
			$raw_tagline = get_theme_mod(
				'raw_footer_tagline',
				__( 'Designed for Wellness. Built for Impact.', 'rich-and-well' )
			);
			?>
			<div class="footer-bottom-bar pt-8 mt-4 text-center">
				<p class="footer-bottom-copyright text-gray-500 text-xs sm:text-sm">
					&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
					<?php bloginfo( 'name' ); ?>.
					<?php esc_html_e( 'All Rights Reserved.', 'rich-and-well' ); ?>
				</p>
				<?php if ( $raw_tagline ) : ?>
					<p class="text-gray-500 text-xs mt-2"><?php echo esc_html( $raw_tagline ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
