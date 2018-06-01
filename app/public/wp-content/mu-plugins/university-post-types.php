<?php 

function university_post_types() {

    register_post_type('campus', array(
      "public"          => true,
      "capability_type" => 'campus',
      "map_meta_cap"    => true,
      "supports"        => array(
        'title',
        'editor',
        'excerpt'
      ),
      "rewrite"         => array(
        'slug'          => 'campuses'),
      "has_archive"     => true,
      "labels"          => array(
        'name'          => 'Campuses',
        'add_new_item'  => 'Add New Campus',
        'edit_item'     => 'Edit Campus',
        'all_items'     => 'All Campuses',
        'singular_item' => 'Campus'
      ),
      "menu_icon" => 'dashicons-location-alt',
    ));

    register_post_type('event', array(
      "public"          => true,
      'capability_type' => 'event',
      'map_meta_cap'    => true,
      "supports"        => array(
        'title',
        'editor',
        'excerpt'
      ),
      "rewrite"         => array(
        'slug'          => 'events'),
      "has_archive"     => true,
      "labels"          => array(
        'name'          => 'Events',
        'add_new_item'  => 'Add New Event',
        'edit_item'     => 'Edit Event',
        'all_items'     => 'All Events',
        'singular_item' => 'Event'
      ),
      "menu_icon" => 'dashicons-calendar-alt',
    ));
// program post type
    register_post_type('program', array(
      "public"          => true,

      "supports"        => array(
        'title',

      ),
      "rewrite"         => array(
        'slug'          => 'programs'),
      "has_archive"     => true,
      "labels"          => array(
        'name'          => 'Programs',
        'add_new_item'  => 'Add New Program',
        'edit_item'     => 'Edit Program',
        'all_items'     => 'All Programs',
        'singular_item' => 'Program'
      ),
      "menu_icon" => 'dashicons-book',
    ));
  // professor post type
    register_post_type('professor', array(

      "public"          => true,

      "supports"        => array(
        'title',
        'editor',
        'thumbnail'
      ),
      "labels"          => array(
        'name'          => 'Professors',
        'add_new_item'  => 'Add New Professor',
        'edit_item'     => 'Edit Professor',
        'all_items'     => 'All Professors',
        'singular_item' => 'Professor'
      ),
      "menu_icon" => 'dashicons-welcome-learn-more',
    ));


  //notes post type
  register_post_type('note', array(
      'capability_type' => 'note',
      'map_meta_cap'    => true,
      'show_in_rest'    => true,
      "public"          => false,
      "show_ui"         => true,
      "supports"        => array(
        'title',
        'editor',
      ),
      "labels"          => array(
        'name'          => 'Notes',
        'add_new_item'  => 'Add New Note',
        'edit_item'     => 'Edit Note',
        'all_items'     => 'All Notes',
        'singular_item' => 'Note'
      ),
      "menu_icon" => 'dashicons-welcome-write-blog',
    ));

  register_post_type('like', array(
      "public"          => false,
      "show_ui"         => true,
      "supports"        => array(
        'title',
      ),
      "labels"          => array(
        'name'          => 'Likes',
        'add_new_item'  => 'Add New Like',
        'edit_item'     => 'Edit Like',
        'all_items'     => 'All Likes',
        'singular_item' => 'Like'
      ),
      "menu_icon" => 'dashicons-heart',
   ));
} 

  add_action('init', 'university_post_types');
 ?>
  
 