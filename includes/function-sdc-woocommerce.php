<?php
/**
 * Functions used by plugins
 */
if ( ! class_exists( 'WC_Dependencies' ) )
	require_once 'class-wc-dependencies.php';

/**
 * WC Detection
 */
if ( ! function_exists( 'is_woocommerce_active' ) ):
	function is_woocommerce_active() {
		return WC_Dependencies::woocommerce_active_check();
	}
endif;


/*--------------------------------------------------------------
## Bootstrap Grid Class
--------------------------------------------------------------*/

if ( ! function_exists( 'bootstrap_row_before_post_start' ) ):
	function bootstrap_row_before_post_start(){
	  echo "<div class='row'>";
	}
endif;

if ( ! function_exists( 'bootstrap_row_before_post_end' ) ):
	function bootstrap_row_before_post_end(){
	  echo "</div>";
	}
endif;

if ( ! function_exists( 'sdc_column_twelve' ) ):
	function sdc_column_twelve(){
		echo '<div class="col-sm-12">';
	}
endif;

if ( ! function_exists( 'sdc_boot_col_eight' ) ):
	function sdc_boot_col_eight(){
		echo '<div class="col-sm-8">';
	}
endif;

if ( ! function_exists( 'sdc_column_six' ) ):
	function sdc_column_six(){
		echo '<div class="col-sm-6">';
	}
endif;

if ( ! function_exists( 'sdc_boot_col_four' ) ):
	function sdc_boot_col_four(){
		echo '<div class="col-sm-4">';
	}
endif;

if ( ! function_exists( 'sdc_column_three' ) ):
	function sdc_column_three(){
		echo '<div class="col-sm-3">';
	}
endif;

if ( ! function_exists( 'sdc_woo_close_div' ) ):
	function sdc_woo_close_div() { ?>
		</div>
		<?php
	}
endif;

if ( ! function_exists( 'sdc_front_canvas_open' ) ):
	function sdc_front_canvas_open(){?>
	<div class="canvas--front">
	<?php }
endif;

if ( ! function_exists( 'sdc_front_canvas_close' ) ):
	function sdc_front_canvas_close(){?>
	</div>
	<?php }
endif;


/*--------------------------------------------------------------
## WooCommerce Customization - Product Category
--------------------------------------------------------------*/

/**
 * Product Category Layout One Div Open
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_one_inner_open' ) ):
	function sdc_woo_product_category_layout_one_inner_open() { ?>
		<div class="front-product-category__card__inner">
		<?php
	}
endif;

/**
 * Product Category Layout One Div Close
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_one_inner_close' ) ):
	function sdc_woo_product_category_layout_one_inner_close() { ?>
		</div>
		<?php
	}
endif;


/**
 * Product Category Layout Two Div Open
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_two_inner_open' ) ):
	function sdc_woo_product_category_layout_two_inner_open() { ?>
		<div class="front-product-category__card__inner--l2 clearfix">
		<div class="row">
		<?php
	}
endif;

/**
 * Product Category Layout Two Div Close
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_two_inner_close' ) ):
	function sdc_woo_product_category_layout_two_inner_close() { ?>
		</div>
		</div>
		<?php
	}
endif;

/**
 * Product Category Layout Two Thumbnail Open
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_two_thumbnail_open' ) ):
	function sdc_woo_product_category_layout_two_thumbnail_open() { ?>
		<div class="product-category__thumb col-sm-5">
		<?php
	}
endif;

/**
 * Product Category Layout Two Thumbnail Close
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_two_thumbnail_close' ) ):
	function sdc_woo_product_category_layout_two_thumbnail_close() { ?>
		</div>
		<?php
	}
endif;

/**
 * Product Category Layout Two Info Open
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_two_info_open' ) ):
	function sdc_woo_product_category_layout_two_info_open() { ?>
		<div class="product-category__info col-sm-7 flexify--center">
		<?php
	}
endif;

/**
 * Product Category Layout Two Info Close
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_two_info_close' ) ):
	function sdc_woo_product_category_layout_two_info_close() { ?>
		</div>
		<?php
	}
endif;


/**
 * Product Category Layout Three Open
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_three_inner_open' ) ):
	function sdc_woo_product_category_layout_three_inner_open() { ?>
		<div class="front-product-category__card__inner--l3 col-inner">
		<div class="row">
		<?php
	}
endif;

/**
 * Product Category Layout Three Close
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_three_inner_close' ) ):
	function sdc_woo_product_category_layout_three_inner_close() { ?>
		</div>
		</div>
		<?php
	}
endif;

/**
 * Product Category Layout Three Thumbnail Open
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_three_thumbnail_open' ) ):
	function sdc_woo_product_category_layout_three_thumbnail_open() { ?>
		<div class="category-box">
		<div class="category-image">
		<?php
	}
endif;

/**
 * Product Category Layout Three Thumbnail Close
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_three_thumbnail_close' ) ):
	function sdc_woo_product_category_layout_three_thumbnail_close() { ?>
		</div>
		<?php
	}
endif;

/**
 * Product Category Layout Three Info Open
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_three_info_open' ) ):
	function sdc_woo_product_category_layout_three_info_open() { ?>
			<div class="category-text text-center">
			<div class="box-text-inner">
		<?php
	}
endif;

/**
 * Product Category Layout Three Info Close
 */
