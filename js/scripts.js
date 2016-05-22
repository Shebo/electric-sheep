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

		// toggle categories on curtain click
		jQuery(".homepage-curtains .curtain-wrapper").on('click', function(e){
			toggleCategory(this);
			if(jQuery(this).parent().attr('data-toggle') == 'open'){
				jQuery(this).parent().attr('data-toggle', 'close');
			}
		});

		// prevent category link to act as a curtain click
		jQuery(".view-videos").on('click', function(e){
			e.stopPropagation();
			e.preventDefault();
		});

		// prevent poster link to play video
		jQuery('.categories-carousel .vjs-poster').on('click', function(e){
			e.stopPropagation();
			e.preventDefault();
		});

		// hide overlay data once video is played
		jQuery('.categories-carousel video').on('play', function(e){
			jQuery(e.currentTarget).parent().siblings('.banner, .metadata').hide();
		});


		//
		jQuery('.category-carousel')
			.on('init', function(event, slick, direction){
				// set next/prev slide's class on carousel init
				setNextPrevSlideClasses(slick.$slides, slick.currentSlide);

			}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
				// set next/prev slide's class on before slide change
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
								centerPadding: '22.5%',
							}
						},
						{
							breakpoint: 1700,
							settings: {
								centerPadding: '20%',
							}
						},
						{
							breakpoint: 1600,
							settings: {
								centerPadding: '15%',
							}
						},
						{
							breakpoint: 1400,
							settings: {
								centerPadding: '12.5%',
							}
						},
						{
							breakpoint: 1200,
							settings: {
								centerPadding: '12%',
							}
						}
					]
			});
	});

})(jQuery, this);

function toggleCategory(el){

	var fadeClasses = 'fadeCarouselOutLeft fadeCarouselInLeft fadeCarouselOutRight fadeCarouselInRight';

	// get categories
	var oldCategory = jQuery('.curtain-wrapper.active').attr('data-category');
	var category = jQuery(el).attr('data-category');

	// toggle curtains
	jQuery('.curtain-wrapper').removeClass('active');
	jQuery(el).addClass('active');


	var oldActive = jQuery('.category-carousel-wrapper.active');
	var active = jQuery('.category-carousel-wrapper:not(.slick-cloned)[data-category="'+category+'"]');

	if(jQuery('.category-carousel-wrapper:not(.slick-cloned)[data-category="'+category+'"]').isAfter('.category-carousel-wrapper:not(.slick-cloned)[data-category="'+oldCategory+'"]')){
		oldActive.find('.slick-track').removeClass(fadeClasses).addClass('fadeCarouselOutLeft');
		active.find('.slick-track').removeClass(fadeClasses).addClass('fadeCarouselInLeft');
	}else{
		oldActive.find('.slick-track').removeClass(fadeClasses).addClass('fadeCarouselOutRight');
		active.find('.slick-track').removeClass(fadeClasses).addClass('fadeCarouselInRight');
	}

	oldActive.removeClass('active');
	active.addClass('active');
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