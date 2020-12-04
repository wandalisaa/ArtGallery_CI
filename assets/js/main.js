/* ===================================
--------------------------------------
	Boto | Photography HTML Template
	Version: 1.0
	Copyright By: ColorLib
--------------------------------------
======================================*/

'use strict';

$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});


	/*------------------
		Navigation
	--------------------*/
    $(".nav-switch").on('click', function (e) {
		e.preventDefault();
        $(".slicknav_btn").click();
	});
	
	$('.nav__menu').slicknav({
		'appendTo' : '.main__menu',
		'openedSymbol': '<i class="fa fa-angle-up"></i>',
		'closedSymbol': '<i class="fa fa-angle-right"></i>'
	});

	/*---------------
		Search
	----------------*/
    $('.search-switch').on('click', function (e) {
		e.preventDefault();
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
	});

	/*-------------------
		Hero Slider
	-------------------*/
	$('.hero-slider-main').slick({
		dots: false,
		infinite: true,
		slidesToShow: 5,
		centerMode: false,
		variableWidth: true,
		arrows: false,
		asNavFor: '.hero-text-slider',
		autoplay: false,
		pauseOnHover:true,
		responsive: [
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	
	var hero_slider = $('.hero-slider-main');

	hero_slider.on('wheel', (function(e) {
		e.preventDefault();
		if (e.originalEvent.deltaY < 0) {
			$(this).slick('slickPrev');
		} else {
			$(this).slick('slickNext');
		}
	}));
	$('.hero-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		centerMode: true,
		variableWidth: true,
		centerMode: true,
		arrows: false,
		asNavFor: '.hero-text-slider',
		autoplay: true,
		pauseOnHover:true,
		autoplaySpeed: 3000,
		responsive: [
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	
	var hero_slider = $('.hero-slider');

	hero_slider.on('wheel', (function(e) {
		e.preventDefault();
		if (e.originalEvent.deltaY < 0) {
			$(this).slick('slickPrev');
		} else {
			$(this).slick('slickNext');
		}
	}));
	// hero_slider.on('click', '.slick-slide', function (e) {
	// 	e.preventDefault();
	// 	var index = $(this).data("slick-index");
	// 	if ($('.slick-slider').slick('slickCurrentSlide') !== index) {
	// 		$('.slick-slider').slick('slickGoTo', index);
	// 	}
	// });

	$('.hero-text-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		arrows: false,
		asNavFor: '.hero-slider',
	});

	/*-------------------
		Blog Slider
	-------------------*/
	$('.blog__slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		arrows: false,
		centerMode: true,
		centerPadding: '190px',
		slidesToShow: 2,
		autoplay: true,
		pauseOnHover:false,
		responsive: [
			{
				breakpoint: 991,
				settings: {
				centerPadding: '0',
				slidesToShow: 2,
				slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					centerMode: false,
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: '0',
				}
			}
		]
	});
	/*-------------------
		Blog Slider
	-------------------*/
	$('.artikel__slider').slick({
		dots: false,
		infinite: true,
		speed: false,
		arrows: false,
		centerMode: false,
		centerPadding: '190px',
		slidesToShow: 4,
		autoplay: false,
		pauseOnHover:false,
		responsive: [
			{
				breakpoint: 991,
				settings: {
				centerPadding: '0',
				slidesToShow: 10,
				slidesToScroll: 10
				}
			},
			{
				breakpoint: 480,
				settings: {
					centerMode: false,
					slidesToShow: 5,
					slidesToScroll: 5,
					centerPadding: '0',
				}
			}
		]
	});

	/*-------------------
		Progress Bars
	-------------------*/
	$('.progress-bar-style').each(function() {
		var progress = $(this).data("progress");
		var prog_width = progress + '%';
		if (progress <= 100) {
			$(this).append('<div class="bar-inner" style="width:' + prog_width + '"></div>');
		}
		else {
			$(this).append('<div class="bar-inner" style="width:100%"></div>');
		}
	});

})(jQuery);

/** After windod Load */  
$(window).bind("load", function() {  
	window.setTimeout(function() {  
	  $(".alert").fadeTo(2000, 0).slideUp(2000, function() {  
		$(this).remove();  
	  });  
	}, 500);  
  });  

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
	  // Fetch all the forms we want to apply custom Bootstrap validation styles to
	  var forms = document.getElementsByClassName('needs-validation');
	  // Loop over them and prevent submission
	  var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
		  if (form.checkValidity() === false) {
			event.preventDefault();
			event.stopPropagation();
		  }
		  form.classList.add('was-validated');
		}, false);
	  });
	}, false);
  })();

//   login
$('.message a').click(function(){
	$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });
// like button
document.querySelector('.like-button').addEventListener('click', (e) => {
	e.currentTarget.classList.toggle('liked');
  });