if ( ! function_exists( 'sdc_woo_product_category_layout_three_info_close' ) ):
	function sdc_woo_product_category_layout_three_info_close() { ?>
		</div>
		</div>
		</div>
		<?php
	}
endif;


/*--------------------------------------------------------------
## WooCommerce Customization - Single Product Layout
--------------------------------------------------------------*/

/**
 * Single Product Layout One Left
 */
if ( ! function_exists( 'sdc_single_product_one_left' ) ):
	function sdc_single_product_one_left(){
		echo '<div class="col-sm-7 clearfix product__single--l1">';
	}
endif;

/**
 * Single Product Layout One Right
 */
if ( ! function_exists( 'sdc_single_product_one_left' ) ):
	function sdc_single_product_one_right(){
		echo '<div class="col-sm-5 product__single--l1">';
	}
endif;


/**
 * Single Product Layout Two Left
 */
if ( ! function_exists( 'sdc_single_product_two_left' ) ):
	function sdc_single_product_two_left(){
		echo '<div class="col-sm-7 clearfix product__single--l2">';
	}
endif;



/**
 * Single Product Layout Two Right
 */
if ( ! function_exists( 'sdc_single_product_two_right' ) ):
function sdc_single_product_two_right(){
	echo '<div class="col-sm-5 product__single--l2">';
}
endif;



/**
 * Canvas Width Alternative
 */
if ( ! function_exists( 'sdc_canvas_width' ) ):
	function sdc_canvas_width(){
		echo '<div class="sdc__canvas--alt">';
	}
endif;



/*--------------------------------------------------------------
## WooCommerce Customization - Product Archive
--------------------------------------------------------------*/

/**
 * Product Archive Layout One
 */
if ( ! function_exists( 'sdc_before_woo_product_archive_item_one' ) ):
	function sdc_before_woo_product_archive_item_one() {
		global $sdc;
		$woo_product_column = esc_attr($sdc['sdc_woo_shop_product_column']);?>
		<div class="product--l1 product-holder--l1 <?php echo $woo_product_column;?>">
		<div class="product-card__inner">
		<?php
	}
endif;

/**
 * Product Archive Layout Two
 */
if ( ! function_exists( 'sdc_before_woo_product_archive_item_two' ) ):
	function sdc_before_woo_product_archive_item_two() {
		global $sdc;
		$woo_product_column = esc_attr($sdc['sdc_woo_shop_product_column']);
	?>
		<div itemscope itemtype="http://schema.org/Product" class="product-holder--l2 <?php echo $woo_product_column;?>">
		<div class="product-card__inner--l2">
		<?php
	}
