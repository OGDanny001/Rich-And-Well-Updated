<?php
/**
 * The header for our theme.
 *
 * @package Rich_And_Well
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'gradient-bg' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rich-and-well' ); ?></a>

	<header id="navbar" class="site-header fixed top-0 left-0 right-0 z-50 transition-all duration-300" role="banner">
		<div class="container-pro">
			<div class="flex items-center justify-between h-16 lg:h-28">
				<div class="site-branding shrink-0">
					<?php raw_the_site_logo(); ?>
				</div>

				<nav id="site-navigation" class="main-navigation hidden lg:flex items-center gap-2.5 xl:gap-5 2xl:gap-6 text-[11px] xl:text-xs" aria-label="<?php esc_attr_e( 'Primary', 'rich-and-well' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'fallback_cb'    => false,
							'depth'          => 2,
						)
					);
					?>
				</nav>
			</div>
		</div>
	</header>
