function alemanha(){
	var canvas = document.getElementById("bandeiras");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.strokeStyle='#000000';
		ctx.lineWidth=3;
		ctx.rect(0,0 , 400, 200);
		ctx.fillStyle ='#000000';
		ctx.fillRect(0,0, 400,66.66);
		ctx.fillStyle ='#FF0000';
		ctx.fillRect(0,66.67, 400,66.66);
		ctx.fillStyle ='#FFFF00';
		ctx.fillRect(0,133.34, 400,66.66);
		ctx.stroke();
		ctx.closePath();
		
}
function belgica(){
		var canvas = document.getElementById("bandeiras");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.strokeStyle='#000000';
		ctx.lineWidth=3;
		ctx.rect(0,0 , 400, 200);
		ctx.fillStyle ='#000000';
		ctx.fillRect(0,0, 133.33,200);
		ctx.fillStyle ='#FFFF00';
		ctx.fillRect(133.33,0,266.66,200);
		ctx.fillStyle ='#FF0000';
		ctx.fillRect(266.66,0,400,200);
		ctx.stroke();
		ctx.closePath();

}
function japao(){
		var canvas = document.getElementById("bandeiras");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.fillStyle = '#ffffff';
		ctx.fillRect(0,0, 400,200);
		ctx.strokeRect(0,0,400,200);
		ctx.moveTo(280,100);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle='#FF0000';
		ctx.arc(200,100,80,0,Math.PI*2,false);
		ctx.fillStyle = '#FF0000';
		ctx.fill();
		ctx.stroke();
		ctx.closePath();
}
function dado(){
	var numero=1+Math.floor(Math.random()*6);
	switch(numero){
		case 1:
			dado1();
			break;
		case 2:
			dado2();
			break;
		case 3:
			dado3();
			break;
		case 4:
			dado4();
			break;
		case 5:
			dado5();
			break;
		default :
			dado6();
	}

}
function dado1(){
		var canvas = document.getElementById("dado");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.lineWidth=5;
		ctx.fillStyle = '#ffffff';
		ctx.fillRect(0,0, 200,200);
		ctx.strokeRect(0,0,200,200);
		ctx.moveTo(100,100);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle='#000000';
		ctx.arc(100,100,20,0,Math.PI*2,false);
		ctx.fillStyle = '#000000';
		ctx.fill();
		ctx.stroke();
		ctx.closePath();

}
function dado2(){
		var canvas = document.getElementById("dado");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.lineWidth=5;
		ctx.fillStyle = '#ffffff';
		ctx.fillRect(0,0, 200,200);
		ctx.strokeRect(0,0,200,200);
		ctx.moveTo(100,100);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle='#000000';
		ctx.arc(150,50,20,0,Math.PI*2,false);
		ctx.moveTo(50,150);
		ctx.arc(50,150,20,0,Math.PI*2,false);
		ctx.fillStyle = '#000000';
		ctx.fill();
		ctx.stroke();
		ctx.closePath();
}
function dado3(){
		var canvas = document.getElementById("dado");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.lineWidth=5;
		ctx.fillStyle = '#ffffff';
		ctx.fillRect(0,0, 200,200);
		ctx.strokeRect(0,0,200,200);
		ctx.moveTo(100,100);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle='#000000';
		ctx.arc(150,50,20,0,Math.PI*2,false);
		ctx.moveTo(100,100);
		ctx.arc(100,100,20,0,Math.PI*2,false);
		ctx.moveTo(50,150);
		ctx.arc(50,150,20,0,Math.PI*2,false);
		ctx.fillStyle = '#000000';
		ctx.fill();
		ctx.stroke();
		ctx.closePath();
}
function dado4(){
		var canvas = document.getElementById("dado");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.lineWidth=5;
		ctx.fillStyle = '#ffffff';
		ctx.fillRect(0,0, 200,200);
		ctx.strokeRect(0,0,200,200);
		ctx.moveTo(100,100);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle='#000000';
		ctx.arc(150,50,20,0,Math.PI*2,false);
		ctx.moveTo(150,150);
		ctx.arc(150,150,20,0,Math.PI*2,false);
		ctx.moveTo(50,50);
		ctx.arc(50,50,20,0,Math.PI*2,false);
		ctx.moveTo(50,150);
		ctx.arc(50,150,20,0,Math.PI*2,false);
		ctx.fillStyle = '#000000';
		ctx.fill();
		ctx.stroke();
		ctx.closePath();
}
function dado5(){
		var canvas = document.getElementById("dado");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.lineWidth=5;
		ctx.fillStyle = '#ffffff';
		ctx.fillRect(0,0, 200,200);
		ctx.strokeRect(0,0,200,200);
		ctx.moveTo(100,100);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle='#000000';
		ctx.arc(150,50,20,0,Math.PI*2,false);
		ctx.moveTo(150,150);
		ctx.arc(150,150,20,0,Math.PI*2,false);
		ctx.moveTo(50,50);
		ctx.arc(50,50,20,0,Math.PI*2,false);
		ctx.moveTo(50,150);
		ctx.arc(50,150,20,0,Math.PI*2,false);
		ctx.moveTo(100,100);
		ctx.arc(100,100,20,0,Math.PI*2,false);
		ctx.fillStyle = '#000000';
		ctx.fill();
		ctx.stroke();
		ctx.closePath();
}
function dado6(){
		var canvas = document.getElementById("dado");
		ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.lineWidth=5;
		ctx.fillStyle = '#ffffff';
		ctx.fillRect(0,0, 200,200);
		ctx.strokeRect(0,0,200,200);
		ctx.moveTo(100,100);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle='#000000';
		ctx.moveTo(50,50);
		ctx.arc(50,50,20,0,Math.PI*2,false);
		ctx.moveTo(50,100);
		ctx.arc(50,100,20,0,Math.PI*2,false);
		ctx.moveTo(50,150);
		ctx.arc(50,150,20,0,Math.PI*2,false);
		ctx.moveTo(150,50);
		ctx.arc(150,50,20,0,Math.PI*2,false);
		ctx.moveTo(150,100);
		ctx.arc(150,100,20,0,Math.PI*2,false);
		ctx.moveTo(150,150);
		ctx.arc(150,150,20,0,Math.PI*2,false);
		ctx.fillStyle = '#000000';
		ctx.fill();
		ctx.stroke();
		ctx.closePath();
}