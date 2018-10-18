<?php 

/*=================
// Section //
=================*/
	$wp_customize->add_section( 'section1', array(
		'title'     => 'Section 1',
		'priority'  => 200,
		'panel' => 'homepage_panel'
	));

/////////////////* Title *///////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'section1-title', array(
		'default'   => get_theme_default('section1_title'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'section1-title', array(
		'settings'  => 'section1-title',
		'label'     => __('Title','simple-corp'),
		'section'   => 'section1',
		'type'      => 'text',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('section1-title', array(
		'selector' => '.homepage-section1',
	));


/////////////////* Paragraph *///////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'section1-text', array(
		'default'   => get_theme_default('lorem'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'section1_text', array(
		'settings'  => 'section1-text',
		'label'     => __('Text','simple-corp'),
		'section'   => 'section1',
		'type'      => 'textarea',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('section1-text', array(
		'selector' => '.homepage-section1',
	));


/*================================================================*/
/*================================================================*/

/////////////////////// Text with Image //////////////////////////

/*================================================================*/
/*================================================================*/


/////////////////* Section Title *///////////////////
/*=================
// Section //
=================*/
	$wp_customize->add_section( 'section2', array(
		'title'     => __('Section 2','simple-corp'),
		'priority'  => 200,
		'panel' => 'homepage_panel'
	));


/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'section2-title', array(
		'default'   => get_theme_default('section2-title'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'section2-title', array(
		'settings'  => 'section2-title',
		'label'     => __('Section 2 Main Title','simple-corp'),
		'section'   => 'section2',
		'type'      => 'text',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('section2-title', array(
		'selector' => '.homepage-text-image',
	));



/////////////////* Contents *///////////////////


/*==================================================*/
//////////////////*IMAGE-LEFT*////////////////
/*=================================================*/


/////////////////* Title *///////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'title-image-left', array(
		'default'   => get_theme_default('title-image'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'title-image-left', array(
		'settings'  => 'title-image-left',
		'label'     => __('Section2 First Title','simple-corp'),
		'section'   => 'section2',
		'type'      => 'text',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('title-image-left', array(
		'selector' => '.homepage-text-image',
	));


/////////////////* Paragraph *///////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'text-image-left', array(
		'default'   => get_theme_default('lorem'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'text-image-left', array(
		'settings'  => 'text-image-left',
		'label'     => __('Section2 First Text','simple-corp'),
		'section'   => 'section2',
		'type'      => 'textarea',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('text-image-left', array(
		'selector' => '.homepage-text-image',
	));


////////////////////////* image  *////////////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting('image-left', array(
		'default' => get_theme_default('image'),
		'sanitize_callback' => 'esc_attr',
	));

/*=================
// Control //
=================*/
	 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image-left', array(
			'label' => __('Upload Image','simple-corp'),
			'section' => 'section2', 
			'settings' => 'image-left',
		)));
/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial( 'image-left', array(
    'selector' => '.homepage-text-image',
) );


/*==================================================*/
//////////////////*IMAGE-RIGHT*////////////////
/*=================================================*/


/////////////////* Title *///////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'title-image-right', array(
		'default'   => get_theme_default('title-image'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'title-image-right', array(
		'settings'  => 'title-image-right',
		'label'     => __('Section2 Second Title','simple-corp'),
		'section'   => 'section2',
		'type'      => 'text',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('title-image-right', array(
		'selector' => '.homepage-text-image',
	));


/////////////////* Paragraph *///////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'text-image-right', array(
		'default'   => get_theme_default('lorem'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control( 'text-image-right', array(
		'settings'  => 'text-image-right',
		'label'     => __('Section2 Second Text','simple-corp'),
		'section'   => 'section2',
		'type'      => 'textarea',
	));


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('text-image-right', array(
		'selector' => '.homepage-text-image',
	));


////////////////////////* image  *////////////////////////

/*=================
// Setting //
=================*/
	$wp_customize->add_setting('image-right', array(
		'default' => get_theme_default('image'),
		'sanitize_callback' => 'esc_attr',
	));

/*=================
// Control //
=================*/
	 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image-right', array(
			'label' => __('Upload Image','simple-corp'),
			'section' => 'section2', 
			'settings' => 'image-right',
		)));
/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial( 'image-right', array(
    'selector' => '.homepage-text-image',
) );


