<?php
/**
 * Inner-Portfolio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inner-Portfolio
 */

if ( ! function_exists( 'inner_portfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function inner_portfolio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Inner-Portfolio, use a find and replace
	 * to change 'inner-portfolio' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'inner-portfolio', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'inner-portfolio' ),
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
	add_theme_support( 'custom-background', apply_filters( 'inner_portfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'inner_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inner_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inner_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'inner_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inner_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inner-portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'inner-portfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'inner_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inner_portfolio_scripts() {
	wp_enqueue_style( 'inner-portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'inner-portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'inner-portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	//FlexSlider Code
	wp_enqueue_script('flexslider', get_template_directory_uri() .'/js/jquery.flexslider-min.js', array('jquery'));
	wp_enqueue_script('flexslider-init', get_template_directory_uri() . '/js/flexslider-init.js', array( 'jquery'));
	//FlexSlider Style
	wp_enqueue_style( 'slider-style', get_template_directory_uri() . '/js/flexslider.css' );

	//Enqueued Google Fonts
	wp_enqueue_style( 'inner-portfolio-fonts', 'https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps|Allura|Patrick+Hand+SC|Handlee|Lovers+Quarrel|Ruthie|Tangerine'); 
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inner_portfolio_scripts' );

//Option to change content font style
function content_font_style() {
	$options = get_option( 'ip_options_settings' );
		//default font style, and cursive font style font style 
		if ($options['ip_radio_field'] == 1){ ?>
			<style> 
				.entry-content {
					font-family: 'Handlee';
				}
			</style>
		<?php
		}
		elseif ($options['ip_radio_field'] == 2){ ?>
			<style> 
				.entry-content {
					font-family: 'Allura';
					font-size: 1.6em;
				}
			</style> 
		<?php 
		}
}


//Option to change background colour of Main Menu in pages
					function menu_bg_color () {
						$options = get_option( 'ip_options_settings' );
						if ($options['ip_select_field'] == 1) {?>
						<style> 
							.menu-top-container {
								background-color: #000;
							}
						</style> 
						
					<?php }
						elseif ($options['ip_select_field'] == 2) {?>
						<style> 
							.menu-top-container {
								background-color: #836b5c;
							}
						</style>
						
					<?php }
						elseif ($options['ip_select_field'] == 3) {?>
						<style>
							.menu-top-container {
								background-color: #333300;
							}
						</style> 
						
					<?php }
						elseif ($options['ip_select_field'] == 4) {?> 
						<style>
							.menu-top-container {
								background-color: #73514e;
							}
							
						</style>
					<?php
				} }



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

// Calls the file that controls the theme options
require get_stylesheet_directory() .'/inc/options.php';