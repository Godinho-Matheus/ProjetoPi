
<?php
session_start();
$id = 1;
$utf8 = header("content-Type: text/html; charset=utf-8");
$link = new mysqli('localhost','root','','dados'); // nome do servidor // nome de usuario // senha // nome do banco.
$link->set_charset('utf8'); // para nao dar erro nas consultas

$querySelect = $link->query("select * from sinais where sin_id = '$id'");
while($registros = $querySelect->fetch_assoc()):
// capiturando as variaveis para setar em perfil.

  $temperatura = $registros['sin_temp'];
  $umidade = $registros['sin_umid'];
  $carbono = $registros['sin_cabo'];
  $gas = $registros['sin_gas'];
  
  endWhile;



      $_SESSION['temp'] = $temperatura;
      $_SESSION['umid'] =  $umidade;
      $_SESSION['carbono'] = $carbono;
      $_SESSION['gase'] = $gas;
?>


<?php
$tempers = $_SESSION['temp'];
$umidars = $_SESSION['umid'];
$carbrs = $_SESSION['carbono'];

?>





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


  <script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: new google.maps.LatLng(-19.9259357,-43.9393601),
        mapTypeId: 'roadmap'
      });

      var iconBase = 'img/'; /*----- pasta icones -----*/
      var icons = {
        info: {
          icon: iconBase + 'icon-g.png'
        },
        active: {
          icon: iconBase + 'icon-a.png'
        }
      };

      var features = [
      {
        position: new google.maps.LatLng(-19.9227437,-43.9450015), /*----- Praça Raul Soares -----*/
        type: 'active'
      }, {
        position: new google.maps.LatLng(-19.9321286,-43.9381212),/*----- Praça da Liberdade -----*/
        type: 'info'
      }, {
        position: new google.maps.LatLng(-19.9227786,-43.9340055),/*----- Parque Municipal -----*/
        type: 'info'
      }
    ];

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEV6a5wFpmnkgUrTtPtK9D-sCXRKtdUQ8&callback=initMap">
  </script>


  
  <title>SportZone - Praça Raul Soares</title>
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
          <a class="nav-link" href="contato.php">
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
          <a class="nav-link active" href="Raul Soares.php">
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
        <h4 class="page-title text-center">Praça Raul Soares</h4>
        <br>
        <div class="row">
          <div class="col-md-4">
            <div class=" shadow p-1 mb-3 bg-dark rounded">
              <div class="card-body  text-white">
                <div class="d-flex justify-content-center">
                  <div class="numbers">
                    <h4 class="card-title text-center">Temperatura</h4>
                    <h5 class="card-text"><?php echo"$tempers"?>°C</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class=" shadow p-1 mb-3 bg-dark rounded">
              <div class="card-body  text-white">
                <div class="d-flex justify-content-center">
                  <div class="numbers">
                    <h4 class="card-title">Umidade</h4>
                    <h5 class="card-text"><?php echo"$umidars"?>%</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class=" shadow p-1 mb-3 bg-dark rounded">
              <div class="card-body text-white">
                <div class="d-flex justify-content-center">
                  <div class="numbers">
                    <h4 class="card-title">Monóxido de Carbono</h4>
                    <h5 class="card-text"><?php echo"$carbrs"?> PPM</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="border border-dark rounded" id="map" style="width: 100%; height: 400px">
          </div>
        </div>
        <div class="bg-light text-right py-3">© 2019 Copyright
  <a href="http://www.facebook.com/devorcz">@Devorc</a>
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