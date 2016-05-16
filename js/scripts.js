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
			jQuery(this).parent().attr('data-toggle', 'close');
		});

		jQuery(".view-videos").on('click', function(e){
			e.stopPropagation();
			e.preventDefault();
		});

	});

})(jQuery, this);

function toggleCurtain(el){
	jQuery('.curtain-wrapper').removeClass('active');
	jQuery(el).addClass('active');
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