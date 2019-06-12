<?php
/**
 * Theme main functions
 *
 * @package emaidalat
 */

/**
 * Theme support
 */
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails', [ 'post', 'page' ] );
add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'customize-selective-refresh-widgets' );

/**
 * Load CSS
 */
function emai_theme_styles() {
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', [], '1.0', 'all' );
	wp_enqueue_style( 'emai_fonts', 'https://fonts.googleapis.com/css?family=EB+Garamond|Marcellus+SC', [], '1.0', 'all' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', [], '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'emai_theme_styles' );

/**
 * Load JS
 */
function emai_theme_js() {
	wp_enqueue_script( 'fp_extensions', get_template_directory_uri() . '/scripts/fullpage.extensions.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'fp_fading', get_template_directory_uri() . '/scripts/fullpage.fadingEffect.min.js', array( 'jquery', 'fp_extensions' ), '1.0', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/scripts/main.js', array( 'jquery', 'fp_extensions', 'fp_fading' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'emai_theme_js' );

/**
 * Widget areas
 */
function emai_create_widget( $name, $id, $description ) {
	register_sidebar(
		array(
			'name'          => ( $name ),
			'id'            => $id,
			'description'   => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="module-heading">',
			'after_title'   => '</h2>',
		)
	);
}
emai_create_widget( 'Side Footer Widget Area', 'side-footer-widget', 'Footer widget area within side menu footer' );
emai_create_widget( 'Mobile Footer Widget Area', 'mobile-footer-widget', 'Mobile footer widget area within side menu footer' );

/**
 * Nav menus
 */
function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'       => __( 'Header Menu' ),
			'menus-nav'   => __( 'Menus Navigation' ),
		)
	);
}
add_action( 'init', 'register_theme_menus' );

/**
 * JS async
 */
function add_async_attribute( $tag, $handle ) {
	if ( 'main_js' !== $handle )
		return $tag;
	return str_replace( ' src', ' defer="defer" src', $tag );
}
add_filter( 'script_loader_tag', 'add_async_attribute', 10, 2 );

/**
 * Custom taxonomies
 */
function appetiser_taxonomy_query( $args ) {

	// modify args.
	$args['orderby'] = 'count';
	$args['order'] = 'ASC';

	// return.
	return $args;
}
add_filter( 'acf/fields/taxonomy/query', 'appetiser_taxonomy_query', 10, 3 );
