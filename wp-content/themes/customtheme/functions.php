<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * Please note that missing files will produce a fatal error.
 *
 * @package Custom Theme
 * @since 1.0.0
 */

$file_includes = [
	'includes/constants.php', 			// Constansts in the projest
	'includes/custom.php',              // Custom functions
	'includes/scripts.php',             // Enqueue theme styles and scripts	
	// 'includes/project.php',             // Custom functions for this specific project
	'includes/acf.php',                 // Advanced custom fields functions
	'includes/blocks.php',              // Custom Gutenberg blocks
	// 'includes/cpt.php',                 // Custom post types setup
	
	// 'includes/ajax.php',                // Ajax related functions
	// 'includes/editor.php',              // Editor styles
	// 'includes/nav-walker.php',          // Header nav Walker
	// 'includes/api.php',                 // Api
];

/**
 * Checks if any file have error while including it.
 */
if(isset($file_includes) && !empty($file_includes) && is_array($file_includes)) {
	foreach ( $file_includes as $file ) {
		if ( ! $filepath = locate_template( $file ) ) {
			trigger_error( sprintf( __( 'Error locating %s for inclusion', 'demo_child' ), $file ), E_USER_ERROR );
		}
		require_once $filepath;
	}
}
unset( $file, $filepath );