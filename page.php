<?php 
  global $post;
  $post_slug = $post->post_name;

  get_header( '', array( 'month' => $post_slug ) );

  $args1 = array(
	'post_type' => $post_slug,
	'category_name' => 'part1',
	'orderby' 	=> 'date',
	'order'   => 'ASC',
  );

  $args2 = array(
    'post_type' => $post_slug,
    'category_name' => 'part2',
    'orderby' 	=> 'date',
    'order'   => 'ASC',
  );

  $args3 = array(
    'post_type' => $post_slug,
    'category_name' => 'part3',
    'orderby' 	=> 'date',
    'order'   => 'ASC',
  );

	
	$bgSrc = get_theme_file_uri('/images/banners/banner-' . $post_slug .'.svg');
	$bgSrcMobile = $post_slug === 'january' ? get_theme_file_uri('/images/banners/banner-' . $post_slug .'.svg') : get_theme_file_uri('/images/banners/banner-' . $post_slug .'-mobile.svg');
?>

<style scoped>
	.banner {
		background-image: url('<?php echo $bgSrc; ?>');12
	}

	@media (max-width: 640px) {
		.banner {
			background-image: url('<?php echo $bgSrcMobile; ?>');
		}
	}
</style>

<main id="contents" class="main-page">
	<section class="banner">
	  <h1 class="kead-webzine-logo">
			<span class="kead-webzine-logo__title font-white">함께 일하는 세상을 만듭니다</span>
			<span class="kead-webzine-logo__img">
				<img src="<?php echo get_theme_file_uri('/images/logos/logo-' . $post_slug . '-white.svg'); ?>"
					alt="장애인과 일터 로고">
			</span>
  	</h1>
		
		<?php get_template_part( 'template-parts/banner/content-banner', $post_slug ); ?>
	</section>

	<p class="text-base p-top-xs t-center">[장애인과 일터]는 텍스트를 자동으로 읽어주는 보이스오버 기능을 지원합니다.</p>

	<section class="main-links p-top">
		<div class="container">
			<ul>
				<li>
					<a class="btn" href="<?php echo site_url('pdf/kead-' . $post_slug . '.pdf'); ?>" target="_blank">
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

				<?php get_template_part( 'template-parts/event/content-event', $post_slug ); ?>


			</div>
		</div>
	</section>
</main>
<?php get_footer();

?>