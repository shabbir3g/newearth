<?php
/**
 * newearth functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newearth
 */

if ( ! function_exists( 'newearth_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function newearth_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on newearth, use a find and replace
		 * to change 'newearth' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'newearth', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Main Menu', 'newearth' ),
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
		add_theme_support( 'custom-background', apply_filters( 'newearth_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'newearth_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newearth_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'newearth_content_width', 640 );
}
add_action( 'after_setup_theme', 'newearth_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newearth_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'newearth' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'newearth' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'newearth_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function newearth_scripts() {
	
	
	
	wp_enqueue_style( 'newearth-reboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css');
	wp_enqueue_style( 'newearth-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
	wp_enqueue_style( 'newearth-fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css');
	wp_enqueue_style( 'newearth-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'newearth-style', get_stylesheet_uri() );
	wp_enqueue_style( 'newearth-responsive', get_template_directory_uri() . '/css/responsive.css');
	
	

	wp_enqueue_script( 'newearth-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'newearth-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'newearth-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newearth_scripts' );

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



/* ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(
        array(
            'page_title'  => 'Theme Settings',
            'menu_title'  => 'Theme Settings',
            'menu_slug'   => 'theme-settings',
            'capability'  => 'edit_posts',
            'redirect'    => true,
            'position' => 61,
            'icon_url'    => 'dashicons-layout'
        )
    );
}

