$(document).ready(function() {
	var items_per_page = 4;
	
	$("#portfolio").children().hide();
	$("#portfolio").children().slice(0, items_per_page).show();
	
	$('.pagination').jqPagination({
		link_string	: location.href+'/?page={page_number}',
		max_page	: Math.ceil($('.showroom').children().length / items_per_page),
		paged		: function(page) {
			var start = page*items_per_page - (items_per_page - 1);
			if($('.showroom').children().length <= page*items_per_page){
				var end = $('.showroom').children().length;
			}
			else{
				var end = page*items_per_page;
			}
			start -= 1;
			//console.log(start+" : "+end);
			$("#portfolio").children().hide();
			$("#portfolio").children().slice(start, end).show();
		}
	});

});