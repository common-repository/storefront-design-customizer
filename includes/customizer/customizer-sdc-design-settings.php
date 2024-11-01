<?php
/*
* 1.0 Panels
* 2.0 General Styles
* 2.1 Typography
* 3.0 Header
* 3.1 Logo
* 3.2 Header Elements
* 3.3 Navigation
* 3.4 Topbar
* 3.3 Social Accounts
* 4.0 Footer
*/

/*--------------------------------------------------------------
## 2.0 Container Width
--------------------------------------------------------------*/

	// Front Page Canvas Width
	$wp_customize->add_setting('sdc_customizer_homepage_width',
			      array(
			          'default'         => 100,
			          'sanitize_callback' => 'sanitize_key',
			          'transport'       => 'refresh',
			      )
		  );

		$wp_customize->add_control( new SDC_Control_Slider( $wp_customize, 'sdc_customizer_homepage_width', array(
					'type'        => 'ast-slider',
					'section'     => 'sdc_container_width_section',
			        'settings'       => 'sdc_customizer_homepage_width',
					'priority'    => 20,
			        'label'          => esc_html__( 'Homepage Boxed / Framed Width (%)', 'storefront-design-customizer' ),
			        'description'    => esc_html__( 'From Box to Full Width', 'storefront-design-customizer' ),
					'input_attrs' => array(
						'min'  => 20,
						'step' => 5,
						'max'  => 100,
					),
				)
			)
		);


	//Site Width
	$wp_customize->add_setting('sdc_customizer_homepage_content_width', array(
			'default'         	=> 1200,
			'sanitize_callback' => 'esc_attr',
			'transport' 		=> 'refresh',
	) );


		$wp_customize->add_control( new SDC_Control_Slider( $wp_customize, 'sdc_customizer_homepage_content_width', array(
					'type'        => 'ast-slider',
					'section'     => 'sdc_container_width_section',
			        'settings'       => 'sdc_customizer_homepage_content_width',
					'priority'    => 20,
	               'label'      	=> esc_html__( 'Homepage Content Width (px)', 'storefront-design-customizer' ),
	               'description' 	=> esc_html__( 'If you want your homepage container width to be 1200px, write 1200.', 'storefront-design-customizer' ),
					'input_attrs' => array(
						'min'  => 768,
						'step' => 1,
						'max'  => 1920,
					),
				)
			)
		);


	//Header Container Width
	$wp_customize->add_setting('sdc_customizer_header_width',
			      array(
			          'default'         => 1200,
			          'sanitize_callback' => 'sanitize_key',
			          'transport'       => 'refresh',
			      )
		  );


		$wp_customize->add_control( new SDC_Control_Slider( $wp_customize, 'sdc_customizer_header_width', array(
					'type'        => 'ast-slider',
					'section'     => 'sdc_container_width_section',
			        'settings'       => 'sdc_customizer_header_width',
					'priority'    => 20,
		            'label'          => esc_html__( 'Header Width (px)', 'storefront-design-customizer' ),
	               'description' 	=> esc_html__( 'If you want your Header container width to be 1200px, write 1200.', 'storefront-design-customizer' ),
					'input_attrs' => array(
						'min'  => 768,
						'step' => 1,
						'max'  => 1920,
					),
				)
			)
		);


	//Footer Content Width
	$wp_customize->add_setting('sdc_customizer_footer_width',
			      array(
			          'default'         => 1200,
			          'sanitize_callback' => 'sanitize_key',
			          'transport'       => 'refresh',
			      )
		  );

		$wp_customize->add_control( new SDC_Control_Slider( $wp_customize, 'sdc_customizer_footer_width', array(
					'type'        => 'ast-slider',
					'section'     => 'sdc_container_width_section',
			        'settings'       => 'sdc_customizer_footer_width',
					'priority'    => 20,
		            'label'          => esc_html__( 'Footer Content Width (px)', 'storefront-design-customizer' ),
	               'description' 	=> esc_html__( 'If you want your Footer container width to be 1200px, write 1200.', 'storefront-design-customizer' ),
					'input_attrs' => array(
						'min'  => 768,
						'step' => 1,
						'max'  => 1920,
					),
				)
			)
		);


	//Blog Section Width
	$wp_customize->add_setting('sdc_post_archive_content_width',
			      array(
			          'default'         => 1200,
			          'sanitize_callback' => 'sanitize_key',
			          'transport'       => 'refresh',
			      )
		  );


		$wp_customize->add_control( new SDC_Control_Slider( $wp_customize, 'sdc_post_archive_content_width', array(
					'type'        => 'ast-slider',
					'section'     => 'sdc_container_width_section',
			        'settings'       => 'sdc_post_archive_content_width',
					'priority'    => 20,
		            'label'          => esc_html__( 'Blog Section Width (px)', 'storefront-design-customizer' ),
	               'description' 	=> esc_html__( 'If you want your Blog Post Archive container width to be 1200px, write 1200.', 'storefront-design-customizer' ),
					'input_attrs' => array(
						'min'  => 768,
						'step' => 1,
						'max'  => 1920,
					),
				)
			)
		);


	//Single Post Width
	$wp_customize->add_setting('sdc_customizer_single_post_width',
			      array(
			          'default'         => 1200,
			          'sanitize_callback' => 'sanitize_key',
			          'transport'       => 'refresh',
			      )
		  );


		$wp_customize->add_control( new SDC_Control_Slider( $wp_customize, 'sdc_customizer_single_post_width', array(
					'type'        => 'ast-slider',
					'section'     => 'sdc_container_width_section',
			        'settings'       => 'sdc_customizer_single_post_width',
					'priority'    => 20,
		            'label'          => esc_html__( 'Single Post Width (px)', 'storefront-design-customizer' ),
	               'description' 	=> esc_html__( 'If you want your Single Post container width to be 1200px, write 1200.', 'storefront-design-customizer' ),
					'input_attrs' => array(
						'min'  => 768,
						'step' => 1,
						'max'  => 1920,
					),
				)
			)
		);
