<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 *  @package kead-theme
 */

get_header();
?>

<main id="contents" class="page404">
  <div class="container">
    <h1 class="text-9xl font-400">Page Not Found</h1>
    <p class="text-2xl p-top p-bottom-small">
      존재하지 않는 주소를 입력하셨거나,<br />
      요청하신 페이지의 주소가 변경, 삭제되어 찾을 수 없습니다.
    </p>
    <a class="btn" href="<?php echo site_url(); ?>">
      <span>메인으로 가기</span> 
    </a>
  </div>
</main>


<?php
get_footer();
