<?php
/**
 * astrogemslab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astrogemslab
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function astrogemslab_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on astrogemslab, use a find and replace
		* to change 'astrogemslab' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'astrogemslab', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' ); 

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'astrogemslab' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'astrogemslab_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'astrogemslab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function astrogemslab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'astrogemslab_content_width', 640 );
}
add_action( 'after_setup_theme', 'astrogemslab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function astrogemslab_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'astrogemslab' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'astrogemslab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Newsletter', 'callisto' ),
			'id'            => 'news',
			'description'   => esc_html__( 'Add widgets here.', 'callisto' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Price Filter', 'greenjewlry' ),
			'id'            => 'price-filter',
			'description'   => esc_html__( 'Add widgets here.', 'greenjewlry' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'astrogemslab_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function astrogemslab_scripts() {
//GOOGLE FONTS FOR SITE TEXT
wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com' );
wp_enqueue_style( 'font-google', 'https://fonts.gstatic.com' );
wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap' );

// css
wp_enqueue_style( 'all-min-css', get_template_directory_uri().'/css/all.min.css' );
wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri().'/css/bootstrap.min.css' );
wp_enqueue_style( 'swiper-bundle-min-css', get_template_directory_uri().'/css/swiper-bundle.min.css' );
wp_enqueue_style( 'main-css', get_template_directory_uri().'/css/main.css' );

	wp_enqueue_style( 'astrogemslab-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'astrogemslab-style', 'rtl', 'replace' );

//js
wp_enqueue_script( 'jquery-3.6.0.min.js
', get_template_directory_uri().'/js/jquery-3.6.0.min.js', array('jquery'), '20151215' );
wp_enqueue_script( 'bootstrap.bundle.min.js', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'), '20151215' );
wp_enqueue_script( 'swiper-bundle.min.js', get_template_directory_uri().'/js/swiper-bundle.min.js', array('jquery'), '20151215' );
	
wp_enqueue_script( 'astrogemslab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'astrogemslab_scripts' );

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

//ACF Support
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// Add extra class on nav menu

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

// Add extra class on nav menu 

function astrogemslab_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'astrogemslab_add_woocommerce_support' );

add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';
    
    return $fragments;
    
}