<?php


/*
Plugin Name: My Portfolio
Plugin URI: https://github.com/katide155/my-portfolio-plugin
Description: Plugin 
Version: 1.0.0
Author: asin
License: GPL2
License URI: https://www.gnu.org
Text Domain: my-portfolio-plugin
*/

function portfolio_create_post_type_works(){
	register_post_type('works', array(
		'labels' => array(
			'name' => __('Works'),
			'singular_name' => __('Work')
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'works'),
		'show_in_rest' => true
	));
}

add_action('init', 'portfolio_create_post_type_works');

function my_portfolio_customize_background_color($wp_customize){
	$wp_customize->add_section('my_portfolio_colors', array(
		'title' => __('My colors'),
		'priority' => 100
	));
	
	$wp_customize->add_setting('my_portfolio_background_color', array(
		'default' => 'grey',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_background_color', array(
		'label' => __('Background color'),
		'description' => __('Enter bg color'),
		'section' => 'my_portfolio_colors',
		'type' => 'text',
		'priority' => 10
	)));
	
	$wp_customize->add_setting('my_portfolio_second_background_color', array(
		'default' => '#FFFFFF',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_portfolio_second_background_color', array(
		'label' => __('Second background color'),
		'description' => __('Select second bg color'),
		'section' => 'my_portfolio_colors',
		'settings' => 'my_portfolio_second_background_color'
	)));
	
	    //Kuriame nuotraukos iterpimo lauka

    $wp_customize->add_setting('my_portfolio_custom_image', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'my_portfolio_custom_image', array(
        'label'=>'Custom Image',
        'description' => 'Select your image',
        'section' => 'my_portfolio_colors'
    )));
}

add_action('customize_register', 'my_portfolio_customize_background_color');


function my_portfolio_header_settings($wp_customize){
	$wp_customize->add_section('my_portfolio_header_settings', array(
		'title' => __('Header settings'),
		'priority' => 100
	));
	//---------------------------------
	$wp_customize->add_setting('my_portfolio_logo', array(
		'default' => 'Logo',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_logo', array(
		'label' => __('Logo'),
		'description' => __('Choose logo'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_copyright', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_copyright', array(
		'label' => __('Copyright'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_copyright_text_before_date', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_copyright_text_before_date', array(
		'label' => __('Copyright text before date'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_copyright_text_after_date', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_copyright_text_after_date', array(
		'label' => __('Change copyright text after date'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	
	$wp_customize->add_setting('my_portfolio_link_target', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_link_target', array(
		'label' => __('Link target'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'checkbox',
		'priority' => 10
	)));
	//---------------------------------------------
		$wp_customize->add_setting('my_portfolio_facebook_url', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_facebook_url', array(
		'label' => __('Facebook url'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
		$wp_customize->add_setting('my_portfolio_twitter_url', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_twitter_url', array(
		'label' => __('Twitter url'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
		$wp_customize->add_setting('my_portfolio_instagram_url', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_instagram_url', array(
		'label' => __('Instagram url'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
		$wp_customize->add_setting('my_portfolio_linkedin_url', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_linkedin_url', array(
		'label' => __('Linkedin url'),
		'section' => 'my_portfolio_header_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
}

add_action('customize_register', 'my_portfolio_header_settings');

function my_portfolio_footer_settings($wp_customize){
	$wp_customize->add_section('my_portfolio_footer_settings', array(
		'title' => __('Footer settings'),
		'priority' => 100
	));
	//---------------------------------
	$wp_customize->add_setting('my_portfolio_menu_1', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_menu_1', array(
		'label' => __('Menu #1 title'),
		'section' => 'my_portfolio_footer_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_menu_2', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_menu_2', array(
		'label' => __('Menu #2 title'),
		'section' => 'my_portfolio_footer_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_contact_title', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_contact_title', array(
		'label' => __('Contact title'),
		'section' => 'my_portfolio_footer_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_contact_address', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_contact_address', array(
		'label' => __('Contact address'),
		'section' => 'my_portfolio_footer_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	
		$wp_customize->add_setting('my_portfolio_contact_phone', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_contact_phone', array(
		'label' => __('Contact phone'),
		'section' => 'my_portfolio_footer_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
		$wp_customize->add_setting('my_portfolio_contact_email', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_contact_email', array(
		'label' => __('Contact email'),
		'section' => 'my_portfolio_footer_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
		$wp_customize->add_setting('my_portfolio_copyright_before', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_copyright_before', array(
		'label' => __('Copyright before'),
		'section' => 'my_portfolio_footer_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
		$wp_customize->add_setting('my_portfolio_copyright_after', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_copyright_after', array(
		'label' => __('Copyright after'),
		'section' => 'my_portfolio_footer_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
}

add_action('customize_register', 'my_portfolio_footer_settings');

function my_portfolio_404_settings($wp_customize){
	$wp_customize->add_section('my_portfolio_404_settings', array(
		'title' => __('404 settings'),
		'priority' => 100
	));
	//---------------------------------
	$wp_customize->add_setting('my_portfolio_404_page_title', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_404_page_title', array(
		'label' => __('404 page title'),
		'section' => 'my_portfolio_404_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_404_page_description', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_404_page_description', array(
		'label' => __('404 page description'),
		'section' => 'my_portfolio_404_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_404_page_link', array(
		'default' => '',
		'sanitize_callback' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my_portfolio_404_page_link', array(
		'label' => __('404 page link text'),
		'section' => 'my_portfolio_404_settings',
		'type' => 'text',
		'priority' => 10
	)));
	//---------------------------------------------
	$wp_customize->add_setting('my_portfolio_404_background_image', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'my_portfolio_404_background_image', array(
        'label'=>'404 Background Image',
        'description' => 'Select your image',
        'section' => 'my_portfolio_404_settings'
    )));

}

add_action('customize_register', 'my_portfolio_404_settings');