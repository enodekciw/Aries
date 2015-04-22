<?php
/**
 * Aries backwards compatibility functions.
 *
 * Prevents Aries from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package Aries
 * @since 1.0.0
 * @author Tom <hello@wplovin.com>
 */

/**
 * Prevent switching to Aries on old versions of WordPress.
 * Switches to the default theme.
 *
 * @since 1.0.0
 */
function aries_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'aries_upgrade_notice' );
}
add_action( 'after_switch_theme', 'aries_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Aries on WordPress versions prior to 4.1.
 *
 * @since 1.0.0
 */
function aries_upgrade_notice() {
	$message = sprintf( __( '<strong>Aries</strong> requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'aries' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since 1.0.0
 */
function aries_customize() {
	wp_die( sprintf( __( '<strong>Aries</strong> requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'aries' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'aries_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since 1.0.0
 */
function aries_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( '<strong>Aries</strong> requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'aries' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'aries_preview' );