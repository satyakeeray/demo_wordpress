<?php
/**
 * Setup function for the project
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * @package Demo Child
 * @since 1.0.0
 */


/**
 * Theme assets
 *
 * Define variable to store asset directory folder in it.
 *
 * That can be used afterward to call stylesheet / scripts etc
 */


// Define bundle version
//DEFINE( 'ASSET_VERSION_JS', filemtime( ASSETS_DIR . '/js/bundle.js' ) );
//DEFINE( 'ASSET_VERSION_CSS', filemtime( ASSETS_DIR . '/css/bundle.css' ) );

// 

/**
 * demo_assets function
 * Theme assets
 *
 * Enqueue and Dequeue required files
 */
function demo_assets() {

	// Enqueue theme styles
	wp_enqueue_style( 'demo-theme-stylesheet', ASSETS_DIR . DS . CSS_DIRECTORY_NAME . DS . 'style.css?v=' . get_assets_file_version('style.css'), false, null );

	// Eliminate the emoji script
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Enqueue comments reply script on single post pages
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( ! is_admin() && ! is_user_logged_in() ) {
		// Deregister dashicons on frontend
		wp_deregister_style( 'dashicons' );
	}
	wp_enqueue_script( 'jquery' );

	// Register project scripts
	//wp_register_script( 'demo-theme-scripts', ASSETS_DIR . '/js/bundle.min.js?v=' . ASSET_VERSION_JS, array( 'jquery' ), null, false );

	// if ( is_page_template( 'templates/template-home.php' ) ) {
	// wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/vendor/owl.carousel.js', array( 'jquery' ), null, false );
	// wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/vendor/owl.carousel.js', array( 'jquery' ), null, false );
	// wp_enqueue_script( 'home-hero-scripts', get_template_directory_uri() . '/templates/js/home.js', array( 'jquery' ), null, false );
	// }
	/*if ( is_page_template( 'templates/template-team.php' ) ) {
		wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/vendor/jquery-magnificpopup.js', array( 'jquery' ), null, false );
	}*/

	// Localize
	/*wp_localize_script(
		'glide-theme-scripts',
		'localVars',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
		)
	);*/

	// Enqueue project scripts
	//wp_enqueue_script( 'glide-theme-scripts' );
}

add_action( 'wp_enqueue_scripts', 'demo_assets' );

/*function wpdocs_enqueue_custom_admin_style() {
	wp_enqueue_style( 'sample-editor-styles', get_template_directory_uri() . '/assets/css/editor-style.min.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );


// registering dashicons
function glide_custom_dashicons() {
	 wp_enqueue_style( 'sample-dashicons-styles', esc_url( get_template_directory_uri() ) . '/assets/css/dashicons.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'glide_custom_dashicons' );
*/


/**
 * get_assets_file_version function
 * Theme assets
 *
 * Get files version of assets directory
 */

function get_assets_file_version($file_name) {
    $file_sub_path = '';
    if($file_name) {
        $file_name_array = explode('.', $file_name);
        $file_extension  = (is_array($file_name_array) && !empty($file_name_array)) ? strtolower(end($file_name_array)) : '';
        if($file_extension == 'js') {
            $file_sub_path = JS_DIRECTORY_NAME . DS . $file_name;
        }
        if($file_extension == 'css') {
            $file_sub_path = CSS_DIRECTORY_NAME . DS . $file_name;
        }
    }    
    return $file_path = ASSETS_DIR . DS . $file_sub_path;
    return $file_version = @filemtime($file_path);
}