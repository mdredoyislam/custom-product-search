<?php
/**
 * Plugin Name: Custom Product Search
 * Description: Custom Product Search with a form and popup details.
 * Version: 1.0
 * Author: Redoy Islam
 */

// Enqueue Scripts
function cps_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-search', plugin_dir_url(__FILE__) . 'assets/js/search.js', array('jquery'), null, true);
    wp_enqueue_style('custom-form-style', plugin_dir_url(__FILE__) . 'assets/css/main-style.css', null, false);
    wp_localize_script('custom-search', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'cps_enqueue_scripts');

require_once plugin_dir_path(__FILE__)."tgm/class-tgm-plugin-activation.php";
require_once plugin_dir_path(__FILE__)."tgm/config-tgm.php";
require_once plugin_dir_path(__FILE__)."includes/post-type-meta.php";

// Shortcode for displaying the form
function cps_display_search_form() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'includes/search-form.php';
    return ob_get_clean();
}
add_shortcode('custom_product_search', 'cps_display_search_form');

// AJAX handler for search results
function cps_search_products() {
    include plugin_dir_path(__FILE__) . 'includes/search-results.php';
    wp_die();
}
add_action('wp_ajax_cps_search_products', 'cps_search_products');
add_action('wp_ajax_nopriv_cps_search_products', 'cps_search_products');

// AJAX handler for popup details
function cps_get_product_details() {
    $product_id = intval($_GET['product_id']);
    
    if ($product_id) {
        $product = get_post($product_id);
        echo '<h2>' . $product->post_title . '</h2>';
        echo '<p>' . $product->post_content . '</p>';
    }
    
    wp_die();
}
add_action('wp_ajax_cps_get_product_details', 'cps_get_product_details');
add_action('wp_ajax_nopriv_cps_get_product_details', 'cps_get_product_details');
