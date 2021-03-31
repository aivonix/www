<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/aivonix"  data-widget-id="481789091579576320">Tweets by @aivonix</a>
<script>
	function runner(one, two){
		//console.log(one());
		
		one().then(two());
		
/*
		$( "#twitter-snippet" ).queue('q1', function() {
			one();
			$( this ).dequeue('q1');
		});
		$( "#twitter-snippet" ).queue('q1', function() {
			two();
			$( this ).dequeue('q1');
			console.log('field');
		});*/
	}
	function twitter(){
		var result = $.Deferred();
		!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
			if(!d.getElementById(id)){
				js=d.createElement(s);
				js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);
			}
		}(document,"script","twitter-wjs");
		return result.promise();
	}
	function repl(){
		var result = $.Deferred();
		$("#twitter-widget-0").contents().find(".full-name").css('display', 'none');
		return result.promise();
	}
	$(function(){
		runner(twitter, repl);
	});
</script>