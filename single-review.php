<?php

  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );

    ?>
리뷰
<div class="generic-content"><?php the_title(); ?></div>
<div class="generic-content"><?php the_content(); ?></div>


<?php 


  get_footer();

?>