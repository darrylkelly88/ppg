<?php
function petweb_theme_support(){
    add_theme_support( 'title-tag' );
    add_theme_support('');
}
add_action('after_setup_theme','petweb_theme_support');


function petweb_menus() {
    $locations = array(
        'primary' => "Primary Menu",
        'footer' => "Footer Menu"
    );
    register_nav_menus($locations);
}

add_action('init','petweb_menus');

function petweb_register_styles(){
    wp_enqueue_style('petweb-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2','all');
    wp_enqueue_style('petweb-custom-css', get_template_directory_uri()."/assets/css/styles.css", array('petweb-bootstrap'), '1.01','all');
}
add_action ('wp_enqueue_scripts','petweb_register_styles',1);



function petweb_register_scripts(){
    wp_enqueue_script('petweb-script-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0',true);
    wp_enqueue_script('petweb-script-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js", array(), '2.11.8',true);
    wp_enqueue_script('petweb-script-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js", array('petweb-script-popper'), '5.3.0',true);
    wp_enqueue_script('petweb-script-custom-main', get_template_directory_uri()."/assets/js/main.js", array('petweb-script-jquery','petweb-script-popper','petweb-script-bootstrap'), '1.0',true);
}
add_action ('wp_enqueue_scripts','petweb_register_scripts');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}



function print_ajax_nonce() {
    $nonce = wp_create_nonce('your_custom_nonce');
    echo "<script type='text/javascript'>\n";
    echo "var ajax_object = { ajax_url: '".admin_url('admin-ajax.php')."', nonce: '".$nonce."' };\n";
    echo "</script>";
}
add_action('wp_head', 'print_ajax_nonce');



function handle_custom_api_call() {
    // Verify the nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'your_custom_nonce')) {
        wp_send_json_error('Nonce verification failed');
        wp_die();
    }

    // Check for your parameters
    if ( isset($_POST['params']) ) {
        $params = json_decode(stripslashes($_POST['params']), true);

        // Here, make your API call and process the response
        $api_url = 'http://food_calc:3000/api/v1/food'; // Replace with your API URL
        $api_response = wp_remote_get(add_query_arg($params, $api_url));

        if ( is_wp_error($api_response) ) {
            // Handle error
            wp_send_json_error($api_response->get_error_message());
        } else {
            // Send the response back to JavaScript
            wp_send_json_success(json_decode(wp_remote_retrieve_body($api_response), true));
        }
    } else {
        wp_send_json_error('No parameters provided');
    }

    wp_die(); // this is required to terminate immediately and return a proper response
}


// Hook for logged-in users
add_action('wp_ajax_call_custom_api', 'handle_custom_api_call');

// Hook for non-logged-in users
add_action('wp_ajax_nopriv_call_custom_api', 'handle_custom_api_call');




?>
