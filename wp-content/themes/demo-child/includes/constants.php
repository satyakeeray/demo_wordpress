<?php
/**
 * Constants for the project
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Demo Child
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

// Define assets folder name
define('ASSETS_FOLDER','assets');

// Define base url
define('BASE_URL', get_site_url());

// Define theme url
define('THEME_URL', get_template_directory_uri());

// Define child theme driectory name
define('CHILD_THEME_DIR', '-child');

// Define assets folder
define( 'ASSETS_DIR', THEME_URL . CHILD_THEME_DIR. DS . ASSETS_FOLDER );

// CSS directory name
define('CSS_DIRECTORY_NAME', 'css');

// JS directory name
define('JS_DIRECTORY_NAME', 'js');

// Time format for the_time()
define( 'PROJECT_DATE_FORMAT', 'F j, Y' );