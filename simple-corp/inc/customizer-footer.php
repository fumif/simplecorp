<?php 

/////////////////* Text 1 *///////////////////
/*=================
// Section //
=================*/
	$wp_customize->add_section( 'footer_info', array(
		'title'     => 'Footer Section',
		'priority'  => 150,
	));

//////*  Footer Address *////////
/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'footer_address', array(
		'default'   => get_theme_default('footer_address'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'footer_address', array(
		'settings'  => 'footer_address',
		'label'     => __('Address','simple-corp'),
		'section'   => 'footer_info',
		'type'      => 'text',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('footer_address', array(
		'selector' => '.footer_info',
	));


//////*  Footer Phone *////////
/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'footer_phone', array(
		'default'   => get_theme_default('footer_phone'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'footer_phone', array(
		'settings'  => 'footer_phone',
		'label'     => __('Phone','simple-corp'),
		'section'   => 'footer_info',
		'type'      => 'text',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('footer_phone', array(
		'selector' => '.footer_info',
	));




//////*  Footer Email *////////
/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'footer_email', array(
		'default'   => get_theme_default('footer_email'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'footer_email', array(
		'settings'  => 'footer_email',
		'label'     => __('Email','simple-corp'),
		'section'   => 'footer_info',
		'type'      => 'email',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('footer_email', array(
		'selector' => '.footer_info',
	));


