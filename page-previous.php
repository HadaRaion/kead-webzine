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
        <a href="<?php echo site_url('july'); ?>" target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-july.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-july@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-july.jpg'); ?>" alt="2023년 7월호 표지" />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.339]<br />2023년 7월호
        </h2>
      </li>
      <li>
        <a href="<?php echo site_url('august'); ?>" target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-august.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-august@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-august.jpg'); ?>" alt="2023년 8월호 표지" />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.340]<br />2023년 8월호
        </h2>
      </li>
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