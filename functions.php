<?php


	function emai_theme_styles() {
		wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'emai_fonts', 'https://fonts.googleapis.com/css?family=Amiri|Marcellus+SC' );
		wp_enqueue_style('normalize_css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	}

	add_action('wp_enqueue_scripts', 'emai_theme_styles');

	function emai_theme_js() {
		wp_enqueue_script('main_js', get_template_directory_uri() . '/scripts/test.js', array('jquery'), '', true );
	}

	add_action('wp_enqueue_scripts', 'emai_theme_js');

	function add_async_attribute($tag, $handle) {
		if ( 'main_js' !== $handle )
			return $tag;
		return str_replace( ' src', ' defer="defer" src', $tag );
	}

	add_filter('script_loader_tag', 'add_async_attribute', 10, 2);


?>

<!--

	add_theme_support('menus');
	add_theme_support('post-thumbnails');

	function emai_excerpt_length($length) {
		return 50;
	}
	add_filter('excerpt_length', 'emai_excerpt_length', 999);

	function register_theme_menus() {
		register_nav_menus(
			array(
				'header-menu' => __('Header Menu')
			)
		);
	}

	add_action('init', 'register_theme_menus');

	function emai_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

	}

	emai_create_widget( 'Footer widget area', 'footer-widget', 'Footer widget area' );
	emai_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
	emai_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

	function exclude_category( $query ) {
		if ( $query->is_home() && $query->is_main_query() ) {
			$query->set( 'cat', '-22,-24' );
		}
	}
	add_action( 'pre_get_posts', 'exclude_category' );
  
  
-->
