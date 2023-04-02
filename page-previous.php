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

      <li class="">
        <a href="<?php echo site_url('february'); ?>"  target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-february.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-february@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-february.jpg'); ?>"
            alt="2023년 2월호 표지"
          />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.334]<br />2023년 2월호
        </h2>
      </li>

      <li class="">
        <a href="<?php echo site_url('march'); ?>"  target="_blank" title="지난호 새창보기">
          <img
            srcset="<?php echo get_theme_file_uri('/images/covers/cover-march.jpg'); ?>, <?php echo get_theme_file_uri('/images/covers/cover-march@2x.jpg'); ?> 2x"
            src="<?php echo get_theme_file_uri('/images/covers/cover-march.jpg'); ?>"
            alt="2023년 3월호 표지"
          />
        </a>
        <h2 class="text-2xl t-center t-500">
          [VOL.335]<br />2023년 3월호
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
