<?php
/**
 * Plugin Name:       Hide Elementor Notes
 * Plugin URI:        https://github.com/royeyal/hide-elementor-notes
 * Description:       Hide Elementor Notes link from the admin bar
 * Version:           1.0.0
 * Author:            Roy Eyal
 * Author URI:        https://royeyal.studio/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       hide-elementor-notes
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function hide_elementor_notes() {
    wp_register_style('royeyal_elementor_editor_css_notes', plugins_url('/css/hide-notes-backend.css', __FILE__), false, '1.0.0');
    wp_enqueue_style('royeyal_elementor_editor_css_notes');
}
add_action('elementor/editor/after_enqueue_styles', 'hide_elementor_notes');
