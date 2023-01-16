<?php
function my_theme_enqueue_styles() {

    $parent_style = 'genesis';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        '1.0.0'
    );
    wp_enqueue_style( 'sn-fonts',
        get_stylesheet_directory_uri() . '/assets/css/fonts.css',
        '1.0.0'
    );
    wp_enqueue_style( 'footer-styles',
        get_stylesheet_directory_uri() . '/assets/css/footer.css',
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


add_theme_support(
    'genesis-custom-logo',
    [
        'height'      => 120,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]
);

add_action( 'genesis_header', 'custom_header' );
function custom_header() {
    get_template_part( 'header' );
}

add_action( 'genesis_footer', 'custom_footer' );
function custom_footer() {
    get_template_part( 'footer' );
}


add_theme_support( 'genesis-footer-widgets', 3 );