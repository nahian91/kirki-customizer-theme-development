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

/* About Section */
Kirki::add_section('about_section', array(
    'title' => __('About Settings', 'xenon'),
    'panel' => 'xenon_panel'
));

/* About Image Settings */
Kirki::add_field('xenon_config', array(
    'label' => __('Add About Image', 'xenon'),
    'type' => 'image',
    'settings' => 'about_img',
    'section' => 'about_section',
));

/* About Heading Settings */
Kirki::add_field('xenon_config', array(
    'label' => __('Add About Heading', 'xenon'),
    'type' => 'text',
    'settings' => 'about_heading',
    'section' => 'about_section',
    'default' => __('Xenon Doe', 'xenon')
));

/* About Subheading Settings */
Kirki::add_field('xenon_config', array(
    'label' => __('Add About Subheading', 'xenon'),
    'type' => 'text',
    'settings' => 'about_subheading',
    'section' => 'about_section',
    'default' => __('professional web developer', 'xenon')
));

/* About Description Settings */
Kirki::add_field('xenon_config', array(
    'label' => __('Add About Description', 'xenon'),
    'type' => 'editor',
    'settings' => 'about_desc',
    'section' => 'about_section',
    'default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 'xenon')
));

/* About Button URL Settings */
Kirki::add_field('xenon_config', array(
    'label' => __('Add About Button Link', 'xenon'),
    'type' => 'link',
    'settings' => 'about_btn_link',
    'section' => 'about_section',
    'default' => 'https://www.facebook.com'
));

/* About Button Text Settings */
Kirki::add_field('xenon_config', array(
    'label' => __('Add About Button Text', 'xenon'),
    'type' => 'text',
    'settings' => 'about_btn_text',
    'section' => 'about_section',
    'default' => __('Hire Me', 'xenon')
));

/* Services Section */
Kirki::add_section('services_section', array(
    'title' => __('Services Settings', 'xenon'),
    'panel' => 'xenon_panel'
));

/* Services Section Title */
Kirki::add_field('xenon_config', array(
    'label' => __('Add Services Section Title', 'xenon'),
    'type' => 'text',
    'settings' => 'services_section_title',
    'section' => 'services_section',
    'default' => __('Our Services', 'xenon')
));

/* Services Section Description */
Kirki::add_field('xenon_config', array(
    'label' => __('Add Services Section Description', 'xenon'),
    'type' => 'textarea',
    'settings' => 'services_section_desc',
    'section' => 'services_section',
    'default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'xenon')
));

/* Services Single Box Repeat */
Kirki::add_field('xenon_config', array(
    'label' => __('Services Control', 'xenon'),
    'type' => 'repeater',
    'settings' => 'services_box',
    'section' => 'services_section',
    'row_label' => array(
        'type' => 'text',
        'value' => __('Add New Service', 'xenone'),
        'field' => 'service_icon',
    ),
    'fields' => array(
        'service_icon' => array(
            'type' => 'select',
            'label' => __('Add Service Icon', 'xenon'),
            'placeholder' => esc_html__( 'Select an icon...', 'xenon' ),
            'choices' => array(
                'fa fa-dribbble' => __('Dribble', 'xenon'),
                'fa fa-code' => __('Code', 'xenon'),
                'fa fa-clone' => __('Clone', 'xenon'),
                'fa fa-rocket' => __('Rocket', 'xenon'),
                'fa fa-camera' => __('Camera', 'xenon'),
                'fa fa-clock-o' => __('Clock', 'xenon'),
            )
        ),
        'service_title' => array(
            'type' => 'text',
            'label' => __('Add Service Title', 'xenon')
        ),
        'service_desc' => array(
            'type' => 'textarea',
            'label' => __('Add Service Description', 'xenon')
        )
    ),
    'button_label' => __('Add New Service', 'xenon')
));