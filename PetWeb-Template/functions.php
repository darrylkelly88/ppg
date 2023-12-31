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



?>
