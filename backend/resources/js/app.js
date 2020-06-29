const btnToggleMenu = document.getElementById('btn-toggle-menu');
const logo = document.getElementById('logo');
const bntCloseMenu = document.getElementById('close-menu');

btnToggleMenu.onclick = () => {
	if (!btnToggleMenu.classList.contains('menu-close')) {
		showMenuMobile();
	} else {
		hideMenuMobile();
	}
}
bntCloseMenu.onclick = () => hideMenuMobile();


function showMenuMobile() {
	btnToggleMenu.classList.toggle("menu-close");
	document.getElementById("menu-mobile").classList.remove("slideOutLeft");
	document.getElementById("menu-mobile").classList.add("slideInLeft");
	document.getElementById("menu-mobile").style.display = "block";
}

function hideMenuMobile() {
	btnToggleMenu.classList.toggle("menu-close");
	document.getElementById("menu-mobile").classList.remove("slideInLeft");
	document.getElementById("menu-mobile").classList.add("slideOutLeft");
}
$(window).scroll(function () {
	var height = $(window).scrollTop();
	if (height > 100) {
		if (!$("header").hasClass('header-scroll')) {
			$("header").addClass('header-scroll');
		}
	} else {
		$("header").removeClass('header-scroll');
	}
});
// mdc.ripple.MDCRipple.attachTo(document.querySelector('.foo-button'));
