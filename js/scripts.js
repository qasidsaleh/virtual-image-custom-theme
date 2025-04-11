(function ($, root, undefined) {
	$(function () {
		'use strict';
		// initializer
		const init = () => {
			startHeader();
		}
		init();
	});

    function startHeader () {
		$(".hamburger").on("click touch", function(e){
			$(this).toggleClass('active');
			$('.header-right').toggleClass('show');
		});

		// add nav icons
		var element = '<div class="nav-icon-container"><i class="fa fa-angle-down"></i></div>';
		$(".menu-item-has-children > a:first-of-type").append(element);

		// close submenu when hovering different element
		$("#main-menu > .menu-item").on("mouseenter focusin", function(){
			$('.menu-item-has-children').removeClass("open");
		});

		// prevent first click on mobile --->
		$(".menu-item-has-children").on("click touch", function(e){
			let target = $(e.currentTarget);
			if(!target.hasClass('open-mobile') && screen.width < 1199){
				e.preventDefault();
			}
			$(e.currentTarget).addClass("open-mobile");
		});

		// open submenu on hover
		$(".menu-item-has-children").on("mouseenter focusin", function(e){
			$(e.currentTarget).addClass("open");
		});

		// close submenu on leave
		$("header").on("mouseleave", function(){
			$('.menu-item-has-children').removeClass("open");
			$('.menu-item-has-children').removeClass("open-mobile");
		});

		// open main menu
		const hamburgers = document.querySelectorAll(".hamburger");
		hamburgers.forEach((hamburger) => {
			hamburger.addEventListener("click", () => {
			const currentState = hamburger.getAttribute("data-state");

			if (!currentState || currentState === "closed") {
				hamburgers.forEach((ham) => {
					ham.setAttribute("data-state", "opened");
					ham.setAttribute("aria-expanded", "true");
				});
				$(".main-nav").addClass('open');
				$(".nav-overlay").addClass('open');
			} else {
				hamburgers.forEach((ham) => {
					ham.setAttribute("data-state", "closed");
					ham.setAttribute("aria-expanded", "false");
				});
				$(".main-nav").removeClass('open');
				$(".nav-overlay").removeClass('open');
			}
			});
		});

		// submenu alignments
		let menuItems = document.querySelectorAll('#main-menu .menu-item-has-children');
		menuItems.forEach(menuItem => {
			let menuRight = window.innerWidth - menuItem.offsetLeft - (menuItem.offsetWidth / 2);

			let subItems = menuItem.querySelectorAll('.sub-menu > li');

			let totalWidth = 0;
			subItems.forEach(subItem => {
				totalWidth += subItem.offsetWidth;
			});

			let subRight = Math.max(menuRight - (totalWidth / 2), 0);
			subItems[subItems.length - 1].style.marginRight = subRight + 'px';
		});
    }	
})(jQuery, this);