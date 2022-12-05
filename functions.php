<?php

// function kead_files() {
//   wp_enqueue_script('main-kead-js', get_theme_file_uri('/build/index.js'), NULL '1.0', true);
//   // wp_enqueue_style('custome-fonts', '//fonts.googleapis.com/css?family=Black+Han+Sans:400');
//   wp_enqueue_style('kead_main_styles', get_theme_file_uri('/build/style-index.css'));
//   wp_enqueue_style('kead_extra_styles', get_theme_file_uri('/build/index.css'));

//   wp_localize_script('main-kead-js', 'keadData', array(
//     'root_url' => get_site_url(),
//     'nonce' => wp_create_nonce('wp_rest')
//   ));

// }

// add_action('wp_enqueue_scripts', 'kead_files');

// function kead_features() {
//   add_theme_support('title-tag');
//   add_theme_support('post-thumbnails');
//   add_image_size('kead-main', 904, 508, true);
//   add_image_size('kead-works', 467, 262, true);
// }

// add_action('after_setup_theme', 'kead_features');

// function kead_post_types() {
//   register_post_type('work', array(
//     'public' => true,
//     'supports' => array('title', 'thumbnail'),
//     'taxonomies' => array('category'),
//     'labels' => array(
//       'name' => 'Works',
//       'add_new_item' => 'Add New Work',
//       'edit_item' => 'Edit Work',
//       'all_items' => 'All Works',
//       'singular_name' => 'Work'
//     ),
//     'menu_icon' => 'dashicons-video-alt3'
//   ));
// }
// add_action('init', 'kead_post_types');


// Redirect subscriber accounts out of admin and onto homepage
add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    wp_redirect(site_url('/'));
    exit;
  }
}

add_action('wp_loaded', 'noSubsAdminBar');

function noSubsAdminBar() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}

add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'themes/kead-theme/node_modules';
  return $exclude_filters;
});

