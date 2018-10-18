<?php 

/////////////////* Our Service Title *///////////////////
/*=================
// Section //
=================*/
	$wp_customize->add_section( 'about_section_title', array(
		'title'     => 'About Section Titles',
		'priority'  => 150,
		'panel' => 'about_panel'
	));

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'our_service', array(
		'default'   => get_theme_default('our_service'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'our_service', array(
		'settings'  => 'our_service',
		'label'     => __('Section Title (Default: Our Service)', 'simple-corp'),
		'section'   => 'about_section_title',
		'type'      => 'text',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('our_service', array(
		'selector' => '.about_section_title',
	));


/////////////////* Our Team Title *///////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'our_team', array(
		'default'   => get_theme_default('our_team'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'our_team', array(
		'settings'  => 'our_team',
		'label'     => __('Section Title (Default: Our Team)','simple-corp'),
		'section'   => 'about_section_title',
		'type'      => 'text',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('our_team', array(
		'selector' => '.about_section_title',
	));


