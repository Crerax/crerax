/* Javascript */
// News slider

function news_carousel(){
	var newsSlider = jQuery('#blog_news');
	if(newsSlider.length > 0){
		newsSlider.owlCarousel({
			loop:true,
			margin:35,
			nav:true,
			dots:true,
			stagePadding: 120,
			responsive:{
				0:{
					items:1,
					stagePadding: 0,
				},
				480:{
					items:2,
					stagePadding: 0,
				},
				630:{
					items:3,
					stagePadding: 0,
				},
				1000:{
					items:3,
					stagePadding: 0,
				},
				1200:{
					items:2
				},
				1400:{
					items:2,

				},
				
			}
		});
	}
}

/*active the field label on focus*/
function activeLabelOnFocus( el ){
	var elWrapper = el.parents('.form-group');
	elWrapper.addClass('active');
	elWrapper.addClass('bordered');
}

function keepActiveLabelOnFocusOut( el ){
	var fieldVal = el.val();
	var elWrapper = el.parents('.form-group');
	elWrapper.removeClass('bordered');
	if(fieldVal.length > 0){
		elWrapper.addClass('active');
	}else{
		elWrapper.removeClass('active');
	}
}

jQuery(document).ready(function(){
	if ( jQuery(window).width() > 480) {     
  		var e = jQuery(window).width(),
        t = jQuery(".home .entry-content").width(),
        n = (e - t) / 2;

    	jQuery(".recent-news").css("width", t + n);
	}
	
	news_carousel(); // blog news carousel
	jQuery('.form-group .wpcf7-form-control').focus(function(){
		console.log('focused');
		activeLabelOnFocus(jQuery(this));
	});
	
	jQuery('.form-group .wpcf7-form-control').focusout(function(){
		console.log('focused out');
		keepActiveLabelOnFocusOut(jQuery(this));
	});
	
	
});