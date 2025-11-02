<?php
function elearning_enqueue_scripts() {
    wp_enqueue_style('elearning-style', get_stylesheet_uri());
    wp_enqueue_style('elearning-main', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('elearning-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'elearning_enqueue_scripts');

// Register a custom navigation menu
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary_menu' => __( 'Primary Menu' ), // You can name it anything
        )
    );
}
add_action( 'init', 'mytheme_register_menus' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// Register widget areas
function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'mytheme' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Add widgets here for the main sidebar.', 'mytheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title mb-3">',
        'after_title'   => '</h5>',
    ) );

    // Example: Footer widget area
    register_sidebar( array(
        'name'          => __( 'Footer Widget', 'mytheme' ),
        'id'            => 'footer-widget',
        'description'   => __( 'Widgets in this area will appear in the footer.', 'mytheme' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s col-md-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-white mb-3">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

?>
