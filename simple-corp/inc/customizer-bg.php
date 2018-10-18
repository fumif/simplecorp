<?php 

	if (!isset($wp_customize)) {
		retrun;
	}

/////////////////* Index Page *///////////////////
/*=================
// Section //
=================*/
	$wp_customize->add_section( 'index-background', array(
		'title'     => 'Index Page',
		'priority'  => 150,
		'panel' => 'background_panel'
	));

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'index-background', array(
		'default'   => get_theme_default('home-bg'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	


/*=================
// Control //
=================*/
	$wp_customize->add_control(
		new WP_Customize_Image_Control (
			$wp_customize,
			'index-background', array(
				'settings' => 'index-background',
				'section' => 'index-background',
				'label' => __('Upload Image','simple-corp'),
				'description' => __('Select image you want to use for top image of index page.','simple-corp')
			)
		)
	);


/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('index-background', array(
		'selector' => '#index-bg',
	));

/////////////////* About Page *///////////////////

/*=================
// Section //
=================*/
	$wp_customize->add_section( 'about-background', array(
		'title'     => 'About Page',
		'priority'  => 150,
		'panel' => 'background_panel'
	));

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'about-background', array(
		'default'   => get_theme_default('about-bg'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	

/*=================
// Control //
=================*/
	$wp_customize->add_control(
		new WP_Customize_Image_Control (
			$wp_customize,
			'about-background', array(
				'settings' => 'about-background',
				'section' => 'about-background',
				'label' => __('Upload Image','simple-corp'),
				'description' => __('Select image you want to use for top image of about page.','simple-corp')
			)
		)
	);
/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('about-background', array(
		'selector' => '#about-bg',
	));


/////////////////* Blog Page *///////////////////

/*=================
// Section //
=================*/
	$wp_customize->add_section( 'blog-background', array(
		'title'     => 'Blog Page',
		'priority'  => 150,
		'panel' => 'background_panel'
	));

/*=================
// Setting //
=================*/
	$wp_customize->add_setting( 'blog-background', array(
		'default'   => get_theme_default('blog-bg'),
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	));
	

/*=================
// Control //
=================*/
	$wp_customize->add_control(
		new WP_Customize_Image_Control (
			$wp_customize,
			'blog-background', array(
				'settings' => 'blog-background',
				'section' => 'blog-background',
				'label' => __('Upload Image','simple-corp'),
				'description' => __('Select image you want to use for top image of blog page.','simple-corp')
			)
		)
	);

/*=================
// Partial //
=================*/
	$wp_customize->selective_refresh->add_partial('blog-background', array(
		'selector' => '#blog-bg',
	));

