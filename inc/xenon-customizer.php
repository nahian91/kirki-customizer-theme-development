<?php

Kirki::add_config( 'xenon_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel('xenon_panel', array(
    'priority' => 10,
    'title' => __('Xenon Options', 'xenon'),
    'description' => __('Description', 'xenon')
));

Kirki::add_section('banner_section', array(
    'title' => __('Banner Settings', 'xenon'),
    'panel' => 'xenon_panel'
));

Kirki::add_field('xenon_config', array(
    'label' => __('Add Banner Heading', 'xenon'), 
    'type' => 'text',
    'settings' => 'banner_heading',
    'section' => 'banner_section', 
    'default' => __('My Name is Xenon Doe')
));

Kirki::add_field('xenon_config', array(
    'label' => __('Banner Heading Typography', 'xenon'),
    'type' => 'typography',
    'settings' => 'banner_heading_typography',
    'section' => 'banner_section', 
    'default'     => [
		'font-family'    => 'Poppins',
		'variant'        => '700',
		'font-size'      => '80px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#fff',
		'text-transform' => 'none',
		'text-align'     => 'center',
	],
    'choices' => [
        'fonts' => [
            'google' => [ 'Roboto', 'Open Sans', 'Lato', 'Noto Serif', 'Noto Sans' ],
        ],
    ],
    'output'      => [
		[
			'element' => '.welcome-content h4',
		],
	],
));

Kirki::add_field('xenon_config', array(
    'label' => __('Add Banner Description', 'xenon'),
    'type' => 'textarea',
    'settings' => 'banner_desc',
    'section' => 'banner_section',
    'default' => __('Lorem ipsum dummy text')
));

Kirki::add_field('xenon_config', array(
    'label' => __('Add Banner Button Text', 'xenon'),
    'type' => 'text',
    'settings' => 'banner_btn_text',
    'section' => 'banner_section',
    'default' => __('Contact Us')
));

Kirki::add_field('xenon_config', array(
    'label' => __('Add Banner Button Link', 'xenon'),
    'type' => 'link',
    'settings' => 'banner_btn_link',
    'section' => 'banner_section',
    'default' => 'https://www.google.com'
));

Kirki::add_field('xenon_config', array(
    'label' => __('Banner Background', 'xenon'),
    'type' => 'background',
    'default'     => [
		'background-color'      => '',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
    'transport'   => 'auto',
    'output' => [
        [
            'element' => '.welcome-area'
        ]
    ],
    'settings' => 'banner_background',
    'section' => 'banner_section',
));

// function xenon_customizer($wp_customize) {

//     $wp_customize -> add_section('banner_section', array(
//         'title' => __('Banner Settings', 'text-domain'),
//         'priority' => 210
//     ));
    
//     $wp_customize -> add_setting('banner_heading', array(
//         'default' => __('My Name is John Wick', 'text-domain'),
//         'transport' => 'postMessage' // postMessage        
//     ));

//     $wp_customize -> add_control('banner_heading_ctrl', array(
//         'label' => __('Add Banner Heading', 'text-domain'),
//         'type' => 'text',
//         'settings' => 'banner_heading',
//         'section' => 'banner_section'
//     ));

//     $wp_customize -> add_setting('banner_heading_color', array(
//         'default' => '#fff',
//         'transport' => 'postMessage'
//     ));

//     $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'banner_heading_color_ctrl', array(
//         'label' =>  __('Add Banner Heading Color', 'text-domain'),
//         'settings' => 'banner_heading_color',
//         'section' => 'banner_section'
//     )));

//     $wp_customize -> add_setting('banner_desc', array(
//         'default' => __('developer - freelancer - photographer', 'text-domain'),
//         'transport' => 'postMessage'
//     ));

//     $wp_customize -> add_control('banner_desc_ctrl', array(
//         'label' => __('Add Banner Description', 'text-domain'),
//         'type' => 'textarea',
//         'settings' => 'banner_desc' ,
//         'section' => 'banner_section'
//     ));

//     $wp_customize -> add_setting('banner_btn_text', array(
//         'default' => __('Contact Us', 'text-domain')
//     ));

//     $wp_customize -> add_control('banner_btn_text_ctrl', array(
//         'label' => __('Add Banner Button Text', 'text-domain'),
//         'type' => 'text',
//         'settings' => 'banner_btn_text' ,
//         'section' => 'banner_section'
//     ));

//     $wp_customize -> add_setting('banner_btn_link', array(
//         'default' => __('https://www.google.com', 'text-domain')
//     ));

//     $wp_customize -> add_control('banner_btn_link_ctrl', array(
//         'label' => __('Add Banner Button Link', 'text-domain'),
//         'type' => 'url',
//         'settings' => 'banner_btn_link' ,
//         'section' => 'banner_section'
//     ));

// }
// add_action('customize_register', 'xenon_customizer');