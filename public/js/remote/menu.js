var sideNav =  document.getElementById("sideNav");
var main =  document.getElementById("main");
var btn =  document.getElementById("btn");
var logo =  document.getElementById("logo");
var text = document.querySelectorAll(".link-text");
var textArr = Object.keys(text);

var dropdown = document.getElementById("dropdown-btn");
var dropdownC = document.getElementById("dropdown-container");
var icon = document.getElementById("icon-arrow");
var i;

document.addEventListener('DOMContentLoaded', function(event) {
	openNav();
  })

window.addEventListener("resize", function() {
	if(sideNav.style.width = "270px") {
		if(window.innerWidth>576) {
			closeNav();
		} else if(window.innerWidth<=576) {
			hideNav();
		}
	} else {
		closeNav();
	}
});

function hideNav() {
	sideNav.style.width = "0";

	main.style.marginLeft = "0";

	btn.setAttribute( "onClick", "openNav()" );
	btn.style.left = "0";
}

function openNav() {
	sideNav.style.width = "270px";

	main.style.marginLeft = "270px";
	
	if(window.innerWidth>576) {
		btn.setAttribute( "onClick", "closeNav()" );
	} else if(window.innerWidth<=576) {
		btn.setAttribute( "onClick", "hideNav()" );
	}
	btn.style.left = "270px";
}

function closeNav() {
	sideNav.style.width = "70px";

	main.style.marginLeft = "70px";

	btn.setAttribute( "onClick", "openNav()" );
	btn.style.left = "70px";
}

dropdown.addEventListener("click", function() {
	dropdown.classList.toggle("active");
	icon.classList.toggle("fa-caret-down");
	icon.classList.toggle("fa-caret-up");
	var dropdownContent = this.nextElementSibling;
	if (dropdownContent.style.display === "block") {
		dropdownContent.style.display = "none";
	} else {
		dropdownContent.style.display = "block";
	}
});