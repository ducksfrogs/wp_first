<?php 
// function univ_post_types () {
//     register_post_type('event', array(
//         'public' => true,
//         'labels' => array(
//             'name' => 'Events',
//             'add_new_item' => 'Add NEw Event',
//             'edit_item' => 'edit event',
//             'all_items' => 'All Events',
//             'sigular_name' => 'Event'
//         ),
//         'menu_icon' => 'dashicons-calendar'
//     ));

// }
// add_action('init', 'univ_post_types');

     
    function university_post_types() {
      register_post_type('event', array(
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        // 'show_in_rest' => true,
        'labels' => array(
          'name' => 'Events',
          'add_new_item' => 'Add New Event',
          'edit_item' => 'Edit Event',
          'all_items' => 'All Events',
          'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
      ));
    }
     
    add_action('init', 'university_post_types');