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

function univ_adjust_queries ($query) {

    if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
    }

    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query(  )) {
        $today = date('Ymd');
        // $query->set('posts_per_page', '1');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
                array( 
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric' 
                )
         ));
    }
}

add_action('pre_get_posts', 'univ_adjust_queries');