<?php 
  global $post;
  $post_slug = $post->post_name;

  get_header( '', array( 'month' => $post_slug ) );
?>

<main id="contents">
  <div class="container">
    구독
    
  </div>
</main>


<?php get_footer();

?>
?>