<?php 
// 매달 교체
$thisMonth = 'february';

get_header( '', array( 'month' => $thisMonth ) );

$args1 = array(
	'post_type' => $thisMonth,
	'category_name' => 'part1',
	'orderby' 	=> 'date',
	'order'   => 'ASC',
);

$args2 = array(
	'post_type' => $thisMonth,
	'category_name' => 'part2',
	'orderby' 	=> 'date',
	'order'   => 'ASC',
);

$args3 = array(
	'post_type' => $thisMonth,
	'category_name' => 'part3',
	'orderby' 	=> 'date',
	'order'   => 'ASC',
);
?>

<main id="contents" class="main-page">
	<section class="banner">
	  <h1 class="kead-webzine-logo">
			<span class="kead-webzine-logo__title font-white">함께 일하는 세상을 만듭니다</span>
			<span class="kead-webzine-logo__img">
				<img src="<?php echo get_theme_file_uri('/images/logos/logo-' . $thisMonth . '-white.svg'); ?>"
					alt="장애인과 일터 로고">
			</span>
  	</h1>
		
		<div class="cover-story cover-story--desktop font-white t-center">
				<div class="text-xl t-500">COVER STORY</div>
				<h1 class="p-top-xs p-bottom-xs">토닥토닥, 당신 곁에</h1>
				<p class="text-xl t-500">
					매서운 추위도 막바지인 2월입니다. 24절기의 첫 번째 절기 ‘입춘(立春)’이 성큼 다가왔습니다.</br>
					앙상한 나뭇가지에선 새순이 고개를 내밀려 합니다.</br>
					꽃을 피우고 새날을 살아가려 오늘도 힘내는 서로에게 ‘토닥토닥, 다 잘될 거야’라고, 가만히 어깨를 두드려 주세요.
				</p>
		</div>
		<div class="cover-story cover-story--mobile font-white t-center">
			<div class="text-base t-500">COVER STORY</div>
			<h1 class="p-top-xs p-bottom-small">토닥토닥, 당신 곁에</h1>
			<p class="text-base t-500">
				매서운 추위도 막바지인 2월입니다.</br>
				24절기의 첫 번째 절기 ‘입춘(立春)’이</br>
				성큼 다가왔습니다. 앙상한 나뭇가지에선</br>
				새순이 고개를 내밀려 합니다.</br>
				꽃을 피우고 새날을 살아가려 오늘도 힘내는</br>
				서로에게 ‘토닥토닥, 다 잘될 거야’라고,</br>
				가만히 어깨를 두드려 주세요.
			</p>
		</div>
	</section>

	<p class="text-base p-top-xs t-center">[장애인과 일터]는 텍스트를 자동으로 읽어주는 보이스오버 기능을 지원합니다.</p>
	<section class="main-links p-top">
		<div class="container">
			<ul>
				<li>
					<a class="btn" href="<?php echo site_url('pdf/kead-' . $thisMonth . '.pdf'); ?>" target="_blank">
						<span>E-BOOK 보기</span> 
					</a>
				</li>
				<li>
					<a class="btn" href="<?php echo site_url('/subscribe'); ?>">
						<span>구독 신청하기</span> 
					</a>
				</li>
				<li>
					<a class="btn" href="<?php echo site_url('/previous'); ?>">
						<span>지난호 보기</span> 
					</a>
				</li>
			</ul>
		</div>

	</section>

	<section class="posts">
		<div class="container">
			<div class="article part1 p-top-large">
				<div class="article__title">
					<div class="part-logo part-logo--1" style="background-image: url(<?php echo get_theme_file_uri('/images/logos/logo-part1.svg'); ?>);"></div>
					<h1 class="text-5xl font-bold" id="kead-part1">공감, 두드리다</h1>
				</div>
				<ul class="article__contents p-top" aria-labelledby="kead-part1">
					<?php 

					$query1 = new WP_Query( $args1 );

					while ( $query1->have_posts() ) {
						$query1->the_post();
						$subCategory =  get_the_category()[0]->cat_name;
						$image_id = get_post_thumbnail_id(get_the_ID());
						$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);?>
					<li>
						<a class="post" href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?> 기사보기">
							<span class="post__category text-xl font-500 font-white"><?php echo  $subCategory ?></span>
							<span class="post__thumbnail">
								<?php if ($subCategory === '공감 테마'): ?>
									<picture>
										<source media="(max-width: 960px)" srcset="<?php the_post_thumbnail_url('kead-thumbnail') ?>, <?php the_post_thumbnail_url('kead-thumbnail-2x') ?> 2x" />
										<source media="(min-width: 960px)" srcset="<?php the_post_thumbnail_url('kead-thumbnail-wide') ?>, <?php the_post_thumbnail_url('kead-thumbnail-wide-2x') ?> 2x" />
										<img src="<?php the_post_thumbnail_url('kead-thumbnail') ?>" alt="<?php echo $alt_text ;?>" />
									</picture>
								<?php else: ?>
									<img
										srcset="<?php the_post_thumbnail_url('kead-thumbnail') ?>, <?php the_post_thumbnail_url('kead-thumbnail-2x') ?> 2x"
										src="<?php the_post_thumbnail_url('kead-thumbnail') ?>"
										alt="<?php echo $alt_text ;?>"
									/>
								<?php endif; ?>
							</span>
							<span class="post__title text-2xl font-500">
							<?php the_title(); ?>
							</span>
						</a>
					</li>
					<?php }
					wp_reset_postdata();
					?> 
				</ul>
			</div>

			<div class="article part2 p-top-large">
				<div class="article__title">
					<div class="part-logo part-logo--2" style="background-image: url(<?php echo get_theme_file_uri('/images/logos/logo-part2.svg'); ?>);"></div>
					<h1 class="text-5xl font-bold" id="kead-part2">공감, 만나다</h1>
				</div>
				<ul class="article__contents p-top" aria-labelledby="kead-part2">
					<?php 
					$query2 = new WP_Query( $args2 );

					while ( $query2->have_posts() ) {
						$query2->the_post();
						$subCategory =  get_the_category()[0]->cat_name;
						$image_id = get_post_thumbnail_id(get_the_ID());
						$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);?>
					<li>
						<a class="post" href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?> 기사보기">
							<span class="post__category text-xl font-500 font-white"><?php echo $subCategory ?></span>
							<span class="post__thumbnail">				
								<img
									srcset="<?php the_post_thumbnail_url('kead-thumbnail') ?>, <?php the_post_thumbnail_url('kead-thumbnail-2x') ?> 2x"
									src="<?php the_post_thumbnail_url('kead-thumbnail') ?>"
									alt="<?php echo $alt_text ;?>"
								/>
							</span>
							<span class="post__title text-2xl font-500"><span><?php the_title(); ?></span></span>
						</a>
					</li>
					<?php }
					wp_reset_postdata();
					?> 
				</ul>
			</div>
			
			<div class="article part3 p-top-large">
				<div class="article__title">
					<div class="part-logo part-logo--3" style="background-image: url(<?php echo get_theme_file_uri('/images/logos/logo-part3.svg'); ?>);"></div>
					<h1 class="text-5xl font-bold" id="kead-part3">공감, 함께하다</h1>
				</div>
				<ul class="article__contents p-top" aria-labelledby="kead-part3">
					<?php 
					$query3 = new WP_Query( $args3 );

					while ( $query3->have_posts() ) {
						$query3->the_post();
						$subCategory =  get_the_category()[0]->cat_name;
						$image_id = get_post_thumbnail_id(get_the_ID());
						$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);?>
					<li>
						<a class="post" href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?> 기사보기">
							<span class="post__category text-xl font-500 font-white"><?php echo  $subCategory ?></span>

							<?php if ($subCategory === 'KEAD 뉴스' || $subCategory === 'KEAD SNS'): ?>
							<span class="post__thumbnail">
								<img
									srcset="<?php the_post_thumbnail_url('kead-thumbnail-mini') ?>, <?php the_post_thumbnail_url('kead-thumbnail-mini-2x') ?> 2x"
									src="<?php the_post_thumbnail_url('kead-thumbnail-mini') ?>"
									alt="<?php echo $alt_text ;?>"
								/>
							</span>				
							<?php else: ?>

								<span class="post__thumbnail">
									<img
										srcset="<?php the_post_thumbnail_url('kead-thumbnail') ?>, <?php the_post_thumbnail_url('kead-thumbnail-2x') ?> 2x"
										src="<?php the_post_thumbnail_url('kead-thumbnail') ?>"
										alt="<?php echo $alt_text ;?>"
										/>
								</span>

								<span class="post__title text-2xl font-500"><span><?php the_title(); ?></span></span>

							<?php endif ?>

						</a>
					</li>
					<?php }
					wp_reset_postdata();
					?> 
				</ul>
			</div>
			
			<div class="article part4 p-top-large">
				<div class="article__title">
					<div class="part-logo part-logo--4" style="background-image: url(<?php echo get_theme_file_uri('/images/logos/logo-part4.svg'); ?>);"></div>
					<h1 class="text-5xl font-bold" id="kead-part4">EVENT</h1>
				</div>
				<div class="article__event p-top">
					<div class="article__event__text">
						<h2 class="text-7xl">웹진 보고 선물 받자</h2>
						<p class="text-2xl font-bold p-top-small p-bottom-small">
							[장애인과 일터] 기사 읽고 독자 코너 참여하고<br />
							기분 좋은 선물 받아 가세요!
						</p>
						<a class="btn btn--sm" href="<?php echo site_url('/february/event'); ?>">이벤트 바로가기</a>
						<div class="article__event__text__period  p-top">
						<div class="t-underline text-xl font-bold">이벤트 기간</div>
						<div class="text-xl p-bottom-xs">2023년 2월 1일(수) ~ 2월 20일(월)</div>
						<div class="t-underline text-xl font-bold">당첨자 발표</div>
						<div class="text-xl p-bottom-small">개별 발송 및 [장애인과 일터] 2월호 이벤트 페이지에 공지</div>
						</div>

					</div>
					<div class="article__event__image">
						<img src="<?php echo get_theme_file_uri('/images/event-thumb-february.svg'); ?>" alt="기프티콘 이미지">
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer();
?>