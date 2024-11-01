<?php
/*--------------------------------------------------------------
## 2.0 Product Category Customization
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'woo_product_category_layout' ,
		array(
			'default' => 1,
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( 'woo_product_category_layout',array(
				'label'      => esc_html__( 'Product Category Layout', 'storefront-design-customizer' ),
				'section'    => 'sdc_woocommerce_product_category',
				'settings'   => 'woo_product_category_layout',
			    'priority'   => 10,
			    'type'       => 'radio',
				'choices'    => array(
					1   => esc_html__( 'Layout 1', 'storefront-design-customizer' ),
					2   => esc_html__( 'Layout 2', 'storefront-design-customizer' ),
					3   => esc_html__( 'Layout 3', 'storefront-design-customizer' ),
				),
			)
		);

	// Product per column
	$wp_customize->add_setting( 'woo_product_category_column' ,
		array(
			'default' => 'col-md-4',
			'transport' => 'refresh',
			'sanitize_callback' 	=> 'sanitize_html_class',
		)
	);

		$wp_customize->add_control( 'woo_product_category_column',array(
				'label'      => esc_html__( 'Categories Per Row', 'storefront-design-customizer' ),
				'section'    => 'sdc_woocommerce_product_category',
				'settings'   => 'woo_product_category_column',
			    'priority'   => 22,
			    'type'       => 'select',
				'choices'    => array(
					'col-md-12'   	=> esc_html__( '1 Category', 'storefront-design-customizer' ),
					'col-md-6'  	=> esc_html__( '2 Categories', 'storefront-design-customizer' ),
					'col-md-4'  	=> esc_html__( '3 Categories', 'storefront-design-customizer' ),
					'col-md-3'   	=> esc_html__( '4 Categories', 'storefront-design-customizer' ),
				),
			)
		);

/*--------------------------------------------------------------
## 3.0 Product Listing Customization
--------------------------------------------------------------*/

