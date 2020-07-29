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

// document.querySelector('.box-carousel')
// .addEventListener("wheel", event=> {
// 	if(event.deltaY > 0){
// 		event.target.scrollBy(300,0);
// 	}else{
// 		event.target.scrollBy(-300,0);
// 	}
// });

// Checkout

let inputRadioPF = document.querySelector('#radio-pf');
let inputRadioPJ = document.querySelector('#radio-pj');
inputRadioPF.addEventListener("click", ()=> {
	toggleDocument("pf");
})
inputRadioPJ.addEventListener("click", ()=> {
	toggleDocument("pj");
})

const toggleDocument = (typeDocument)=>{
	if(typeDocument == "pf"){
		document.querySelector('#div-input-cpf').classList.remove("display-none");
		document.querySelector('#div-input-cnpj').classList.add("display-none");
	}else{
		document.querySelector('#div-input-cnpj').classList.remove("display-none");
		document.querySelector('#div-input-cpf').classList.add("display-none");
	}
}