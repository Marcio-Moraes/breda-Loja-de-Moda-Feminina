<?php
/**
 * Breda functions and definitions
 *
 * @package Breda
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup
 */
function breda_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'breda' ),
			'categorias' => __( 'Menu Categorias', 'breda' ),
		)
	);

	// Add custom logo support.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'breda_setup' );

/**
 * Enqueue scripts and styles
 */
function breda_scripts() {
	// Geral CSS
	wp_enqueue_style(
		'breda-geral-style',
		get_template_directory_uri() . '/assets/css/geral.css',
		array(),
		'1.0.0'
	);
	// Enqueue header CSS
	wp_enqueue_style(
		'breda-header-style',
		get_template_directory_uri() . '/template-parts/css/header.css',
		array(),
		'1.0.0'
	);

	// Enqueue footer CSS
	wp_enqueue_style(
		'breda-footer-style',
		get_template_directory_uri() . '/template-parts/css/footer.css',
		array(),
		'1.0.0'
	);

	// Enqueue newsletter CSS
	wp_enqueue_style(
		'breda-newsletter-style',
		get_template_directory_uri() . '/template-parts/css/newsletter.css',
		array(),
		'1.0.0'
	);

	// Enqueue main stylesheet
	wp_enqueue_style(
		'breda-style',
		get_stylesheet_uri(),
		array(),
		'1.0.0'
	);

	// Enqueue header JavaScript
	wp_enqueue_script(
		'breda-header-script',
		get_template_directory_uri() . '/assets/header.js',
		array(),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'breda_scripts' );


function breda_add_woocommerce_support() {
	add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'breda_add_woocommerce_support');


