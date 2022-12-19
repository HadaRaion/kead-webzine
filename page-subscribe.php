<?php 
  global $post;
  $post_slug = $post->post_name;

  get_header( '', array( 'month' => $post_slug ) );
  pageBanner('구독신청')
?>

<main id="contents">
  <div class="container">
    구독
    
  </div>
</main>


<?php get_footer();

?>
?>