endif;

/**
 * Product Archive Layout Three
 */




if ( ! function_exists( 'sdc_before_woo_archive_description_open' ) ):
	function sdc_before_woo_archive_description_open() { ?>
		<div class="col-sm-12">
		<?php
	}
endif;





if ( ! function_exists( 'sdc_woo_product_info_archive_item' ) ):
	function sdc_woo_product_info_archive_item() { ?>
		<div class="product-card__info">
		<?php
	}
endif;



if ( ! function_exists( 'sdc_woo_product_info_title_archive_item' ) ):

	function sdc_woo_product_info_title_archive_item() { ?>
		<div class="product-card__info__product">
		<?php
	}
endif;

/*--------------------------------------------------------------
## sdc WooCommerce Price
--------------------------------------------------------------*/

function sdc_woo_single_data_tabs_open(){

$sdc_woo_single_data_tab_layout = get_theme_mod('sdc_woo_single_data_tab_layout', 2);
?>

<div class="data-tabs--ver--<?php echo $sdc_woo_single_data_tab_layout;?>">

<?php }

function sdc_woo_single_data_tabs_close(){?>

</div>

<?php }




if ( ! function_exists( 'sdc_loop_columns' ) ) {
	/**
	 * Default loop columns on product archives
	 *
	 * @return integer products per row
	 * @since  1.0.0
	 */
	function sdc_loop_columns() {
		$sdc_woo_listing_product_column = get_theme_mod('sdc_woo_listing_product_column', 3);
		return apply_filters( 'sdc_loop_columns', $sdc_woo_listing_product_column );
	}
}


function reorder_woo_breadcrumb(){
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
		add_action('woocommerce_archive_description', 'woocommerce_breadcrumb', 8);
}


function sdc_woo_single_product_wrapper_open(){
	$sdc_single_product_layout_ver 					= get_theme_mod('sdc_woo_single_product_layout', 1);?>
	<div class="row product-details--<?php echo $sdc_single_product_layout_ver;?>">
<?php }

function sdc_woo_single_product_wrapper_close(){?>
	</div>
<?php }


function sdc_apply_woo_single_one(){

	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 	10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 		10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 		40 );


	add_action( 'woocommerce_before_single_product_summary', 'sdc_single_product_one_left', 		5 );
	add_action( 'woocommerce_before_single_product_summary', 'sdc_woo_close_div', 					25 );

	add_action( 'woocommerce_before_single_product_summary', 'sdc_single_product_one_right', 		30 );
	add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 		32 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 		15 );
	add_action( 'woocommerce_single_product_summary', 'sdc_woo_close_div', 							60 );

	add_action( 'woocommerce_after_single_product_summary', 'sdc_column_twelve', 					5 );
	add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_meta', 	6 );
	add_action( 'woocommerce_after_single_product_summary', 'sdc_woo_close_div', 					30 );
}


function sdc_apply_shop_count_result(){

	$sdc_woo_listing_display_product_count = get_theme_mod('sdc_woo_listing_display_product_count', true);

	if ($sdc_woo_listing_display_product_count == false){
		remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
		remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
	}
}

function sdc_apply_shop_sale_badge(){

	$sdc_woo_listing_display_sale_badge = get_theme_mod('sdc_woo_listing_display_sale_badge', true);


	if ($sdc_woo_listing_display_sale_badge == false){
		remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
	}

}

function sdc_apply_shop_catalog_ordering(){

	$sdc_woo_listing_display_product_sorting = get_theme_mod('sdc_woo_listing_display_product_sorting', true);

	if ($sdc_woo_listing_display_product_sorting == false){
		remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
	}


}

