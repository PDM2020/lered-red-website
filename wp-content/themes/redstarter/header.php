<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="top-border"></div>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<div class="site-branding">
					<div class="logo-social fixed-width-container">
					<a href="http://red-bread.dev/" rel="home">
						<img src="<?php echo get_template_directory_uri() ?>/images/lrb-logo.svg"alt="Le Red Bread logo"></a>
							<div class="social">
								<ul>
									<li>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></a></i>
										<a href="#"><i class="fa fa-envelope"></i></a>
									</li>
								</ul>
							</div>

					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description screen-reader-text"><?php bloginfo( 'description' ); ?></p>
				</div>
		</div><!-- .site-branding -->
		<div class="nav-wrapper">
			<div class="fixed-width-container">
		<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<div class="nav-search">
						<?php get_search_form(); ?>
					</div>
					</nav><!-- #site-navigation -->
				</div>
			</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
