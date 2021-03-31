$(function() {
	var menu = $("#hs_menu");
	var menu_visible = false;
	menu.hide();
	
	
	$(document).keyup(function(e){
		//escape
	    if(e.keyCode === 27){
	    	if(menu_visible){
	    		menu.hide();
	    	}
	    	else{
	    		menu.show();	    		
	    	}
	    	menu_visible = !menu_visible;
	    }
	});
	
//	$("#hs_menu a").click(function(e){
//		e.preventDefault();
//	});
	
	
//	$("#hs_menu #options_menu").click(function(e){
//		
//	});
	
	$("#hs_menu #back").click(function(e){
		
		menu_visible = false;
		menu.hide();
		
		e.preventDefault();
		e.stopPropagate();
	});
	
	
});