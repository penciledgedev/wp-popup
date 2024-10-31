<?php
/*
Plugin Name: Shortcode Popup
Plugin URI: https://penciledge.net/shortcode-popup
Description: A plugin to display a popup with an embedded shortcode and a close button.
Version: 1.1
Author: Uyi Moses
Author URI: https://penciledge.net
*/

// Enqueue scripts and styles for the popup
function shortcode_popup_enqueue_scripts() {
    wp_enqueue_style('shortcode-popup-css', plugin_dir_url(__FILE__) . 'css/shortcode-popup.css');
    wp_enqueue_script('shortcode-popup-js', plugin_dir_url(__FILE__) . 'js/shortcode-popup.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'shortcode_popup_enqueue_scripts');

// Function to create the popup content
function shortcode_popup_content($atts, $content = null) {
    return '
    <div id="shortcode-popup-overlay" style="display:none;">
        <div id="shortcode-popup">
            <div id="shortcode-popup-content">
                ' . do_shortcode($content) . '
                <button id="shortcode-popup-close">Close</button>
            </div>
        </div>
    </div>';
}
add_shortcode('shortcode_popup', 'shortcode_popup_content');
