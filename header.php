<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electric_Sheep
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <meta http-equiv="X-UA-Compatible" content="IE=Edge"/> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'electric-sheep' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation pull-left" role="navigation" data-menu-toggle="close">
			<button class="menu-burger" data-menu-toggle="close" title="Menu" alt="menu">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
			<div class="inner-navigation">
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-alt.png" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'Maven-Pro' ) ); ?>
					<ul class="secondary-menu Maven-Pro">
						<li>
							<a href="#">About Us</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
					</ul>
					<div class="social-icons">
						<ul class="clearfix">
							<li class="google-plus">
								<a href="#" title="Google Plus" alt="Google Plus"></a>
							</li>
							<li class="facebook">
								<a href="#" title="Facebook" alt="Facebook"></a>
							</li>
							<li class="twitter">
								<a href="#" title="Twitter" alt="Twitter"></a>
							</li>
							<li class="linkedin">
								<a href="#" title="Linkedin" alt="Linkedin"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->

		<div class="site-branding pull-left">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
				</a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
				</a></p>
			<?php endif;?>
		</div><!-- .site-branding -->

		<div class="social-icons pull-right">
			<ul class="clearfix">
				<li class="google-plus">
					<a href="#" title="Google Plus" alt="Google Plus"></a>
				</li>
				<li class="facebook">
					<a href="#" title="Facebook" alt="Facebook"></a>
				</li>
				<li class="twitter">
					<a href="#" title="Twitter" alt="Twitter"></a>
				</li>
				<li class="linkedin">
					<a href="#" title="Linkedin" alt="Linkedin"></a>
				</li>
			</ul>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
