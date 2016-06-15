(function($) {

    $.fn.isAfter = function(sel) {
	    return this.prevAll(sel).length !== 0;
	};
	$.fn.isBefore = function(sel) {
	    return this.nextAll(sel).length !== 0;
	};

}(jQuery));

var loadedCurtains = 0;

(function ($, root, undefined) {

	$(function () {

		'use strict';

		if(jQuery('body').hasClass('home')){

        	videojs("curtain-video-1").ready(initCurtainVideo).on('loadeddata', curtainLoaded);
			videojs("curtain-video-2").ready(initCurtainVideo).on('loadeddata', curtainLoaded);
			videojs("curtain-video-3").ready(initCurtainVideo).on('loadeddata', curtainLoaded);
			videojs("curtain-video-4").ready(initCurtainVideo).on('loadeddata', curtainLoaded);
        }

		jQuery(window).load(function() {
			// Animate loader off screen




		});

		bodySizeClass();
		jQuery(window).on('resize', bodySizeClass);

		bodyScrollClass();
		jQuery(window).scroll(bodyScrollClass);

		// prevent poster link to play video
		jQuery('.menu-burger').on('click', function(e){
			var menu = jQuery('.main-navigation');

			if(menu.attr('data-menu-toggle') == 'open'){
				jQuery('#page').removeClass('overflow-y-hidden');
				menu.attr('data-menu-toggle', 'close');
			}else{
				menu.attr('data-menu-toggle', 'open');
				jQuery('#page').addClass('overflow-y-hidden');
			}
		});

		// toggle categories on curtain click
		jQuery(".homepage-curtains .curtain-wrapper").on('click', function(e){
			if(jQuery('body').hasClass('body-xs')){
				return false;
			}
			toggleCategory(this);
			if(jQuery(this).parent().parent().attr('data-toggle') == 'open'){
				jQuery(this).parent().parent().attr('data-toggle', 'close');
			}
		});

		// prevent category link to act as a curtain click
		jQuery(".view-videos").on('click', function(e){
			e.stopPropagation();
			// e.preventDefault();
		});

		// prevent poster link to play video
		jQuery('.categories-carousel .vjs-poster').on('click', function(e){
			e.stopPropagation();
			e.preventDefault();
		});

		// hide overlay data once video is played
		jQuery('.category-carousel video, .category-top video').on('play', function(e){
			jQuery(e.currentTarget).parent().siblings('.banner, .metadata').hide();
		});

		jQuery('.contributors-carousel, .partners-carousel').slick({
			slidesToShow: 2,
			rows: 2,
			slidesToScroll: 2,
			adaptiveHeight: true,
			prevArrow: '<button type="button" class="slick-prev"></button>',
			nextArrow: '<button type="button" class="slick-next"></button>',
			responsive:
				[
					{
						breakpoint: 640,
						settings: {
							rows: 1,
							slidesToScroll: 1,
							slidesToShow: 1,

							focusOnSelect: true,
							speed: 500,

							draggable: true,
							touchMove: true,
							swipe: true,
						}
					}
				]
		});

		var news_slider = jQuery('.news-inner');
		var news_slider_settings = {
			slidesToScroll: 1,
			slidesToShow: 1,
			prevArrow: '<button type="button" class="slick-prev"></button>',
			nextArrow: '<button type="button" class="slick-next"></button>',
		};

		if (jQuery(window).width() < 640) {
			news_slider.slick(news_slider_settings);
		}

		// reslick only if it's not slick()
		jQuery(window).on('resize', function() {
			if (jQuery(window).width() < 640) {
				if (!news_slider.hasClass('slick-initialized')) {
					news_slider.slick(news_slider_settings);
				}
			}else{
				if (news_slider.hasClass('slick-initialized')) {
					news_slider.slick('unslick');
				}
			}
		});

		jQuery('.category-carousel')
			.on('init', function(event, slick, direction){
				// set next/prev slide's class on carousel init
				setNextPrevSlideClasses(slick.$slides, slick.currentSlide);

				if(getQueryVariable('from') == 'hp'){
					setTimeout(scrollToTops, 500);
		        }

			}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
				// set next/prev slide's class on before slide change
				setNextPrevSlideClasses(slick.$slides, nextSlide);
			}).slick({
				centerMode: true,
				centerPadding: '25%',
				infinite: false,
				initialSlide: 0,
				slidesToShow: 1,
				focusOnSelect: true,
				speed: 500,
				rows: 1,

				draggable: false,
				touchMove: false,
				swipe: false,

				responsive:
					[
						{
							breakpoint: 1900,
							settings: {
								centerPadding: '22.5%',
								centerMode: true,
							}
						},
						{
							breakpoint: 1700,
							settings: {
								centerPadding: '20%',
								centerMode: true,
							}
						},
						{
							breakpoint: 1600,
							settings: {
								centerPadding: '15%',
								centerMode: true,
							}
						},
						{
							breakpoint: 1400,
							settings: {
								centerPadding: '12.5%',
								centerMode: true,
							}
						},
						{
							breakpoint: 1200,
							settings: {
								centerPadding: '12%',
								centerMode: true,
							}
						},
						{
							breakpoint: 640,
							settings: {
								centerMode: false,
								dots: true,
								initialSlide: 1,
								slidesToShow: 1,
								focusOnSelect: true,
								speed: 500,

								draggable: true,
								touchMove: true,
								swipe: true,
							}
						}
					]
			});

		// handle scroll-for-more
		jQuery('.scroll-for-more').on('click', function(e){
			e.stopPropagation();
			e.preventDefault();
			scrollToTops();
		});

	});

})(jQuery, this);

function toggleCategory(el){

	var fadeClasses = 'fadeCarouselOutLeft fadeCarouselInLeft fadeCarouselOutRight fadeCarouselInRight';

	// get categories
	var oldCategory = jQuery('.curtain-wrapper.active').attr('data-category');
	var category = jQuery(el).attr('data-category');

	if(category == oldCategory)
		return false;

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

	if (window.matchMedia('(max-width: 639px)').matches) {
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

function scrollToTops(){
	jQuery('html, body').animate({
		scrollTop: jQuery('.category-tops').offset().top
	}, 500);
}

function getQueryVariable(variable){
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0;i<vars.length;i++) {
       var pair = vars[i].split("=");
       if(pair[0] == variable){return pair[1];}
   }
   return(false);
}

function initCurtainVideo(){
	this.volume(0);
	this.play();
}

function curtainLoaded(){
	loadedCurtains++;
	if(loadedCurtains < 4){
		return;
	}

	setTimeout(function () {
	    jQuery('body').removeClass('loading').addClass('finish-loading');

	    setTimeout(function () {
		    jQuery(".loader img").one('animationiteration webkitAnimationIteration', function() {
		        jQuery('body').removeClass('finish-loading').addClass("done-loading");
		    });
		}, 700);
	}, 500);

}