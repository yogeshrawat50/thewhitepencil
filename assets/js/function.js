/*====================================
*    header  sticky class
======================================*/

$(window).scroll(function(){



	if ($(this).scrollTop() > 50) {
	   $('.header-section').addClass('fixed__header');
	} else {
	   $('.header-section').removeClass('fixed__header');
	}

			
});




/*====================================
*    aos animation
======================================*/
AOS.init({
	easing: "ease-out-back",
	duration: 1000,
});


/*====================================
*     Count .js home
======================================*/
$(document).ready(function() {
	var counters = $(".count");
	var countersQuantity = counters.length;
	var counter = [];
	for(i = 0; i < countersQuantity; i++) {
		counter[i] = parseInt(counters[i].innerHTML);
	}
	var count = function(start, value, id) {
		var localStart = start;
		setInterval(function() {
			if(localStart < value) {
				localStart++;
				counters[id].innerHTML = localStart;
			}
		}, 40);
	};
	for(j = 0; j < countersQuantity; j++) {
		count(0, counter[j], j);
	}
});
/*====================================
*     LOADER
======================================*/
// loader();
// function loader(_success) {
//   var obj = document.querySelector(".preloader"),
//   inner = document.querySelector(".preloader_inner"),
//   page = document.querySelector(".page");
//   obj.classList.add("show");
//   page.classList.remove("show");
//   var w = 0,
//   t = setInterval(function () {
//     w = w + 1;
//     inner.textContent = w + "%";
//     if (w === 100) {
//       obj.classList.remove("show");
//       page.classList.add("show");
//       clearInterval(t);
//       w = 0;
//       if (_success) {
//         return _success();
//       }
//     }
//   }, 20);
// }
/*====================================
*   mouse effet
======================================*/
const updateProperties = (elem, state) => {
	elem.style.setProperty("--x", `${state.x}px`);
	elem.style.setProperty("--y", `${state.y}px`);
	elem.style.setProperty("--width", `${state.width}px`);
	elem.style.setProperty("--height", `${state.height}px`);
	elem.style.setProperty("--radius", state.radius);
	elem.style.setProperty("--scale", state.scale);
};
document.querySelectorAll(".cursor").forEach((cursor) => {
	let onElement;
	const createState = (e) => {
		const defaultState = {
			x: e.clientX,
			y: e.clientY,
			width: 40,
			height: 40,
			radius: "50%",
		};
		const computedState = {};
		if(onElement != null) {
			const {
				top, left, width, height
			} = onElement.getBoundingClientRect();
			const radius = window.getComputedStyle(onElement).borderTopLeftRadius;
			computedState.x = left + width / 2;
			computedState.y = top + height / 2;
			computedState.width = width;
			computedState.height = height;
			computedState.radius = radius;
		}
		return {...defaultState, ...computedState,
		};
	};
	document.addEventListener("mousemove", (e) => {
		const state = createState(e);
		updateProperties(cursor, state);
	});
});
//menu
const burger = document.querySelector(".burger");
const navbar = document.querySelector(".navbar-fixed");
const navLink = document.querySelectorAll(".nav-link");
burger.addEventListener("click", () => {
	navbar.classList.toggle("nav-open");
	burger.classList.toggle("burger-open");
	navLink.forEach((link) => {
		link.classList.toggle("nav-link-open");
	});
});
// home page partner
$(".owl-carousel-testi").owlCarousel({
	loop: true,
	rtl: false,
	autoplay: false,
	autoplayHoverPause: false,
	margin: 30,
	nav: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
		
			margin: 0,
		},
		600: {
			items: 1,
	
			margin: 0,
		},

		1300: {
			items:2, stagePadding: 50
		},

		1500: {
			items:2, stagePadding: 180
		},

	},
});
// abouts page
$("#owl-carousel-about").owlCarousel({
	loop: true,
	rtl: false,
	autoplay: false,
	stagePadding: 0,
	autoplayHoverPause: false,
	margin: 50,
	nav: false,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
			stagePadding: 0,
			margin: 0,
		},
		600: {
			items: 1,
			stagePadding: 0,
			margin: 0,
		},
		1000: {
			items: 3,
		},
	},
});
// home page partner
$(".owl-carousel-awards").owlCarousel({
	loop: false,
	rtl: false,
	autoplay: false,
	stagePadding: 0,
	autoplayHoverPause: true,
	margin: 0,
	nav: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 2,
		},
		600: {
			items: 2,
		},
		1000: {
			items: 3,
		},
	},
});
/*====================================
* // Hide Header on on scroll down
======================================*/
// var didScroll;
// var lastScrollTop = 0;
// var delta = 5;
// var navbarHeight = $("header").outerHeight();
// $(window).scroll(function(event) {
// 	didScroll = true;
// });
// setInterval(function() {
// 	if(didScroll) {
// 		hasScrolled();
// 		didScroll = false;
// 	}
// }, 250);



// function hasScrolled() {
// 	var st = $(this).scrollTop();

// 	if(Math.abs(lastScrollTop - st) <= delta) return;
	
// 	if(st > lastScrollTop && st > navbarHeight) {
	
// 		$("header").removeClass("fixed-header").addClass("nav-up");
// 	} else {
	