/*--------------------------------------------------------------
## 2.0 General Styles
--------------------------------------------------------------*/

	$wp_customize->get_section('storefront_typography')->panel 		= 'sdc_general_customizer_panel';
	$wp_customize->get_section('storefront_buttons')->panel 		= 'sdc_general_customizer_panel';
	$wp_customize->get_section('storefront_layout')->panel 			= 'sdc_general_customizer_panel';
	$wp_customize->get_section('background_image')->panel 			= 'sdc_general_customizer_panel';


/*--------------------------------------------------------------
## 3.0 Header
--------------------------------------------------------------*/



/*--------------------------------------------------------------
## Logo
--------------------------------------------------------------*/

	$wp_customize->get_section('title_tagline')->title 				= esc_html__('Logo','storefront-design-customizer' );
	$wp_customize->get_section('title_tagline')->panel 				= 'sdc_header_customizer_panel';
	$wp_customize->get_section('header_image')->panel 				= 'sdc_header_customizer_panel';

/*--------------------------------------------------------------
## Header Elements
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'sdc_header_customizer_details_ui_title',
		array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_header_customizer_details_ui_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Header Elements','storefront-design-customizer'),
					'section' => 'header_image',
					'settings'    => 'sdc_header_customizer_details_ui_title',
					'priority'   => 10,
			)) );

	// Display Product Search
	$wp_customize->add_setting('sdc_header_display_search', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_header_display_search', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Search Box','storefront-design-customizer'),
				'section' => 'header_image',
				'settings' => 'sdc_header_display_search',
				'priority'   => 11,
			) );

	// Display Header Cart
	$wp_customize->add_setting('sdc_header_display_cart', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_header_display_cart', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Header Cart','storefront-design-customizer'),
				'section' => 'header_image',
				'settings' => 'sdc_header_display_cart',
				'priority'   => 11,
			) );


/*--------------------------------------------------------------
## Primary Navigation
--------------------------------------------------------------*/

	// Primary Navigation Title
	$wp_customize->add_setting( 'sdc_header_customizer_navigation_ui_title',
		array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_header_customizer_navigation_ui_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Primary Navigation','storefront-design-customizer'),
					'section' => 'sdc_header_customizer_navigation_section',
					'settings'    => 'sdc_header_customizer_navigation_ui_title',
					'priority'   => 1,
			)) );

	// Primary Navigation Color
	$wp_customize->get_control( 'storefront_header_link_color' )->section  	= 'sdc_header_customizer_navigation_section';
	$wp_customize->get_control( 'storefront_header_link_color' )->label  	= esc_html__('Primary Menu Color','storefront-design-customizer' );
	$wp_customize->get_control( 'storefront_header_link_color' )->priority  	= 2;


	// Primary Navigation Hover Color
	$wp_customize->add_setting( 'sdc_customizer_primary_menu_hover_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_primary_menu_hover_color', array(
				'label'	   				=> __( 'Menu Hover Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_primary_menu_hover_color',
				'priority' 				=> 3,
			) ) );


	// Primary Navigation Active Menu Color
	$wp_customize->add_setting( 'sdc_customizer_primary_menu_active_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_primary_menu_active_color', array(
				'label'	   				=> __( 'Menu Active Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_primary_menu_active_color',
				'priority' 				=> 4,
			) ) );


	// Primary Navigation Dropdown Background Color
	$wp_customize->add_setting( 'sdc_customizer_primary_menu_drop_backcolor', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_primary_menu_drop_backcolor', array(
				'label'	   				=> __( 'Menu Dropdown Background Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_primary_menu_drop_backcolor',
				'priority' 				=> 5,
			) ) );

	// Primary Navigation Dropdown Color
	$wp_customize->add_setting( 'sdc_customizer_primary_menu_drop_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_primary_menu_drop_color', array(
				'label'	   				=> __( 'Menu Dropdown Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_primary_menu_drop_color',
				'priority' 				=> 6,
			) ) );

	// Primary Navigation Dropdown Color
	$wp_customize->add_setting( 'sdc_customizer_primary_menu_holder_color', array(
			'default'           	=> '#ffffff',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_primary_menu_holder_color', array(
				'label'	   				=> __( 'Primary Menu Holder Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_primary_menu_holder_color',
				'priority' 				=> 6,
			) ) );


	$wp_customize->add_setting('sdc_customizer_primary_menu_font_size', array(
		'default' => '16px',
		'transport' => 'postMessage',
		'sanitize_callback' 	=> 'esc_attr',
	) );
			$wp_customize->add_control('sdc_customizer_primary_menu_font_size', array(
				'type' => 'text',
				'label' => esc_html__('Primary Menu Font Size (px)','storefront-design-customizer'),
				'section' => 'sdc_header_customizer_navigation_section',
				'settings' => 'sdc_customizer_primary_menu_font_size',
				'priority'   => 7,
			) );


