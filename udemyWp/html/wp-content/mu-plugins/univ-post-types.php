<?php
function univ_post_types () {
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add NEw Event',
            'edit_item' => 'edit event',
            'all_items' => 'All Events',
            'sigular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

}
add_action('init', 'univ_post_types');

