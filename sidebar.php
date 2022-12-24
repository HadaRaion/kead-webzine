<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kead-theme
 */

?>

<aside class="site-side">
	<a class="btn--circle btn--function" href="<?php echo site_url() ?>" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-home.svg'); ?>);" title="장애인과 일터 홈으로 이동">
	</a>
	<button class="btn--circle btn--function" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-print.svg'); ?>);" onclick="window.print(); return false;">
		<span class="visually-hidden">인쇄하기</span>
	</button>
	<button class="btn--circle btn--function btn--copy-url" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-copy.svg'); ?>);">
		<span class="visually-hidden">URL복사</span>
	</button>
	<button class="btn--circle btn--function btn--go-to-top" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-top.svg'); ?>);">
		<span class="visually-hidden">페이지 상단으로 이동</span>
	</button>
</aside>