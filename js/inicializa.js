var dados = "cu";
           $.get("conecxao.php",{
      },
      function(dados){
	//O retorno do arquivo.php vai ser guardado na variavel dados	
      }
);

    
//$.ajax('../BDados/conecxao.php', function(response){
        //console.log(response);
document.getElementById("teste").innerHTML = dados;

 

