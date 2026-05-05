/* global document, window */
(function () {
	'use strict';

	var nav = document.getElementById('site-nav');
	var burger = document.getElementById('mobile-menu-toggle');
	var drawer = document.getElementById('mobile-drawer');
	var isFront = document.body.classList.contains('front-page');

	function setNavFilled(filled) {
		if (!nav) return;
		nav.classList.toggle('site-nav--filled', filled);
	}

	function onScroll() {
		var y = window.scrollY || document.documentElement.scrollTop;
		if (isFront) {
			setNavFilled(y > 10);
		} else {
			setNavFilled(true);
		}
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();

	if (burger && drawer) {
		burger.addEventListener('click', function () {
			var open = burger.classList.toggle('is-open');
			burger.setAttribute('aria-expanded', open ? 'true' : 'false');
			document.body.classList.toggle('has-mobile-menu-open', open);
			if (open) {
				drawer.removeAttribute('hidden');
			} else {
				drawer.setAttribute('hidden', '');
			}
		});
	}

	/* Desktop: keyboard / click toggle for mega (redundant with CSS hover but helps touch hybrids). */
	var megas = document.querySelectorAll('.mega[data-mega-id]');
	megas.forEach(function (mega) {
		var btn = mega.querySelector('.mega__trigger');
		if (!btn) return;
		btn.addEventListener('click', function (e) {
			if (window.matchMedia('(min-width: 1024px)').matches) {
				e.preventDefault();
			} else {
				e.preventDefault();
				var open = mega.classList.toggle('is-open');
				btn.setAttribute('aria-expanded', open ? 'true' : 'false');
				megas.forEach(function (other) {
					if (other !== mega) {
						other.classList.remove('is-open');
						var ob = other.querySelector('.mega__trigger');
						if (ob) ob.setAttribute('aria-expanded', 'false');
					}
				});
			}
		});
	});

	document.addEventListener('click', function (e) {
		if (!window.matchMedia('(max-width: 1023px)').matches) return;
		var t = e.target;
		if (t && t.closest && t.closest('.mega')) return;
		megas.forEach(function (mega) {
			mega.classList.remove('is-open');
			var b = mega.querySelector('.mega__trigger');
			if (b) b.setAttribute('aria-expanded', 'false');
		});
	});
})();
