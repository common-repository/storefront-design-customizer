<?php
/**
 * Storefront hooks
 *
 * @package Storefront_Design_Customizer
 */
	// Settings Value from customizer
	$sdc_layout_post_archive 						= get_theme_mod('sdc_layout_post_archive', 1);
	$sdc_blog_customizer_single_layout 				= get_theme_mod('sdc_blog_customizer_single_layout', 1);
	$sdc_woo_shop_product_layout 					= get_theme_mod('sdc_woo_shop_product_layout', 1);
	$woo_product_category_layout 					= get_theme_mod('woo_product_category_layout', 1);
	$sdc_woo_single_product_layout 					= get_theme_mod('sdc_woo_single_product_layout', 1);
	$sdc_woo_single_customizer_display_upsell 		= get_theme_mod('sdc_woo_single_customizer_display_upsell', true);
	$sdc_woo_single_customizer_display_related 		= get_theme_mod('sdc_woo_single_customizer_display_related', true);
	$sdc_post_customizer_display_navigation 		= get_theme_mod('sdc_post_customizer_display_navigation', true);
	$sdc_post_customizer_display_comment 			= get_theme_mod('sdc_post_customizer_display_comment', true);
	$sdc_hide_sidebar_shop 							= get_theme_mod('sdc_hide_sidebar_shop', false);
	$sdc_hide_sidebar_cart 							= get_theme_mod('sdc_hide_sidebar_cart', false);
	$sdc_hide_sidebar_checkout 						= get_theme_mod('sdc_hide_sidebar_checkout', false);
	$sdc_hide_sidebar_product 						= get_theme_mod('sdc_hide_sidebar_product', false);
	$sdc_footer_display_social  					= get_theme_mod('sdc_footer_display_social', true);
/*--------------------------------------------------------------
## CSS Classes & Style
--------------------------------------------------------------*/

	/**
	 * Output CSS Classes & Style
	 *
	 * @see  sdc_post_archive_column_classes()
	 * @see  sdc_body_classes()
	 * @see  sdc_customizer_head_styles()
	 * @see  sdc_font_script()
	 */
	add_action( 'wp_head', 'sdc_customizer_head_styles' );
	add_action('wp_enqueue_scripts', 'sdc_font_script');
	add_filter( 'post_class', 'sdc_post_archive_column_classes' );
	add_filter( 'body_class', 'sdc_body_classes' );




/*--------------------------------------------------------------
## Header
--------------------------------------------------------------*/

	add_action( 'init', 'remove_sdc_header_search' );
	add_action( 'init', 'remove_sdc_header_cart' );

/*--------------------------------------------------------------
## Footer
--------------------------------------------------------------*/

	add_action('init', 'sdc_apply_footer_copyright');

/*--------------------------------------------------------------
## Home Page
--------------------------------------------------------------*/

/**
 * Home Page Sections
 *
 * @see  storefront_homepage_content() - 10
 * @see  storefront_product_categories() - 20
 * @see  storefront_recent_products() - 30
 * @see  storefront_featured_products() - 40
 * @see  storefront_popular_products() - 50
 * @see  storefront_on_sale_products() - 60
 * @see  storefront_best_selling_products() - 70
 * @see  sdc_front_feature_blocks() - 80
 * @see  sdc_front_blog_posts() - 110
 */

add_action( 'homepage', 'sdc_front_feature_blocks',		   		80 );
add_action( 'homepage', 'sdc_front_blog_posts',		   			110 );


// Storefront Product Categories
add_filter('storefront_product_categories_shortcode_args','home_storefront_category_per_page' );
add_filter('storefront_product_categories_shortcode_args','home_storefront_category_per_row' );
add_action('storefront_homepage_before_product_categories', 'sdc_front_canvas_open');
add_action('storefront_homepage_before_product_categories', 'home_storefront_product_category_align_title_open');
add_filter( 'storefront_product_categories_args', 'home_storefront_product_category_title');
add_action('storefront_homepage_after_product_categories_title', 'home_storefront_product_category_description');
add_action('storefront_homepage_after_product_categories_title', 'home_storefront_product_category_align_title_close');
add_action('storefront_homepage_after_product_categories_title', 'home_storefront_product_category_align_content_open');
add_action('storefront_homepage_after_product_categories', 'home_storefront_product_category_align_content_close');
add_action('storefront_homepage_after_product_categories', 'sdc_front_canvas_close');

// Storefront Recent Products
add_filter('storefront_recent_products_shortcode_args','home_storefront_recent_product_per_page' );
add_filter('storefront_recent_products_shortcode_args','home_storefront_recent_product_per_row' );
add_action('storefront_homepage_before_recent_products', 'sdc_front_canvas_open');
add_action('storefront_homepage_before_recent_products', 'home_storefront_product_recent_align_title_open');
add_filter( 'storefront_recent_products_args', 'home_storefront_product_recent_title');
add_action('storefront_homepage_after_recent_products_title', 'home_storefront_product_recent_description');
add_action('storefront_homepage_after_recent_products_title', 'home_storefront_product_recent_align_title_close');
add_action('storefront_homepage_after_recent_products_title', 'home_storefront_product_recent_align_content_open');
add_action('storefront_homepage_after_recent_products', 'home_storefront_product_recent_align_content_close');
add_action('storefront_homepage_after_recent_products', 'sdc_front_canvas_close');

