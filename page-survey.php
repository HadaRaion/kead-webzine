<?php 
  get_header();
?>

<main id="contents" class="survey">
  <div class="container">

    <div class="page-banner p-top-large p-bottom-large">
      <h1 class="page-banner__title text-7xl p-top-small">독자의견</h1>
      <h2 class="page-banner__title text-6xl font-400">
        독자 여러분의 의견을<span class="line-break"> 남겨주세요</span>
      </h2>
    </div>

    <div class="survey-form p-bottom">
      <div class="survey-form__wrapper">
        <h3 class="t-center text-4xl p-top">
          [장애인과 일터] 독자 여러분의<br />
          소중한 의견을 기다립니다
        </h3>
        <p class="t-center text-xl p-top-small">
          재미있게 읽은 기사, 편집부에 바라는 점 등<br />
          구독 후기를 남겨 주세요.<br />
          ‘고민톡 상담툭’과 ‘#공감태그’ 코너 참여도 기다립니다. 
        </p>
        <p class="t-center text-base p-bottom-small">※이벤트에 응모하실 분은 내용 하단에 이름과 휴대폰 번호를 기재하셔야 기프티콘을 받으실 수 있습니다.</p>
          
        
        <?php the_content(); ?> 
      </div>

      <img src="<?php echo get_theme_file_uri('/images/survey-form.svg') ?>" alt="편지를 주고 받는 사람들 일러스트">
    </div>
  </div>
</main>

<?php 
  get_footer();
?>

