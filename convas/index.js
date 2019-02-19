var canvas=document.getElementById("mycanvas");
var context=canvas.getContext('2d');
context.fillStyle='#333';
context.fillRect(10,10,620,620);



function cercle(x,y){

context.strokeStyle='hsl('+ 360*Math.random() +','+100*Math.random()+'%,'+100*Math.random()+'%)';
context.lineWidth="10";
context.lineJoin="round";	
context.beginPath();
context.arc(x,y,80,0,Math.PI*2,true);
context.stroke();
context.closePath();


}

// cercle(120,120);
// cercle(120,520)



function croix(x,y){

context.strokeStyle='hsl('+ 360*Math.random() +','+100*Math.random()+'%,'+100*Math.random()+'%)';
context.lineWidth="10";
context.lineJoin="round";

context.beginPath();
context.moveTo(x-50,y-50);
context.lineTo(x+50,y+50);
context.moveTo(x+50,y-50);
context.lineTo(x-50,y+50);
context.stroke();
context.closePath();


}


// croix(120,120);
// croix(120,320);
// croix(120,520);



for (var i =0; i<3; i++) {

for(var j=0;j<3;j++)	

{
var ale=Math.random();
// console.log(ale);
if (ale <0.50){
	cercle(120+(200*i),120+(200*j))

}
else if(ale>0.50)
{
croix(120+(200*i),120+(200*j));

}

}

}





for (var i =0; i<3; i++) {

for(var j=0;j<3;j++)	

{

	
context.strokeStyle="#999";
context.lineWidth="5";
context.setLineDash([20,20]);
context.LineDashOffset="5";
context.strokeRect(20+(200*i),20+(200*j),200,200);

// context.strokeStyle="#999";
// context.lineWidth="5";
// context.setLineDash([20,20]);
// context.LineDashOffset="5";
// context.strokeRect(20+(200*i),220,200,200);


// context.strokeStyle="#999";
// context.lineWidth="5";
// context.setLineDash([20,20]);
// context.LineDashOffset="5";
// context.strokeRect(20+(200*i),420,200,200);
}

}



canvas.addEventListener('click',jeux);

function jeux(event)
{
  var x = event.clientX;

  var y = event.clientY;

  if var x

console.log(x);
console.log(y);


}