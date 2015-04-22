<?php
/**
 * Custom Customizer settings.
 *
 * @package Aries
 * @since 1.0.0
 */
function aries_customizer_register( $wp_customize ) {

	/*
	 * Add Select to choose Color Scheme
	 */
	$wp_customize->add_section( 'aries_colors_section' , array(
	    'title'      => __( 'Color Scheme', 'aries' ),
	    'priority'   => 12,
	) );

    $wp_customize->add_setting( 'aries_color_scheme', array(
    	'type' => 'theme_mod',
    	'sanitize_callback' => 'aries_sanitize_color_scheme'
    ) );

    $wp_customize->add_control( 'aries_color_scheme', array(
    	'settings' => 'aries_color_scheme',
		'label'    => __( 'Predefined Color Schemes', 'aries' ),
		'section'  => 'aries_colors_section',
		'type'     => 'select',
		'choices'  => array(
			'default' 		=> 'Pink accent [default]', //007BA7, D7445C - (blue bg + pink)
			'red' 			=> 'Red accent', 			//709C17, CC3333 - (green + red)
			'violet' 		=> 'Violet accent', 		//DE3163, 272230 - (pink bg + dark violet)
			'blue' 			=> 'Blue accent', 			//FFBF00, 2F75AA - (yellow bg + blue)
			'green' 		=> 'Green accent', 			//B284BE, 83B444 - (violet bg + green)
			'yellow' 		=> 'Yellow accent', 		//5F9EA0, DEB662 - (teal bg + yellow)
			'black' 		=> 'Black accent', 			//696969, 1C1C1C - (gray bg + light black)
		)
	) );

	/*
	 * Add Checkbox to enable Fullscreen Background mode
	 */
    $wp_customize->add_setting( 'aries_fullscreen_bg', array(
    	'type' => 'theme_mod',
    	'default' => false,
    	'sanitize_callback' => 'aries_sanitize_fullscreen_bg'
    ) );

    $wp_customize->add_control( 'aries_fullscreen_bg', array(
    	'settings' => 'aries_fullscreen_bg',
		'label'    => __( 'Full Screen Background', 'aries' ),
		'section'  => 'background_image',
		'type'     => 'checkbox',
	) );

	/*
	 * Add WP_Customize_Image_Control() to upload Site Logo
	 */
	$wp_customize->add_section( 'aries_logo_section' , array(
	    'title'      => __( 'Site Logo', 'aries' ),
	    'priority'   => 11,
	) );

    $wp_customize->add_setting( 'aries_logo', array(
    	'type' => 'theme_mod',
    	'sanitize_callback' => 'aries_sanitize_logo'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aries_logo', array(
    	'label'    => __( 'Upload Your Logo', 'aries' ),
    	'section'  => 'aries_logo_section',
   		'settings' => 'aries_logo',
	) ) );

	/*
	 * Add Checkbox to Hide Site Title and Tagline
	 */
    $wp_customize->add_setting( 'aries_display_header_text', array(
    	'type' 	  => 'theme_mod',
    	'default' => true,
    	'sanitize_callback' => 'aries_sanitize_display_header_text'
    ) );

    $wp_customize->add_control( 'aries_display_header_text', array(
    	'settings' => 'aries_display_header_text',
		'label'    => __( 'Display Site Title and Tagline', 'aries' ),
		'section'  => 'title_tagline',
		'type'     => 'checkbox',
	) );
}

add_action( 'customize_register', 'aries_customizer_register' );

/**
 * Sanitization callbacks.
 *
 * @package Aries
 * @since 1.0.0
 */
function aries_sanitize_color_scheme( $color_scheme ){
	$predefined_color_schemes = array( 'default', 'red', 'violet', 'blue', 'green', 'yellow', 'black' );
	if( in_array( $color_scheme, $predefined_color_schemes ) ) return $color_scheme;
	return 'default';
}
function aries_sanitize_logo($logo){
	return esc_url( $logo );
}
function aries_sanitize_fullscreen_bg($fullscreen_bg){
	if( $fullscreen_bg == true || $fullscreen_bg == false ) return $fullscreen_bg;
	return false;
}
function aries_sanitize_display_header_text($display_header_text){
	if( $display_header_text == true || $display_header_text == false ) return $display_header_text;
	return false;
}