var canvas = document.querySelector("#canvas");
canvas.addEventListener("click", OnClickCanvas);
var ctx = canvas.getContext("2d");
var canvasSize = 600;
var sectionSize = canvasSize / 3;
var radius = (sectionSize - 100) / 2;


/////////////// DESSIN DU TABLEAU //////////////

//background
ctx.fillStyle = "blue";
ctx.fillRect(20,20,600,600);

//généralités
ctx.strokeStyle = "#fff";
ctx.lineWidth = 10;	
ctx.lineJoin = "round";
ctx.lineCap = "round";

ctx.save();
ctx.lineWidth = 1;
ctx.setLineDash([10,10]);
ctx.lineDashOffset=10;
ctx.strokeStyle = 'lightblue';
ctx.beginPath();
ctx.moveTo(20,220);
ctx.lineTo(600,220);
ctx.moveTo(20,420);
ctx.lineTo(600,420);
ctx.moveTo(220,20);
ctx.lineTo(220,600);
ctx.moveTo(420,20);
ctx.lineTo(420,600);
ctx.stroke();
ctx.restore();





/////////////FONCTION/////////////////////

function circle(x,y){
	var r = Math.floor((Math.random()* (256-1)+1));
	var g = Math.floor((Math.random()* (256-1)+1));
	var b = Math.floor((Math.random()* (256-1)+1));
	var opacity = (Math.random()* (1-0.1)+0.1);
	var cssColor = 'rgb(' + r +', ' + g + ',' + b + opacity +')';
	
	ctx.strokeStyle = cssColor;
	ctx.beginPath();
	
	ctx.arc(x,y,radius,0*Math.PI,Math.PI*2,true);
	ctx.stroke();
	ctx.closePath();

	
}

function cross(x,y){
	var r = Math.floor((Math.random()* (256-1)+1));
	var g = Math.floor((Math.random()* (256-1)+1));
	var b = Math.floor((Math.random()* (256-1)+1));
	var opacity = (Math.random()* (1-0.1)+0.1);
	var cssColor = 'rgb(' + r +', ' + g + ',' + b + opacity +')';
	
	ctx.strokeStyle = cssColor;
	ctx.beginPath();
	ctx.moveTo(x-radius,y-radius);
	ctx.lineTo(x+radius,y+radius);
	ctx.moveTo(x-radius,y+radius);
	ctx.lineTo(x+radius,y-radius);
	ctx.stroke();
}

function OnClickCanvas(event){
	
	var player = Math.floor(Math.random()*(3-1)+1);

	if(player == 1){
		var i = Math.floor(((event.clientX)-120)/200);
		var j = Math.floor(((event.clientY)-120)/200);

		var x = i*200 + 120;
		var y = j*200 + 120;
		

		circle(x,y);
	}
	else if(player == 2){
		var i = Math.floor(((event.clientX)-120)/200);
		var j = Math.floor(((event.clientY)-120)/200);

		var x = i*200 + 120;
		var y = j*200 + 120;
		cross(x,y);
	}
}

// var x = 120;
// 	var y = 120;

// 	for(var i=0; i<=2; i++){
// 		for(var j=0; j<=2; j++){
// 			var random = Math.floor(Math.random()*(2-1+1)+1);
// 			if(random == 1){
// 				circle(x,y);
// 			}
// 			else{
// 				cross(x,y);
// 			}
// 			x += 200;
// 		}
// 		x = 120;
// 		y +=200;
// 	}