// Storefront Featured Products
add_filter('storefront_featured_products_shortcode_args','home_storefront_featured_product_per_page' );
add_filter('storefront_featured_products_shortcode_args','home_storefront_featured_product_per_row' );
add_action('storefront_homepage_before_featured_products', 'sdc_front_canvas_open');
add_action('storefront_homepage_before_featured_products', 'home_storefront_product_featured_align_title_open');
add_filter( 'storefront_featured_products_args', 'home_storefront_product_featured_title');
add_action('storefront_homepage_after_featured_products_title', 'home_storefront_product_featured_description');
add_action('storefront_homepage_after_featured_products_title', 'home_storefront_product_featured_align_title_close');
add_action('storefront_homepage_after_featured_products_title', 'home_storefront_product_featured_align_content_open');
add_action('storefront_homepage_after_featured_products', 'home_storefront_product_featured_align_content_close');
add_action('storefront_homepage_after_featured_products', 'sdc_front_canvas_close');

// Storefront Popular Products
add_filter('storefront_popular_products_shortcode_args','home_storefront_popular_product_per_page' );
add_filter('storefront_popular_products_shortcode_args','home_storefront_popular_product_per_row' );
add_action('storefront_homepage_before_popular_products', 'sdc_front_canvas_open');
add_action('storefront_homepage_before_popular_products', 'home_storefront_product_popular_align_title_open');
add_filter( 'storefront_popular_products_args', 'home_storefront_product_popular_title');
add_action('storefront_homepage_after_popular_products_title', 'home_storefront_product_popular_description');
add_action('storefront_homepage_after_popular_products_title', 'home_storefront_product_popular_align_title_close');
add_action('storefront_homepage_after_popular_products_title', 'home_storefront_product_popular_align_content_open');
add_action('storefront_homepage_after_popular_products', 'home_storefront_product_popular_align_content_close');
add_action('storefront_homepage_after_popular_products', 'sdc_front_canvas_close');

// Storefront On Sale Products
add_filter('storefront_on_sale_products_shortcode_args','home_storefront_sale_product_per_page' );
add_filter('storefront_on_sale_products_shortcode_args','home_storefront_sale_product_per_row' );
add_action('storefront_homepage_before_on_sale_products', 'sdc_front_canvas_open');
add_action('storefront_homepage_before_on_sale_products', 'home_storefront_product_sale_align_title_open');
add_filter( 'storefront_on_sale_products_args', 'home_storefront_product_sale_title');
add_action('storefront_homepage_after_on_sale_products_title', 'home_storefront_product_sale_description');
add_action('storefront_homepage_after_on_sale_products_title', 'home_storefront_product_sale_align_title_close');
add_action('storefront_homepage_after_on_sale_products_title', 'home_storefront_product_sale_align_content_open');
add_action('storefront_homepage_after_on_sale_products', 'home_storefront_product_sale_align_content_close');
add_action('storefront_homepage_after_on_sale_products', 'sdc_front_canvas_close');

// Storefront Best Selling Products
add_filter('storefront_best_selling_products_shortcode_args','home_storefront_best_product_per_page' );
add_filter('storefront_best_selling_products_shortcode_args','home_storefront_best_product_per_row' );
add_action('storefront_homepage_before_best_selling_products', 'sdc_front_canvas_open');
add_action('storefront_homepage_before_best_selling_products', 'home_storefront_product_best_align_title_open');
add_filter( 'storefront_best_selling_products_args', 'home_storefront_product_best_title');
add_action('storefront_homepage_after_best_selling_products_title', 'home_storefront_product_best_description');
add_action('storefront_homepage_after_best_selling_products_title', 'home_storefront_product_best_align_title_close');
add_action('storefront_homepage_after_best_selling_products_title', 'home_storefront_product_best_align_content_open');
add_action('storefront_homepage_after_best_selling_products', 'home_storefront_product_best_align_content_close');
add_action('storefront_homepage_after_best_selling_products', 'sdc_front_canvas_close');

/*--------------------------------------------------------------
## Posts Archive
--------------------------------------------------------------*/
/**
 * Posts Archive Layout
 *
 * @see  apply_post_archive_layout_one()
 * @see  apply_post_archive_layout_two()
 */

if (absint($sdc_layout_post_archive) === 1){
	add_action( 'init', 'apply_post_archive_layout_one' );
}

if (absint($sdc_layout_post_archive) === 2){
	add_action( 'init', 'apply_post_archive_layout_two' );
}


/*--------------------------------------------------------------
## Single Post
--------------------------------------------------------------*/

/**
 * Single Post Layout
 *
 * @see  apply_sdc_single_layout_one()
 * @see  apply_sdc_single_layout_two()
 * @see  apply_sdc_single_layout_three()
 */

	if (absint($sdc_blog_customizer_single_layout) === 1){
		add_action( 'init', 'apply_sdc_single_layout_one' );
	}

	if (absint($sdc_blog_customizer_single_layout) === 2){
		add_action( 'init', 'apply_sdc_single_layout_two' );
	}

	if (absint($sdc_blog_customizer_single_layout) === 3){
		add_action( 'init', 'apply_sdc_single_layout_three' );
	}