/*--------------------------------------------------------------
## Secondary Navigation
--------------------------------------------------------------*/

	// Secondary Navigation Title
	$wp_customize->add_setting( 'sdc_header_customizer_navigation_secondary_ui_title',
		array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_header_customizer_navigation_secondary_ui_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Secondary Navigation','storefront-design-customizer'),
					'section' => 'sdc_header_customizer_navigation_section',
					'settings'    => 'sdc_header_customizer_navigation_secondary_ui_title',
					'priority'   => 10,
			)) );


	// Secondary Navigation
	$wp_customize->get_control( 'storefront_header_text_color' )->label  	= esc_html__('Secondary Menu Color','storefront-design-customizer' );
	$wp_customize->get_control( 'storefront_header_text_color' )->section  	= 'sdc_header_customizer_navigation_section';
	$wp_customize->get_control( 'storefront_header_text_color' )->priority  = 11;


	// Secondary Navigation Hover Color
	$wp_customize->add_setting( 'sdc_customizer_secondary_menu_hover_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_secondary_menu_hover_color', array(
				'label'	   				=> __( 'Secondary Menu Hover Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_secondary_menu_hover_color',
				'priority' 				=> 12,
			) ) );


	// Secondary Navigation Active Menu Color
	$wp_customize->add_setting( 'sdc_customizer_secondary_menu_active_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_secondary_menu_active_color', array(
				'label'	   				=> __( 'Secondary Menu Active Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_secondary_menu_active_color',
				'priority' 				=> 13,
			) ) );


	// Secondary Navigation Dropdown Background Color
	$wp_customize->add_setting( 'sdc_customizer_secondary_menu_drop_backcolor', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_secondary_menu_drop_backcolor', array(
				'label'	   				=> __( 'Secondary Menu Dropdown Background Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_secondary_menu_drop_backcolor',
				'priority' 				=> 14,
			) ) );

	// Secondary Navigation Dropdown Color
	$wp_customize->add_setting( 'sdc_customizer_secondary_menu_drop_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_customizer_secondary_menu_drop_color', array(
				'label'	   				=> __( 'Secondary Menu Dropdown Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_header_customizer_navigation_section',
				'settings' 				=> 'sdc_customizer_secondary_menu_drop_color',
				'priority' 				=> 15,
			) ) );


	$wp_customize->add_setting('sdc_customizer_secondary_menu_font_size', array(
		'default' => '16px',
		'transport' => 'postMessage',
		'sanitize_callback' 	=> 'esc_attr',
	) );
			$wp_customize->add_control('sdc_customizer_secondary_menu_font_size', array(
				'type' => 'text',
				'label' => esc_html__('Secondary Menu Font Size (px)','storefront-design-customizer'),
				'section' => 'sdc_header_customizer_navigation_section',
				'settings' => 'sdc_customizer_secondary_menu_font_size',
				'priority'   => 16,
			) );

