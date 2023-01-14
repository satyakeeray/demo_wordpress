<?php
/**
 * Functions for advanced custom fields plugin
 *
 * @link https://www.advancedcustomfields.com/resources/
 *
 * @package Custom Theme
 * @since 1.0.0
 */

/**
 * Build ACF based theme Options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	$option_page = acf_add_options_page(
		array(
			'page_title' => __( 'Theme Options', 'custom_theme' ),
			'menu_title' => __( 'Theme Options', 'custom_theme' ),
			'menu_slug'  => 'acf-options',
			'capability' => 'edit_posts',
			'redirect'   => false,
			'position'   => 2,
		)
	);
}

/**
 * Render custom ACF blocks
**/

function glide_acf_block_callback( $block ) {
    $slug = str_replace( 'acf/', '', $block['name'] );
    
    // include a template part from within the "template-parts/block" folder
    if ( file_exists( get_theme_file_path( "/blocks/block-{$slug}.php" ) ) ) {
        include get_theme_file_path( "/blocks/block-{$slug}.php" );
    }
}