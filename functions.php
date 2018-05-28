<?php
/**
 * mhns functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mhns
 */

if ( ! function_exists( 'mhns_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mhns_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mhns, use a find and replace
		 * to change 'mhns' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mhns', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mhns' ),
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

		/**
		*	Custom Header
		*/

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mhns_custom_background_args', array(
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
add_action( 'after_setup_theme', 'mhns_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mhns_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mhns_content_width', 640 );
}
add_action( 'after_setup_theme', 'mhns_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mhns_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mhns' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mhns' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mhns_widgets_init' );

/**
* INLINE CRITICAL CSS - Adds inline css to wp_head.
* styles for the above the fold content.
*/
 function critical_css() {
    ?>
        <?php get_template_part( 'css/aboveFoldCSS' ); ?>
    <?php
}

add_action('wp_head', 'critical_css');

/**
* Below the Fold CSS
* styles for the below the fold content.
*/
function belowTheFold_css() {
	wp_register_style( 'btf', get_template_directory_uri() . '/css/belowFold.css', array(), '1.1', 'all' );
	wp_enqueue_style('btf');
}

add_action('wp_footer', 'belowTheFold_css');

/**
* 900px and up CSS - Adds css via media query in link tag.
* styles for the above the fold content.
* Weird bug - it adds the css to the bottom of the page - happy accident
*/
	function largeDevice_css() {
		wp_register_style( '900px', get_template_directory_uri() . '/css/900px.css', array(), '1.2', '(min-width: 899px)' );
		wp_enqueue_style('900px');
	}

add_action('wp_footer', 'largeDevice_css');

/**
* Enqueue scripts and styles.
* wp_enqueue_script( 'mhns-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
* wp_enqueue_script( 'mhns-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
*/
function mhns_scripts() {
		wp_enqueue_style( 'mhns-style', get_stylesheet_uri(), array(), '2.0', 'print' );
		wp_enqueue_script( 'mhns-nav', get_template_directory_uri() . '/js/nav.js', array(), '20180526', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mhns_scripts' );

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
