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
 * Setup the style and scripts files
 *
 * This can be used afterward to call stylesheet / scripts etc
 */


/**
 * demo_assets function
 * Theme assets
 *
 * Enqueue required files
 */
function demo_assets() {
	// Stylesheet Files Array
	// Each key of the array should be unique
	$stylesheet_files = [
		'google-font-1' => 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap',
		'google-font-2' => 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap',
		'font-awesome' 	=> 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
		'demo-style' 	=> 'style.css',
	];	
	add_stylesheet_and_scripts($stylesheet_files, 'css');

	// Javascript Files Array
	// Each key of the array should be unique
	$script_files = [
		'jquery-min' 	=> 'https://code.jquery.com/jquery-3.4.1.min.js',
		'bootstrap-min' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
		'main' 			=> 'main.js',
	];
	add_stylesheet_and_scripts($script_files, 'js');	
}

add_action( 'wp_enqueue_scripts', 'demo_assets' );



function add_stylesheet_and_scripts($files_array, $file_type='js') {
	if(isset($files_array) && is_array($files_array) && !empty($files_array)) {
		foreach($files_array as $handle => $file) {
			$file_check  = explode(DS, $file);
			$folder_Name = ($file_type == 'css') ? CSS_FOLDER_NAME : JS_FOLDER_NAME;
			$file_path   = (count($file_check) > 1) ? $file : ASSETS_FOLDER_PATH . DS . $folder_Name . DS . $file;
			$file_type   = strtolower($file_type);
			if(strtolower($file_type) == 'css') {
				wp_enqueue_style($handle, $file_path);
			} else {
				wp_enqueue_script($handle, $file_path);
			}
		}
	}
}