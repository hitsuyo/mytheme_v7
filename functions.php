<?php

/**

 * mytheme functions and definitions

 *

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package mytheme

 */



define( 'EDD_USE_PHP_SESSIONS', false );



if ( ! function_exists( 'mytheme_setup' ) ) :

	/**

	 * Sets up theme defaults and registers support for various WordPress features.

	 *

	 * Note that this function is hooked into the after_setup_theme hook, which

	 * runs before the init hook. The init hook is too late for some features, such

	 * as indicating support for post thumbnails.

	 */

	function mytheme_setup() {

		/*

		 * Make theme available for translation.

		 * Translations can be filed in the /languages/ directory.

		 * If you're building a theme based on underscores, use a find and replace

		 * to change 'underscores' to the name of your theme in all the template files.

		 */

		load_theme_textdomain( 'mytheme', get_template_directory() . '/languages' );



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

			'menu-1' => esc_html__( 'Primary', 'mytheme_setup' ),

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

		add_theme_support( 'custom-background', apply_filters( 'umytheme_custom_background_args', array(

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

add_action( 'after_setup_theme', 'mytheme_setup' );



/**

 * Set the content width in pixels, based on the theme's design and stylesheet.

 *

 * Priority 0 to make it available to lower priority callbacks.

 *

 * @global int $content_width

 */

function mytheme_content_width() {

	// This variable is intended to be overruled from themes.

	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.

	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

	$GLOBALS['content_width'] = apply_filters( 'mytheme_content_width', 640 );

}

add_action( 'after_setup_theme', 'mytheme_content_width', 0 );





// Your code goes below



// include 'inc/icon_social.php';

include 'inc/info_web.php'; // logo website

include 'inc/main_menu_s1.php';
include 'inc/main_menu_s2.php';

include 'inc/create_side_bar.php';

include 'inc/setting.php';

include 'inc/init.php';

include 'inc/init_bonus.php';




// hook init active, call custom post type

add_action( 'init', 'chinhsach_custom_init'); 

add_action( 'init', 'shoe_custom_init');

add_action( 'init', 'myPost_custom_init');

// hook taxanomy for custom post type
// add_action( 'init', 'themes_taxonomy'); ()

add_action( 'init', 'add_custom_taxonomies', 0 );

// add_action( 'init', 'ajax_filter_posts_by_category_demo', 0);  
// add_action( 'init', 'Alert');



// add_action('template_redirect', 'remove_sidebar_shop');

// function remove_sidebar_shop() {

// if ( is_product('add-page-i.d-here') ) {

//     remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

//     }

// }



// require get_template_directory() . '/shortcode/show-posts.php';

// function script_register () {
 
// 	//Enqueuing scripts; true: load js in footer, false: not load in footer
// 	//  wp_enqueue_script('jquery');
// 	 wp_enqueue_script('my-script-bonus', get_template_directory_uri() . '/assets/js/script_bonus.js', array(), '1.1.0', true);
	 
// }
// //Adding scripts
// 	add_action ('wp_enqueue_scripts', 'script_register');


// function my_enqueued_assets() {
//     wp_deregister_script( 'jquery' );
// 	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3-3-1.js' , array('jquery'), '3.3.1', true); // default
// }
// add_action( 'wp_enqueue_scripts', 'my_enqueued_assets' );

// add_action( 'wp_enqueue_scripts', function(){
//     if (is_admin()) return; // don't dequeue on the backend
//     wp_deregister_script( 'jquery' );
//     wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3-3-1.js' , array('jquery'), '3.3.1', true);
//     wp_enqueue_script( 'jquery');
// });

// -------------------
function my_enqueue_scripts() {

	$version = '1.1.0';

	$url = get_template_directory_uri();

		// wp_enqueue_script( 'main.js', get_template_directory_uri().'/js/main.js', array( 'jquery'  ) );
		wp_localize_script( 'main.js', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')) );


	// wp_enqueue_script( 'material-js', $uri .'/assets/js/materialize.js', array('material'), $version, true );



	// wp_enqueue_script( 'jquery-js', get_template_directory_uri() .'/assets/js/jquery-3-3-1.js', array('jquery'), $version, true );

	// wp_enqueue_script( 'custom-js', get_template_directory_uri() .'/assets/js/custom.js', array('jquery'), $version, true );



		// wp_enqueue_style('material-css', get_template_directory_uri() .'/assets/css/materialize.css', array(), $version, 'all'); // default
		wp_enqueue_style('material-css', get_template_directory_uri() .'/assets/css/materialize.min.css', array(), $version, 'all'); // default



		// wp_enqueue_style('skeleton', get_template_directory_uri() . '/assets/css/skeleton.css', array(), $version, 'all'); // default
		wp_enqueue_style('skeleton', get_template_directory_uri() . '/assets/css/skeleton.min.css', array(), $version, 'all'); // default

	   

	   wp_enqueue_style('my_style', get_template_directory_uri() . '/assets/css/my_style.css', array(), '1.1.0' , 'all'); // default
		// wp_enqueue_style('my_style', get_template_directory_uri() . '/assets/css/my_style_minify.css', array(), '1.1.0' , 'all');

		wp_enqueue_style('my_style_bonus', get_template_directory_uri() . '/assets/css/my_style_bonus.css', array(), '1.1.0' , 'all'); // default

	   wp_enqueue_style( 'style', get_stylesheet_uri() ); //important


	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js' , array('jquery'), '3.3.0', true); // default
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3-3-1.js' , array('jquery'), '3.3.1', true); // default

	wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js' , array('jquery'), '1.1.0', true); // default

	// wp_enqueue_script('my-script-bonus', get_template_directory_uri() . '/assets/js/script_bonus.js' , array('jquery'), '1.1.0', true); // default

}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


/**@ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung**/

if ( ! isset( $content_width ) ) {

    /*

     * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó

     */

    $content_width = 620;

}

/*

* Thêm chức năng title-tag để tự thêm <title>

*/

add_theme_support( 'title-tag' );



/*

* Thêm chức năng post format

*/

add_theme_support( 'post-formats',

    array(

       'image',

       'video',

       'gallery',

       'quote',

       'link'

    )

 );



 /*

* Thêm chức năng custom background

*/

$default_background = array(

    'default-color' => '#e8e8e8',

 );

 add_theme_support( 'custom-background', $default_background );


/*---------------------------------------------*/

/* shortcode */






                                   