/*--------------------------------------------------------------
## Footer Layout
--------------------------------------------------------------*/

$wp_customize->get_section('storefront_footer')->panel 				= 'sdc_footer_customizer_panel';
$wp_customize->get_control( 'storefront_footer_background_color' )->section  	= 'sdc_footer_customizer_section_layout';
$wp_customize->get_control( 'storefront_footer_heading_color' )->section  	= 'sdc_footer_customizer_section_layout';
$wp_customize->get_control( 'storefront_footer_text_color' )->section  	= 'sdc_footer_customizer_section_layout';
$wp_customize->get_control( 'storefront_footer_link_color' )->section  	= 'sdc_footer_customizer_section_layout';

	$wp_customize->add_setting( 'sdc_footer_customizer_footer_text', array(
        'default'           => "Custom Footer Text"
    ));

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdc_footer_customizer_footer_text',
	            array(
	                'label'      => __( 'Footer Credit Text', 'storefront-design-customizer' ),
					'description' => __( 'Enter your Credit Texts here.', 'storefront-design-customizer' ),
	                'section'    => 'sdc_footer_customizer_section_layout',
	                'settings'   => 'sdc_footer_customizer_footer_text',
	                'type'		 => 'textarea',
					'priority'      => 45,
	                )
	            )
	        );


	//Footer Background Image
	$wp_customize->add_setting('sdc_footer_customizer_background_image', array(
		'default'         => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	) );

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sdc_footer_customizer_background_image',array(
               'label'      => esc_html__( 'Footer Background Image', 'storefront-design-customizer' ),
               'section'    => 'sdc_footer_customizer_section_layout',
               'settings'   => 'sdc_footer_customizer_background_image',
               'priority'   => 32,
			   )
			));

	// Display Social Icons
	$wp_customize->add_setting('sdc_footer_display_social', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_footer_display_social', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Social on Footer','storefront-design-customizer'),
				'section' => 'sdc_footer_customizer_section_layout',
				'settings' => 'sdc_footer_display_social',
				'priority'   => 55,
			) );

/*--------------------------------------------------------------
## 1. Select Fonts
--------------------------------------------------------------*/
	$wp_customize->add_setting( 'typography_ui_title_font',
		array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'typography_ui_title_font', array(
					'type' => 'info',
					'label' => esc_html__( 'Select Fonts','storefront-design-customizer'),
					'section' => 'storefront_typography',
					'settings'    => 'typography_ui_title_font',
					'priority'   => 1,
			)) );

