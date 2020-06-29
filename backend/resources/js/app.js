const btnToggleMenu = document.getElementById('btn-toggle-menu');
const logo = document.getElementById('logo');

btnToggleMenu.onclick = function(){
	btnToggleMenu.classList.toggle("menu-close");
	if(btnToggleMenu.classList.contains('menu-close')){
		showMenuMobile();
	} else {
		hideMenuMobile();
	}
}


function showMenuMobile(){
	document.getElementById("menu-mobile").classList.remove("slideOutLeft");
	document.getElementById("menu-mobile").classList.add("slideInLeft");
	document.getElementById("menu-mobile").style.display="block";
}

function hideMenuMobile(){
	document.getElementById("menu-mobile").classList.remove("slideInLeft");
	document.getElementById("menu-mobile").classList.add("slideOutLeft");
}
$(window).scroll(function() { 
	var height = $(window).scrollTop();
	if(height  > 100) {
		if(!$("header").hasClass('header-scroll')){
			$("header").addClass('header-scroll');
		}
	} else{
		$("header").removeClass('header-scroll');
	}
});
// mdc.ripple.MDCRipple.attachTo(document.querySelector('.foo-button'));
