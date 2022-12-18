<?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );

  $parentCategoryID =  get_the_category()[0]->category_parent;
  $parentCategory = get_the_category_by_ID($parentCategoryID);
  $category = get_the_category()[0]->cat_name;

  while ( have_posts() ) : the_post(); 
?>
  <main id="contents">
    <section class="post-top">
      <div>
        <div><?php echo $parentCategory ?></div>
        <div><?php echo $category ?></div>
      </div>

      <ul class="nav-posts">

        <li class="prev-link"><?php previous_post_link( '%link', '« Previous Post' ); ?></li>
        <li class="next-link"><?php next_post_link( '%link', 'Next Post »' ); ?></li>
       </ul>
      
    </section>
    <div class="container">
      <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'vehicle-photo'] ); ?>
      <div class="generic-content"><?php the_title(); ?></div>
      <div class="generic-content"><?php the_content(); ?></div>
    </div>

    <?php endwhile; ?>
  </main>

  <?php 
  get_footer();
?>
