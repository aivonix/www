$(function() {
	var base_url = "http://hearthstone/";
	
	counter = function(timer, loc){
		timer = timer || 5;
		loc = loc || 'login';
		
		var ts = setInterval(
			function(){
				if(timer > 0){
					$(".counter").text(timer);
					timer--;
					console.log(timer);
				}
				else{
					clearTimeout(ts);
					window.location.replace(base_url+loc);
				}
			}, 1000
		);
	}
	
	
	//execution
//	counter();
});