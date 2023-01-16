<?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );



  if ( in_category('review') ) : include 'single-review.php';
  elseif ( in_category('consulting') ) : include 'single-consulting.php';
  else :
    
    if (  have_posts() ) :

    $parentCategoryID =  get_the_category()[0]->category_parent;
    $parentCategory = get_the_category_by_ID($parentCategoryID);
    $parentCategorySlug = get_category($parentCategoryID)->slug;

    $category = get_the_category()[0]->cat_name;    
    $categoryID = get_the_category()[0]->term_id;
    $categorySlug = get_category($categoryID)->slug;
?>



  <main id="contents" class="single-post <?php echo $parentCategorySlug; ?>">
    <section class="single-post__top">
      <div class="single-post__top__wrapper">
        <div class="single-post__top__title text-2xl">
  
          <div class="single-post__top__title__parent-cat font-bold"><?php echo (gettype($parentCategory) === 'string') ? $parentCategory : ''; ?></div>
          <div class="single-post__top__title__cat"><?php echo (gettype($category) === 'string')  ? $category : ''; ?></div>
        </div>

        <ul class="single-post__top__nav">
          <li class="prev-link"><?php previous_post_link( '%link', '이전기사' ); ?></li>
          <li class="next-link"><?php next_post_link( '%link', '다음기사' ); ?></li>
        </ul>
      </div>

    </section>

    <?php while ( have_posts() ) : the_post();  ?>
    <section class="single-post__contents p-top-large p-bottom-large <?php if ($categorySlug === 'kead-toon') : echo 'kead-toon'; endif; ?>">
      <div class="container">
        <div class=""><?php the_content(); ?></div>
      </div>
    </section>
    
    <?php endwhile; ?>
    
    <?php else : ?>
    <p><?php _e( '기사가 존재하지 않습니다.' ); ?></p>
    <?php endif; ?>
  </main>
  <?php endif; ?>
<?php
get_sidebar();
get_footer();


