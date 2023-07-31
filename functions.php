<?php
function kead_files() {
  wp_enqueue_script('main-kead-js', get_theme_file_uri('/build/index.js'), null, '1.0', true);
  wp_enqueue_style('kead_main_styles', get_theme_file_uri('/build/style-index.css'),  '', '20230731');
  wp_localize_script('main-kead-js', 'keadData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));
}

add_action('wp_enqueue_scripts', 'kead_files');

function kead_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('kead-thumbnail', 380, 285, true);
  add_image_size('kead-thumbnail-2x', 760, 570, true);
  add_image_size('kead-thumbnail-wide', 768, 276, true);
  add_image_size('kead-thumbnail-wide-2x', 1536, 552, true);
  add_image_size('kead-thumbnail-mini', 380, 187, true);
  add_image_size('kead-thumbnail-mini-2x', 760, 374, true);
}

add_action('after_setup_theme', 'kead_features');

//Redirect subscriber accounts out of admin and onto homepage
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