/**
 * Remove Single Post Elements
 *
 * @see  remove_sdc_single_post_navigation()
 * @see  remove_sdc_single_comment()
 */

	if($sdc_post_customizer_display_navigation == false){
		add_action( 'init', 'remove_sdc_single_post_navigation' );
	}

	if($sdc_post_customizer_display_comment == false){
		add_action( 'init', 'remove_sdc_single_comment' );
	}

	add_filter( 'excerpt_length', 'sdc_excerpt_length', 999 );
	add_action('sdc_post_after_header', 'display_post_author_post_archive', 10);
	add_action('storefront_loop_before', 'bootstrap_row_before_post_start');
	add_action('storefront_loop_after', 'bootstrap_row_before_post_end');



/*--------------------------------------------------------------
## WooCommerce - Product Category
--------------------------------------------------------------*/
/**
 * Product Category Layout
 *
 * @see  sdc_apply_woo_cat_layout_one()
 * @see  sdc_apply_woo_cat_layout_two()
 * @see  sdc_apply_woo_cat_layout_three()
 */

/* Category Layout 1 */
if ( absint($woo_product_category_layout) === 1 ):
	add_action( 'init', 'sdc_apply_woo_cat_layout_one' );
endif;

/* Category Layout 2 */
if ( absint($woo_product_category_layout) === 2 ):
	add_action( 'init', 'sdc_apply_woo_cat_layout_two' );
endif;

/* Category Layout 3 */
if ( absint($woo_product_category_layout) === 3 ):
	add_action( 'init', 'sdc_apply_woo_cat_layout_three' );
endif;

add_filter( 'product_cat_class' , 'sdc_woo_cat_column' );

/*--------------------------------------------------------------
## WooCommerce - Single Product
--------------------------------------------------------------*/

/**
 * Single Product Page (content-single-product.php)
 *
 * @see  sdc_apply_woo_single_one()
 * @see  sdc_apply_woo_single_two()
 * @see  sdc_apply_woo_single_three()
 */
add_action( 'woocommerce_before_single_product_summary', 'sdc_woo_single_product_wrapper_open', 	2 );
add_action( 'woocommerce_single_product_summary', 'sdc_woo_single_product_wrapper_close', 	100 );


if ( absint($sdc_woo_single_product_layout) === 2 ):
	/* Layout 1 */
	add_action('init', 'sdc_apply_woo_single_one');
endif;


/**
 * Remove : Single Product Elements
 */
if ($sdc_woo_single_customizer_display_upsell == false){
	add_action( 'init', 'sdc_remove_woo_single_upsell' );
}

if ($sdc_woo_single_customizer_display_related == false){
	add_action( 'init', 'sdc_remove_woo_single_related' );
}

add_action('woocommerce_after_single_product_summary', 'sdc_woo_single_data_tabs_open', 8);
add_action('woocommerce_after_single_product_summary', 'sdc_woo_single_data_tabs_close', 12);

/*--------------------------------------------------------------
## WooCommerce -  Product Archive / Shop Page
--------------------------------------------------------------*/

/**
 * Remove : Product Items
 *
 * @see  sdc_apply_woo_shop_product_layout_one()
 * @see  sdc_apply_woo_shop_product_layout_two()
 */

/* Layout 1 */
if ( absint($sdc_woo_shop_product_layout) === 2 ):
	add_action('init', 'sdc_apply_woo_shop_product_layout_one' );
endif;

/* Layout 2 */
if ( absint($sdc_woo_shop_product_layout) === 3 ):
	add_action('init', 'sdc_apply_woo_shop_product_layout_two' );
endif;

add_action('init', 'sdc_apply_shop_count_result', 10 );
add_action('init', 'sdc_apply_shop_sale_badge', 10 );
add_action('init', 'sdc_apply_shop_catalog_ordering', 10 );

add_filter( 'loop_shop_columns',                  'sdc_loop_columns', 100 );


/*--------------------------------------------------------------
## WooCommerce - Sidebar Management
--------------------------------------------------------------*/

if ($sdc_hide_sidebar_shop == true){
	add_filter( 'is_active_sidebar', 'sdc_remove_woo_shop_sidebar', 10, 2 );
}

if ($sdc_hide_sidebar_cart == true){
	add_filter( 'is_active_sidebar', 'sdc_remove_woo_cart_sidebar', 10, 2 );
}

if ($sdc_hide_sidebar_checkout == true){
	add_filter( 'is_active_sidebar', 'sdc_remove_woo_checkout_sidebar', 10, 2 );
}


if ($sdc_hide_sidebar_product == true){
	add_filter( 'is_active_sidebar', 'sdc_remove_woo_product_sidebar', 10, 2 );
}


if ($sdc_footer_display_social == true){
	add_action( 'storefront_footer', 'sdc_social_menu', 30 );
}