// 		if(st + $(window).height() < $(document).height()) {
// 			$("header").removeClass("nav-up").addClass("fixed-header");
// 		}
// 	}
// 	lastScrollTop = st;
// }
/*====================================
*    home page  we offer tabs js
======================================*/
$(document).ready(function() {
	$(".listno1 a").hover(function() {
		$(".listno1").addClass("active");
		$(".listno2, .listno3, .listno4, .listno5").removeClass("active");
	});
	$(".listno2 a").hover(function() {
		$(".listno2").addClass("active");
		$(".listno1, .listno3, .listno4, .listno5").removeClass("active");
	});
	$(".listno3 a").hover(function() {
		$(".listno3").addClass("active");
		$(".listno1, .listno2, .listno4, .listno5").removeClass("active");
	});
	$(".listno4 a").hover(function() {
		$(".listno4").addClass("active");
		$(".listno1, .listno2, .listno3, .listno5").removeClass("active");
	});
	$(".listno5 a").hover(function() {
		$(".listno5").addClass("active");
		$(".listno1, .listno2, .listno3, .listno4").removeClass("active");
	});
	$(".listno1 a").hover(function() {
		$(".listing_show_data1").addClass("active");
		$(".listing_show_data2, .listing_show_data3, .listing_show_data4, .listing_show_data5").removeClass("active");
	});
	$(".listno2 a").hover(function() {
		$(".listing_show_data2").addClass("active");
		$(".listing_show_data1, .listing_show_data3, .listing_show_data4, .listing_show_data5").removeClass("active");
	});
	$(".listno3 a").hover(function() {
		$(".listing_show_data3").addClass("active");
		$(".listing_show_data1, .listing_show_data2, .listing_show_data4, .listing_show_data5").removeClass("active");
	});
	$(".listno4").hover(function() {
		$(".listing_show_data4").addClass("active");
		$(".listing_show_data1, .listing_show_data2, .listing_show_data3,  .listing_show_data5").removeClass("active");
	});
	$(".listno5").hover(function() {
		$(".listing_show_data5").addClass("active");
		$(".listing_show_data1, .listing_show_data2, .listing_show_data3,  .listing_show_data4").removeClass("active");
	});
});
/*====================================
*  back to top
======================================*/
var btn = $("#button");
$(window).scroll(function() {
	if($(window).scrollTop() > 300) {
		btn.addClass("show");
	} else {
		btn.removeClass("show");
	}
});
btn.on("click", function(e) {
	e.preventDefault();
	$("html, body").animate({
		scrollTop: 0
	}, "300");
});
/*====================================
*    Full page js
======================================*/
// var myFullpage = new fullpage('#fullpage', {
//   verticalCentered: true,
//   scrollBar:true,
//   responsiveWidth: 768,
//   lazyLoad: true,
//   loopHorizontal: false,
//   autoScrolling: false,
//   fitToSection: false,
//   normalScrollElements:'.normalScroll'
// });
// fullpage_api.setScrollingSpeed(1200);






	

$(".gotoform").click(function() {
	$("html,body").animate({
		scrollTop: $("#hereform").offset().top,
	}, "slow");
});

$(".gotoform").click(function(){
	$("#footerform .form-control-1st").addClass("has-content").focus();
});
   



	
				  
			




$(".gotonextsection").click(function() {
	$("html,body").animate({
		scrollTop: $("#nextsection").offset().top,
	}, "slow");
});
$(".gotoservice").click(function() {
	$("html,body").animate({
		scrollTop: $("#we-offer").offset().top,
	}, "slow");
});
$(document).ready(function() {
	$(".navbar-fixed .nav-link").click(function() {
		$(".navbar-fixed").removeClass("nav-open");
	});
});
// HOME VIDEO PLAY BUTTON
// $(document).ready(function () {
//   $(".play__btn").hover(function () {
//       $(".videopanel_lapi_bg").addClass("videopanel__start");
//   });
// });
$(".play__btn").hover(function() {
	$(".videopanel_lapi_bg").addClass("videopanel__start");
}, function() {
	$(".videopanel_lapi_bg").removeClass("videopanel__start");
});
$(document).ready(function() {
	$(".play__btn").click(function() {
		$(".videopanel_lapi_bg").addClass("videopanel__start1");
	});
});
$(document).ready(function() {
	$(".stop__btn").click(function() {
		$(".videopanel_lapi_bg").removeClass("videopanel__start1");
	});
});
jQuery(document).ready(function() {
	$(".play__btn").click(function() {
		setTimeout(function() {
			$(".iframes__home").addClass("iframes__home_start");
			$(".stop__btn").addClass("stop__btn_start");
		}, 500);
	});
});
jQuery(document).ready(function() {
	$(".stop__btn").click(function() {
		setTimeout(function() {
			$(".iframes__home").removeClass("iframes__home_start");
			$(".videopanel_lapi_bg").removeClass("videopanel__start");
			$(".stop__btn").removeClass("stop__btn_start");
		}, 500);
	});
});

// lottie js

var owl = $('.owl-carousel.lottie_slider').owlCarousel({
	autoplay: true,
	autoplayTimeout: 2500,
	loop: false,
	margin: 0,
	nav: false,
	items: 1,
	lazyLoad: true,
	responsive: {
		0: {
			items: 1,
		},
		600: {
			items: 1,
		},
		1800: {
			items: 1,
		}
	}
});







// videoSlider.on("translated.owl.carousel", function (e) {
//   if ($(".owl-item.active").find("lottie-player").length !== 0) { 
//     $(".owl-item.active lottie-player").attr("loop","")
//   }
// });


    // JavaScript for label effects only

$(document).ready(function(){
    if($('#footerform input').val() !='' ) {
          $('.form-control').addClass('has-content');
    }
  else{
          $('this').removeClass('has-content');
        }
		});




