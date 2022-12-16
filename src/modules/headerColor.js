document.addEventListener('scroll', e => {
	if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 50) {
		document.querySelector('header').classList.add('active');
	} else {
		document.querySelector('header').classList.remove('active');
	}
});
