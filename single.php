<?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );
?>


<?php if(in_category('review')): ?>

구독리뷰 페이지

<?php else: ?>

<div class="generic-content"><?php the_title(); ?></div>
<div class="generic-content"><?php the_content(); ?></div>

<?php endif ?>


<?php 
  get_footer();
?>