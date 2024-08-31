<?php 

function univ_files() {

    wp_enqueue_script( 'main-js', get_theme_file_uri( '/assets/scripts' ), array('jquery'), 1.0);
    // wp_enqueue_style( 'font-awesome',  '//font-awesome.com/ffff' );
    wp_enqueue_style( 'univ_main_style', get_theme_file_uri( '/asset/styles/styles.css' ));
    // wp_enqueue_style( 'univ_extra_style', get_theme_file_uri( '/asset/styles/style_ectra.css' ));
}
add_action( 'wp_enqueue_scripts', 'univ_files' );


function univ_features() {

    register_nav_menu('headerMemuLocation', "HEader Memu Location");
    register_nav_menu('footerMenuOne', "Footer menu one");
    register_nav_menu('footerMenuTwo', "Footer menu two");
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'univ_features' );


function univ_post_types () {
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

}
add_action('init', 'univ_post_types');