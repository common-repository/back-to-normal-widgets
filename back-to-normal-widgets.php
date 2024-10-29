<?php
/*
* Plugin Name: Back to Normal Widgets
* Plugin URI:  https://www.gabrieleferrari.net/back-to-normal-widget-plugin/
* Description: Restores the classic widgets settings screens and disables the block editor from managing widgets.
* Version:     1.0.0
* Author:      Gabriele Ferrari
* Author URI:  https://www.gabrieleferrari.net
* License:     GPL2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Does not permit Gutenberg to edit widgets
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );

// Disables any other the block editor from editing widgets
add_filter( 'use_widgets_block_editor', '__return_false' );

// Redirect away from the block editor when attempting to access it
add_action( 'load-customize.php', function() {
	wp_safe_redirect( admin_url( 'widgets.php' ) );
	exit;
} );

?>
