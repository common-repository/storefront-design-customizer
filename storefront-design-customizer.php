<?php
/**
 * Plugin Name:			Storefront Design Customizer
 * Plugin URI:			https://atlantisthemes.com/storefront-design-customizer/
 * Description:			Add beautiful layouts into your Storefront theme, without having to write code.
 * Version:				1.0.3
 * Author:				Towhid
 * Author URI:			https://atlantisthemes.com/
 * Requires at least:	4.0.0
 * Tested up to:		4.8
 *
 * Text Domain: storefront-design-customizer
 * Domain Path: /languages/
 *
 * @package Storefront_Design_Customizer
 * @category Core
 * @author Towhid
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Bail if Storefront isn't the active or parent theme
if ( 'storefront' !== wp_get_theme()->template ) {
    return;
}

	require_once( 'includes/function-sdc-typographic-choices.php' );
	require_once( 'includes/function-sdc-woocommerce.php' );
	require_once( 'includes/function-sdc-frontpage-section.php' );
	require_once( 'includes/function-sdc-template-helper.php' );
	require_once( 'includes/function-sdc-hooks.php' );

add_action( 'customize_register', 'sdc_customize_register', 25 );
add_action( 'wp_enqueue_scripts', 'sdc_styles' );
add_action( 'customize_controls_enqueue_scripts', 'sdc_customizer_style');


if ( ! function_exists( 'sdc_customize_register' ) ) :

	function sdc_customize_register( $wp_customize ) {
		require_once( 'includes/customizer/customizer-sdc-custom-control.php' );
		require_once( 'includes/customizer/customizer-sdc-panel-section.php' );
		require_once( 'includes/customizer/customizer-sdc-homepage-sections.php' );
		require_once( 'includes/customizer/customizer-sdc-design-settings.php' );
		require_once( 'includes/customizer/customizer-sdc-woocommerce-settings.php' );
		require_once( 'includes/customizer/customizer-sdc-pro-hook.php' );
	}

endif;

if ( ! function_exists( 'sdc_styles' ) ) :
	function sdc_styles() {
		wp_enqueue_style( 'sdc-styles', plugins_url( '/assets/css/style.css', __FILE__ ) );
		wp_enqueue_script( 'sdc-scripts', plugins_url( '/assets/js/sdc.js', __FILE__ ),  array('jquery'), '20160625', true );
	}
endif;

if ( ! function_exists( 'sdc_customizer_style' ) ) :
	function sdc_customizer_style() {
		wp_enqueue_style('CustomizerUI', plugins_url( '/assets/css/customizer-ui.css', __FILE__ ));
	}
endif;