function sdc_apply_woo_shop_product_layout_one(){

	$display_title 			= get_theme_mod('sdc_woo_listing_display_title', true);
	$display_price 			= get_theme_mod('sdc_woo_listing_display_price', true);
	$display_rating 		= get_theme_mod('sdc_woo_listing_display_rating', true);
	$display_add_to_cart 	= get_theme_mod('sdc_woo_listing_display_add_to_cart', true);

	add_action( 'woocommerce_before_shop_loop_item', 			'sdc_before_woo_product_archive_item_one', 		1 );
	add_action( 'woocommerce_before_shop_loop_item_title', 		'sdc_woo_product_info_archive_item', 			12 );
	add_action( 'woocommerce_before_shop_loop_item_title', 		'sdc_woo_product_info_title_archive_item', 		15 );

	if ($display_title == false){
		remove_action( 'woocommerce_shop_loop_item_title', 		'woocommerce_template_loop_product_title', 		10 );
	}

	if ($display_rating == false){
		remove_action( 'woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 			5 );
	}

	if ($display_price == false){
		remove_action( 'woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',              10 );
	}

	if ($display_add_to_cart == false){
		remove_action( 'woocommerce_after_shop_loop_item', 		'woocommerce_template_loop_add_to_cart', 		10 );
	}

}

function sdc_apply_woo_shop_product_layout_two(){

	$display_title 			= get_theme_mod('sdc_woo_listing_display_title', true);
	$display_price 			= get_theme_mod('sdc_woo_listing_display_price', true);
	$display_rating 		= get_theme_mod('sdc_woo_listing_display_rating', true);
	$display_add_to_cart 	= get_theme_mod('sdc_woo_listing_display_add_to_cart', true);

	if ($display_title == false){
		remove_action( 'woocommerce_shop_loop_item_title', 		'woocommerce_template_loop_product_title', 		10 );
	}

	if ($display_rating == false){
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 			5 );
	}

	if ($display_price == false){
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price',             10 );
	}

	if ($display_add_to_cart == false){
		remove_action( 'woocommerce_after_shop_loop_item', 		'woocommerce_template_loop_add_to_cart', 		10 );
	}

	add_action( 'woocommerce_after_shop_loop_item_title', 		'woocommerce_template_single_excerpt', 			6 );
	add_action( 'woocommerce_before_shop_loop_item', 			'sdc_before_woo_product_archive_item_two', 		1 );
	add_action( 'woocommerce_before_shop_loop_item_title', 		'sdc_woo_product_info_archive_item', 			12 );
	add_action( 'woocommerce_before_shop_loop_item_title', 		'sdc_woo_product_info_title_archive_item', 		15 );
}

/*--------------------------------------------------------------
## WooCommerce Customization : Product Category Layout
--------------------------------------------------------------*/
/**
 * Product Category Column Grid Settings
 */
if (  ! function_exists( 'sdc_woo_cat_column' ) ):
    function sdc_woo_cat_column() {
    	$woo_product_category_column = get_theme_mod('woo_product_category_column','col-md-4');
        $classes[] = $woo_product_category_column;
        $classes[] = 'product-category sdc-cat';

        return array_unique( array_filter( $classes ) );
    }
endif;

/**
 * Product Category Layout One
 */
if ( ! function_exists( 'sdc_apply_woo_cat_layout_one' ) ):
	function sdc_apply_woo_cat_layout_one(){
		add_action( 'woocommerce_before_subcategory', 'sdc_woo_product_category_layout_one_inner_open', 5 );
		add_action( 'woocommerce_after_subcategory', 'sdc_woo_product_category_layout_one_inner_close', 12 );
	}
endif;

/**
 * Product Category Layout Two
 */
