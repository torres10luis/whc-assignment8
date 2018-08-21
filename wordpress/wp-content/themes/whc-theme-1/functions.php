<?php
/**
 * whc-theme-1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package whc-theme-1
 */

if ( ! function_exists( 'whc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function whc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on whc-theme-1, use a find and replace
		 * to change 'whc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'whc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'whc' ),
			'primary' => __( 'Primary Menu', 'whc-n' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'whc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 100,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'whc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function whc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'whc_content_width', 640 );
}
add_action( 'after_setup_theme', 'whc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function whc_widgets_init() {
	register_sidebars(4, array(
		'name'          => esc_html__( 'Sidebar %d', 'whc' ),
		'id'            => 'sidebar',

		'description'   => esc_html__( 'Add important things here.', 'whc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	 ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer', 'whc' ),
	// 	'id'            => 'footer',
	// 	'description'   => esc_html__( 'add footer item.', 'whc' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Side2', 'whc' ),
	// 	'id'            => 'side2',
	// 	'description'   => esc_html__( 'add footer item.', 'whc' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Side3 ', 'whc' ),
	// 	'id'            => 'side3',
	// 	'description'   => esc_html__( 'add important item.', 'whc' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
}
add_action( 'widgets_init', 'whc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function whc_scripts() {
	wp_enqueue_style( 'whc-bootstrap', get_template_directory_uri(). './css/bootstrap.min.css' );

	wp_enqueue_style( 'whc-style', get_stylesheet_uri() );

	wp_enqueue_style( 'customstyle', get_template_directory_uri( ) . '/css/app.css', array(), '1.0.0', 'all');

	wp_enqueue_style('whc-sass', get_template_directory_uri() . '/sass/style.scss', array(), '1.0.0', 'all');

	wp_enqueue_style( 'jquery' );

	wp_enqueue_script( 'whc-bootstrap_js', get_template_directory_uri() . './js/bootstrap.min.js', array('jquery'), '20170710', true ); 

	//enque style files

	

	wp_enqueue_script( 'whc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'whc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'whc_scripts' );

/**
 * Custom Post Type functions
 */

function whc_custom_post_type(){
	// Services Custom Post Type
	$serviceArgs = array(
		'labels' => array(
			'name' => 'Services',
			'singular_name' => 'Service', 
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search Services',
			'not_found' => 'No Items Found',
			'not_found_in_trash' => 'No items found in trash',
			'parent_item_colon' => 'Parent Item'
		),
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' =>true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'exclude_from_search' => false
	);
	register_post_type('services', $serviceArgs);

	$homeArgs = array(
		'labels' => array(
			'name' => 'Home',
			'singular_name' => 'home', 
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search Home',
		),
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' =>true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'exclude_from_search' => false
	);
	register_post_type('home', $homeArgs);

	$firstArgs = array(
		'labels' => array(
			'name' => 'first',
			'singular_name' => 'first', 
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search first',
		),
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' =>true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'exclude_from_search' => false
	);
	register_post_type('first', $firstArgs);

	$secondArgs = array(
		'labels' => array(
			'name' => 'second',
			'singular_name' => 'second', 
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search Second',
		),
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' =>true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'exclude_from_search' => false
	);
	register_post_type('second', $secondArgs);

	$thirdArgs = array(
		'labels' => array(
			'name' => 'third',
			'singular_name' => 'third', 
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search third',
		),
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' =>true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'exclude_from_search' => false
	);
	register_post_type('third', $thirdArgs);

	$fourArgs = array(
		'labels' => array(
			'name' => 'four',
			'singular_name' => 'four', 
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search ',
		),
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' =>true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'exclude_from_search' => false
	);
	register_post_type('four', $fourArgs);

};

add_action('init', 'whc_custom_post_type');





add_action( 'wp_enqueue_scripts', 'whc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// navbar walker

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . './class-wp-bootstrap-navwalker.php';
}