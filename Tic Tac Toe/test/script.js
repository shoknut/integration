var canvas = document.querySelector("#my_canvas");
var ctx = canvas.getContext("2d");

//background
ctx.fillStyle = "blue";
ctx.fillRect(10,10,620,620);

//généralités
ctx.strokeStyle = "#fff";
ctx.lineWidth = 10;	
ctx.lineJoin = "round";
ctx.lineCap = "round";

//square
ctx.strokeRect(70,70,200,200);
ctx.stroke();


//cercle
ctx.beginPath();
ctx.arc(470,170,100,0,Math.PI*2,true);
ctx.stroke();

//croix
ctx.beginPath();
ctx.moveTo(370,370);
ctx.lineTo(570,570);
ctx.moveTo(570,370);
ctx.lineTo(370,570);
ctx.stroke();

//ellipse
//ctx.save va permettre de sauvegarder le carré
ctx.save();
ctx.lineWidth = 5;
ctx.setLineDash([10,10]);
ctx.lineDashOffset=10;
ctx.strokeStyle = 'lightblue';
ctx.strokeRect(70,370,200,200);
ctx.restore();
ctx.beginPath();       // Début du chemin
ctx.moveTo(70,370);    // Le tracé part du point 50,50
ctx.quadraticCurveTo(270,370,270,570); // Quadratic: controle-1-x, controle-1-y, x2, y2
ctx.moveTo(70,370);    // Le tracé part du point 50,50
ctx.bezierCurveTo(70,570,70,570,270,570); // Bezier: controle-1-x, controle-1-y, controle-2-x, controle-2-y, x2, y2
ctx.stroke();          // Tracé
ctx.closePath();       // Fermeture du chemin

