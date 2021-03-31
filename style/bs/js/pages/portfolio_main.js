$(function() {
	
	$('.showroom .inner').hover(function(){
		$(this).find('.showroom_mask').animate({
			opacity: 0.4
		}, 150);
		/*$(this).find('.showroom_menu').animate({
			right: "+=60"
		}, 100);*/
	}, function(){
		$(this).find('.showroom_mask').animate({
			opacity: 0
		}, 100);
		/*$(this).find('.showroom_menu').animate({
			right: "-=60"
		}, 100);*/
	});
	
});