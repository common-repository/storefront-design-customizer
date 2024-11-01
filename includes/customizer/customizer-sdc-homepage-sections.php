<?php

	if ( function_exists( 'Homepage_Control')):
		// Front Page Sections
		$wp_customize->get_section('homepage_control')->panel 		= 'sdc_frontpage_panel';
		$wp_customize->get_section('homepage_control')->priority 	= 3;
	endif;



/*--------------------------------------------------------------
## Frontpage Feature Blocks
--------------------------------------------------------------*/

	// Features Blocks Title
	$wp_customize->add_setting( 'sdc_feature_blocks_content_title',
		array(
			'default'    => true,
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_feature_blocks_content_title', array(
					'type' => 'info',
					'label' => esc_html__('Block Section Heading','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blocks',
					'settings'    => 'sdc_feature_blocks_content_title',
					'priority'   => 1,
			)) );


	//Blocks Section Title
	$wp_customize->add_setting('sdc_feature_blocks_title', array(
		'default'	=> __('Our Features', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_blocks_title',array(
				'type' 		=>'text',
               'label'      => esc_html__( 'Section Title', 'storefront-design-customizer' ),
               'section'    => 'sdc_frontpage_section_blocks',
               'settings'   => 'sdc_feature_blocks_title',
               'priority'   => 2,
			));


	// Features Blocks One Helper Title
	$wp_customize->add_setting( 'sdc_feature_block_one_helper_title',
		array(
			'default'    => true,
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_feature_block_one_helper_title', array(
					'type' => 'info',
					'label' => esc_html__('Block 1','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blocks',
					'settings'    => 'sdc_feature_block_one_helper_title',
					'priority'   => 3,
			)) );


	//Block 1 Section Title
	$wp_customize->add_setting('sdc_feature_block_title_one', array(
		'default' => __('Search lights are trained', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_block_title_one',array(
				'type' 			=>'text',
				'description'=> esc_html__('Block 1 Title', 'storefront-design-customizer'),
               'section'    	=> 'sdc_frontpage_section_blocks',
               'settings'   	=> 'sdc_feature_block_title_one',
               'input_attrs'  	=> array('placeholder' 	=> esc_html__( 'Title', 'storefront-design-customizer' ),),
               'priority'   	=> 4,
			));

	//Block 1 Content
	$wp_customize->add_setting('sdc_feature_block_content_one', array(
		'default' => __('A worker climbs to the top of the crate. The search lights are trained on the door. The rifleman throw the bolts on their rifles and crack their stun guns, sending arcs of current cracking through the air.', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_block_content_one',array(
				'type' 		=>'textarea',
				'description'=> esc_html__('Block 1 Description', 'storefront-design-customizer'),
               'section'    => 'sdc_frontpage_section_blocks',
               'settings'   => 'sdc_feature_block_content_one',
               'priority'   	=> 5,
			));

	//Block 1 Image
	$wp_customize->add_setting('sdc_feature_block_image_one', array(
		'default' => plugins_url( '/../assets/images/block_one.png', __DIR__ ),
		'transport' => 'refresh',
	) );

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sdc_feature_block_image_one',array(
               'section'    => 'sdc_frontpage_section_blocks',
               'description'=> esc_html__('Block 1 Image', 'storefront-design-customizer'),
               'settings'   => 'sdc_feature_block_image_one',
               'priority'   	=> 6,
			   )
			));


	// Features Blocks Two Helper Title
	$wp_customize->add_setting( 'sdc_feature_block_two_helper_title',
		array(
	        'default' => true,
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_feature_block_two_helper_title', array(
					'type' => 'info',
					'label' => esc_html__('Block 2','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blocks',
					'settings'    => 'sdc_feature_block_two_helper_title',
					'priority'   => 7,
			)) );


	//Block 2 Section Title
	$wp_customize->add_setting('sdc_feature_block_title_two', array(
		'default' => __('Welcome to Jurassic Park', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_block_title_two',array(
				'type' 		=>'text',
				'description'=> esc_html__('Block 2 Title', 'storefront-design-customizer'),
               'section'    => 'sdc_frontpage_section_blocks',
               'settings'   => 'sdc_feature_block_title_two',
               'input_attrs'  	=> array('placeholder' 	=> esc_html__( 'Title', 'storefront-design-customizer' ),),
               'priority'   	=> 8,
			));

	//Block 2 Content
	$wp_customize->add_setting('sdc_feature_block_content_two', array(
		'default' => __('A worker climbs to the top of the crate. The search lights are trained on the door. The rifleman throw the bolts on their rifles and crack their stun guns, sending arcs of current cracking through the air.', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_block_content_two',array(
				'type' 		=>'textarea',
				'description'=> esc_html__('Block 2 Description', 'storefront-design-customizer'),
               'section'    => 'sdc_frontpage_section_blocks',
               'settings'   => 'sdc_feature_block_content_two',
               'priority'   	=> 9,
			));

	//Block 2 Image
	$wp_customize->add_setting('sdc_feature_block_image_two', array(
		'default' => plugins_url( '/../assets/images/block_two.png', __DIR__ ),
		'transport' => 'refresh',
	) );

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sdc_feature_block_image_two',array(
               'section'    => 'sdc_frontpage_section_blocks',
               'description'=> esc_html__('Block 2 Image', 'storefront-design-customizer'),
               'settings'   => 'sdc_feature_block_image_two',
               'priority'   	=> 10,
			   )
			));

	// Features Blocks Three Helper Title
	$wp_customize->add_setting( 'sdc_feature_block_three_helper_title',
		array(
	        'default' => true,
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_feature_block_three_helper_title', array(
					'type' => 'info',
					'label' => esc_html__('Block 3','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blocks',
					'settings'    => 'sdc_feature_block_three_helper_title',
					'priority'   => 11,
			)) );


	//Block 3 Section Title
	$wp_customize->add_setting('sdc_feature_block_title_three', array(
		'default' => __('Dinosaurs eat man', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_block_title_three',array(
				'type' 		=>'text',
				'description'=> esc_html__('Block 3 Title', 'storefront-design-customizer'),
               'section'    => 'sdc_frontpage_section_blocks',
               'settings'   => 'sdc_feature_block_title_three',
               'input_attrs'  	=> array('placeholder' 	=> esc_html__( 'Title', 'storefront-design-customizer' ),),
               'priority'   	=> 12,
			));

	//Block 3 Content
	$wp_customize->add_setting('sdc_feature_block_content_three', array(
		'default' => __('A worker climbs to the top of the crate. The search lights are trained on the door. The rifleman throw the bolts on their rifles and crack their stun guns, sending arcs of current cracking through the air.', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_block_content_three',array(
				'type' 		=>'textarea',
				'description'=> esc_html__('Block 3 Description', 'storefront-design-customizer'),
               'section'    => 'sdc_frontpage_section_blocks',
               'settings'   => 'sdc_feature_block_content_three',
                'priority'   	=> 13,
			));

	//Block 3 Image
	$wp_customize->add_setting('sdc_feature_block_image_three', array(
		'default' => plugins_url( '/../assets/images/block_three.png', __DIR__ ),
		'transport' => 'refresh',
	) );

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sdc_feature_block_image_three',array(
               'section'    => 'sdc_frontpage_section_blocks',
               'description'=> esc_html__('Block 3 Image', 'storefront-design-customizer'),
               'settings'   => 'sdc_feature_block_image_three',
               'priority'   	=> 14,
			   )
			));


	// Features Blocks Three Helper Title
	$wp_customize->add_setting( 'sdc_feature_block_four_helper_title',
		array(
	        'default' => true,
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_feature_block_four_helper_title', array(
					'type' => 'info',
					'label' => esc_html__('Block 4','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blocks',
					'settings'    => 'sdc_feature_block_four_helper_title',
					'priority'   => 15,
			)) );


	//Block 3 Section Title
	$wp_customize->add_setting('sdc_feature_block_title_four', array(
		'default' => __('Dinosaurs eat man', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_block_title_four',array(
				'type' 		=>'text',
				'description'=> esc_html__('Block 4 Title', 'storefront-design-customizer'),
               'section'    => 'sdc_frontpage_section_blocks',
               'settings'   => 'sdc_feature_block_title_four',
               'input_attrs'  	=> array('placeholder' 	=> esc_html__( 'Title', 'storefront-design-customizer' ),),
               'priority'   	=> 16,
			));

	//Block 3 Content
	$wp_customize->add_setting('sdc_feature_block_content_four', array(
		'default' => __('A worker climbs to the top of the crate. The search lights are trained on the door. The rifleman throw the bolts on their rifles and crack their stun guns, sending arcs of current cracking through the air.', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_feature_block_content_four',array(
				'type' 		=>'textarea',
				'description'=> esc_html__('Block 4 Description', 'storefront-design-customizer'),
               'section'    => 'sdc_frontpage_section_blocks',
               'settings'   => 'sdc_feature_block_content_four',
                'priority'   	=> 17,
			));

	//Block 3 Image
	$wp_customize->add_setting('sdc_feature_block_image_four', array(
		'default' => plugins_url( '/../assets/images/block_one.png', __DIR__ ),
		'transport' => 'refresh',
	) );

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sdc_feature_block_image_four',array(
               'section'    => 'sdc_frontpage_section_blocks',
               'description'=> esc_html__('Block 4 Image', 'storefront-design-customizer'),
               'settings'   => 'sdc_feature_block_image_four',
               'priority'   	=> 18,
			   )
			));


	// Blocks Title
	$wp_customize->add_setting( 'sdc_feature_blocks_section_title',
		array(
			'default'    => true,
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_feature_blocks_section_title', array(
					'type' => 'info',
					'label' => esc_html__( 'Block Layout','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blocks',
					'settings'    => 'sdc_feature_blocks_section_title',
					'priority'   => 20,
			)) );


	$wp_customize->add_setting( 'sdc_feature_block_layout' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_feature_block_layout', array(
				'label'      => esc_html__( 'Layout', 'storefront-design-customizer' ),
				'section'    => 'sdc_frontpage_section_blocks',
				'settings'   => 'sdc_feature_block_layout',
			    'priority'   => 21,
			    'type'       => 'select',
				'choices'    => array(
					1   => plugins_url( '/../assets/images/customizer/block-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/block-two.png', __DIR__ ),
				),
			)
		));


	// Feature Blocks Column Layout
	$wp_customize->add_setting( 'sdc_feature_block_row' ,
		array(
			'default' => 'col-sm-3',
			'transport' => 'refresh',
			'sanitize_callback' 	=> 'sanitize_html_class',
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_feature_block_row', array(
				'label'      => esc_html__( 'Block Columns', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display Blocks in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'sdc_frontpage_section_blocks',
				'settings'   => 'sdc_feature_block_row',
			    'priority'   => 22,
			    'type'       => 'select',
				'choices'    => array(
					'col-sm-12'  => plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					'col-sm-6'   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					'col-sm-4'   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					'col-sm-3'   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
				),
			)
		));


	// Make the category section content full width
	$wp_customize->add_setting('sdc_block_section_content_width', array(
		'default' => false,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_block_section_content_width', array(
				'type' => 'checkbox',
				'label' => esc_html__('Make the content section full width','storefront-design-customizer'),
				'section' => 'sdc_frontpage_section_blocks',
				'settings' => 'sdc_block_section_content_width',
				'priority'   => 23,
			) );

