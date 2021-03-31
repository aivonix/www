$(function() {
	//alert('let the games begin!');
	
	//init
	
	var block_width = 50;
	var block_height = 50;
	var block_inner_borders_size = 1;
	var block_outer_borders_size = 3;
	var blocks_horizontal = 10;
	var blocks_vertical = 22;
	var blocks_unobstructed = 20;
	tetris_frame = {};
	var root_selector = $('#tetris_frame .inner');
	
	//visible HTML grid sizes
	var total_width = blocks_horizontal*block_width + (blocks_horizontal-2)*block_inner_borders_size + ((blocks_horizontal-1)*block_outer_borders_size)*2; //
	var total_height = blocks_vertical*block_height + (blocks_vertical-2)*block_inner_borders_size + ((blocks_vertical-1)*block_outer_borders_size)*2;     //
	var total_inner_width = blocks_horizontal*block_width + 2*block_outer_borders_size;
	var total_inner_height = blocks_vertical*block_height + 2*block_outer_borders_size;
	
	var originPoint = {x: 0, y: 0}; // for all shapes 
	var currentShape = {
		offsetX: parseInt(blocks_horizontal / 2),
		offsetY: blocks_vertical-2,
		phase: 'p1',
		shape: 'shape_I'
	};
	var shapeTemplate = {
		offsetX: (parseInt(blocks_horizontal / 2) - 2),
		offsetY: blocks_vertical-2,
		phase: 'p1',
		shape: 'shape_I'
	};
	var shapeIDs = {
		0: 'shape_I',
		1: 'shape_O',
		2: 'shape_T',
		3: 'shape_S',
		4: 'shape_Z',
		5: 'shape_L',
		6: 'shape_J'
	};
	
	
	//shapes
	
	var shapes = {
	
		shape_I: {					//the stick
			rotations: 2,
			p1: [{x: 2, y: 0}, {x: 2, y: -1}, {x: 2, y: -2}, {x: 2, y: -3}], 
			p2: [{x: 0, y: -1}, {x: 1, y: -1}, {x: 2, y: -1}, {x: 3, y: -1}],
			color: '#00FDFF'
		},
		
		shape_O: {					//the block
			rotations: 1,
			p1: [{x: 1, y: -1}, {x: 2, y: -1}, {x: 1, y: -2}, {x: 2, y: -2}],
			color: '#FFFF00'
		},
		
		shape_T: {					//the tetri
			rotations: 4,
			p1: [{x: 2, y: 0}, {x: 2, y: -1}, {x: 2, y: -2}, {x: 1, y: -1}],
			p2: [{x: 2, y: 0}, {x: 1, y: -1}, {x: 2, y: -1}, {x: 3, y: -1}],
			p3: [{x: 2, y: 0}, {x: 2, y: -1}, {x: 2, y: -2}, {x: 3, y: -1}],
			p4: [{x: 1, y: -1}, {x: 2, y: -1}, {x: 3, y: -1}, {x: 2, y: -2}],
			color: '#FF00FF'
		},
		
		shape_S: {					//the right snake
			rotations: 2,
			p1: [{x: 2, y: -1}, {x: 3, y: -1}, {x: 1, y: -2}, {x: 2, y: -2}],
			p2: [{x: 2, y: 0}, {x: 2, y: -1}, {x: 3, y: -1}, {x: 3, y: -2}],
			color: '#00FF00'
		},
		
		shape_Z: {					//the left snake
			rotations: 2,
			p1: [{x: 1, y: -1}, {x: 2, y: -1}, {x: 2, y: -2}, {x: 3, y: -2}],
			p2: [{x: 3, y: 0}, {x: 3, y: -1}, {x: 2, y: -1}, {x: 2, y: -2}],
			color: '#FF0000'
		},
		
		shape_L: {					//the left gun
			rotations: 4,
			p1: [{x: 1, y: 0}, {x: 2, y: 0}, {x: 2, y: -1}, {x: 2, y: -2}],
			p2: [{x: 3, y: 0}, {x: 1, y: -1}, {x: 2, y: -1}, {x: 3, y: -1}],
			p3: [{x: 2, y: 0}, {x: 2, y: -1}, {x: 2, y: -2}, {x: 3, y: -2}],
			p4: [{x: 1, y: -1}, {x: 2, y: -1}, {x: 3, y: -1}, {x: 1, y: -2}],
			color: '#0000FF'
		},
		
		shape_J: {					//the right run
			rotations: 4,
			p1: [{x: 1, y: -2}, {x: 2, y: 0}, {x: 2, y: -1}, {x: 2, y: -2}],
			p2: [{x: 1, y: 0}, {x: 1, y: -1}, {x: 2, y: -1}, {x: 3, y: -1}],
			p3: [{x: 2, y: 0}, {x: 2, y: -1}, {x: 2, y: -2}, {x: 3, y: 0}],
			p4: [{x: 1, y: -1}, {x: 2, y: -1}, {x: 3, y: -1}, {x: 3, y: -2}],
			color: '#FF8000'
		}
	}
	
	
	
	
	function spawnable_shape(current, spawn_or_despawn){
		
		var coord ="";
		var color = "";
		if(spawn_or_despawn == true){
			color = shapes[current.shape].color;
		}
		else{
			color = 'none';
		}
		
		//the background change
		for(var j in shapes[current.shape][current.phase]){
			coord= (shapes[current.shape][current.phase][j].x + current.offsetX) +'x'+ (shapes[current.shape][current.phase][j].y + current.offsetY);
			$('.coord'+coord).css('background', color);
		}
		
	}
	
	function rotate_left (current){
		//change phase
		var phase = current.phase;
		var i = parseInt(current.phase.substr(1));
		i--;
		if(i <= 0){ i = parseInt(shapes[current.shape].rotations); }
		i = i % (shapes[current.shape].rotations+1);
		var newPhase = "p"+i
		
		//rotate
		spawnable_shape(current, false);
//		current.phase = newPhase;
		adjust(current, newPhase);
		spawnable_shape(current, true);
		
		
		
		//console.log(newPhase);
	}
	
	function rotate_right (current){
		//change phase
		var phase = current.phase;
		var i = parseInt(current.phase.substr(1));
		i = i % (shapes[current.shape].rotations);
		i++;
		var newPhase = "p"+i;
		
		//rotate
		spawnable_shape(current, false);
//		current.phase = newPhase;
		adjust(current, newPhase);
		spawnable_shape(current, true);
		
		
		
		//console.log(newPhase);
	}
	
	function move(current, direction){
		
		var modifierSideways = 0;
		var modifierBottom = 0;
		var newShape = [];
		
		if(direction == "left"){
			modifierSideways = -1;
		}else if(direction == "right"){
			modifierSideways = 1;
		}else if(direction == "down"){
			var modifierBottom = -1;
		}
		
		//if(current.offsetX > 0 && current.offsetX < (blocks_horizontal-1) && current.offsetY > 0){
			for(var j in shapes[current.shape][current.phase]){
				newShape.push({
					x: shapes[current.shape][current.phase][j].x + current.offsetX + modifierSideways,
					y: shapes[current.shape][current.phase][j].y + current.offsetY + modifierBottom,
					coord: (shapes[current.shape][current.phase][j].x + current.offsetX + modifierSideways)+"x"+(shapes[current.shape][current.phase][j].y + current.offsetY + modifierBottom)
				});
			}
			
			var flag = true; 
			for(var j in newShape){
				if (newShape[j].x < 0 || newShape[j].x >= blocks_horizontal || tetris_frame[newShape[j].coord].flag == 1 || newShape[j].y < 0 ){
					flag = false;
				}
			}
			
			if(flag){
				spawnable_shape(current, false);
				current.offsetX += modifierSideways;
				current.offsetY += modifierBottom;
				spawnable_shape(current, true);
				
				clearInterval(timer);
				timer = setInterval(function(){
					timerFn();
				},300);
			}
		
	}
	
	
	function adjust(current, phase){
		
		var highestX = 0;
		var lowestX = blocks_horizontal;
//		var lowestY = blocks_vertical;
		var newShape = [];
		
		for(var j in shapes[current.shape][phase]){
			
			newShape.push({
				x: shapes[current.shape][phase][j].x + current.offsetX,
				y: shapes[current.shape][phase][j].y + current.offsetY,
				coord: (shapes[current.shape][phase][j].x + current.offsetX)+"x"+(shapes[current.shape][phase][j].y + current.offsetY)
			});
						
		}
		
		var flag = true; 
		for(var j in newShape){
			if (newShape[j].x < 0 || newShape[j].x >= blocks_horizontal || tetris_frame[newShape[j].coord].flag == 1 || newShape[j].y < 0 ){
				flag = false;
			}
		}
		
//		if(highestX > (blocks_horizontal-1)){
//			while (highestX > blocks_horizontal-1){
//				highestX--;
//				current.offsetX--;
//			}
//		}else if(lowestX < 0){
//			while (lowestX < 0){
//				lowestX++;
//				current.offsetX++;
//			}			
//		}
		if(flag){
			spawnable_shape(current, false);
			current.phase = phase;
			spawnable_shape(current, true);
		}
			
	}
	
	
	//build
	

	//display field
	for(var i=0; i<blocks_horizontal; i++){
		for(var j=0; j<blocks_vertical; j++){
			var coorD = (i+'x'+j);
			var style = 'width: '+val_to_px(block_width)+';'+
						'height: '+val_to_px(block_height)+';'+
						'display: block;';
			if(i < (blocks_horizontal-1)){
				style += "border-right: solid "+val_to_px(block_inner_borders_size)+" black;";
			}
			if(j < (blocks_vertical-1)){
				style += "border-top: solid "+val_to_px(block_inner_borders_size)+" black;";
			}
			
			var options = {
				flag: 0,
				coord: coorD,
				x: i, 
				y: j, 
				color: "000",
				html: '<span class="tetCol col'+i+' coord'+coorD+'" style="'+style+'"></span>'
			};
			
			tetris_frame[coorD] = options;
		}
	}
		
	for(var i=(blocks_vertical-1); i>=0; i--){
		root_selector.append('<div class="tetRow row'+i+'"></div>');
		for(var j=0; j<blocks_horizontal; j++){
			var coorD = (j+'x'+i);
			root_selector.find('div.row'+i).append(tetris_frame[coorD].html);
		}
	}
	
	function val_to_px (el){
		return ""+el+"px";
	}
	
	$('#tetris_frame').addClass('col-md-offset-3 col-md-6');
	$('#tetris_frame .inner').css({'width': total_inner_width, 'height': total_inner_height, 'border': 'solid white '+val_to_px(block_outer_borders_size), 'display': 'inline-block', 'margin': 'auto'});
	spawnable_shape(currentShape, true);
	
		
	$(document).keydown(function(e) {
		switch(e.which) {
		    case 37: move(currentShape, 'left');// left
		    break;
		
		    case 38: rotate_right(currentShape);// up
		    break;
		
		    case 39: move(currentShape, 'right');// right
		    break;
		
		    case 40: e.preventDefault(); move(currentShape, 'down')// down
		    break;

		    case 97: rotate_left(currentShape);// a
		    break;
		    	
		    case 65: rotate_left(currentShape);;// A
		    break;
		    
		    case 100: rotate_right(currentShape);// d
		    break;
		    	
		    case 68: rotate_right(currentShape);// D
		    break;
		
		    default: return; // exit this handler for other keys
		}
		e.preventDefault(); // prevent the default action (scroll / move caret)
	});
	
	
	function timerFn(){
		var lowestY = blocks_vertical;
		
		for(var j in shapes[currentShape.shape][currentShape.phase]){
			if(shapes[currentShape.shape][currentShape.phase][j].y + currentShape.offsetY < lowestY){
				lowestY = shapes[currentShape.shape][currentShape.phase][j].y + currentShape.offsetY;
			}
		}
		
		var flag = [];
		for(var j in shapes[currentShape.shape][currentShape.phase]){
			// predictableShape
			var coordCur = (shapes[currentShape.shape][currentShape.phase][j].x + currentShape.offsetX) + "x" + (shapes[currentShape.shape][currentShape.phase][j].y + currentShape.offsetY);
			var coordNext = (shapes[currentShape.shape][currentShape.phase][j].x + currentShape.offsetX) + "x" + (shapes[currentShape.shape][currentShape.phase][j].y + currentShape.offsetY-1);
			
			if(tetris_frame[coordNext]){
				flag.push(tetris_frame[coordNext].flag + 1);
			}else{
				flag.push(1);
			}
		}
				
		if(lowestY > 0 && flag.indexOf(2) === -1){
			//move
			spawnable_shape(currentShape, false);
			currentShape.offsetY--;
			spawnable_shape(currentShape, true);			
		}
		else{

			
			//restart new shape
//			spawnable_shape(currentShape, false);
//			console.log(predictableShape);
			
			for(var j in shapes[currentShape.shape][currentShape.phase]){
				var coordCur = (shapes[currentShape.shape][currentShape.phase][j].x + currentShape.offsetX) + "x" + (shapes[currentShape.shape][currentShape.phase][j].y + currentShape.offsetY);
				
				tetris_frame[coordCur].flag = 1;
			}
			
			var rand = Math.floor((Math.random() * 7));
			currentShape = JSON.parse(JSON.stringify(shapeTemplate));
			currentShape.shape = shapeIDs[rand];
			
			
			spawnable_shape(currentShape, true);
		}
		
		//check for score
		var linesCounter = 0;
		for(var j=0; j<(blocks_vertical-1); j++){
			var check = 1;
			for(var i=0; i<blocks_horizontal; i++){
				var coord = (i+'x'+j);
				if(tetris_frame[coord].flag !== 1){
					check = 0;
					break;
				}
			}
			
			//clear the field
			//clear the matrix
			if(check === 1){
			linesCounter++;
				for(var p=j; p<(blocks_vertical-1); p++){
					for(var q=0; q<blocks_horizontal; q++){
						var coord = (q+'x'+p);
						var coordNext = (q+'x'+(p+1));
						tetris_frame[coord].flag = tetris_frame[coordNext].flag;
						
						var color = $('.coord'+coordNext).css("background");
						$('.coord'+coord).css('background', color);
					}
				}
			}
		}
		//play sounds
		if(linesCounter > 0){
			var rand = Math.floor((Math.random() * 11));
			$('#UTFTW audio:eq('+rand+')')[0].play();
		}
		var sounds = [
			{0: "dominating.mp3"},
			{1: "doublekill.mp3"},
			{2: "firstblood.mp3"},
			{3: "godlike.mp3"},
			{4: "headshot.mp3"},
			{5: "killingspree.mp3"},
			{6: "lostthematch.mp3"},
			{7: "mo-mo-monsterkill.mp3"},
			{8: "multykill.mp3"},
			{9: "rampage.mp3"},
			{10: "ultrakill.mp3"},
			{11: "unstoppable.mp3"}
		];
	}
	
	var timer = setInterval(function(){
		timerFn();
	},300);
	
	
});