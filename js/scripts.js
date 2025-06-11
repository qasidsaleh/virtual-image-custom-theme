(function ($, root, undefined) {
	$(function () {
		'use strict';
		// initializer
		const init = () => {
			startHeader();
			startAccordion();
			//startSwiper();
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
		if (screen.width < 1199){
			$(".nav-icon-container").on("click touch focusin", function(e){
				e.preventDefault();
				$(this).closest(".menu-item-has-children").toggleClass("open");
			});
		} else {
			$(".menu-item-has-children").on("mouseenter focusin", function(e){
				$(".menu-item-has-children").removeClass("open");
				$(this).addClass("open");
			  });
		}

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
	
	// Accordion
	function startAccordion(){
    	$(".list .question").on("click touch", function(e){
    		$(".list").not($(this).parent()).removeClass('expand');
    		$(this).parent().toggleClass('expand');
    	});
    }

	// Swiper Slider
	function startSwiper () {
		var swiper = new Swiper(".swiper-slider", {
			spaceBetween: 100,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			// width: 1000,
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				767: {
				  slidesPerView: 2,
				},
				1025: {
				  slidesPerView: 3,
				}
			}
		});
	}
	
	window.addEventListener('scroll', scrollFunc, { passive: true });
	function scrollFunc() {
		reveals = [".reveal-bottom"];
		for (var j = 0; j < reveals.length; j++) {
			var reveals1 = document.querySelectorAll(reveals[j]);
			for (var i = 0; i < reveals1.length; i++) {
				var windowHeight = window.innerHeight;
				var elementTop = reveals1[i].getBoundingClientRect().top;
				if (elementTop < windowHeight) {
					reveals1[i].classList.add("active");
				}
			}
		}
	}

	$(document).ready(function(){
		$('.hero-image').addClass('active');
  		$('.reveal-left').addClass('active');
	});

})(jQuery, this);