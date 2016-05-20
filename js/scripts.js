(function($) {

    $.fn.isAfter = function(sel) {
	    return this.prevAll(sel).length !== 0;
	};
	$.fn.isBefore = function(sel) {
	    return this.nextAll(sel).length !== 0;
	};

}(jQuery));

(function ($, root, undefined) {

	$(function () {

		'use strict';

		bodySizeClass();
		jQuery(window).on('resize', bodySizeClass);

		bodyScrollClass();
		jQuery(window).scroll(bodyScrollClass);

		jQuery(".homepage-curtains[data-toggle='open'] .curtain-wrapper").on('click', function(e){
			toggleCurtain(this);
			jQuery(this).parent().attr('data-toggle', 'close');
		});

		jQuery(".homepage-curtains[data-toggle='close'] .curtain-wrapper").on('click', function(e){
			toggleCurtain(this);
		});

		// dont let category link act as a curtain click
		jQuery(".view-videos").on('click', function(e){
			e.stopPropagation();
			e.preventDefault();
		});


		jQuery('.categories-carousel .vjs-poster').on('click', function(e){
			e.stopPropagation();
			e.preventDefault();
		});

		// hide metadata once video is played
		jQuery('.categories-carousel video').on('play', function(e){
			jQuery(e.currentTarget).parent().prev('.metadata').hide();
		});


		jQuery('.category-carousel')
			.on('init', function(event, slick, direction){

				setNextPrevSlideClasses(slick.$slides, slick.currentSlide);
			}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {

				setNextPrevSlideClasses(slick.$slides, nextSlide);
			}).slick({
				centerMode: true,
				centerPadding: '25%',
				infinite: false,
				initialSlide: 1,
				slidesToShow: 1,
				focusOnSelect: true,
				speed: 500,

				draggable: false,
				touchMove: false,
				swipe: false,

				responsive:
					[
						{
							breakpoint: 1900,
							settings: {
								centerPadding: '20%',
							}
						},
						{
							breakpoint: 1200,
							settings: {
								centerPadding: '10%',
							}
						}
					]
			});

		// jQuery('.categories-carousel').owlCarousel({
		//   slidesToShow: 1,
		//   arrows: false,
		//   draggable: false,
		//   touchMove: false,
		//   swipe: false,
		//   // infinite: false,


		// 	center: true,
		// 	loop: false,
		// 	mouseDrag: false,
		// 	touchDrag: false,
		// 	pullDrag: false,
		// 	freeDrag: false,
		// 	items: 1,
		// 	smartSpeed: 3000,
		// });

		// jQuery('.category-carousel').owlCarousel({
		// 	center: true,
		// 	loop: false,
		// 	items: 1,
		// 	margin:50,
		// 	stagePadding: 200,
		// });



	});

})(jQuery, this);

function toggleCurtain(el){

	var fadeClasses = 'fadeOutLeft fadeInLeft fadeOutRight fadeInRight';

	// get categories
	var oldCategory = jQuery('.curtain-wrapper.active').attr('data-category');
	var category = jQuery(el).attr('data-category');

	// toggle curtains
	jQuery('.curtain-wrapper').removeClass('active');
	jQuery(el).addClass('active');


	var oldActive = jQuery('.category-carousel-wrapper.active');
	var active = jQuery('.category-carousel-wrapper:not(.slick-cloned)[data-category="'+category+'"]');

	if(jQuery('.category-carousel-wrapper:not(.slick-cloned)[data-category="'+category+'"]').isAfter('.category-carousel-wrapper:not(.slick-cloned)[data-category="'+oldCategory+'"]')){
		console.log(category+' is after');
		oldActive.find('.slick-track').removeClass(fadeClasses).addClass('fadeOutLeft');
		active.find('.slick-track').removeClass(fadeClasses).addClass('fadeInLeft');
	}else{
		console.log(category+' is before');
		oldActive.find('.slick-track').removeClass(fadeClasses).addClass('fadeOutRight');
		active.find('.slick-track').removeClass(fadeClasses).addClass('fadeInRight');
	}

	oldActive.removeClass('active');
	active.addClass('active');

	console.log(oldActive.find('.slick-track'));
	console.log(active.find('.slick-track'));




	// var catCarousel = jQuery('.category-carousel-wrapper:not(.slick-cloned)[data-category="'+category+'"]');
	// var catCarousels = jQuery('.category-carousel-wrapper:not(.slick-cloned)[data-category="'+category+'"]').index();
	// console.log(catCarousel);
	// console.log(catCarousels);
	// jQuery('.categories-carousel').slick('slickGoTo', parseInt(catCarousels)-1);

	// jQuery('.categories-carousel').trigger('to.owl.carousel', [parseInt(catCarousels)-1, 300]);
}


function bodySizeClass() {

	if (window.matchMedia('(max-width: 768px)').matches) {
	    jQuery('body').removeClass( 'body-sm body-md body-lg body-xl' ).addClass( 'body-xs' );
	} else if (window.matchMedia('(max-width: 992px)').matches) {
		jQuery('body').removeClass( 'body-xs body-md body-lg body-xl' ).addClass( 'body-sm' );
	} else if (window.matchMedia('(max-width: 1200px)').matches) {
    	jQuery('body').removeClass( 'body-xs body-sm body-lg body-xl' ).addClass( 'body-md' );
	} else {
	    jQuery('body').removeClass( 'body-xs body-sm body-md body-xl' ).addClass( 'body-lg' );
	}
}

function bodyScrollClass(){
	if(jQuery(window).scrollTop() >= 120){
		jQuery("body").addClass('scrolled');
	}else{
		jQuery("body").removeClass('scrolled');
	}
}

function setNextPrevSlideClasses(slides, current){
	slides.removeClass('next-slide prev-slide');

	jQuery(slides[current-1]).addClass('prev-slide');
    jQuery(slides[current+1]).addClass('next-slide');
}