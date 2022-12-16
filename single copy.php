<?php

  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );

  if ( in_category('review') ) {
	  include 'single-review.php';
  } elseif ( in_category('event') ) {
	  include 'single-event.php';
  } else {

?>


<div class="generic-content"><?php the_title(); ?></div>
<div class="generic-content"><?php the_content(); ?></div>

<?php }
  get_footer();
?>