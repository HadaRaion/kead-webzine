import '../css/style.scss';

// Menu
const menuBtn = document.querySelector('.hamburger-menu');
const menu = document.querySelector('.site-nav');
const exitMenu = document.querySelector('.alert-exit-menu');

menuBtn.addEventListener('click', e => {
	menuBtn.classList.toggle('open');
	menu.classList.toggle('active');
	document.querySelector(body).classList.toggle('fix-position');
});

exitMenu.addEventListener('focus', () => {
	menuBtn.classList.remove('open');
	menu.classList.remove('active');
	document.querySelector(body).classList.remove('fix-position');
});

// Audio play
const audioPlayBtn = document.querySelector('.kead-audio__btn');
const audioPlayer = document.querySelector('.kead-audio__player');

if (audioPlayBtn) {
	audioPlayBtn.addEventListener('click', () => {
		audioPlayer.paused ? audioPlayer.play() : audioPlayer.pause();
	});
}

// Copy URL
const copyUrlBtn = document.querySelector('.btn--copy-url');
copyUrlBtn && copyUrlBtn.addEventListener('click', () => copyURL());

function copyURL() {
	let currentUrl = window.location.href;
	navigator.clipboard.writeText(currentUrl).then(res => {
		alert('URL이 복사 되었습니다. 원하시는 곳에 붙여넣기 해 주세요.');
	});
}

const toTopBtn = document.querySelector('.btn--go-to-top');
toTopBtn && toTopBtn.addEventListener('click', () => topFunction());

function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

window.onscroll = function () {
	scrollFunction();
};

const scrollTopBtn = document.querySelector('.scroll-to-top');
scrollTopBtn && scrollTopBtn.addEventListener('click', () => topFunction());

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		scrollTopBtn.classList.add('active');
	} else {
		scrollTopBtn.classList.remove('active');
	}
}
