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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="top-border"></div>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<a href="http://red-bread.dev/" rel="home">
						<img src="/wp-content/themes/redstarter/images/lrb-logo.svg"alt="Le Red Bread logo"></a>
							<div class="social">
								<ul>
									<li>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-envelope"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></a></i>
									</li>
								</ul>
							</div>

					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description screen-reader-text"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->
<div class="nav-wrapper">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div class="search">
						<form method="get"  action="">
							<input type="search" class="search-field" placeholder="SEARCH..." value="" name="search" title="Search" >
							<button class="search-submit"><i class="fa fa-search"></i></button>
						</form>
	 		</div>
				</nav><!-- #site-navigation -->
			</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
