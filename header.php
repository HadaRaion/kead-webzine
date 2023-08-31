<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kead-theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<!-- 매달교체 -->
<?php   
  if ( !$args['month'] ):
    $thisMonth = 'september';

  else:
      $thisMonth = $args['month'];
  endif;

  // The Arrays
  $menuArgs1 = array(
    'post_type' => $thisMonth,
    'category_name' => 'part1',
    'orderby' 	=> 'date',
    'order'   => 'ASC',
  );

  $menuArgs2 = array(
    'post_type' => $thisMonth,
    'category_name' => 'part2',
    'orderby' 	=> 'date',
    'order'   => 'ASC',
  );

  $menuArgs3 = array(
    'post_type' => $thisMonth,
    'category_name' => 'part3',
    'orderby' 	=> 'date',
    'order'   => 'ASC',
  );

  $menuArgs4 = array(
    'post_type' => $thisMonth,
    'category_name' => 'part4',
    'orderby' 	=> 'date',
    'order'   => 'ASC',
  );
?>

<body <?php body_class($thisMonth); ?>>

  <div class="skip" tabindex="-1">
    <a href="#contents" class="skip__link">본문 바로가기</a>
  </div>

  <header class="site-header">
    <div class="container">
      <button class="hamburger-menu" aria-label="메뉴버튼">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="link-kead">
        <a href="https://www.kead.or.kr/" target="_black" title="한국장애인고용공단 홈페이지 새창열기">
          <img src="<?php echo get_theme_file_uri('/images/logos/kead-logo-vertical.svg'); ?>" alt="한국장애인고용공단 로고">
        </a>
      </div>

      <!-- 매달교체 -->
      <div class="link-home">
        <?php if( $thisMonth  === 'september' ): ?>
        <a href="<?php echo site_url() ?>">
          <span class="link-text visually-hidden">장애인과 일터 홈</span>
        </a>

        <?php else: ?>

        <a href="<?php echo site_url($thisMonth) ?>" title="장애인과 일터 홈으로 이동">
          <span class="link-text visually-hidden">장애인과 일터 <?php echo $args['month']; ?> 홈</span>
        </a>

        <?php endif ?>
      </div>
    </div>
  </header>

  <nav class="site-nav">
    <div class="nav">
      <div class="nav__left">
        <h1 class="kead-webzine-logo">
          <span class="kead-webzine-logo__title">함께 일하는 세상을 만듭니다</span>
          <span class="kead-webzine-logo__img">
            <img src="<?php echo get_theme_file_uri('/images/logos/logo-' . $thisMonth . '.svg'); ?>" alt="장애인과 일터 로고">
          </span>
        </h1>

        <div class="nav__left__cover">
          <div class="nav__left__cover__img">
            <img srcset="<?php echo get_theme_file_uri('/images/covers/cover-' . $thisMonth . '@2x.jpg 2x'); ?>"
              src="<?php echo get_theme_file_uri('/images/covers/cover-' . $thisMonth . '.jpg'); ?>" alt="장애인과 일터 표지" />
          </div>
          <div class="nav__left__cover__links">
            <a class="btn btn--sm btn--between" href="<?php echo site_url('pdf/kead-' . $thisMonth . '.pdf'); ?>"
              target="_blank" title="새창에서 지난호 pdf 열기">
              <span>E-BOOK 보기</span>
            </a>
            <a class="btn btn--sm btn--between" href="<?php echo site_url('/subscribe'); ?>">
              <span>구독 신청하기</span>
            </a>
            <a class="btn btn--sm btn--between" href="<?php echo site_url('/previous'); ?>">
              <span>지난호 보기</span>
            </a>
          </div>
        </div>


      </div>
      <div class="nav__right">
        <ul class="cat-list">
          <li>
            <div class="part-logo part-logo--sm part-logo--1"
              style="background-image: url(<?php echo get_theme_file_uri('/images/logos/logo-part1.svg'); ?>);"></div>
            <div class="menu">
              <h2 class="text-2xl">공감, 두드리다</h2>

              <ul class="menu-list">
                <?php 
                $menuQuery1 = new WP_Query( $menuArgs1 );

                while ( $menuQuery1->have_posts() ) {
                  $menuQuery1->the_post();
                  $subCategory =  get_the_category()[0]->cat_name;
                ?>
                <li>
                  <a class="text-xl" href="<?php the_permalink(); ?>"><?php echo  $subCategory ?></a>
                </li>
                <?php } wp_reset_postdata();                   
              ?>
              </ul>
            </div>

          </li>

          <li>
            <div class="part-logo part-logo--sm part-logo--2"
              style="background-image: url(<?php echo get_theme_file_uri('/images/logos/logo-part2.svg'); ?>);"></div>
            <div class="menu">
              <h2 class="text-2xl">공감, 만나다</h2>

              <ul class="menu-list">
                <?php 
                $menuQuery2 = new WP_Query( $menuArgs2 );

                while ( $menuQuery2->have_posts() ) {
                  $menuQuery2->the_post();
                  $subCategory =  get_the_category()[0]->cat_name;
                ?>
                <li>
                  <a class="text-xl" href="<?php the_permalink(); ?>"><?php echo  $subCategory ?></a>
                </li>
                <?php } wp_reset_postdata();                   
              ?>
              </ul>
            </div>
          </li>

          <li>
            <div class="part-logo part-logo--sm part-logo--3"
              style="background-image: url(<?php echo get_theme_file_uri('/images/logos/logo-part3.svg'); ?>);"></div>
            <div class="menu">
              <h2 class="text-2xl">공감, 함께하다</h2>

              <ul class="menu-list">
                <?php 
                $menuQuery3 = new WP_Query( $menuArgs3 );

                while ( $menuQuery3->have_posts() ) {
                  $menuQuery3->the_post();
                  $subCategory =  get_the_category()[0]->cat_name;
                ?>
                <li>
                  <a class="text-xl" href="<?php the_permalink(); ?>"><?php echo  $subCategory ?></a>
                </li>
                <?php } wp_reset_postdata();                   
              ?>
              </ul>
            </div>
          </li>

          <li>
            <div class="part-logo part-logo--sm part-logo--4"
              style="background-image: url(<?php echo get_theme_file_uri('/images/logos/logo-part4.svg'); ?>);"></div>
            <div class="menu">
              <h2 class="text-2xl">EVENT</h2>

              <ul class="menu-list">
                <?php 
                $menuQuery4 = new WP_Query( $menuArgs4 );

                while ( $menuQuery4->have_posts() ) {
                  $menuQuery4->the_post();
                  $subCategory =  get_the_category()[0]->cat_name;
                ?>
                <li>
                  <a class="text-xl" href="<?php the_permalink(); ?>"><?php echo  $subCategory ?></a>
                </li>
                <?php } wp_reset_postdata();                   
              ?>
              </ul>
            </div>

          </li>
        </ul>
      </div>
  </nav>
  <button class="alert-exit-menu visually-hidden">전체화면 메뉴를 벗어나 메뉴가 닫혔습니다.</button>