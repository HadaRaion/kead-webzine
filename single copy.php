<?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );
?>


<?php if(in_category('review')): ?>

구독리뷰 페이지

<?php else: ?>
		 <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'vehicle-photo'] ); ?>
<div class="generic-content"><?php the_title(); ?></div>
<div class="generic-content"><?php the_content(); ?></div>

<?php endif ?>


<?php 
  get_footer();
?>

    <!-- <picture> 
      <source media="(min-width: 900px)"   
      srcset="image-lg_1x.webp 1x, image-lg_2x.webp 2x"   
      type="image/webp" > 
      <source media="(min-width: 601px)"   
      srcset="image-md_1x.webp 1x, image-md_2x.webp 2x" type="image/jpg" > 
      <source media="(max-width: 600px)"   
      srcset="image-sm_1x.webp 1x, image-sm_1x.webp 1x" type="image/jpg" > 
      <img src="image-lg_1x.jpg" type="image/jpeg" ">
      </picture> -->


      <?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );

  
  if ( in_category('review') ) {
	  include 'single-review.php';
  } elseif ( in_category('event') ) {
	  include 'single-event.php';
  } else {

?>

  <main id="contents">
    <section class="post-top">
      <div>
        <?php 
        
          $parentCategoryID =  get_the_category()[0]->category_parent;
          $parentCategory = get_the_category_by_ID($parentCategoryID);
          $category = get_the_category()[0]->cat_name;

        ?>
        <?php next_posts_link( 'Older Entries »', 0 ); ?>

        <div><?php echo $parentCategory ?></div>
        <div><?php echo $category ?></div>
      </div>
      <nav>
        <a href=""> 

          <span>이전기사</span>
        </a>
        <a href="">
          <span>다음기사</span>
        </a>
      </nav>
    </section>
    <div class="container">
      <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'vehicle-photo'] ); ?>
      <div class="generic-content"><?php the_title(); ?></div>
      <div class="generic-content"><?php the_content(); ?></div>
    </div>
  </main>
<?php }
  get_footer();
?>