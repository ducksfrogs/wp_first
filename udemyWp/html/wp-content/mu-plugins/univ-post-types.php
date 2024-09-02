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
      // event post
      register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
          'name' => 'Events',
          'add_new_item' => 'Add New Event',
          'edit_item' => 'Edit Event',
          'all_items' => 'All Events',
          'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
      ));


      // Program post type 

      register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor' ),
        'rewrite' => array('slug' => 'program'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
          'name' => 'Programs',
          'add_new_item' => 'Add New Programs',
          'edit_item' => 'Edit Program',
          'all_items' => 'All Programs',
          'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
      ));
    }
     
    add_action('init', 'university_post_types');