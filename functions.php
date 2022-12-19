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


add_action('wp_enqueue_scripts', 'kead_files');

function kead_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('kead-thumbnail', 380, 285, true);
  add_image_size('kead-thumbnail-2x', 760, 570, true);
  add_image_size('kead-thumbnail-long', 380, 680, true);
  add_image_size('kead-thumbnail-long-2x ', 760, 1360, true);
  add_image_size('kead-thumbnail-wide', 380, 285, true);
  add_image_size('kead-thumbnail-wide-2x ', 760, 570, true);
}

add_action('after_setup_theme', 'kead_features');



function pageBanner($title = NULL) {
  
  if (!$title) {
    $title = get_the_title();
  }
  ?>

  <div class="page-banner">
    <div class="page-banner__logo">
      <img src="<?php echo get_theme_file_uri('/images/logos/kead-webzine-logo.svg'); ?>" alt="장애인과 일터 로고">
    </div>
    <h1 class="page-banner__title"><?php echo $title ?></h1>
  </div>

<?php }


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

add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'themes/kead-theme/node_modules';
  return $exclude_filters;
});