/*--------------------------------------------------------------
## 1.1 Google Font Pair
--------------------------------------------------------------*/

	// Choose Font Pair
    $wp_customize->add_setting( 'sdc_preset_font', array (
        'default'               => 'sinssp',
        'transport'             => 'refresh',
    ) );

	    $wp_customize->add_control( 'sdc_preset_font', array(
	        'type'                  => 'select',
	        'section'               => 'storefront_typography',
	        'settings'    			=> 'sdc_preset_font',
	        'label'                 => esc_html__( 'Font Pairings', 'storefront-design-customizer' ),
	        'description'           => __( '<b>First Font</b> - All the titles or heading text</br><b>Second Font</b> - Site wide body text', 'storefront-design-customizer' ),
	        'choices'               => sdc_font_preset(),
	        'priority' => 2,
	    ) );



/*--------------------------------------------------------------
## 2.3 Type Scale
--------------------------------------------------------------*/

	$wp_customize->add_setting('sdc_body_font_size', array(
		'default' => '16px',
		'transport' => 'postMessage',
		'sanitize_callback' 	=> 'esc_attr',
	) );
			$wp_customize->add_control('sdc_body_font_size', array(
				'type' => 'text',
				'label' => esc_html__('Body Font Size (px)','storefront-design-customizer'),
				'section' => 'storefront_typography',
				'settings' => 'sdc_body_font_size',
				'priority'   => 3,
			) );


	$wp_customize->add_setting('sdc_menu_font_size', array(
		'default' => '18px',
		'transport' => 'postMessage',
		'sanitize_callback' 	=> 'esc_attr',
	) );
			$wp_customize->add_control('sdc_menu_font_size', array(
				'type' => 'text',
				'label' => esc_html__('Menu Font Size (px)','storefront-design-customizer'),
				'section' => 'storefront_typography',
				'settings' => 'sdc_menu_font_size',
				'priority'   => 4,
			) );


/*--------------------------------------------------------------
## 3. Font Weight
--------------------------------------------------------------*/

/*--------------------------------------------------------------
## 3.1 Title Weight
--------------------------------------------------------------*/
	$wp_customize->add_setting( 'sdc_title_weight' ,
		array(
			'default' 			=> 'bold',
			'transport' 		=> 'postMessage',
		)
	);

		$wp_customize->add_control( 'sdc_title_weight',
			array(
				'label'      	=> esc_html__( 'Title Font Weight', 'storefront-design-customizer' ),
				'section'    	=> 'storefront_typography',
				'settings'   	=> 'sdc_title_weight',
				'sanitize_callback' => 'esc_attr',
			    'priority'   	=> 8,
			    'type'       	=> 'select',
					'choices'   => array(
							'100'   	=> esc_html__( '100', 'storefront-design-customizer' ),
							'200'  		=> esc_html__( '200', 'storefront-design-customizer' ),
							'300'		=> esc_html__( '300', 'storefront-design-customizer' ),
							'400'   	=> esc_html__( '400', 'storefront-design-customizer' ),
							'500'  		=> esc_html__( '500', 'storefront-design-customizer' ),
							'600'		=> esc_html__( '600', 'storefront-design-customizer' ),
							'700'   	=> esc_html__( '700', 'storefront-design-customizer' ),
							'800'  		=> esc_html__( '800', 'storefront-design-customizer' ),
							'900'		=> esc_html__( '900', 'storefront-design-customizer' ),
							'lighter'	=> esc_html__( 'Lighter', 'storefront-design-customizer' ),
							'normal'   	=> esc_html__( 'Normal', 'storefront-design-customizer' ),
							'bold'  	=> esc_html__( 'Bold', 'storefront-design-customizer' ),
							'bolder'	=> esc_html__( 'Bolder', 'storefront-design-customizer' ),
					),
			)
		);