/*--------------------------------------------------------------
## Section: Homepage Blog Posts
--------------------------------------------------------------*/



	$wp_customize->add_setting( 'sdc_blog_section_front_content_title_helper',
		array(
			'sanitize_callback'    => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_blog_section_front_content_title_helper', array(
					'type' => 'info',
					'label' => esc_html__('Front Blog Section','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blog_post',
					'settings'    => 'sdc_blog_section_front_content_title_helper',
					'priority'   => 10,
			)) );


	//Blog Title
	$wp_customize->add_setting('sdc_home_blogposts_title', array(
		'default' => __('Our Stories', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_home_blogposts_title',array(
				'type' 		=>'text',
               'label'      => esc_html__( 'Blog Section Title', 'storefront-design-customizer' ),
               'section'    => 'sdc_frontpage_section_blog_post',
               'settings'   => 'sdc_home_blogposts_title',
               'priority'   => 11,
			));

	//Blog Description
	$wp_customize->add_setting('sdc_home_blogposts_description', array(
		'default' => __('Behind the scenes stories', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('sdc_home_blogposts_description',array(
				'type' 		=>'textarea',
               'label'      => esc_html__( 'Blog Section Description', 'storefront-design-customizer' ),
               'section'    => 'sdc_frontpage_section_blog_post',
               'settings'   => 'sdc_home_blogposts_description',
               'priority'   => 12,
			));

	// Blog Posts Per Page
	$wp_customize->add_setting( 'sdc_blog_front_post_per_page_select',
		array(
			'default' => 6,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( 'sdc_blog_front_post_per_page_select',array(
				'label'      	=> esc_html__( 'Number of Posts to Display', 'storefront-design-customizer' ),
				'section'    	=> 'sdc_frontpage_section_blog_post',
				'settings'   	=> 'sdc_blog_front_post_per_page_select',
			    'priority'   	=> 13,
			    'type'       	=> 'text',
	    		'input_attrs' 	=> array('placeholder' 	=> esc_html__( 'example: 6', 'storefront-design-customizer' ),),
			)
		);


	$cats_post = array('' => esc_html__('All', 'storefront-design-customizer' ),);
	foreach ( get_categories() as $categories => $category ){
	    $cats_post[$category->term_id] = $category->name;
	}

	$wp_customize->add_setting( 'sdc_front_post_category_selector', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_key',
	) );

		$wp_customize->add_control( 'sdc_front_post_category_selector', array(
		    'settings' => 'sdc_front_post_category_selector',
		    'type' => 'select',
		    'choices' => $cats_post,
		    'section' => 'sdc_frontpage_section_blog_post',
		    'priority'   => 14,
		    'label'      => esc_html__( 'Select Post Category', 'storefront-design-customizer' ),
		) );




	$wp_customize->add_setting( 'sdc_blog_section_front_layout_title_helper',
		array(
			'sanitize_callback'    => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_blog_section_front_layout_title_helper', array(
					'type' => 'info',
					'label' => esc_html__('Blog Posts Layout','storefront-design-customizer'),
					'description' => esc_html__('this layout settings will be aplicable to frontpage blog posts.','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blog_post',
					'settings'    => 'sdc_blog_section_front_layout_title_helper',
					'priority'   => 30,
			)) );



	// Front Blog Posts layout
	$wp_customize->add_setting( 'sdc_home_blogposts_layout' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh',
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_home_blogposts_layout', array(
				'label'      => esc_html__( 'Blog Post Layouts', 'storefront-design-customizer' ),
				'section'    => 'sdc_frontpage_section_blog_post',
				'settings'   => 'sdc_home_blogposts_layout',
			    'priority'   => 31,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/blog-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/blog-two.png', __DIR__ ),
				),
			)
		));

	// Posts Archive Column
	$wp_customize->add_setting( 'sdc_front_column_post_archive' ,
		array(
			'default' => 'col-sm-12',
			'transport' => 'refresh',
			'sanitize_callback' 	=> 'sanitize_html_class',
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'sdc_front_column_post_archive', array(
				'label'      => esc_html__( 'Posts Column', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display Blocks in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'sdc_frontpage_section_blog_post',
				'settings'   => 'sdc_front_column_post_archive',
			    'priority'   => 32,
			    'type'       => 'select',
				'choices'    => array(
					'col-sm-12'  => plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					'col-sm-6'   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					'col-sm-4'   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					'col-sm-3'   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
				),
			)
		));


	// Make the category section content full width
	$wp_customize->add_setting('sdc_post_section_content_width', array(
		'default' => false,
		'transport' => 'refresh',
	) );
			$wp_customize->add_control('sdc_post_section_content_width', array(
				'type' => 'checkbox',
				'label' => esc_html__('Make the content section full width','storefront-design-customizer'),
				'section' => 'sdc_frontpage_section_blog_post',
				'settings' => 'sdc_post_section_content_width',
				'priority'   => 33,
			) );


	$wp_customize->add_setting( 'sdc_blog_section_front_color_title_helper',
		array(
			'sanitize_callback'    => 'sanitize_key',
			)
	);

			$wp_customize->add_control( new SDC_UI_Helper_Title ( $wp_customize, 'sdc_blog_section_front_color_title_helper', array(
					'type' => 'info',
					'label' => esc_html__('Blog Section Color & Image','storefront-design-customizer'),
					'section' => 'sdc_frontpage_section_blog_post',
					'settings'    => 'sdc_blog_section_front_color_title_helper',
					'priority'   => 40,
			)) );

	// Post Card Color
	$wp_customize->add_setting( 'sdc_front_blogposts_card_color' ,
		array(
	    'default' => '#f2f2f2',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'postMessage'
		)
	);

		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sdc_front_blogposts_card_color',
			array(
				'label'      => esc_html__( 'Card Color', 'storefront-design-customizer' ),
				'section'    => 'sdc_frontpage_section_blog_post',
				'settings'   => 'sdc_front_blogposts_card_color',
			    'priority'   => 41,
			)
		));

	// Blog Section background Color
	$wp_customize->add_setting( 'sdc_blogposts_background_color' ,
		array(
	    'default' => '#f6f6f6',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'postMessage'
		)
	);

		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sdc_blogposts_background_color',
			array(
				'label'      => esc_html__( 'Background Color', 'storefront-design-customizer' ),
				'section'    => 'sdc_frontpage_section_blog_post',
				'settings'   => 'sdc_blogposts_background_color',
			    'priority'   => 41,
			)
		));

	//Blog Section background Image
	$wp_customize->add_setting('sdc_blogposts_background_image', array(
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	) );

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sdc_blogposts_background_image',array(
               'label'      => esc_html__( 'Background Image', 'storefront-design-customizer' ),
               'section'    => 'sdc_frontpage_section_blog_post',
               'settings'   => 'sdc_blogposts_background_image',
               'priority'   => 42,
			   )
			));






