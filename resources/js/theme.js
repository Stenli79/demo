(function ($) {
	"use strict";

/*---------------------------------------------------
   Preloader
----------------------------------------------------- */
$(window).on('load', function () {
	$('[data-loader="circle-side"]').fadeOut(); // will first fade out the loading animation
	$('#preloader').delay(333).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(333);
});

/*---------------------------------------------------
   tooltips
----------------------------------------------------- */
$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

/*---------------------------------------------------
   Scroll to top
----------------------------------------------------- */
$(function () {
	$(window).on('scroll', function(){
		if ($(this).scrollTop() > 150) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}
	});
});
		
$('#back-to-top').on("click", function() {
	$('html, body').animate({scrollTop:0}, 'slow');
	return false;
});

/*---------------------------------------------------
   common
----------------------------------------------------- */
$('.link-btn').click(function (e) {

	e.preventDefault();

	const href = $(this).data('href');
	const blank = $(this).data('blank');

	if (blank){
		window.open(href, '_blank');
	}else{
		location.href = href;
	}
});
		
$('.submit-previous-form').click(function (e) {
    e.preventDefault();
    $($(this)).prev('form').submit();
});

})(jQuery);