/*--------------------------------------------------------------
## 3.2 Body Weight
--------------------------------------------------------------*/
	$wp_customize->add_setting( 'sdc_body_weight' ,
		array(
			'default' 			=> 'normal',
			'transport' 		=> 'postMessage',
		)
	);

		$wp_customize->add_control( 'sdc_body_weight',
			array(
				'label'      	=> esc_html__( 'Body Font Weight', 'storefront-design-customizer' ),
				'section'    	=> 'storefront_typography',
				'settings'   	=> 'sdc_body_weight',
				'sanitize_callback' => 'esc_attr',
			    'priority'   	=> 9,
			    'type'       	=> 'select',
					'choices'   => array(
							'100'   	=> esc_html__( '100', 'storefront-design-customizer' ),
							'200'  		=> esc_html__( '200', 'storefront-design-customizer' ),
							'300'		=> esc_html__( '300', 'storefront-design-customizer' ),
							'400'   	=> esc_html__( '400', 'storefront-design-customizer' ),
							'500'  		=> esc_html__( '500', 'storefront-design-customizer' ),
							'600'		=> esc_html__( '600', 'storefront-design-customizer' ),
							'700'   	=> esc_html__( '700', 'storefront-design-customizer' ),
							'800'  		=> esc_html__( '800', 'storefront-design-customizer' ),
							'900'		=> esc_html__( '900', 'storefront-design-customizer' ),
							'lighter'	=> esc_html__( 'Lighter', 'storefront-design-customizer' ),
							'normal'   	=> esc_html__( 'Normal', 'storefront-design-customizer' ),
							'bold'  	=> esc_html__( 'Bold', 'storefront-design-customizer' ),
							'bolder'	=> esc_html__( 'Bolder', 'storefront-design-customizer' ),
					),
			)
		);

/*--------------------------------------------------------------
## 4. Font Color
--------------------------------------------------------------*/
	$wp_customize->add_setting( 'typography_ui_title_font_color',array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'typography_ui_title_font_color', array(
					'type' => 'info',
					'label' => esc_html__( 'Font Color','storefront-design-customizer'),
					'section' => 'storefront_typography',
					'settings'    => 'typography_ui_title_font_color',
					'priority'   => 10,
			)) );

/*--------------------------------------------------------------
## 4.1 Menu Color
--------------------------------------------------------------*/
	$wp_customize->add_setting( 'storefront_heading_menu_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'storefront_heading_menu_color', array(
				'label'	   				=> __( 'Header Menu Color', 'storefront-design-customizer' ),
				'section'  				=> 'storefront_typography',
				'settings' 				=> 'storefront_heading_menu_color',
				'priority' 				=> 14,
			) ) );



/*--------------------------------------------------------------
## 5.1 Post Archives
--------------------------------------------------------------*/

	// Posts Archive Layout
	$wp_customize->add_setting( 'sdc_layout_post_archive' ,
		array(
			'default' => 2,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);


		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_layout_post_archive', array(
				'settings'		=> 'sdc_layout_post_archive',
				'section'		=> 'sdc_blog_customizer_archive_section',
				'label'			=> esc_html__( 'Posts Archive Layout', 'storefront-design-customizer' ),
				'priority'		=> 1,
				'choices'		=> array(
										1 => plugins_url( '/../assets/images/customizer/blog-one.png', __DIR__ ),
										2 => plugins_url( '/../assets/images/customizer/blog-two.png', __DIR__ ),
				),
		) ) );


	// Posts Archive Column
	$wp_customize->add_setting( 'sdc_column_post_archive' ,
		array(
			'default' => 1,
			'transport' => 'refresh',
			'sanitize_callback' 	=> 'absint',
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_column_post_archive', array(
				'label'      => esc_html__( 'Posts Column', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display Blocks in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'sdc_blog_customizer_archive_section',
				'settings'   => 'sdc_column_post_archive',
			    'priority'   => 1,
			    'type'       => 'select',
				'choices'    => array(
					1  => plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					4   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
				),
			)
		));

