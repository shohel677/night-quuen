<?php
/**
 * Night Queen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Night_Queen
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'night_queen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function night_queen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Night Queen, use a find and replace
		 * to change 'night-queen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'night-queen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_theme_support( 'responsive-embeds' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'logo-left-menu' => esc_html__( 'Logo Left Menu', 'night-queen' ),
				'logo-right-menu' => esc_html__( 'Logo Right Menu', 'night-queen' ),
				'mobile-menu' => esc_html__( 'Mobile Menu', 'night-queen' ),
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
				'night_queen_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		// Add theme support for custom-header
		 add_theme_support( "custom-header") ;
		// Add theme support for custom-background 
		 add_theme_support( "custom-background") ;

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
endif;
add_action( 'after_setup_theme', 'night_queen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function night_queen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'night_queen_content_width', 640 );
}
add_action( 'after_setup_theme', 'night_queen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function night_queen_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'night-queen' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'night-queen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'night_queen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function night_queen_scripts() {
	wp_enqueue_style('night-queen-font-awesome',get_template_directory_uri() . '/css/font-awesome.min.css');	
	wp_enqueue_style('night-queen-aos',get_template_directory_uri() . '/css/aos.css');	
	wp_enqueue_style('night-queen-magnific-popup',get_template_directory_uri() . '/css/magnific-popup.css');	
	wp_enqueue_style('night-queen-bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css');	
	wp_enqueue_style('night-queen-meanmenu.min',get_template_directory_uri() . '/css/meanmenu.min.css');	
	wp_enqueue_style('night-queen-pogo-slider',get_template_directory_uri() . '/css/pogo-slider.min.css');	
	wp_enqueue_style('night-queen-default',get_template_directory_uri() . '/css/default.css');
	wp_enqueue_style( 'night-queen-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('night-queen-theme-responsive',get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('night-queen-responsive',get_template_directory_uri() . '/css/responsive.css');
	
	wp_enqueue_script( 'night-queen-jquery', get_template_directory_uri() . '/js/vendor/jquery-1.12.4.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'night-queen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'night-queen-bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
	wp_enqueue_script( 'night-queen-popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'night-queen-parallax-scripts', get_template_directory_uri() . '/js/parallax.min.js', array('jquery'), '1.5.0', true );
	wp_enqueue_script( 'night-queen-aos-scripts', get_template_directory_uri() . '/js/aos.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'night-queen-one-page-nav-scripts', get_template_directory_uri() . '/js/one-page-nav-min.js', array('jquery'), '3.0.0', true );
	wp_enqueue_script( 'night-queen-isotope-scripts', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), 'v3.0.6', true );
	wp_enqueue_script( 'night-queen-imagesloaded-scripts', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '1.1.0', true );
	wp_enqueue_script( 'night-queen-magnific-popup-scripts', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );
	wp_enqueue_script( 'night-queen-countdown-scripts', get_template_directory_uri() . '/js/jquery.countdown.min.js', array('jquery'), '2.2.0', true );
	wp_enqueue_script( 'night-queen-pogo-slider-scripts', get_template_directory_uri() . '/js/jquery.pogo-slider.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'night-queen-meanmenu-scripts', get_template_directory_uri() . '/js/jquery.meanmenu.js', array('jquery'), '2.0.8', true );
	wp_enqueue_script( 'night-queen-main-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
							
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'night_queen_scripts' );

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
/**
 * Photo Gallery custom post type.
 */
require get_template_directory() . '/inc/photo-gallery.php';
/**
 * Metaboxes.
 */
require get_template_directory() . '/inc/metaboxes.php';
add_action('plugins_loaded', function(){
  if($GLOBALS['pagenow']=='post.php'){
    add_action('admin_print_scripts', 'my_admin_scripts');
    add_action('admin_print_styles',  'my_admin_styles');
  }
});

function my_admin_scripts(){
  wp_enqueue_script('jquery');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
}

// Proper way to enqueue
// wp_register_script(
//   'my-upload',
//   WP_PLUGIN_URL.'/my-script.js',
//   array('jquery','media-upload','thickbox') /* dependencies */
// );
//
// wp_enqueue_script('my-upload');

function my_admin_styles(){
  wp_enqueue_style('thickbox');
  wp_enqueue_script('media-upload');
}
