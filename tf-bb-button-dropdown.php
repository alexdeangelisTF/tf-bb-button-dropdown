<?php

/**
 * Plugin Name: TF BB Clickable Dropdown
 * Description: A Beaver Builder Button with dropdown items
 * Version: 1.0.0
 * Author: Thinking Fox
 * Author URI: https://www.thinkingfox.com
 */
define( 'TF_BB_CLICKABLE_DROPDOWN_DIR', plugin_dir_path( __FILE__ ) );
define( 'TF_BB_CLICKABLE_DROPDOWN_URL', plugins_url( '/', __FILE__ ) );

function tf_bb_clickable_dropdown_module() {
	if ( class_exists( 'FLBuilder' ) ) {
		// Include your custom modules here.
		require_once 'tf-button-dropdown/tf-button-dropdown.php';
	}
}
add_action( 'init', 'tf_bb_clickable_dropdown_module' );