<?php

// Set content width
// if ( ! isset( $content_width ) )
//     $content_width = 500; /* pixels */

if ( ! function_exists( 'mysimplemod_setup' ) ) {
	function mysimplemod_setup() {

		// add title tag
		add_theme_support( "title-tag" );

		// add RSS feeds
		add_theme_support( 'automatic-feed-links' );


		function mysimplemod_register_menus() {
			register_nav_menus(
				array(
					'primary' => __( 'Main Menu', 'mysimplemod' ),
					'footernav' => __( 'Footer Menu', 'mysimplemod' ),
				)
			);
		}
		add_action( 'init', 'mysimplemod_register_menus' );

		if (!get_theme_mod('copyright_text', false)) {
	        set_theme_mod('copyright_text', '@ Natalie St Jean');
	    }

	}
}
add_action( 'after_setup_theme', 'mysimplemod_setup' );

// Register Widget Area
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Sidebar Widgets',
    'before_widget' => '<aside class = "widget">',
    'after_widget' => '</aside>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

// Register Customizer Settings
if (!function_exists('mysimplemod_init_settings')) {
	function mysimplemod_init_settings($wp_customize) {
		$wp_customize->add_section('mysimplemod_section' , array(
		    'title'      => __('SimpleMod Controls', 'mytheme'),
		    'priority'   => 30,
		));
		$wp_customize->add_setting(
			'copyright_text',
			array(
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'copyright_text',
			array(
				'label' 		=> __('Copyright', 'mysimplemod'),
				'description'	=> __('Add Footer Copyright', 'mysimplemod'),
				'section' 		=> 'mysimplemod_section',
			)
		);
	}
	add_action('customize_register', 'mysimplemod_init_settings');
}

// Load stylesheet and fonts
wp_enqueue_style( 'style', get_stylesheet_uri());

// Load Google fonts
function custom_add_google_fonts() {
	wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,300,200,100,900,800,700,600,500', false);
}
add_action('wp_enqueue_scripts', 'custom_add_google_fonts');

// Load Font Awesome
function custom_add_fa() {
	wp_enqueue_script('custom-fa', 'https://kit.fontawesome.com/7fe5eb3b95.js');
}
add_action('wp_enqueue_scripts', 'custom_add_fa');

?>