/*--------------------------------------------------------------
## Storefront Product Categories
--------------------------------------------------------------*/

	// Posts Archive Column
	$wp_customize->add_setting( 'storefront_front_product_cat_per_row' ,
		array(
			'default' => 4,
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_front_product_cat_per_row', array(
				'label'      => esc_html__( 'Product Per Row', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display products in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_cat',
				'settings'   => 'storefront_front_product_cat_per_row',
			    'priority'   => 40,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					4   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
					5   => plugins_url( '/../assets/images/customizer/column-five.png', __DIR__ ),
				),
			)
		));


	//Blog Title
	$wp_customize->add_setting('storefront_front_product_cat_back_title', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_cat_back_title',array(
				'type' 		=>'text',
               'label'      => esc_html__( 'Title', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_cat',
               'settings'   => 'storefront_front_product_cat_back_title',
               'priority'   => 11,
			));

	//Blog Description
	$wp_customize->add_setting('storefront_front_product_cat_back_des', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_cat_back_des',array(
				'type' 		=>'textarea',
               'label'      => esc_html__( 'Section Description', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_cat',
               'settings'   => 'storefront_front_product_cat_back_des',
               'priority'   => 12,
			));

	// Product Category Description Position
	$wp_customize->add_setting( 'storefront_frontpage_product_cat_pos' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_frontpage_product_cat_pos', array(
				'label'      => esc_html__( 'Section Heading Alignment', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_cat',
				'settings'   => 'storefront_frontpage_product_cat_pos',
			    'priority'   => 23,
			    'type'       => 'select',
				'choices'    => array(
					1   => plugins_url( '/../assets/images/customizer/title-top.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/title-left.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/title-right.png', __DIR__ ),
				),
			)
		));
