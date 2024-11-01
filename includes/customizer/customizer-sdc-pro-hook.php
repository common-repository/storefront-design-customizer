<?php

/*--------------------------------------------------------------
## SDC Pro Description
--------------------------------------------------------------*/

$sdc_frontpage_block_pro_description 				= esc_html__( '2 more block layouts & ability to set block section background color & image.', 'storefront-design-customizer' );
$sdc_frontpage_categories_pro_description 			= esc_html__( 'Width Control, Section background color & image.', 'storefront-design-customizer' );

$sdc_frontpage_section_pro_conversion 				= sprintf( __( 'Unlock More Homepage Sections</br>
																			<ul class="bellini__pro--features">
																				<li>Slider Section</li>
																				<li>Featured Product Slider</li>
																				<li>Product Sub-categories</li>
																			</ul>
																			<a target="_blank" href="%s" class="bellini__pro--features--button">Upgrade To Pro</a>- 30-day money back guarantee', 'storefront-design-customizer' ), esc_url( 'https://atlantisthemes.com/storefront-design-customizer/' ));


$sdc__pro_more 										= sprintf( __( 'Unlock for greater flexibility</br>
																			<ul class="bellini__pro--features">
																				<li>Homepage Sections</li>
																				<li>Typogaphy Options</li>
																				<li>More Post Layouts & Options</li>
																				<li>WooCommerce - Shop Page Layout</li>
																				<li>WooCommerce - Product Page Layout</li>
																				<li>Footer Options</li>
																				<li>Many more</li>
																			</ul>
																			<a target="_blank" href="%s" class="bellini__pro--features--button">Upgrade To Pro</a>- 30-day money back guarantee', 'storefront-design-customizer' ), esc_url( 'https://atlantisthemes.com/storefront-design-customizer/' ));
/*--------------------------------------------------------------
## Frontpage Sections
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'sdc_pro_frontpage_block_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_block_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_block_pro_description,
					'section' => 'sdc_frontpage_section_blocks',
					'settings'    => 'sdc_pro_frontpage_block_description',
					'priority'   => 90,
			)) );

	$wp_customize->add_setting( 'sdc_pro_frontpage_categories_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_categories_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_categories_pro_description,
					'section' => 'storefront_frontpage_section_product_cat',
					'settings'    => 'sdc_pro_frontpage_categories_description',
					'priority'   => 90,
			)) );

	$wp_customize->add_setting( 'sdc_pro_frontpage_recent_products_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_recent_products_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_categories_pro_description,
					'section' => 'storefront_frontpage_section_product_recent',
					'settings'    => 'sdc_pro_frontpage_recent_products_description',
					'priority'   => 90,
			)) );

	$wp_customize->add_setting( 'sdc_pro_frontpage_featured_products_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_featured_products_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_categories_pro_description,
					'section' => 'storefront_frontpage_section_product_featured',
					'settings'    => 'sdc_pro_frontpage_featured_products_description',
					'priority'   => 90,
			)) );

	$wp_customize->add_setting( 'sdc_pro_frontpage_popular_products_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_popular_products_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_categories_pro_description,
					'section' => 'storefront_frontpage_section_product_popular',
					'settings'    => 'sdc_pro_frontpage_popular_products_description',
					'priority'   => 90,
			)) );

	$wp_customize->add_setting( 'sdc_pro_frontpage_sale_products_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_sale_products_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_categories_pro_description,
					'section' => 'storefront_frontpage_section_product_sale',
					'settings'    => 'sdc_pro_frontpage_sale_products_description',
					'priority'   => 90,
			)) );

	$wp_customize->add_setting( 'sdc_pro_frontpage_best_products_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_best_products_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_categories_pro_description,
					'section' => 'storefront_frontpage_section_product_best',
					'settings'    => 'sdc_pro_frontpage_best_products_description',
					'priority'   => 90,
			)) );


	$wp_customize->add_setting( 'sdc_pro_frontpage_posts_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_posts_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_categories_pro_description,
					'section' => 'sdc_frontpage_section_blog_post',
					'settings'    => 'sdc_pro_frontpage_posts_description',
					'priority'   => 90,
			)) );


	$wp_customize->add_setting( 'sdc_pro_frontpage_posts_description',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_frontpage_posts_description', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc_frontpage_section_pro_conversion,
					'section' => 'sdc_frontpage_more_section',
					'settings'    => 'sdc_pro_frontpage_posts_description',
					'priority'   => 90,
			)) );


	$wp_customize->add_setting( 'sdc_pro_more_options',
		array(
			'sanitize_callback' => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_Pro_Conversion ( $wp_customize, 'sdc_pro_more_options', array(
					'type' => 'info',
					'label' => esc_html__('You are missing out on','storefront-design-customizer'),
					'description' => $sdc__pro_more,
					'section' => 'storefront_more',
					'settings'    => 'sdc_pro_more_options',
					'priority'   => 90,
			)) );