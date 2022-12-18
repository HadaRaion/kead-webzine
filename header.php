<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<!-- 매달교체 -->
<?php   
  if ( !$args['month'] ):
    $thisMonth = 'january';
  else:
      $thisMonth = $args['month'];
  endif;

  // The Arrays
  $menuArgs1 = array(
    'post_type' => $thisMonth,
    'category_name' => 'part1',
    'order_by' => 'menu_order',
  );

  $menuArgs2 = array(
    'post_type' => $thisMonth,
    'category_name' => 'part2',
    'order_by' => 'menu_order',
  );

  $menuArgs3 = array(
    'post_type' => $thisMonth,
    'category_name' => 'part3',
    'order_by' => 'menu_order',
  );

  $menuArgs4 = array(
    'post_type' => $thisMonth,
    'category_name' => 'part4',
    'order_by' => 'menu_order',
  );
?>

<body class="<?php echo $thisMonth ?>" <?php body_class(); ?>>

  <div class="skip" tabindex="-1">
    <a href="#contents" class="skip__link">본문 바로가기</a>
  </div>

  <header class="site-header" >
    <div class="container">
      <button class="hamburger-menu" aria-label="메뉴버튼">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="site-header__links">
        <div class="link-kead">
          <a href="https://www.kead.or.kr/" target="_black" title="한국장애인고용공단 홈페이지 새창열기">
            <img src="<?php echo get_theme_file_uri('/images/logos/kead-logo-white.svg'); ?>" alt="한국장애인고용공단 로고">
          </a>
        </div>

        <!-- 매달교체 -->
        <div class="link-home">
          <?php if( $thisMonth  === 'january' ): ?>
          <a href="<?php echo site_url() ?>">
            <span class="link-text visually-hidden">장애인과 일터 홈</span>
          </a>

          <?php else: ?>

          <a href="<?php echo site_url($thisMonth) ?>">
            <span class="link-text visually-hidden">장애인과 일터 <?php echo $args['month']; ?> 홈</span>
          </a>

          <?php endif ?>
        </div>
      </div>
    </div>
  </header>

  <nav class="site-nav">
    <div class="nav">
      <div class="nav__left">
        <div class="nav__left__title kead-webzine-logo">
          <h5 class="headline--5">함께 일하는 세상을 만듭니다.</h5>
          <div class="kead-webzine-logo__img">
            <img src="<?php echo get_theme_file_uri('/images/logos/logo-' . $thisMonth . '.svg'); ?>"
              alt="장애인과 일터 1월호 로고">
          </div>

        </div>

        <div class="nav__left__cover">
          <div class="nav__left__cover__img">
            <img srcset="<?php echo get_theme_file_uri('/images/covers/cover-' . $thisMonth . '@2x.jpg 2x'); ?>"
              src=”<?php echo get_theme_file_uri('/images/covers/cover-' . $thisMonth . '.jpg'); ?>” />
          </div>
          <div class="nav__left__cover__links">
            <a class="btn btn--sm" target="_blank" title="새창에서 지난호 pdf 열기"
              href="<?php echo get_theme_file_uri('/pdf/kead-' . $thisMonth . '.pdf'); ?>">
              <span>E-BOOK 보기</span>
              <svg viewBox="0 0 12 19" aria-hidden="true">
                <use xlink:href="#icon-arrow"></use>
              </svg>
            </a>
            <a class="btn btn--sm" href="<?php echo site_url('/subscribe'); ?>">
              <span>구독신청하기</span>
              <svg viewBox="0 0 12 19" aria-hidden="true">
                <use xlink:href="#icon-arrow"></use>
              </svg>
            </a>
            <a class="btn btn--sm" href="<?php echo site_url('/previous'); ?>">
              <span>지난호 보기</span>
              <svg viewBox="0 0 12 19" aria-hidden="true">
                <use xlink:href="#icon-arrow"></use>
              </svg>
            </a>
          </div>
        </div>


      </div>
      <div class="nav__right">
        <ul class="cat-list">
          <li>
            <div class="part-logo part-logo--sm part-logo--1"></div>
            <div class="menu">
              <h1 class="font-size-md">공감, 두드리다</h1>

              <ul class="menu-list">
                <?php 
                $menuQuery1 = new WP_Query( $menuArgs1 );

                while ( $menuQuery1->have_posts() ) {
                  $menuQuery1->the_post();
                  $subCategory =  get_the_category()[0]->cat_name;
                ?>
                <li>
                  <a class="font-size-base" href="<?php the_permalink(); ?>"><?php echo  $subCategory ?></a>
                </li>
                <?php } wp_reset_postdata();                   
              ?>
              </ul>
            </div>

          </li>

          <li>
            <div class="part-logo part-logo--sm part-logo--2"></div>
            <div class="menu">
              <h1 class="font-size-md">공감, 만나다</h1>

              <ul class="menu-list">
                <?php 
                $menuQuery2 = new WP_Query( $menuArgs2 );

                while ( $menuQuery2->have_posts() ) {
                  $menuQuery2->the_post();
                  $subCategory =  get_the_category()[0]->cat_name;
                ?>
                <li>
                  <a class="font-size-base" href="<?php the_permalink(); ?>"><?php echo  $subCategory ?></a>
                </li>
                <?php } wp_reset_postdata();                   
              ?>
              </ul>
            </div>
          </li>

          <li>
            <div class="part-logo part-logo--sm part-logo--3"></div>
            <div class="menu">
              <h1 class="font-size-md">공감, 번지다</h1>

              <ul class="menu-list">
                <?php 
                $menuQuery3 = new WP_Query( $menuArgs3 );

                while ( $menuQuery3->have_posts() ) {
                  $menuQuery3->the_post();
                  $subCategory =  get_the_category()[0]->cat_name;
                ?>
                <li>
                  <a class="font-size-base" href="<?php the_permalink(); ?>"><?php echo  $subCategory ?></a>
                </li>
                <?php } wp_reset_postdata();                   
              ?>
              </ul>
            </div>
          </li>

          <li>
            <div class="part-logo part-logo--sm part-logo--4"></div>
            <div class="menu">
              <h1 class="font-size-md">EVENT</h1>

              <ul class="menu-list">
                <?php 
                $menuQuery4 = new WP_Query( $menuArgs4 );

                while ( $menuQuery4->have_posts() ) {
                  $menuQuery4->the_post();
                  $subCategory =  get_the_category()[0]->cat_name;
                ?>
                <li>
                  <a class="font-size-base" href="<?php the_permalink(); ?>"><?php echo  $subCategory ?></a>
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
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    style="display: none;">
    <defs>
      <g id="icon-arrow">
        <path d="M2.3,0,0,2.32,6.984,9.378l-6.928,7,2.3,2.321,9.225-9.322Z" fill="#fff" />
      </g>
    </defs>
  </svg>
