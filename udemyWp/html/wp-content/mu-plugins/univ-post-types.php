<?php
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

