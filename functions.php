<?php
/**
 * Website-teardown functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Website-teardown
 */

if ( ! function_exists( 'website_teardown_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function website_teardown_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Website-teardown, use a find and replace
	 * to change 'website-teardown' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'website-teardown', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'website-teardown' ),
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
	add_theme_support( 'custom-background', apply_filters( 'website_teardown_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'website_teardown_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function website_teardown_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'website_teardown_content_width', 640 );
}
add_action( 'after_setup_theme', 'website_teardown_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function website_teardown_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'website-teardown' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'website-teardown' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'website_teardown_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function website_teardown_scripts() {
	wp_enqueue_style( 'website-teardown-style', get_stylesheet_uri() );

	wp_enqueue_script( 'website-teardown-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'website-teardown-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_style( 'font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/js/vendor/slick/slick.css', array(), '1.0', 'all');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0', 'all');
	wp_enqueue_style( 'litty', get_template_directory_uri() . '/js/vendor/lity/lity.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array ( 'jquery' ), 1.0, false);
	
	 // Footer Scripts
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/vendor/jquery.min.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/vendor/slick/slick.min.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script( 'lity', get_template_directory_uri() . '/js/vendor/lity/lity.min.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script( 'jquery-inview', get_template_directory_uri() . '/js/vendor/jquery.inview.min.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.0, true);
	
	if( is_singular()) {
		wp_enqueue_script( 'jquery-easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array ( 'jquery' ), 1.0, true);
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'website_teardown_scripts' );

/**
 * Get all CPT UI Post Types
 */
function cptui_register_my_cpts() {

	/**
	 * Post Type: Website Teardowns.
	 */

	$labels = array(
		"name" => __( 'Website Teardowns', 'gabfire' ),
		"singular_name" => __( 'Website Teardown', 'gabfire' ),
	);

	$args = array(
		"label" => __( 'Website Teardowns', 'gabfire' ),
		"labels" => $labels,
		"description" => "This post type is for website teardowns.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "website_teardowns",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "teardowns", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author" ),
	);

	register_post_type( "teardowns", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


/**
 * Get all CPT UI Taxonomies
 */
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Teardown Categories.
	 */

	$labels = array(
		"name" => __( 'Teardown Categories', 'gabfire' ),
		"singular_name" => __( 'Teardown Category', 'gabfire' ),
	);

	$args = array(
		"label" => __( 'Teardown Categories', 'gabfire' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Teardown Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'teardown_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "teardown_category", array( "teardowns" ), $args );

	/**
	 * Taxonomy: Teardown Tags.
	 */

	$labels = array(
		"name" => __( 'Teardown Tags', 'gabfire' ),
		"singular_name" => __( 'Teardown Tag', 'gabfire' ),
	);

	$args = array(
		"label" => __( 'Teardown Tags', 'gabfire' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Teardown Tags",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'teardown_tags', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "teardown_tags", array( "teardowns" ), $args );

	/**
	 * Taxonomy: Participants.
	 */

	$labels = array(
		"name" => __( 'Participants', 'gabfire' ),
		"singular_name" => __( 'Participant', 'gabfire' ),
	);

	$args = array(
		"label" => __( 'Participants', 'gabfire' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Participants",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'participants', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "participants", array( "teardowns" ), $args );

	/**
	 * Taxonomy: Sources.
	 */

	$labels = array(
		"name" => __( 'Sources', 'gabfire' ),
		"singular_name" => __( 'Source', 'gabfire' ),
	);

	$args = array(
		"label" => __( 'Sources', 'gabfire' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Sources",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'source', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "source", array( "teardowns" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
 
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
