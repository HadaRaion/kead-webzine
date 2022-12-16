import '../css/style.scss';

// Our modules / classes
import MobileMenu from './modules/MobileMenu';

// Instantiate a new object using our modules/classes
// const mobileMenu = new MobileMenu();

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
