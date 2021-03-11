var temperatura = 21.2;
var Umidade = 65.3;
var carbono = 178;






/*Recurso para rodar a Função apos a pagina estiver totalmente Carregada.*/

// Logica similar ao funcionamento de um relogio, funcao Clock
var temp = function(){
	if(temperatura <=59 ){
		temperatura = temperatura +1;

	}

	//var horacompleto = horas +":" + minutos + ":" + segundos; 
	document.getElementById("temp").innerHTML = temperatura+" °C"; 
	document.getElementById("umid").innerHTML = Umidade+"%";
}

var tempi = function(){
	if(temperatura <=59 ){
		temperatura = temperatura -1;

	}

	document.getElementById("temp").innerHTML = temperatura+"°C"; 

}




var carb = function(){
	if(carbono <=200 ){
		carbono = carbono +2;

	}

	//var horacompleto = horas +":" + minutos + ":" + segundos; 
	document.getElementById("carb").innerHTML = carbono+" PPM"; 
}

var carbi = function(){
	if(carbono <=200 ){
		carbono = carbono -3;

	}

	document.getElementById("carb").innerHTML = carbono+" PPM"; 

}



var carbil = function(){
	if(carbono <=200 ){
		carbono = carbono +1;

	}

	document.getElementById("carb").innerHTML = carbono+" PPM"; 

}







setInterval(function(){
	temp();
},15000);


    setInterval(function(){
	tempi();
},18000);





setInterval(function(){
	carb();
},8000);


    
    setInterval(function(){
	carbi();
},10000);
    


    setInterval(function(){
	carbil();
},12000);