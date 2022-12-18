<?php 
  global $post;
  $post_slug = $post->post_name;

  get_header( '', array( 'month' => $post_slug ) );
?>

<main id="contents">
  <div class="container">
이전페이지
    
  </div>
</main>


<?php get_footer();

?>
