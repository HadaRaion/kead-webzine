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
        <a href="<?php echo site_url('may'); ?>"  target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-may.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-may@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-may.jpg'); ?>"
            alt="2023년 5월호 표지"
          />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.337]<br />2023년 5월호
        </h2>
      </li>
      <li>
        <a href="<?php echo site_url('june'); ?>"  target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-june.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-june@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-june.jpg'); ?>"
            alt="2023년 6월호 표지"
          />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.338]<br />2023년 6월호
        </h2>
      </li>
      <li>
        <a href="<?php echo site_url('july'); ?>"  target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-july.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-july@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-july.jpg'); ?>"
            alt="2023년 7월호 표지"
          />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.339]<br />2023년 7월호
        </h2>
      </li>

    </ul>

    
    <div class="p-top  p-bottom-large">
      <a class="btn" href="https://www.kead.or.kr/bbs/webzin/bbsPage.do?menuId=MENU2022" title="새창에서 보기" target="_blank">
       <span>지난 호 웹진 더보기</span>
      </a>
    </div>
  </div>
</main>


<?php get_footer();

?>