/*--------------------------------------------------------------
## Storefront Recent Products
--------------------------------------------------------------*/

	// Posts Archive Column
	$wp_customize->add_setting( 'storefront_front_product_recent_per_row' ,
		array(
			'default' => 4,
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_front_product_recent_per_row', array(
				'label'      => esc_html__( 'Product Per Row', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display products in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_recent',
				'settings'   => 'storefront_front_product_recent_per_row',
			    'priority'   => 40,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					4   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
					5   => plugins_url( '/../assets/images/customizer/column-five.png', __DIR__ ),
				),
			)
		));

	//Recent Product Section Title
	$wp_customize->add_setting('storefront_front_product_recent_back_title', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_recent_back_title',array(
				'type' 		=>'text',
               'label'      => esc_html__( 'Title', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_recent',
               'settings'   => 'storefront_front_product_recent_back_title',
               'priority'   => 11,
			));

	//Blog Description
	$wp_customize->add_setting('storefront_front_product_recent_back_des', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_recent_back_des',array(
				'type' 		=>'textarea',
               'label'      => esc_html__( 'Section Description', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_recent',
               'settings'   => 'storefront_front_product_recent_back_des',
               'priority'   => 12,
			));


	// Recent Product Description Position
	$wp_customize->add_setting( 'storefront_frontpage_product_recent_pos' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_frontpage_product_recent_pos', array(
				'label'      => esc_html__( 'Section Heading Alignment', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_recent',
				'settings'   => 'storefront_frontpage_product_recent_pos',
			    'priority'   => 23,
			    'type'       => 'select',
				'choices'    => array(
					1   => plugins_url( '/../assets/images/customizer/title-top.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/title-left.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/title-right.png', __DIR__ ),
				),
			)
		));
