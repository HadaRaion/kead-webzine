<?php
function kead_files() {
  wp_enqueue_script('main-kead-js', get_theme_file_uri('/build/index.js'), null, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700;900&family=Noto+Serif+KR:wght@300;400;700&display=swap');
  wp_enqueue_style('kead_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('kead_extra_styles', get_theme_file_uri('/build/index.css'));

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
  add_image_size('kead-thumbnail-wide', 380, 285, true);
  add_image_size('kead-thumbnail-wide-2x ', 760, 570, true);
  add_image_size('kead-thumbnail-mini', 380, 187, true);
  add_image_size('kead-thumbnail-mini-2x ', 760, 374, true);
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

// Exclude node module for migration plugin 
add_filter( 'ai1wm_exclude_themes_from_export', function ( $exclude_filters ) {
  $exclude_filters[] = 'kead-theme/node_modules';
  return $exclude_filters;
} );


// KEAD color pallette
function kead_setup_theme_supported_features() {
  add_theme_support( 'editor-color-palette', array(
    array(
      'name'  => esc_attr__( 'Color Part1', 'themeLangDomain' ),
      'slug'  => 'color-part1',
      'color' => '#a1634d',
    ),
    array(
      'name'  => esc_attr__( 'Color Part2', 'themeLangDomain' ),
      'slug'  => 'color-part2',
      'color' => '#357997',
    ),
    array(
      'name'  => esc_attr__( 'Color Part4', 'themeLangDomain' ),
      'slug'  => 'color-part3',
      'color' => '#6c5992',
    ),
    array(
      'name'  => esc_attr__( 'Color Part4', 'themeLangDomain' ),
      'slug'  => 'color-part4',
      'color' => '#e48089',
    ),
  ) );
}

add_action( 'after_setup_theme', 'kead_setup_theme_supported_features' );