/*--------------------------------------------------------------
## 3.1 Shop Product layout
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'sdc_woo_product_listing_layout_ui_title',array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_woo_product_listing_layout_ui_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Product Layout','storefront-design-customizer'),
					'section' => 'sdc_woocommerce_product_listing',
					'settings'    => 'sdc_woo_product_listing_layout_ui_title',
					'priority'   => 20,
			)) );



	// Product per column
	$wp_customize->add_setting( 'sdc_woo_shop_product_layout' ,
		array(
			'default' => 1,
			'transport' => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_woo_shop_product_layout', array(
				'label'      => esc_html__( 'Products Archive Layout', 'storefront-design-customizer' ),
				'description' => esc_html__('Layout for Shop & Archive pages','storefront-design-customizer'),
				'section'    => 'sdc_woocommerce_product_listing',
				'settings'   => 'sdc_woo_shop_product_layout',
			    'priority'   => 21,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/product-default.png', __DIR__ ),
					2  	=> plugins_url( '/../assets/images/customizer/product-one.png', __DIR__ ),
				),
			)
		));


	// Product per column
	$wp_customize->add_setting( 'sdc_woo_listing_product_column' ,
		array(
			'default' => 3,
			'transport' => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_woo_listing_product_column', array(
				'label'      => esc_html__( 'Products Per Row', 'storefront-design-customizer' ),
				'section'    => 'sdc_woocommerce_product_listing',
				'settings'   => 'sdc_woo_listing_product_column',
			    'priority'   => 22,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					4  	=> plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
				),
			)
		));


	// Products Content Alignment
	$wp_customize->add_setting( 'sdc_woo_listing_product_content_alignment' ,
		array(
			'default' => 'left',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control('sdc_woo_listing_product_content_alignment', array(
				'label'      => esc_html__( 'Content Alignment', 'storefront-design-customizer' ),
				'section'    => 'sdc_woocommerce_product_listing',
				'settings'   => 'sdc_woo_listing_product_content_alignment',
			    'priority'   => 25,
			    'type'       => 'select',
				'choices'    => array(
					'left'   => esc_html__( 'Left', 'storefront-design-customizer' ),
					'center'   => esc_html__( 'Center', 'storefront-design-customizer' ),
					'right'   => esc_html__( 'Right', 'storefront-design-customizer' ),
				),
		));

/*--------------------------------------------------------------
## 3.2 Shop Product Details
--------------------------------------------------------------*/

	// Display Description
	$wp_customize->add_setting('sdc_woo_listing_display_archive_desc', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_listing_display_archive_desc', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display description','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_listing',
				'settings' => 'sdc_woo_listing_display_archive_desc',
				'priority'   => 31,
			) );

	// Display Product Sorting
	$wp_customize->add_setting('sdc_woo_listing_display_product_sorting', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_listing_display_product_sorting', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Product Sorting','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_listing',
				'settings' => 'sdc_woo_listing_display_product_sorting',
				'priority'   => 32,
			) );

	// Display Product Result Count
	$wp_customize->add_setting('sdc_woo_listing_display_product_count', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_listing_display_product_count', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Product Result','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_listing',
				'settings' => 'sdc_woo_listing_display_product_count',
				'priority'   => 33,
			) );

	// Display Sale Badge
	$wp_customize->add_setting('sdc_woo_listing_display_sale_badge', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_listing_display_sale_badge', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Sale Badge','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_listing',
				'settings' => 'sdc_woo_listing_display_sale_badge',
				'priority'   => 34,
			) );

	// Display Single Title
	$wp_customize->add_setting('sdc_woo_listing_display_title', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_listing_display_title', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Product Title','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_listing',
				'settings' => 'sdc_woo_listing_display_title',
				'priority'   => 35,
			) );

	// Display Single Price
	$wp_customize->add_setting('sdc_woo_listing_display_price', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_listing_display_price', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Price','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_listing',
				'settings' => 'sdc_woo_listing_display_price',
				'priority'   => 36,
			) );

	// Display Single Rating
	$wp_customize->add_setting('sdc_woo_listing_display_rating', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_listing_display_rating', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Ratings','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_listing',
				'settings' => 'sdc_woo_listing_display_rating',
				'priority'   => 37,
			) );

	// Display Single Add To Cart
	$wp_customize->add_setting('sdc_woo_listing_display_add_to_cart', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_listing_display_add_to_cart', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Add To Cart Button','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_listing',
				'settings' => 'sdc_woo_listing_display_add_to_cart',
				'priority'   => 38,
			) );

/*--------------------------------------------------------------
## 3.3 Shop Product Color
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'sdc_woo_product_listing_color_ui_title',array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_woo_product_listing_color_ui_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Color & Font Size','storefront-design-customizer'),
					'section' => 'sdc_woocommerce_product_listing',
					'settings'    => 'sdc_woo_product_listing_color_ui_title',
					'priority'   => 40,
			)) );


	$wp_customize->add_setting( 'sdc_woo_listing_product_title_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_listing_product_title_color', array(
				'label'	   				=> __( 'Product Title Color', 'storefront' ),
				'section'  				=> 'sdc_woocommerce_product_listing',
				'settings' 				=> 'sdc_woo_listing_product_title_color',
				'priority' 				=> 41,
			) ) );

/*--------------------------------------------------------------
## 4.0 Single Product
--------------------------------------------------------------*/

