<?php
  $month = get_post_type();
  get_header( '', array( 'month' => $month ) );



  if ( in_category('review') ) : include 'single-review.php';
  elseif ( in_category('consulting') ) : include 'single-consulting.php';
  elseif ( in_category('event') ) : include 'single-event.php';
  else :
    
    if (  have_posts() ) :

    $parentCategoryID =  get_the_category()[0]->category_parent;
    $parentCategory = get_the_category_by_ID($parentCategoryID);
    $parentCategorySlug = get_category($parentCategoryID)->slug;
    $category = get_the_category()[0]->cat_name;

?>



  <main id="contents" class="single-post <?php echo $parentCategorySlug; ?>">
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
        <?php if ( $category !== '공감 人스타' && $category !== '#공감태그' && $category !== 'KEAD 뉴스' && $category !== 'KEAD SNS'): ?>
          <figure>
            <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'kead-thumb'] ); ?>
              <?php if (get_the_post_thumbnail_caption()): ?>
              <figcaption class="text-sm p-top-xs"><?php the_post_thumbnail_caption(); ?></figcaption>
              <?php endif; ?>
          </figure>
        <?php endif; ?>
        <?php 
          $audioSrc = get_field('kead-audio');
          if ( $audioSrc  ) :
        ?>
        <div class="kead-audio p-top">
          <div class="kead-audio__info t-right">성우가 녹음한 음성을 듣고싶으시면<br />오른쪽 버튼을 클릭해주세요</div>
          <button class="kead-audio__btn" title="성우 음성 재생">
            <svg aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40"><defs><clipPath id="clippath"><circle cx="20" cy="20" r="20" style="fill:none;"/></clipPath></defs><g style="clip-path:url(#clippath);"><path d="m28.91,9.42c1.02.05,1.86-.73,1.81-1.68-.04-.81-.76-1.48-1.63-1.52-1.02-.05-1.86.73-1.81,1.68.04.81.76,1.48,1.63,1.52" style="fill:#fff;"/><path d="m12.22,33.19c-2.29-1.96-3.65-4.63-3.83-7.52-.18-2.88.84-5.68,2.88-7.87.14-.15.2-.34.19-.53-.02-.19-.11-.37-.27-.5-.16-.13-.36-.19-.57-.18-.21.01-.4.1-.54.25-2.3,2.48-3.46,5.65-3.26,8.91.2,3.26,1.74,6.29,4.33,8.51.15.13.33.19.53.19.01,0,.02,0,.03,0,.21,0,.4-.09.55-.23.15-.15.22-.34.21-.54-.01-.19-.1-.37-.25-.5" style="fill:#fff;"/><path d="m12.02,25.48c-.12-1.99.57-3.92,1.96-5.44.13-.14.2-.33.19-.51h0c-.01-.2-.11-.39-.28-.52-.16-.13-.36-.19-.57-.17-.21.02-.4.11-.53.26-1.65,1.81-2.48,4.1-2.33,6.46.15,2.36,1.25,4.56,3.11,6.17.15.13.34.2.54.2,0,0,.02,0,.03,0,.21,0,.4-.09.55-.23.14-.14.22-.33.21-.52,0-.2-.1-.38-.25-.51-1.57-1.36-2.5-3.21-2.62-5.19" style="fill:#fff;"/><path d="m15.65,25.29c-.07-1.09.31-2.16,1.06-3,.13-.14.19-.32.18-.51-.01-.2-.11-.38-.27-.51-.16-.13-.36-.19-.58-.17-.22.02-.42.12-.56.28-.99,1.13-1.48,2.54-1.4,4,.09,1.46.76,2.82,1.89,3.84.15.13.34.2.55.2h.01c.21,0,.41-.08.55-.22s.22-.33.22-.52c0-.19-.09-.38-.24-.51-.85-.76-1.35-1.78-1.42-2.87" style="fill:#fff;"/><path d="m32.35,30.75c-1.75,0-6.28,0-6.59,0-.65-.04-1.16-.53-1.19-1.14l-.13-2.69c.41-.12.81-.28,1.18-.49.87-.49,1.56-1.2,2.05-2.11.49-.91.56-1.69.66-2.76.06-.68.06-1.36,0-2.04-.03-.37-.37-.66-.77-.66h-4.07v-3.5c0-.4-.35-.72-.78-.72h-3.57c-.09,0-.18-.03-.25-.07-.33-.16-.41-.53-.41-.53-.01-.06-.02-.12-.01-.18.7-1.26,1.39-2.54,2.07-3.81,1.08-2.02,2.16-4.07,3.2-6.11.18-.36.02-.79-.37-.96-.39-.17-.85-.02-1.03.34-1.04,2.03-2.11,4.08-3.18,6.09-.7,1.3-1.41,2.61-2.12,3.91-.04.06-.06.13-.07.2-.05.26-.05.52,0,.78.03.18.26,1.09,1.22,1.55.27.13.56.21.87.23.02,0,.04,0,.06,0h2.83v3.49c0,.4.35.72.78.72h4.11c0,.38,0,.76-.04,1.14-.09.98-.14,1.57-.5,2.23-.13.25-.54,1-1.47,1.52-.4.23-.84.38-1.31.46-.38.06-.66.38-.64.74l.16,3.29c.07,1.36,1.21,2.44,2.66,2.52.03,0,.08,0,5.89,0v4.11c0,.4.35.72.78.72s.78-.32.78-.72v-4.83c0-.4-.35-.72-.78-.72" style="fill:#fff;"/></g></svg>
          </button>
          <audio class="kead-audio__player" preload src="<?php echo $audioSrc ?>"></audio>
        </div>
        <?php endif; ?>

        <div class="p-top"><?php the_content(); ?></div>
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
