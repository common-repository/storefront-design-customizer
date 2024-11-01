<?php

/*--------------------------------------------------------------
## 1.0 Panels
--------------------------------------------------------------*/

// Frontpage Panel
$wp_customize->add_panel( 'sdc_frontpage_panel', array(
	'priority'       => 2,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Homepage Sections','storefront-design-customizer' ),
	'description'    => esc_html__( 'Your frontpage elements','storefront-design-customizer' ),
) );

// General Styles
$wp_customize->add_panel( 'sdc_general_customizer_panel', array(
	'priority'       => 3,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'General Styles','storefront-design-customizer' ),
	'description'    => esc_html__( 'Your header elements','storefront-design-customizer' ),
) );

// Header
$wp_customize->add_panel( 'sdc_header_customizer_panel', array(
	'priority'       => 4,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Header','storefront-design-customizer' ),
	'description'    => esc_html__( 'Your header elements','storefront-design-customizer' ),
) );

// Post Archives Section
$wp_customize->add_panel( 'sdc_blog_customizer_panel', array(
	'priority'       => 5,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Blog Customizer','storefront-design-customizer' ),
	'description'    => esc_html__( 'Your frontpage elements','storefront-design-customizer' ),
) );

// Footer
$wp_customize->add_panel( 'sdc_footer_customizer_panel', array(
	'priority'       => 7,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Footer','storefront-design-customizer' ),
	'description'    => esc_html__( 'Your footer elements','storefront-design-customizer' ),
) );

// WooCommerce Panel
$wp_customize->add_panel( 'sdc_customizer_panel', array(
	'priority'       => 6,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'WooCommerce','storefront-design-customizer' ),
) );

/*--------------------------------------------------------------
## 2.0 Sections
--------------------------------------------------------------*/

/*--------------------------------------------------------------
## 2.1 Homepage Sections
--------------------------------------------------------------*/

	// Homepage Settings
	$wp_customize->add_section('sdc_frontpage_section_settings',array(
			'title' 			=> esc_html__( 'Homepage Settings', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 1,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);


	// Front Page Feature Blocks
	$wp_customize->add_section('sdc_frontpage_section_blocks',array(
			'title' 			=> esc_html__( 'Feature Blocks', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 5,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);


	$wp_customize->add_section('storefront_frontpage_section_product_cat',array(
			'title' 			=> esc_html__( 'Storefront Product Categories', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 6,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);

	$wp_customize->add_section('storefront_frontpage_section_product_recent',array(
			'title' 			=> esc_html__( 'Storefront Recent Products', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 7,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);

	$wp_customize->add_section('storefront_frontpage_section_product_featured',array(
			'title' 			=> esc_html__( 'Storefront Featured Products', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 8,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);

	$wp_customize->add_section('storefront_frontpage_section_product_popular',array(
			'title' 			=> esc_html__( 'Storefront Popular Products', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 9,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);

	$wp_customize->add_section('storefront_frontpage_section_product_sale',array(
			'title' 			=> esc_html__( 'Storefront On Sale Products', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 10,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);


	$wp_customize->add_section('storefront_frontpage_section_product_best',array(
			'title' 			=> esc_html__( 'Storefront Best Selling Products', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 11,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);

	// Frontpage Product Categories
	$wp_customize->add_section('sdc_frontpage_section_blog_post',array(
			'title' 			=> esc_html__( 'Home Page Posts', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 13,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);

	// More Homepage Sections
	$wp_customize->add_section('sdc_frontpage_more_section',array(
			'title' 			=> esc_html__( 'More Homepage Sections', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 20,
			'panel' 			=> 'sdc_frontpage_panel',
		)
	);


/*--------------------------------------------------------------
## 1.0 WooCommerce Section
--------------------------------------------------------------*/

	$wp_customize->add_section( 'sdc_woocommerce_product_listing', array(
		'priority'       => 9,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Shop page - Product Listings','storefront-design-customizer' ),
		'panel'     	 => 'sdc_customizer_panel',
	) );

	$wp_customize->add_section( 'sdc_woocommerce_product_detail', array(
		'priority'       => 9,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Single Product - Product Details','storefront-design-customizer' ),
		'panel'     	 => 'sdc_customizer_panel',
	) );

	$wp_customize->add_section( 'sdc_woocommerce_product_category', array(
		'priority'       => 9,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Product Category','storefront-design-customizer' ),
		'panel'     	 => 'sdc_customizer_panel',
	) );

	$wp_customize->add_section( 'sdc_woocommerce_product_misc', array(
		'priority'       => 9,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Rating, Sale Badge & Others','storefront-design-customizer' ),
		'panel'     	 => 'sdc_customizer_panel',
	) );

	$wp_customize->add_section( 'sdc_woocommerce_sidebar', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'WooCommerce Sidebar','storefront-design-customizer' ),
		'panel'     	 => 'sdc_customizer_panel',
	) );

/*--------------------------------------------------------------
## 5. Blog Customizer
--------------------------------------------------------------*/

	// Post Archives Section
	$wp_customize->add_section('sdc_blog_customizer_archive_section',array(
			'title' 			=> esc_html__( 'Post Archives', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 1,
			'panel' 			=> 'sdc_blog_customizer_panel',
		)
	);

	// Single Post Section
	$wp_customize->add_section('sdc_blog_customizer_single_section',array(
			'title' 			=> esc_html__( 'Single Post', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 1,
			'panel' 			=> 'sdc_blog_customizer_panel',
		)
	);

	$wp_customize->add_section('sdc_container_width_section',array(
			'title' 			=> esc_html__( 'Container Width', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 10,
			'panel' 			=> 'sdc_general_customizer_panel',
		)
	);

	$wp_customize->add_section('sdc_header_customizer_navigation_section',array(
			'title' 			=> esc_html__( 'Navigation', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 10,
			'panel' 			=> 'sdc_header_customizer_panel',
		)
	);

	// Post Archives Section
	$wp_customize->add_section('sdc_footer_customizer_section_layout',array(
			'title' 			=> esc_html__( 'Footer Layout', 'storefront-design-customizer' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 1,
			'panel' 			=> 'sdc_footer_customizer_panel',
		)
	);