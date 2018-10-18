<?php 
/*=======================================================================
*----------------------* WP_CUSTOMIZER FUNCTION *----------------------*
=======================================================================*/

/*=======================
// SETTING DEFAULT TEXT //
=======================*/

function get_theme_default($setting) {
	$defaults = array(
		'home-bg' => get_template_directory_uri().'/img/index-topImg.png',
		'about-bg' => get_template_directory_uri().'/img/about-topimg.png',
		'blog-bg' => get_template_directory_uri().'/img/blog-topimg.png',
		'our_service' => 'Our Service',
		'our_team' => 'Our Team',
		'section2-title' => 'Why Our Company',
		'title-image' =>  'Title',
		'image' => get_template_directory_uri().'/img/photo_notebook.png',
		'section1_title' =>  'Welcome',
		'lorem' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ',
		'footer_address' => '123 Any Street, City',
		'footer_phone' => '(123)-456-7890',
		'footer_email' => 'contact@email.com'
	);
	return $defaults[$setting];
}


function simple_corp_customize_theme( $wp_customize ) {
/*=================
// Panel //
=================*/
	$wp_customize->add_panel( 'background_panel', array(
		'title' => 'Top Image',
		'description' => 'This is a description of this panel',
		'priority' => 150,
	));

	$wp_customize->add_panel( 'homepage_panel', array(
		'title' => 'Homepage Section',
		'description' => 'This is a description of this panel',
		'priority' => 150,
	));

	$wp_customize->add_panel( 'about_panel', array(
		'title' => 'About Section',
		'description' => 'This is a description of this panel',
		'priority' => 150,
	));


include('customizer-bg.php');
include('customizer-homepage.php');
include('customizer-about.php');
include('customizer-footer.php');
}

add_action( 'customize_register', 'simple_corp_customize_theme' );


function background_customize_css () { ?>
<style>

	<?php

add_action( 'wp_head', 'background_customize_css');
		if (get_theme_mod('index-background')) {
			$index_bg_img_url = get_theme_mod('index-background' );
		} else {
			$index_bg_img_url = get_stylesheet_directory_uri(). '/img/index-topImg.png';
		}
	?>
		.bg-index {
		    background-image: url(<?php echo $index_bg_img_url; ?>);
		}
	
</style>
<?php } 



