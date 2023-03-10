<?php
/**
 * Constants for the project
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom Theme
 * @since 1.0.0
 */


/**
 * Theme constants
 *
 * Define basic constants for the themes
 *
 * This constants can be use in the all over the themes
 */

//Define directory separator in other constan.
define('DS', '/');

// Define base url
define('BASE_URL', get_site_url());

// Define theme url
define('THEME_URL', get_template_directory_uri());

// Define child theme folder name
define('CHILD_THEME_FOLDER_NAME', '');

// Define assets folder name
define('ASSETS_FOLDER_NAME','assets');

// CSS folder name
define('CSS_FOLDER_NAME', 'css');

// JS folder name
define('JS_FOLDER_NAME', 'js');

// Image folder name
define('IMAGE_FOLDER_NAME', 'images');

// Define assets folder path
define( 'ASSETS_FOLDER_PATH', THEME_URL . CHILD_THEME_FOLDER_NAME. DS . ASSETS_FOLDER_NAME );

// Define the css path
define('CSS_PATH', ASSETS_FOLDER_PATH . DS . CSS_FOLDER_NAME. DS);

// Define the js path
define('JS_PATH', ASSETS_FOLDER_PATH . DS . JS_FOLDER_NAME. DS);

// Define the images path
define('IMAGES_PATH', ASSETS_FOLDER_PATH . DS . IMAGE_FOLDER_NAME. DS);

// Define the logo file name
define('LOGO_IMAGE', IMAGES_PATH.'logo.png');

// Time format for the_time()
define( 'PROJECT_DATE_FORMAT', 'F j, Y' );