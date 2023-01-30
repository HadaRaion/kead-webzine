<?php 
  get_header();
?>

<main id="contents" class="previous">
  <div class="container">
    <div class="page-banner p-top-large p-bottom-large">
      <h1 class="page-banner__title text-7xl p-top-small">지난호 보기</h1>
    </div>



    <ul class="p-top-small">
      <li class="">
        <a href="<?php echo site_url('pdf/202211.pdf'); ?>" target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/202211.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/202211@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/202211.jpg'); ?>"
            alt="2022년 11월호 표지"
          />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.331]<br />2022년 11월호
        </h2>
      </li>

      <li class="">
        <a href="<?php echo site_url('pdf/202212.pdf'); ?>" target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/202212.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/202212@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/202212.jpg'); ?>"
            alt="2022년 12월호 표지"
          />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.332]<br />2022년 12월호
        </h2>
      </li>
      <li class="">
        <a href="<?php echo site_url('january'); ?>"  target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-january.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-january@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-january.jpg'); ?>"
            alt="2023년 1월호 표지"
          />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.333]<br />2023년 1월호
        </h2>
      </li>
    </ul>

    <div class="p-top  p-bottom-large">
      <a class="btn" href="https://www.kead.or.kr/common/comm_board.jsp?main=99" title="새창에서 보기" target="_blank">
       <span>2023년 이전호 보기</span>
      </a>
    </div>
  </div>
</main>


<?php get_footer();

?>
