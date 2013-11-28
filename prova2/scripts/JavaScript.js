function primeiro (jogador){
	if(jogador == 1){
		jogador = 'Jogador1';
	}else{
		jogador = 'Jogador2';
	}
	if(localStorage.getItem(jogador)!=null)
		alert("Não é sua vez "+jogador);
	else
		dado(jogador);
}
function armazena_resultado(jogador, pontos){

	localStorage.setItem(jogador,pontos);
	calcula();
}

function calcula (){
	var i=0;
	if(localStorage.getItem('Jogador1')!=null){
		var pontos1 = localStorage.getItem('Jogador1');
		i++;
	}
	if(localStorage.getItem('Jogador2')!=null){
		var pontos2 = localStorage.getItem('Jogador2');
		i++;
	}
	if(i==2){
		if(pontos1 > pontos2)
			alert("Jogador 1 Venceu!!!");
		else if (pontos2 > pontos1)
			alert("Jogador 2 Venceu!!!");
		else
			alert("Empate!!!");

		localStorage.clear();
	}
}
function dado(jogador){
	var numero=1+Math.floor(Math.random()*6);
	switch(numero){
		case 1:
			dado1(jogador);
			break;
		case 2:
			dado2(jogador);
			break;
		case 3:
			dado3(jogador);
			break;
		case 4:
			dado4(jogador);
			break;
		case 5:
			dado5(jogador);
			break;
		default :
			dado6(jogador);
	}

}
function dado1(jogador){
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

		armazena_resultado(jogador,1);

}
function dado2(jogador){
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

		armazena_resultado(jogador,2);
}
function dado3(jogador){
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

		armazena_resultado(jogador,3);
}
function dado4(jogador){
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

		armazena_resultado(jogador,4);
}
function dado5(jogador){
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

		armazena_resultado(jogador,5);
}
function dado6(jogador){
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

		armazena_resultado(jogador,6);
}