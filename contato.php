<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href=css/cssmenu.css>
  <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


  
  <title>SportZone</title>
</head>

<div class="row">
  <nav class="navbar navbar-fixed navbar-dark bg-dark col-md-2 d-none d-md-block ">
    <div class="navbar-nav"><br>
      <a class="navbar-brand text-center" href="index.php"><img src="img/logo1.png" alt=""></a>
      <br>
      <ul class=" nav flex-column ml-2">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <h5>Sobre nós</h5>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Real.php">
            <h5>Tempo Real</h5>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contato.php">
           <h5> Contato</h5>
         </a>
       </li>

     </ul>
     <br>
     <div class="navbar-brand text-center">
      <span><h3>Localização</h3></span>
    </div>
    <br>
    <ul class="nav flex-column ml-2">
      <li class="nav-item">
        <a class="nav-link" href="liberdade.php">
          <h5>Praça da Liberdade</h5>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Raul Soares.php">
          <h5>Praça Raul Soares</h5>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Parque Municipal.php">
          <h5>Parque Municipal</h5>
        </a>
      </li>
    </ul>
  </div>
</nav>


<div class=" col-md-10 bg-light">
  <div class="container">
    <div><br></div>
    <div class="container-fluid">
      <h1 class="page-title text-center bg-dark"><a href="index.php"><img src="img\logo.png" alt=""></a></h1>
      <br>

    </div>
    <div class="container">
      <div class="text-center">
        <form action="BDados/formulario.php" method="post" form id="cadastroFormId">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="nome" placeholder="Nome">
            </div>
            <div class="col">
              <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome">
            </div>
          </div>
          <div><br></div>
          <div>
            <input type="e-mail" class="form-control" id="email" placeholder="E-Mail">
          </div>
          <div><br></div>
          <div>
            <input type="textarea" class="form-control" id="mensagem" placeholder="Deixe sua Mensagem!">
          </div>
          <div><br></div>
           <div class="text-center">
          <input type="submit" class="item-center btn btn-lg btn-dark" value="ENVIAR" role="button"></input>
           </div>
        </form>
        

        <?php
         if(isset($_SESSION['msgcadastro'])):
          echo $_SESSION['msgcadastro'];
          session_unset();
        endif;
        ?>



       
    </div>
    <div class="bg-light text-right py-3">© 2019 Copyright
      <a href="facebook.com/devorcz"> Devorc</a>
    </div>
  </div>
</div>
</div>
</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src='js/js.js'></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHxsZKsCYG005dX6KUNFTl9OeZCvuWiZQ&callback=initMap">
</script>
</body>
</html>