/*--------------------------------------------------------------
## 4.1 Single Product Layout
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'sdc_woo_single_product_layout_ui_title',array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_woo_single_product_layout_ui_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Layout','storefront-design-customizer'),
					'section' => 'sdc_woocommerce_product_detail',
					'settings'    => 'sdc_woo_single_product_layout_ui_title',
					'priority'   => 10,
			)) );

	$wp_customize->add_setting( 'sdc_woo_single_product_layout' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_woo_single_product_layout', array(
				'label'      => esc_html__( 'Single Product Layout', 'storefront-design-customizer' ),
				'description' => esc_html__('Applies to Single Product Page','storefront-design-customizer'),
				'section'    => 'sdc_woocommerce_product_detail',
				'settings'   => 'sdc_woo_single_product_layout',
			    'priority'   => 11,
			    'type'       => 'select',
				'choices'    => array(
					1   => plugins_url( '/../assets/images/customizer/header-default.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/single-product-one.png', __DIR__ ),
				),
			)
		));

	$wp_customize->add_setting( 'sdc_woo_single_product_title_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_single_product_title_color', array(
				'label'	   				=> __( 'Product Title Color', 'storefront' ),
				'section'  				=> 'sdc_woocommerce_product_detail',
				'settings' 				=> 'sdc_woo_single_product_title_color',
				'priority' 				=> 12,
			) ) );


	$wp_customize->add_setting( 'sdc_woo_single_product_desc_color', array(
			'default'           	=> '#484c51',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_single_product_desc_color', array(
				'label'	   				=> __( 'Product Description Color', 'storefront' ),
				'section'  				=> 'sdc_woocommerce_product_detail',
				'settings' 				=> 'sdc_woo_single_product_desc_color',
				'priority' 				=> 13,
			) ) );

/*--------------------------------------------------------------
## 4.3 Product Data Tabs
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'sdc_woo_single_product_tabs_ui_title',array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_woo_single_product_tabs_ui_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Product Data Tabs','storefront-design-customizer'),
					'section' => 'sdc_woocommerce_product_detail',
					'settings'    => 'sdc_woo_single_product_tabs_ui_title',
					'priority'   => 30,
			)) );



	// Display Single Data Tabs
	$wp_customize->add_setting('sdc_woo_single_customizer_display_tabs', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_single_customizer_display_tabs', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Data Tabs','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_detail',
				'settings' => 'sdc_woo_single_customizer_display_tabs',
				'priority'   => 31,
			) );


	$wp_customize->add_setting( 'sdc_woo_single_data_tab_layout' ,
		array(
			'default' 			=> 2,
			'sanitize_callback' => 'absint',
			'transport' 		=> 'refresh',
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_woo_single_data_tab_layout', array(
				'label'      	=> esc_html__( 'Tab Layout', 'storefront-design-customizer' ),
				'section'    	=> 'sdc_woocommerce_product_detail',
				'settings'   	=> 'sdc_woo_single_data_tab_layout',
			    'priority'   	=> 32,
			    'type'       	=> 'select',
					'choices'   => array(
							1   	=> plugins_url( '/../assets/images/customizer/tab-one.png', __DIR__ ),
							2 		=> plugins_url( '/../assets/images/customizer/tab-two.png', __DIR__ ),
					),
			)));

	$wp_customize->add_setting( 'sdc_woo_single_data_tab_color', array(
			'default'           	=> '#eeeeee',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_single_data_tab_color', array(
				'label'	   				=> __( 'Data Tabs Color', 'storefront' ),
				'section'  				=> 'sdc_woocommerce_product_detail',
				'settings' 				=> 'sdc_woo_single_data_tab_color',
				'priority' 				=> 33,
			) ) );

/*--------------------------------------------------------------
## 4.4 Related & Upsell Products
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'sdc_woo_single_product_upsell_ui_title',array(
			'default'    => true,
		)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_woo_single_product_upsell_ui_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Related & Upsell Products','storefront-design-customizer'),
					'section' => 'sdc_woocommerce_product_detail',
					'settings'    => 'sdc_woo_single_product_upsell_ui_title',
					'priority'   => 40,
			)) );



	// Display Single Data Tabs
	$wp_customize->add_setting('sdc_woo_single_customizer_display_upsell', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_single_customizer_display_upsell', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Upsell Products','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_detail',
				'settings' => 'sdc_woo_single_customizer_display_upsell',
				'priority'   => 41,
			) );

	// Display Related Products
	$wp_customize->add_setting('sdc_woo_single_customizer_display_related', array(
		'default' => true,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_woo_single_customizer_display_related', array(
				'type' => 'checkbox',
				'label' => esc_html__('Display Related Products','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_product_detail',
				'settings' => 'sdc_woo_single_customizer_display_related',
				'priority'   => 42,
			) );

/*--------------------------------------------------------------
## 4.4 Related & Upsell Products
--------------------------------------------------------------*/

	$wp_customize->add_setting( 'sdc_woo_listing_star_color', array(
			'default'           	=> '#FFEB3B',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_listing_star_color', array(
				'label'	   				=> __( 'Star Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_woocommerce_product_misc',
				'settings' 				=> 'sdc_woo_listing_star_color',
				'priority' 				=> 51,
			) ) );


	$wp_customize->add_setting( 'sdc_woo_listing_sale_badge_color', array(
			'default'           	=> '#ffffff',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_listing_sale_badge_color', array(
				'label'	   				=> __( 'Sale Badge Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_woocommerce_product_misc',
				'settings' 				=> 'sdc_woo_listing_sale_badge_color',
				'priority' 				=> 52,
			) ) );

	$wp_customize->add_setting( 'sdc_woo_listing_sale_badge_background_color', array(
			'default'           	=> '#ef5462',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_listing_sale_badge_background_color', array(
				'label'	   				=> __( 'Sale Badge Background Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_woocommerce_product_misc',
				'settings' 				=> 'sdc_woo_listing_sale_badge_background_color',
				'priority' 				=> 53,
			) ) );


	$wp_customize->add_setting( 'sdc_woo_listing_add_cart_color', array(
			'default'           	=> '#FFEB3B',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_listing_add_cart_color', array(
				'label'	   				=> __( 'Add To Cart Button Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_woocommerce_product_misc',
				'settings' 				=> 'sdc_woo_listing_add_cart_color',
				'priority' 				=> 53,
			) ) );

	$wp_customize->add_setting( 'sdc_woo_listing_add_cart_text_color', array(
			'default'           	=> '#000000',
			'sanitize_callback' 	=> 'sanitize_hex_color',
	) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sdc_woo_listing_add_cart_text_color', array(
				'label'	   				=> __( 'Add To Cart Button Text Color', 'storefront-design-customizer' ),
				'section'  				=> 'sdc_woocommerce_product_misc',
				'settings' 				=> 'sdc_woo_listing_add_cart_text_color',
				'priority' 				=> 53,
			) ) );


	// Display WooCommmerce Shop Page Sidebar
	$wp_customize->add_setting('sdc_hide_sidebar_shop', array(
		'default' => false,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_hide_sidebar_shop', array(
				'type' => 'checkbox',
				'label' => esc_html__('Disable Sidebar on Shop Page','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_sidebar',
				'settings' => 'sdc_hide_sidebar_shop',
				'priority'   => 10,
			) );

	// Display WooCommmerce Shop Page Sidebar
	$wp_customize->add_setting('sdc_hide_sidebar_product', array(
		'default' => false,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_hide_sidebar_product', array(
				'type' => 'checkbox',
				'label' => esc_html__('Disable Sidebar on Product Page','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_sidebar',
				'settings' => 'sdc_hide_sidebar_product',
				'priority'   => 11,
			) );


	// Display WooCommmerce Shop Page Sidebar
	$wp_customize->add_setting('sdc_hide_sidebar_cart', array(
		'default' => false,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_hide_sidebar_cart', array(
				'type' => 'checkbox',
				'label' => esc_html__('Disable Sidebar on Cart Page','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_sidebar',
				'settings' => 'sdc_hide_sidebar_cart',
				'priority'   => 12,
			) );

	// Display WooCommmerce Shop Page Sidebar
	$wp_customize->add_setting('sdc_hide_sidebar_checkout', array(
		'default' => false,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_hide_sidebar_checkout', array(
				'type' => 'checkbox',
				'label' => esc_html__('Disable Sidebar on Cart Page','storefront-design-customizer'),
				'section' => 'sdc_woocommerce_sidebar',
				'settings' => 'sdc_hide_sidebar_checkout',
				'priority'   => 13,
			) );