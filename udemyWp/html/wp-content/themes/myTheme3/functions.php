<?php 

function univ_files() {

    wp_enqueue_script( 'main-js', get_theme_file_uri( '/assets/scripts' ), array('jquery'), 1.0);
    // wp_enqueue_style( 'font-awesome',  '//font-awesome.com/ffff' );
    wp_enqueue_style( 'univ_main_style', get_theme_file_uri( '/asset/styles/styles.css' ));
    // wp_enqueue_style( 'univ_extra_style', get_theme_file_uri( '/asset/styles/style_ectra.css' ));
}
add_action( 'wp_enqueue_scripts', 'univ_files' );


function univ_features() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'univ_features' );