/*--------------------------------------------------------------
## Storefront Featured Products
--------------------------------------------------------------*/

	// Posts Archive Column
	$wp_customize->add_setting( 'storefront_front_product_featured_per_row' ,
		array(
			'default' => 4,
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_front_product_featured_per_row', array(
				'label'      => esc_html__( 'Product Per Row', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display products in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_featured',
				'settings'   => 'storefront_front_product_featured_per_row',
			    'priority'   => 40,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					4   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
					5   => plugins_url( '/../assets/images/customizer/column-five.png', __DIR__ ),
				),
			)
		));

	//Featured Product Section Title
	$wp_customize->add_setting('storefront_front_product_featured_back_title', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_featured_back_title',array(
				'type' 		=>'text',
               'label'      => esc_html__( 'Title', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_featured',
               'settings'   => 'storefront_front_product_featured_back_title',
               'priority'   => 11,
			));

	//Blog Description
	$wp_customize->add_setting('storefront_front_product_featured_back_des', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_featured_back_des',array(
				'type' 		=>'textarea',
               'label'      => esc_html__( 'Section Description', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_featured',
               'settings'   => 'storefront_front_product_featured_back_des',
               'priority'   => 12,
			));


	// Recent Product Description Position
	$wp_customize->add_setting( 'storefront_frontpage_product_featured_pos' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_frontpage_product_featured_pos', array(
				'label'      => esc_html__( 'Section Heading Alignment', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_featured',
				'settings'   => 'storefront_frontpage_product_featured_pos',
			    'priority'   => 23,
			    'type'       => 'select',
				'choices'    => array(
					1   => plugins_url( '/../assets/images/customizer/title-top.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/title-left.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/title-right.png', __DIR__ ),
				),
			)
		));