/*--------------------------------------------------------------
## Display Post Components
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'post_archive_ui_title_component',
		array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'post_archive_ui_title_component', array(
					'type' => 'info',
					'label' => esc_html__( 'Post Archive Elements','storefront-design-customizer'),
					'section' => 'sdc_blog_customizer_archive_section',
					'settings'    => 'post_archive_ui_title_component',
					'priority'   => 10,
			)) );

	// Display Post Archive Excerpt
	$wp_customize->add_setting('sdc_post_archive_display_excerpt', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_archive_display_excerpt', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Post Excerpt','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_archive_section',
				'settings' => 'sdc_post_archive_display_excerpt',
				'priority'   => 11,
			) );

	// Display Post Author
	$wp_customize->add_setting('sdc_post_archive_display_author', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_archive_display_author', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Post Author','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_archive_section',
				'settings' => 'sdc_post_archive_display_author',
				'priority'   => 12,
			) );

	// Display Card Layout
	$wp_customize->add_setting('sdc_post_archive_display_card', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_archive_display_card', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Card Layout','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_archive_section',
				'settings' => 'sdc_post_archive_display_card',
				'priority'   => 13,
			) );


	$wp_customize->add_setting( 'sdc_post_archive_card_color', array(
			'default'           	=> '#ffffff',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_post_archive_card_color', array(
				'label'	   				=> __( 'Post Card Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_blog_customizer_archive_section',
				'settings' 				=> 'sdc_post_archive_card_color',
				'priority' 				=> 14,
			) ) );

/*--------------------------------------------------------------
## 4.1 Post Heading Color
--------------------------------------------------------------*/
	$wp_customize->add_setting( 'sdc_post_archive_heading_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_post_archive_heading_color', array(
				'label'	   				=> __( 'Post Heading Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_blog_customizer_archive_section',
				'settings' 				=> 'sdc_post_archive_heading_color',
				'priority' 				=> 20,
			) ) );

	// Excerpt Length
	$wp_customize->add_setting('sdc_post_archive_excepth_length', array(
		'default' => 20,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_archive_excepth_length', array(
				'type' => 'text',
				'label' => esc_html__('Excepth length in words','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_archive_section',
				'settings' => 'sdc_post_archive_excepth_length',
				'priority'   => 21,
			) );

/*--------------------------------------------------------------
## 5.1 Single Post
--------------------------------------------------------------*/



	// Posts Archive Layout
	$wp_customize->add_setting( 'sdc_blog_customizer_single_layout' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);


		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_blog_customizer_single_layout', array(
				'settings'		=> 'sdc_blog_customizer_single_layout',
				'section'		=> 'sdc_blog_customizer_single_section',
				'label'			=> esc_html__( 'Single Post Layout', 'storefront-design-customizer' ),
				'priority'		=> 1,
				'choices'		=> array(
										1 => plugins_url( '/../assets/images/customizer/product-default.png', __DIR__ ),
										2 => plugins_url( '/../assets/images/customizer/blog-one.png', __DIR__ ),
										3 => plugins_url( '/../assets/images/customizer/blog-two.png', __DIR__ ),

				),
		) ) );


	// Display Card Layout
	$wp_customize->add_setting('sdc_post_customizer_display_card', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_customizer_display_card', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Card Layout','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_single_section',
				'settings' => 'sdc_post_customizer_display_card',
				'priority'   => 13,
			) );

	// Display Categories
	$wp_customize->add_setting('sdc_post_customizer_display_cat', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_customizer_display_cat', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Categories','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_single_section',
				'settings' => 'sdc_post_customizer_display_cat',
				'priority'   => 13,
			) );

	// Display Tags
	$wp_customize->add_setting('sdc_post_customizer_display_tag', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_customizer_display_tag', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Tags','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_single_section',
				'settings' => 'sdc_post_customizer_display_tag',
				'priority'   => 13,
			) );

	// Display Date
	$wp_customize->add_setting('sdc_post_customizer_display_date', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_customizer_display_date', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Date','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_single_section',
				'settings' => 'sdc_post_customizer_display_date',
				'priority'   => 13,
			) );

	// Display Author
	$wp_customize->add_setting('sdc_post_customizer_display_author', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_customizer_display_author', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Author','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_single_section',
				'settings' => 'sdc_post_customizer_display_author',
				'priority'   => 13,
			) );

	// Display Post Navigation
	$wp_customize->add_setting('sdc_post_customizer_display_navigation', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_customizer_display_navigation', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Post Navigation','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_single_section',
				'settings' => 'sdc_post_customizer_display_navigation',
				'priority'   => 13,
			) );

	// Display Comments
	$wp_customize->add_setting('sdc_post_customizer_display_comment', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_customizer_display_comment', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Comments','storefront-design-customizer'),
				'section' => 'sdc_blog_customizer_single_section',
				'settings' => 'sdc_post_customizer_display_comment',
				'priority'   => 13,
			) );