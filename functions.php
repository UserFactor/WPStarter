<?php
/* THEME SUPPORT */	
function wpstarter_setup() {
	load_theme_textdomain( 'wpstarter', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );	
	add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
	register_nav_menu( 'primary', __( 'Navigation Menu', 'wpstarter' ) );
	add_theme_support( 'post-thumbnails' );
	add_image_size('large', 700, '', true);
	add_image_size('medium', 250, '', true);
	add_image_size('small', 120, '', true);
	add_image_size('custom-size', 700, 200, true);
}
add_action( 'after_setup_theme', 'wpstarter_setup' );

/* ENQUEUE STYLES AND SCRIPTS */
function wpstarter_enqueue_header() {
	//global $wp_styles;
	wp_enqueue_script( 'wpstarter-functions', get_template_directory_uri() . '/js/functions.js',array('jquery'),'0.1',true);
	wp_enqueue_style( 'wpstarter-reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'wpstarter-style', get_stylesheet_uri() );	
}
add_action( 'wp_enqueue_scripts', 'wpstarter_enqueue_header' );
	
// WP Title 
	function html5reset_wp_title( $title, $sep ) {
		global $paged, $page;
	
		if ( is_feed() )
			return $title;
	
//		 Add the site name.
		$title .= get_bloginfo( 'name' );
	
//		 Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		return $title;
	}
	add_filter( 'wp_title', 'html5reset_wp_title', 10, 2 );

/* NAVIGATION */
function register_wpstarter_menu(){
    register_nav_menus(array(
        'top' => __('Top Menu', 'wpstarter'), 
        'side' => __('Side Menu', 'wpstarer')
    ));
}
add_action('init', 'register_wpstarter_menu');

/* WIDGETS */
if ( !function_exists('register_sidebar' )) {
	function wpstarter_widgets_init() {
		register_sidebar(array(
			'name'          => __('Sidebar Widgets', 'wpstarter'),
			'description' 	=> __('Main sidebar widgets', 'wpstarter'),
			'id'            => 'sidebar-widget',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
		register_sidebar(array(
			'name'          => __('Footer Widgets', 'wpstarter'),
			'description' 	=> __('Footer widgets', 'wpstarter'),
			'id'            => 'footer-widget',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	}
	add_action( 'widgets_init', 'wpstarter_widgets_init' );
}

/* ACTIONS AND FILTERS */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link')
?>
