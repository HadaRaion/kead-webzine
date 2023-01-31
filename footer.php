<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *  @package kead-theme
 */

?>
<footer footer class="site-footer">
  <hr>
  <div class="container">
    <button class="scroll-to-top" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-arrow-up.svg'); ?>);">
      <span class="visually-hidden">페이지 상단으로 이동</span>
    </button>

    <div class="site-footer__logo">
      <img src="<?php echo get_theme_file_uri('/images/logos/kead-logo.svg') ?>" alt="한국장애인고용공단 로고">
    </div>

    <ul class="site-footer__sns">
      <li class="btn--circle btn--sns" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-kead.svg'); ?>);">
        <a href="https://www.kead.or.kr/" target="_blank" title="한국장애인고용공단 홈페이지 새창"></a>
      </li>
      <li class="btn--circle btn--sns" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-youtube.svg'); ?>);">
        <a href="https://www.youtube.com/channel/UC475tcGR71CTgU8tsKtYXAA" target="_blank" title="한국장애인고용공단 유튜브 채널 새창"></a>
      </li>
      <li class="btn--circle btn--sns" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-blog.svg'); ?>);">
        <a href="https://blog.naver.com/kead1" target="_blank" title="한국장애인고용공단 네이버블로그 새창"></a>
      </li>
      <li class="btn--circle btn--sns" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-instagram.svg'); ?>);">
        <a href="https://www.instagram.com/haha_kead/" target="_blank" title="한국장애인고용공단 인스타그램 새창"></a>
      </li>
      <li class="btn--circle btn--sns" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-facebook.svg'); ?>);">
        <a href="https://www.facebook.com/keadofficial" target="_blank" title="한국장애인고용공단 페이스북 새창"></a>
      </li>
      <li class="btn--circle btn--sns" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-kakao.svg'); ?>);">
        <a href="https://pf.kakao.com/_QZuIxl" target="_blank" title="한국장애인고용공단 카카오채널 새창"></a>
      </li>
      <li class="btn--circle btn--sns" style="background-image: url(<?php echo get_theme_file_uri('/images/icons/icon-post.svg'); ?>);">
        <a href="https://post.naver.com/my.nhn?memberNo=3501412" target="_blank" title="한국장애인고용공단 네이버포스트 새창"></a>
      </li>
    </ul>

    <a class="site-footer__wa-mark" title="새창" href="http://www.wa.or.kr/board/list.asp?BoardID=0006" target="_blank">
      <img class="wa" alt="(사)한국장애인단체총연합회 한국웹접근성인증평가원 웹 접근성 우수사이트 인증마크(WA인증마크)" src="<?php echo get_theme_file_uri('/images/wa-mark.png'); ?>" />
    </a>
    
    <address class="site-footer__address">
      <p class="text-base">13619 경기도 성남시 분당구 구미로 173번길 59 (구미동)</p>
      <p class="text-base">대표 <a href="tel:+8215881519">1588-1519</a></p>
      <p class="text-base">TEL <a href="tel:+82317287257">031-728-7257</a></p>
      <p class="text-base">FAX 050-3470-0022</p>
    </address>

    <p class="text-base">COPYRIGHT &copy; 2023 KEAD RIGHT RESERVED.</p>
  </div>
</footer>



<?php wp_footer(); ?>
</body>

</html>