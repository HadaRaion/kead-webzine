<?php 
  get_header();

?>

<main id="contents" class="subscribe">
  <div class="container">
    <div class="page-banner p-top-large p-bottom-large">
      <h1 class="page-banner__title text-7xl p-top-small">구독신청</h1>
    </div>

    <p class="stb_form_description text-3xl font-500 t-center">한국장애인고용공단에서 발행하는 [장애인과 일터] 웹진은 누구나 구독 가능합니다.</p>
    <p class="text-xl t-center p-top-xs">* 입력해주신 정보로 메일이 발송 되오니 정확한 정보를 입력해주세요.</p>

	<div id="stb_subscribe" class="subscribe__form p-top">
		
		<form action="https://stibee.com/api/v1.0/lists/qsgepc7IF4VoldIFl_lFbhXU1uewtQ==/public/subscribers" method="POST" target="_blank" accept-charset="utf-8" class="stb_form" name="stb_subscribe_form" id="stb_subscribe_form" novalidate="">

      <fieldset class="stb_form_set text-xl">
        <label for="stb_name" class="stb_form_set_label font-500">
          성함<span class="stb_asterisk">*</span>
        </label>
        <input type="text" class="stb_form_set_input" id="stb_name" name="name" required="required">				
        <div class="stb_form_msg_error" id="stb_name_error"></div>
      </fieldset>

      <fieldset class="stb_form_set text-xl p-top-xs">
        <label for="stb_email" class="stb_form_set_label font-500">
          이메일 (e-mail)<span class="stb_asterisk">*</span>
        </label>
        <input type="email" class="stb_form_set_input" id="stb_email" name="email" required="required">
        <div class="stb_form_msg_error" id="stb_email_error"></div>
      </fieldset>

			<div class="stb_form_policy p-top-small">
				<div class="stb_form_modal stb_form_policy_text blind" id="stb_form_policy_modal">
        	<h2 class="stb_form_modal_title text-xl font-500">개인정보 수집 및 이용</h2>
					<p class="stb_form_modal_text text-base p-top-xs">
            ‘장애인과 일터’는 웹진 구독신청에 수집되는 귀하의 개인정보를 중요시하며 「개인정보보호법」을 준수하고 있습니다.<br />
            - 개인정보 수집 항목 : 이메일<br />
            - 제공받는 자 : 장애인과 일터 웹진 운영 대행사(오니트)<br />
            - 개인정보 수집·이용 목적 : 장애인과 일터 웹진 구독<br />
            - 개인정보의 보유 및 이용기간 : 개인정보의 수집목적 달성시까지 보유, 고객 구독취소 시 파기
          </p>
			  </div>
          <label class="p-top stb_form_policy_checkbox text-xl font-500">
            <input type="checkbox" id="stb_policy" value="stb_policy_true" />
            <span>(필수)</span>&nbsp개인정보 수집 및 이용에 동의합니다.
          </label>

          <div class="stb_form_msg_error" id="stb_policy_error"></div>
        </div>
			  <div class="stb_form_result" id="stb_form_result">
			</div>

			<fieldset class="stb_form_set_submit p-top p-bottom-large">
				<button type="submit" class="stb_form_submit_button btn" id="stb_form_submit_button">
          <span>구독 신청하기</span></button>
			</fieldset>
		</form>
	</div>
	<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script><script type="text/javascript" src="https://s3.ap-northeast-2.amazonaws.com/resource.stibee.com/subscribe/stb_subscribe_form.js"></script>
  </div>

</main>


<?php get_footer();

?>