if ( ! function_exists( 'sdc_apply_woo_cat_layout_two' ) ):
function sdc_apply_woo_cat_layout_two(){
	remove_action( 'woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10 );
	remove_action( 'woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_close', 10 );
	add_action( 'woocommerce_before_subcategory', 'sdc_woo_product_category_layout_two_inner_open', 5 );
	add_action( 'woocommerce_after_subcategory', 'sdc_woo_product_category_layout_two_inner_close', 12 );
	add_action( 'woocommerce_before_subcategory_title', 'sdc_woo_product_category_layout_two_thumbnail_open', 5 );
	add_action( 'woocommerce_before_subcategory_title', 'sdc_woo_product_category_layout_two_thumbnail_close', 12 );
	add_action( 'woocommerce_shop_loop_subcategory_title', 'sdc_woo_product_category_layout_two_info_open', 5 );
	add_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_link_open', 6 );
	add_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_link_close', 11 );
	add_action( 'woocommerce_shop_loop_subcategory_title', 'sdc_woo_product_category_layout_two_info_close', 12 );
}
endif;

/**
 * Product Category Layout Three
 */
if ( ! function_exists( 'sdc_apply_woo_cat_layout_three' ) ):
	function sdc_apply_woo_cat_layout_three(){
		add_action( 'woocommerce_before_subcategory', 'sdc_woo_product_category_layout_three_inner_open', 5 );
		add_action( 'woocommerce_after_subcategory', 'sdc_woo_product_category_layout_three_inner_close', 12 );
		add_action( 'woocommerce_before_subcategory_title', 'sdc_woo_product_category_layout_three_thumbnail_open', 5 );
		add_action( 'woocommerce_before_subcategory_title', 'sdc_woo_product_category_layout_three_thumbnail_close', 12 );
		add_action( 'woocommerce_shop_loop_subcategory_title', 'sdc_woo_product_category_layout_three_info_open', 5 );
		add_action( 'woocommerce_shop_loop_subcategory_title', 'sdc_woo_product_category_layout_three_info_close', 12 );
	}
endif;


/*--------------------------------------------------------------
## WooCommerce Customization : Sidebar Management
--------------------------------------------------------------*/

/**
 * Disable sidebar in Storefront.
 *
 * @param bool $is_active_sidebar
 * @param int|string $index
 *
 * @return bool
*/

/**
 * Remove Sidebar from Single Product Pages
 */
if ( ! function_exists( 'sdc_remove_woo_product_sidebar' ) ):
	function sdc_remove_woo_product_sidebar( $is_active_sidebar, $index ) {
	    if( $index !== "sidebar-1" ) {
	        return $is_active_sidebar;
	    }

	    if( ! is_product() ) {
	        return $is_active_sidebar;
	    }

	    return false;
	}
endif;

/**
 * Remove Sidebar from Product Archive Pages
 */
if ( ! function_exists( 'sdc_remove_woo_shop_sidebar' ) ):
	function sdc_remove_woo_shop_sidebar( $is_active_sidebar, $index ) {
	    if( $index !== "sidebar-1" ) {
	        return $is_active_sidebar;
	    }

	    if( ! is_shop() ) {
	        return $is_active_sidebar;
	    }

	    return false;
	}
endif;

/**
 * Remove Sidebar from Cart Pages
 */
if ( ! function_exists( 'sdc_remove_woo_cart_sidebar' ) ):
	function sdc_remove_woo_cart_sidebar( $is_active_sidebar, $index ) {
	    if( $index !== "sidebar-1" ) {
	        return $is_active_sidebar;
	    }

	    if( ! is_cart() ) {
	        return $is_active_sidebar;
	    }

	    return false;
	}
endif;

/**
 * Remove Sidebar from Checkout Pages
 */
if ( ! function_exists( 'sdc_remove_woo_checkout_sidebar' ) ):
	function sdc_remove_woo_checkout_sidebar( $is_active_sidebar, $index ) {
	    if( $index !== "sidebar-1" ) {
	        return $is_active_sidebar;
	    }

	    if( ! is_checkout() ) {
	        return $is_active_sidebar;
	    }

	    return false;
	}
endif;