/*--------------------------------------------------------------
## Storefront Popular Products
--------------------------------------------------------------*/

	// Posts Archive Column
	$wp_customize->add_setting( 'storefront_front_product_popular_per_row' ,
		array(
			'default' => 4,
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_front_product_popular_per_row', array(
				'label'      => esc_html__( 'Product Per Row', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display products in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_popular',
				'settings'   => 'storefront_front_product_popular_per_row',
			    'priority'   => 40,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					4   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
					5   => plugins_url( '/../assets/images/customizer/column-five.png', __DIR__ ),
				),
			)
		));


	//Popular Product Section Title
	$wp_customize->add_setting('storefront_front_product_popular_back_title', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_popular_back_title',array(
				'type' 		=>'text',
               'label'      => esc_html__( 'Title', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_popular',
               'settings'   => 'storefront_front_product_popular_back_title',
               'priority'   => 11,
			));

	//Blog Description
	$wp_customize->add_setting('storefront_front_product_popular_back_des', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_popular_back_des',array(
				'type' 		=>'textarea',
               'label'      => esc_html__( 'Section Description', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_popular',
               'settings'   => 'storefront_front_product_popular_back_des',
               'priority'   => 12,
			));

	// Recent Product Description Position
	$wp_customize->add_setting( 'storefront_frontpage_product_popular_pos' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_frontpage_product_popular_pos', array(
				'label'      => esc_html__( 'Section Heading Alignment', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_popular',
				'settings'   => 'storefront_frontpage_product_popular_pos',
			    'priority'   => 23,
			    'type'       => 'select',
				'choices'    => array(
					1   => plugins_url( '/../assets/images/customizer/title-top.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/title-left.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/title-right.png', __DIR__ ),
				),
			)
		));
