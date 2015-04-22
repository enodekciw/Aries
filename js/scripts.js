/**
* Aries -- scripts.js
*/

jQuery(function(){

	jQuery(document).on('click','.navigation-trigger', function(){
		jQuery('.navigation-wrap').toggleClass('navigation-active navigation-inactive');
		jQuery('.hamburger-icon').toggleClass('open');
		jQuery('body').toggleClass('navigation-visible');
	});

    jQuery('.post').fitVids();

});

window.onload = function () { 
	jQuery('.loader-wrap').fadeOut(600);
}