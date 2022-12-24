<?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );

  if (  have_posts() ) :

  $parentCategoryID =  get_the_category()[0]->category_parent;
  $parentCategory = get_the_category_by_ID($parentCategoryID);
  $parentCategorySlug = get_category($parentCategoryID)->slug;
  $category = get_the_category()[0]->cat_name;

?>



  <main id="contents" class="post <?php echo $parentCategorySlug; ?>">
    <section class="post__top">
      <div class="post__top__wrapper">
        <div class="post__top__title text-2xl ">
          <div class="post__top__title__parent-cat font-bold"><?php echo $parentCategory ?></div>
          <div class="post__top__title__cat"><?php echo $category ?></div>
        </div>

        <ul class="post__top__nav">
          <li class="prev-link"><?php previous_post_link( '%link', '이전기사' ); ?></li>
          <li class="next-link"><?php next_post_link( '%link', '다음기사' ); ?></li>
        </ul>
      </div>

    </section>

    <?php while ( have_posts() ) : the_post();  ?>

    <section class="post__contents p-top-large p-bottom-large ">
      <div class="container">

        <div class="text-xl p-top"><?php the_content(); ?></div>
      </div>
    </section>
    
    <?php endwhile; ?>
    
    <?php else : ?>
    <p><?php _e( '기사가 존재하지 않습니다.' ); ?></p>

  </main>
  <?php endif; ?>


<?php
get_sidebar();
get_footer();
