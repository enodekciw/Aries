<?php
/**
 * Header template file
 *
 * @package Aries
 * @since 1.0.0
 * @author Tom <hello@wplov.in>
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo WPLOVIN_THEME_PATH; ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'navigation-right' ); ?>>

	<div class="loader-wrap">
		<div class="loader"><?php _e( 'Loading...', 'aries' ); ?></div>
	</div>
	
	<div class="navigation-trigger">
		<div class="hamburger-icon"><span></span><span></span><span></span><span></span></div>
	</div>

	<section class="navigation-wrap navigation-inactive">

		<nav class="navigation-main clearfix" role="navigation">

			<?php if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'primary-navigation', 'container' => 'none' ) ); 
				} else { ?>
				<ul class="nav-menu-none nav-menu wrapper">
				<?php if( current_user_can( 'edit_theme_options' ) ) : ?>
					<li><a href="<?php echo admin_url( 'nav-menus.php' ); ?>"><?php _e( 'Menu does not exist. Create a new one?', 'aries' ); ?></a></li>
				<?php else : ?>
					<li><a href="<?php echo esc_url( home_url() ); ?>"><?php echo bloginfo( 'title' ); ?></a></li>
				<?php endif; ?>
				</ul>
			<?php } ?>

		</nav>

	</section>

	<header class="header-wrap">

		<a class="site-logo" href="<?php echo esc_url( home_url() ); ?>">
			<?php if( $aries_site_logo = get_theme_mod( 'aries_logo' ) ) echo '<img src="' . esc_url( $aries_site_logo ) . '" alt=""/>'; ?>
			<?php if( ( $aries_site_title = get_bloginfo( 'title' ) ) && get_theme_mod( 'aries_display_header_text', true ) ) echo '<span>' . $aries_site_title . '</span>'; ?> 
		</a>
		<?php if( ( $aries_site_description = get_bloginfo( 'description' ) ) && get_theme_mod( 'aries_display_header_text', true ) ) echo '<br><span class="site-description">' . $aries_site_description . '</span>'; ?>

	</header>