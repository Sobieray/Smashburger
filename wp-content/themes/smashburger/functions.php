<?php
/**
 * smashburger functions and definitions
 *
 * @package smashburger
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}
add_theme_support( 'post-thumbnails' );
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); 
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
if ( ! function_exists( 'smashburger_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function smashburger_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on smashburger, use a find and replace
	 * to change 'smashburger' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'smashburger', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'smashburger' ),
		'footer' => __('Footer', 'smashburger'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'smashburger_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // smashburger_setup
add_action( 'after_setup_theme', 'smashburger_setup' );
//FOUNDATION DROPDOWN 

/*
http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
*/
register_nav_menus(array(
    'top-bar-l' => 'Left Top Bar', // registers the menu in the WordPress admin menu editor
    'top-bar-r' => 'Right Top Bar'
));
 
//Foundation Nav 
 
class top_bar_walker extends Walker_Nav_Menu {
 
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
        $element->has_children = !empty($children_elements[$element->ID]);
        $element->classes[] = ($element->current || $element->current_item_ancestor) ? 'active' : '';
        $element->classes[] = ($element->has_children) ? 'has-dropdown' : '';
 
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
 
    function start_el(&$output, $item, $depth, $args) {
        $item_html = '';
        parent::start_el($item_html, $item, $depth, $args);	
 
        $output .= ($depth == 0) ? '' : '';
 
        $classes = empty($item->classes) ? array() : (array) $item->classes;	
 
        if(in_array('section', $classes)) {
            $output .= '';
            $item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html);
        }
 
        $output .= $item_html;
    }
 
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }
 
} // end top bar walker


// Breadcrumbs





function smashburger_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'smashburger' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'smashburger_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function smashburger_scripts() {

	wp_enqueue_style( 'smashburger-style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/foundation/css/normalize.css' );
	wp_enqueue_style( 'foundation-style', get_template_directory_uri() . '/foundation/css/foundation.min.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css' );


	wp_enqueue_script( 'smashburger-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'smashburger-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'foundation-modernizr', get_template_directory_uri() . '/foundation/js/vendor/modernizr.js', array(), '1', false);
	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation/js/foundation/foundation.js', array(), '1', true );
	wp_enqueue_script( 'foundation-topbar', get_template_directory_uri() . '/foundation/js/foundation/foundation.topbar.js', array(), '1', true );
	wp_enqueue_script( 'foundation-offcanvas', get_template_directory_uri() . '/foundation/js/foundation/foundation.offcanvas.js', array(), '1', true );
	if (is_page(array('growing'))) {
		wp_enqueue_script( 'foundation-slider', get_template_directory_uri() . '/foundation/js/foundation/foundation.slider.js', array(), '1', true );
	}
	if (is_page(array('menu'))) {
		wp_enqueue_script( 'foundation-tabs', get_template_directory_uri() . '/foundation/js/foundation/foundation.tab.js', array(), '1', true );
	}
	if (is_page(array('contacts'))) {
		wp_enqueue_script( 'foundation-tabs', get_template_directory_uri() . '/foundation/js/foundation/foundation.tab.js', array(), '1', true );
	}
	wp_enqueue_script( 'foundation-equalizer', get_template_directory_uri() . '/foundation/js/foundation/foundation.equalizer.js', array(), '1', true );
	if (is_page(array('home'))) {
		wp_enqueue_script( 'smashburger-parallax', get_template_directory_uri() . '/js/parallax.js', array(), '1', true );
		wp_enqueue_script( 'foundation-abide', get_template_directory_uri() . '/foundation/js/foundation/foundation.abide.js', array(), '1', true );
		wp_enqueue_script( 'homepage.js', get_template_directory_uri() . '/js/homepage.js', array(), '1',  true);
	}
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1', true );
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.js', array(), '1', true );
	wp_enqueue_script( 'blog', get_template_directory_uri() . '/js/blog.js', array(), '1', true );

	if (is_page(array('home'))) {
		wp_enqueue_script( 'smashburger-parallax', get_template_directory_uri() . '/js/parallax.js', array(), '1', true );
		wp_enqueue_script( 'foundation-tabs', get_template_directory_uri() . '/foundation/js/foundation/foundation.abide.js', array(), '1', true );
		wp_enqueue_script( 'homepage.js', get_template_directory_uri() . '/js/homepage.js', array(), '1',  true);
	}


	if (is_page(array('nutrition-dietary', 'menu'))) {
		wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/slick/slick.css' );
		wp_enqueue_script( 'slick.init.js', get_template_directory_uri() . '/slick/slick.init.js', array(), '1',  true);
		wp_enqueue_script( 'slick.js', get_template_directory_uri() . '/slick/slick.min.js', array(), '1',  true);
	}
	if (is_page(array('growing'))) {
		wp_enqueue_script( 'D3', 'http://cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js', array(), '3.5.3',  true);
		wp_enqueue_script( 'topojson', 'http://cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js', array(), '3.5.3',  true);
		wp_enqueue_script( 'datamaps', get_template_directory_uri() . '/js/datamaps.js', array(), '1', true );	
		wp_enqueue_script( 'datamap-init', get_template_directory_uri() . '/js/wereGrowing.js', array(), '1', true );
	}
	if (is_page(array('franchising'))) {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'franchise.js', get_template_directory_uri() . '/js/franchise.js', array(), '1',  true);
	}
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'smashburger_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
