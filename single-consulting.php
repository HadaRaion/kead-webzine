<?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );


  if (  have_posts() ) :

  $parentCategoryID =  get_the_category()[0]->category_parent;
  $parentCategory = get_the_category_by_ID($parentCategoryID);
  $parentCategorySlug = get_category($parentCategoryID)->slug;
  $category = get_the_category()[0]->cat_name;

?>

  <main id="contents" class="<?php echo $parentCategorySlug; ?>">
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
        
        <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'kead-thumb'] ); ?>

        <div class="post-title p-top-large p-bottom-large">
          <h1 class="text-7xl t-center color-part3">알쏭달쏭 직장생활</h1>
          <h1 class="text-7xl t-center p-top-small">“이런 고민 어떻게 할까요?”</h1>
          <h3 class="text-2xl p-top-large font-500">직장이란 모두에게 소중한 공간이면서도 온갖 고민의 발상지이기도 합니다. 나만 이런 문제를 겪는지 궁금하고 불안하 며 힘든 일이 있으신가요? [장애인과 일터]가 여러분의 사연을 듣고 함께 고민합니다.</h3>
        </div>


        <div class="consulting--info bg-white">
          <p class="text-2xl font-500">[장애인과 일터]에 직장생활의 크고 작은 고민 내용을 보내주세요. 내용이 소개된 분께 소정의 선물을 드립니 다. ‘익명 참여’라고 적으시면 익명의 독자로 사연을 소개합니다. 단, 보내시는 내용 하단에 이름과 휴대폰 번호를 기재하셔야 모바일 기프티콘을 받으실 수 있습니다.</p>
          <div class="consulting--info__address">
            <p class="consulting__answer text-2xl font-500">메일 보내실 곳 david0915@kead.or.kr</p>
            <a class="btn" href=""><span>의견 남기기</span></a>
          </div>
        </div>

        <div class="consulting p-top-large p-bottom-large">
          <ul class="">
            <?php 
             $question1 = get_field('kead-talk-q1');
             $question2 = get_field('kead-talk-q2');
             $question3 = get_field('kead-talk-q3');
             $question4 = get_field('kead-talk-q4');
             $answer1 = get_field('kead-talk-a1');
             $answer2 = get_field('kead-talk-a2');
             $answer3 = get_field('kead-talk-a3');
             $answer4 = get_field('kead-talk-a4');
            ?>
            <?php if ( $question1  ) : ?>
            <li>
              <p class="consulting__question text-2xl font-bold"><?php echo $question1 ?></p>
              <p class="consulting__answer text-xl"><?php echo $answer1 ?></p>
            </li>
            <?php endif; ?>

            <?php if ( $question2  ) : ?>
            <li>
              <p class="consulting__question text-2xl font-bold">bbb<?php echo $question2 ?></p>
              <p class="consulting__answer text-xl"><?php echo $answer2 ?></p>
            </li>
            <?php endif; ?>

            <?php if ( $question3  ) : ?>
            <li>
              <p class="consulting__question text-2xl font-bold"><?php echo $question3 ?>aa</p>
              <p class="consulting__answer text-xl"><?php echo $answer3 ?></p>
            </li>
            <?php endif; ?>

            <?php if ( $question4  ) : ?>
            <li>
              <p class="consulting__question text-2xl font-bold"><?php echo $question4 ?></p>
              <p class="consulting__answer text-xl"><?php echo $answer4 ?></p>
            </li>
            <?php endif; ?>
          </ul>
        </div>

        <div class="consulting--consultant">
          <p class="text-xl">글. <span class="font-bold"><?php echo get_field('writer-name') ?></span></p>
          <p class="text-lg"><?php echo get_field('writer-info') ?></p>
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