/*--------------------------------------------------------------
## Storefront On Sale Products
--------------------------------------------------------------*/

	// Posts Archive Column
	$wp_customize->add_setting( 'storefront_front_product_sale_per_row' ,
		array(
			'default' => 4,
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_front_product_sale_per_row', array(
				'label'      => esc_html__( 'Product Per Row', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display products in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_sale',
				'settings'   => 'storefront_front_product_sale_per_row',
			    'priority'   => 40,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					4   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
					5   => plugins_url( '/../assets/images/customizer/column-five.png', __DIR__ ),
				),
			)
		));


	//Popular Product Section Title
	$wp_customize->add_setting('storefront_front_product_sale_back_title', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_sale_back_title',array(
				'type' 		=>'text',
               'label'      => esc_html__( 'Title', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_sale',
               'settings'   => 'storefront_front_product_sale_back_title',
               'priority'   => 11,
			));

	//Blog Description
	$wp_customize->add_setting('storefront_front_product_sale_back_des', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_sale_back_des',array(
				'type' 		=>'textarea',
               'label'      => esc_html__( 'Section Description', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_sale',
               'settings'   => 'storefront_front_product_sale_back_des',
               'priority'   => 12,
			));


	// Recent Product Description Position
	$wp_customize->add_setting( 'storefront_frontpage_product_sale_pos' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_frontpage_product_sale_pos', array(
				'label'      => esc_html__( 'Section Heading Alignment', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_sale',
				'settings'   => 'storefront_frontpage_product_sale_pos',
			    'priority'   => 23,
			    'type'       => 'select',
				'choices'    => array(
					1   => plugins_url( '/../assets/images/customizer/title-top.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/title-left.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/title-right.png', __DIR__ ),
				),
			)
		));
/*--------------------------------------------------------------
## Storefront Best Selling Products
--------------------------------------------------------------*/

	// Posts Archive Column
	$wp_customize->add_setting( 'storefront_front_product_best_per_row' ,
		array(
			'default' => 4,
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_front_product_best_per_row', array(
				'label'      => esc_html__( 'Product Per Row', 'storefront-design-customizer' ),
				'description'      => esc_html__( 'Display products in 1, 2, or 3 Column', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_best',
				'settings'   => 'storefront_front_product_best_per_row',
			    'priority'   => 40,
			    'type'       => 'select',
				'choices'    => array(
					1  	=> plugins_url( '/../assets/images/customizer/column-one.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/column-two.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/column-three.png', __DIR__ ),
					4   => plugins_url( '/../assets/images/customizer/column-four.png', __DIR__ ),
					5   => plugins_url( '/../assets/images/customizer/column-five.png', __DIR__ ),
				),
			)
		));


	//Popular Product Section Title
	$wp_customize->add_setting('storefront_front_product_best_back_title', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_best_back_title',array(
				'type' 		=>'text',
               'label'      => esc_html__( 'Title', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_best',
               'settings'   => 'storefront_front_product_best_back_title',
               'priority'   => 11,
			));

	//Blog Description
	$wp_customize->add_setting('storefront_front_product_best_back_des', array(
		'default' => __('', 'storefront-design-customizer'),
		'transport' => 'postMessage',
	) );

			$wp_customize->add_control('storefront_front_product_best_back_des',array(
				'type' 		=>'textarea',
               'label'      => esc_html__( 'Section Description', 'storefront-design-customizer' ),
               'section'    => 'storefront_frontpage_section_product_best',
               'settings'   => 'storefront_front_product_best_back_des',
               'priority'   => 12,
			));

	$wp_customize->add_setting( 'storefront_frontpage_product_best_pos' ,
		array(
			'default' => 1,
			'sanitize_callback' => 'absint',
			'transport' => 'refresh'
		)
	);

		$wp_customize->add_control( new SDC_Custom_Radio_Image_Control( $wp_customize, 'storefront_frontpage_product_best_pos', array(
				'label'      => esc_html__( 'Section Heading Alignment', 'storefront-design-customizer' ),
				'section'    => 'storefront_frontpage_section_product_best',
				'settings'   => 'storefront_frontpage_product_best_pos',
			    'priority'   => 23,
			    'type'       => 'select',
				'choices'    => array(
					1   => plugins_url( '/../assets/images/customizer/title-top.png', __DIR__ ),
					2   => plugins_url( '/../assets/images/customizer/title-left.png', __DIR__ ),
					3   => plugins_url( '/../assets/images/customizer/title-right.png', __DIR__ ),
				),
			)
		));