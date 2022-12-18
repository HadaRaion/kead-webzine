<?php 
get_header();

// 매달 교체
$thisMonth = 'january';

$args1 = array(
	'post_type' => $thisMonth,
	'category_name' => 'part1',
	'order_by' => 'menu_order',
);

$args2 = array(
	'post_type' => $thisMonth,
	'category_name' => 'part2',
  'order_by' => 'menu_order',
);

$args3 = array(
	'post_type' => $thisMonth,
	'category_name' => 'part3',
  'order_by' => 'menu_order',
);
?>

<main id="contents" class="main-page">
	<section class="banner" style="background-image: url(<?php echo get_theme_file_uri('/images/banners/banner-' . $thisMonth . '.svg'); ?>);">
	  <div class="kead-webzine-logo">
			<h5 class="headline--5 font-white">함께 일하는 세상을 만듭니다.</h5>
			<div class="kead-webzine-logo__img">
				<img src="<?php echo get_theme_file_uri('/images/logos/logo-' . $thisMonth . '-white.svg'); ?>"
					alt="장애인과 일터 로고">
			</div>
  	</div>
		<div class="cover-story cover-story--desktop font-white t-center">
				<div class="font-size-base t-500">COVER STORY</div>
				<h1 class="serif">두근두근 ‘새로운 시작이야’</h1>
				<p class="font-size-base t-500">
					2023년 새해가 밝았습니다.</br>
					다사다난했던 지난날을 뒤로하고 새로운 한 해에는 부디 행복한 일들만 가득하길 바라는 마음을 담아봅니다.</br>
					올해는 또 어떤 변화들이 우리를 기다리고 있을까요. 두근두근 희망이 담긴 ‘새로운 시작’을 이야기합니다.
				</p>
		</div>
		<div class="cover-story cover-story--mobile font-white t-center">
			<div class="font-size-base t-500">COVER STORY</div>
			<h1 class="serif">두근두근 ‘새로운 시작이야’</h1>
			<p class="font-size-base t-500">
				2023년 새해가 밝았습니다.</br>
				다사다난했던 지난날을 뒤로하고</br>
				새로운 한 해에는 부디 행복한 일들만</br>
				가득하길 바라는 마음을 담아봅니다.</br>
				올해는 또 어떤 변화들이</br>우리를 기다리고 있을까요.</br>
				두근두근 희망이 담긴 ‘새로운 시작’을</br>
				이야기합니다.
			</p>
		</div>
	</section>

	<section class="main-links p-top ">
		<div class="container">
			<ul>
				<li>
					<a class="btn" href="<?php echo get_theme_file_uri('/pdf/kead-' . $thisMonth . '.pdf'); ?>" target="_blank">
						<span>E-BOOK 보기</span> 
						<svg viewBox="0 0 12 19" aria-hidden="true">
							<use xlink:href="#icon-arrow"></use>
						</svg>
					</a>
				</li>
				<li>
					<a class="btn" href="<?php echo site_url('/subscribe'); ?>">
						<span>구독 신청하기</span> 
						<svg viewBox="0 0 12 19" aria-hidden="true">
							<use xlink:href="#icon-arrow"></use>
						</svg>
					</a>
				</li>
				<li>
					<a class="btn" href="<?php echo site_url('/previous'); ?>">
						<span>지난호 보기</span> 
						<svg viewBox="0 0 12 19" aria-hidden="true">
							<use xlink:href="#icon-arrow"></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>

	</section>

	<section class="posts">
		<div class="container">
			<div class="article part1 p-top-large">
				<div class="article__title">
					<div class="part-logo part-logo--1"></div>
					<h1 class="font-size-xl">공감, 만나다</h1>
				</div>
				<div class="article__contents p-top">
					<?php 
					$query1 = new WP_Query( $args1 );

					while ( $query1->have_posts() ) {
						$query1->the_post();
						$subCategory =  get_the_category()[0]->cat_name;
						$image_id = get_post_thumbnail_id(get_the_ID());
						$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);?>
					
					<a class="post" href="<?php the_permalink(); ?>">
						<article>
							<div class="post__category"><span class="font-size-base t-bold font-white"><?php echo  $subCategory ?></span></div>
							<div class="post__thumbnail">
								<img
									srcset="<?php the_post_thumbnail_url('kead-thumbnail') ?>, <?php the_post_thumbnail_url('kead-thumbnail-2x') ?> 2x"
									src="<?php the_post_thumbnail_url('kead-thumbnail') ?>"
									alt="<?php echo $alt_text ;?>"
		 						/>
							</div>
							<div class="post__title">
								<h2 class="font-size-md"><?php the_title(); ?></h2>
							</div>
						</article>
					</a>
					<?php }
					wp_reset_postdata();
					?> 
				</div>
			</div>

			<div class="article part2 p-top-large">
				<div class="article__title">
					<div class="part-logo part-logo--2"></div>
					<h1 class="font-size-xl">공감, 두드리다</h1>
				</div>
				<div class="article__contents p-top">
					<?php 
					$query2 = new WP_Query( $args2 );

					while ( $query2->have_posts() ) {
						$query2->the_post();
						$subCategory =  get_the_category()[0]->cat_name;
						$image_id = get_post_thumbnail_id(get_the_ID());
						$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);?>
					
					<a class="post" href="<?php the_permalink(); ?>">
						<article>
							<div class="post__category"><span class="font-size-base t-bold font-white"><?php echo  $subCategory ?></span></div>
							<div class="post__thumbnail">
								<?php if ($subCategory === '이달의 우수사원'): ?>
									<picture>
										<source media="(max-width: 960px)" srcset="<?php the_post_thumbnail_url('kead-thumbnail') ?>, <?php the_post_thumbnail_url('kead-thumbnail-2x') ?> 2x" />
										<source media="(min-width: 960px)" srcset="<?php the_post_thumbnail_url('kead-thumbnail-long') ?>, <?php the_post_thumbnail_url('kead-thumbnail-long-2x') ?> 2x" />
										<img src="<?php the_post_thumbnail_url('kead-thumbnail') ?>" alt="<?php echo $alt_text ;?>" />
									</picture>
								<?php elseif ($subCategory === '이슈 리포트'): ?>
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
							</div>
							<div class="post__title">
								<h2 class="font-size-md"><?php the_title(); ?></h2>
							</div>
						</article>
					</a>
					<?php }
					wp_reset_postdata();
					?> 
				</div>
			</div>
			
			<div class="article part3 p-top-large">
				<div class="article__title">
					<div class="part-logo part-logo--3"></div>
					<h1 class="font-size-xl">공감, 번지다</h1>
				</div>
				<div class="article__contents p-top">
					<?php 
					$query3 = new WP_Query( $args3 );

					while ( $query3->have_posts() ) {
						$query3->the_post();
						$subCategory =  get_the_category()[0]->cat_name;
						$image_id = get_post_thumbnail_id(get_the_ID());
						$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);?>
					
					<a class="post" href="<?php the_permalink(); ?>">
						<article>
							<div class="post__category"><span class="font-size-base t-bold font-white"><?php echo  $subCategory ?></span></div>
							<div class="post__thumbnail">
								<img
									srcset="<?php the_post_thumbnail_url('kead-thumbnail') ?>, <?php the_post_thumbnail_url('kead-thumbnail-2x') ?> 2x"
									src="<?php the_post_thumbnail_url('kead-thumbnail') ?>"
									alt="<?php echo $alt_text ;?>"
		 						/>
							</div>
							<div class="post__title">
								<h2 class="font-size-md"><?php the_title(); ?></h2>
							</div>
						</article>
					</a>
					<?php }
					wp_reset_postdata();
					?> 
				</div>
			</div>
			
			<div class="article part4 p-top-large">
				<div class="article__title">
					<div class="part-logo part-logo--4"></div>
					<h1 class="font-size-xl">EVENT</h1>
				</div>
				<div class="article__contents p-top">
					
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer();
?>