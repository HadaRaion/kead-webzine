<?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );


  if (  have_posts() ) :

  $parentCategoryID =  get_the_category()[0]->category_parent;
  $parentCategory = get_the_category_by_ID($parentCategoryID);
  $parentCategorySlug = get_category($parentCategoryID)->slug;
  $category = get_the_category()[0]->cat_name;

?>



  <main id="contents" class="single-post survey <?php echo $parentCategorySlug; ?>">
    <section class="single-post__top">
      <div class="single-post__top__wrapper">
        <div class="single-post__top__title text-2xl ">
          <div class="single-post__top__title__parent-cat font-bold"><?php echo $parentCategory ?></div>
          <div class="single-post__top__title__cat"><?php echo $category ?></div>
        </div>

        <ul class="single-post__top__nav">
          <li class="prev-link"><?php previous_post_link( '%link', '이전기사' ); ?></li>
          <li class="next-link"><?php next_post_link( '%link', '다음기사' ); ?></li>
        </ul>
      </div>

    </section>

    <?php while ( have_posts() ) : the_post();  ?>

    <section class="single-post__contents p-top-large p-bottom-large ">
      <div class="container">

        <div class="page-banner p-top-large p-bottom-large">
          <h1 class="page-banner__title text-7xl p-top-small">독자통신</h1>
          <h2 class="page-banner__title text-6xl font-400">
            독자 여러분의 의견을<span class="line-break"> 남겨주세요</span>
          </h2>
        </div>

        <!-- <div class="kead-reviews p-bottom-large"> -->
          <!-- <ul class=""> -->
            <?php 
             $reviewer1 = get_field('kead-review-name-1');
             $reviewer2 = get_field('kead-review-name-2');
             $reviewer3 = get_field('kead-review-name-3');
             $reviewer4 = get_field('kead-review-name-4');
             $review1 = get_field('kead-review-1');
             $review2 = get_field('kead-review-2');
             $review3 = get_field('kead-review-3');
             $review4 = get_field('kead-review-4');
            ?>
            <?php if ( $reviewer1  ) : ?>
            <li>
              <div class="text-3xl font-bold kead-reviews__name"><?php echo $reviewer1 ?></div>
              <p class="text-xl"><?php echo $review1 ?></p>
            </li>
            <?php endif; ?>

            <?php if ( $reviewer2  ) : ?>
            <li>
              <div class="text-3xl font-bold kead-reviews__name">bbb<?php echo $reviewer2 ?></div>
              <p class="text-xl"><?php echo $review2 ?></p>
            </li>
            <?php endif; ?>

            <?php if ( $reviewer3  ) : ?>
            <li>
              <div class="text-3xl font-bold kead-reviews__name"><?php echo $reviewer3 ?>aa</div>
              <p class="text-xl"><?php echo $review3 ?></p>
            </li>
            <?php endif; ?>

            <?php if ( $reviewer4  ) : ?>
            <li>
              <div class="text-3xl font-bold kead-reviews__name"><?php echo $reviewer4 ?></div>
              <p class="text-xl"><?php echo $review4 ?></p>
            </li>
            <?php endif; ?>
          <!-- </ul> -->
        <!-- </div> -->
        <div class="survey-form p-bottom">
          <div class="survey-form__wrapper">
            <h3 class="t-center text-4xl p-top">
              [장애인과 일터] 독자 여러분의<br />
              소중한 의견을 기다립니다
            </h3>
            <p class="t-center text-xl p-top-small">
              재미있게 읽은 기사, 편집부에 바라는 점 등<br />
              구독 후기를 남겨 주세요.<br />
              ‘고민톡 상담툭’과 ‘#공감태그’ 코너 참여도 기다립니다. 
            </p>
            <div class="t-center text-base p-bottom-small">※이벤트에 응모하실 분은 내용 하단에 이름과 휴대폰 번호를 기재하셔야 기프티콘을 받으실 수 있습니다.</div>
            <a class="btn btn--sm" href="<?php echo site_url('survey') ?>"><span>의견 남기기</span></a>

          </div>

          <img src="<?php echo get_theme_file_uri('/images/survey-form.svg') ?>" alt="편지를 주고 받는 사람들 일러스트">
        </div>
      </div>
    </section>
    
    <?php endwhile; ?>
    
    <?php else : ?>
    <p><?php _e( '기사가 존재하지 않습니다.' ); ?></p>
    <?php endif; ?>
  </main>

<?php
get_sidebar();
get_footer();
