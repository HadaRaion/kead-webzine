<?php 
  get_header();
?>

<main id="contents" class="previous">
  <div class="container">
    <div class="page-banner p-top-large p-bottom-large">
      <h1 class="page-banner__title text-7xl p-top-small">지난호 보기</h1>
    </div>

    <ul class="p-top-small">

      <li>
        <a href="<?php echo site_url('september'); ?>" target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-september.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-september@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-september.jpg'); ?>" alt="2023년 9월호 표지" />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.341]<br />2023년 9월호
        </h2>
      </li>
      <li>
        <a href="<?php echo site_url('october'); ?>" target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-october.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-october@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-october.jpg'); ?>" alt="2023년 10월호 표지" />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.342]<br />2023년 10월호
        </h2>
      </li>
      <li>
        <a href="<?php echo site_url('november'); ?>" target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-november.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-november@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-november.jpg'); ?>" alt="2023년 8월호 표지" />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.343]<br />2023년 11월호
        </h2>
      </li>

    </ul>


    <div class="p-top  p-bottom-large">
      <a class="btn" href="https://www.kead.or.kr/bbs/webzin/bbsPage.do?menuId=MENU2022" title="새창에서 보기"
        target="_blank">
        <span>지난 호 웹진 더보기</span>
      </a>
    </div>
  </div>
</main>


<?php get_footer();

?>