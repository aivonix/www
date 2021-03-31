$(function() {
	$('.leftColumn').animate({
		opacity: 1,
		left: "+=10"
	}, 1500, function() {
		// Animation complete.
	});
	$('.rightColumn').animate({
		opacity: 1,
		left: "-=10"
	}, 1500, function() {
		// Animation complete.
	});
	
});