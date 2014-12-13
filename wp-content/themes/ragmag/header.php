<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package digistarter
 */
?><!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'digistarter' ); ?></a>
	<div class="wrap">
		<?php tha_header_before(); ?>
		<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
			<?php tha_header_top(); ?>
			<div class="branding">
				<div class="dropdownwrap">
					<aside id="search-3" class="widget widget_search">
						<form role="search" method="get" id="searchform" class="searchform" action="http://localhost:3000/">
							<div>
								<label class="screen-reader-text" for="s">Search for:</label>

								<input type="text" placeholder="Type Search Term and Hit Enter" value="" name="s" id="s">
								<!-- <input type="submit" id="searchsubmit" value="Search"> -->
							</div>
						</form>
					</aside>
					<?php dynamic_sidebar( 'slide-down' ); ?>
				</div>
				<div class="ad-banner">

				</div>
				<div class="left-branding">
					<?php dynamic_sidebar( 'left-header' ); ?>
					<div class="block"></div>
				</div><!-- .left-branding -->

				<div class="site-branding">
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
					<div class="site-description"><?php bloginfo( 'description' ) ?></div>
				</div><!-- .site-branding -->

				<div class="right-branding">
					<?php dynamic_sidebar( 'right-header' ); ?>
					<div class="block"></div>
				</div><!-- .right-branding  -->

				<nav id="primary-nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<button class="menu-button">
						<span class="dashicons <?php echo get_theme_mod( 'digistarter_mobile_nav_icon', 'dashicons-menu' ); ?>"></span><?php echo get_theme_mod( 'digistarter_mobile_nav_label', 'Menu' ); ?>
					</button>
					<?php 	wp_nav_menu( array(
						    'theme_location' => 'primary-navigation',
						    'menu_class' => 'flexnav', //Adding the class for FlexNav
						    'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'digistarter_mobile_min_width' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
						    ));
					?>

				</nav><!-- #site-navigation -->
			</div>



			<?php tha_header_bottom(); ?>

		</header><!-- #masthead -->
		<?php tha_header_after(); ?>

		<?php tha_content_before(); ?>
		<div id="content" class="site-content">
			<?php tha_content_top(); ?>
