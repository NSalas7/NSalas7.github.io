<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Gestio Excursions</title>

  <!-- Logo del nom de la pagina -->
  <link rel="icon" type="image/png" href="public/IMG/logo1_negre.png">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="Estils/fullestil1.css">

  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Logo del nom de la pagina -->
  
  <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

</head>

<body>
  
<?php 
  include_once "Capçalera.php"; 
?>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="mostrarExcursions">Inici</a></li>
    <li class="breadcrumb-item active" aria-current="page">Afegir Excursió</li>
  </ol>
</nav>

  <div class="container" id="contenidorExcursions">
    <h1 id="titol">Nova Excursió</h1>
    <!-- Formulari per donar d'alta una Excursió. -->
    <form action="http://api.gestioexcursions.me/Controladors/Excursio/inserirExcursio.php" method="POST" id="form">
      <div class="form-row">
        <div class="form-group col-md-6">
          Nom: <input type="textarea" class="form-control" name="nom">
        </div>
        <div class="form-group col-md-6">
          Curs:
	        <select id="cursos" name="curs" class="form-control">
            <option value="0">-- Selecciona --</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          Lloc: <input type="text" class="form-control" name="lloc">
        </div>
        <div class="form-group col-md-6">
          Duració en hores: <input type="number" class="form-control" name="duracio">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          Data inici: <input type="date" class="form-control" name="d_inici">
        </div>
        <div class="form-group col-md-6">
          Data fi: <input type="date" class="form-control" name="d_fi">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          Recorregut: <input type="text" class="form-control" name="recorregut" placeholder="URL de la Ruta.">
        </div>
        <div class="form-group col-md-6">
          Professors: <select id="prof" name="profes" class="form-control">
            <option value="0">-- Selecciona --</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-9">
          Descripcio: <input type="textarea" class="form-control" name="descripcio">
        </div>
        <div class="form-group col-md-3">
          Preu: <input type="number" class="form-control" name="preu">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-6 col-md-2">
          <input type="checkbox" name="bus" data-toggle="modal" data-target="#modaldiv1" onchange="toggle()"> BUS ? <i class="fa fa-bus"></i>
        </div>

        <!--MODAL -->
        <div class="modal fade div1" id="modaldiv1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title" id="staticBackdropLabel">Guardar dades per l'autocar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Script PHP amb el qual contractarem el bus. -->
                <form action="contractar_bus.php" method="get">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      Numero de Places : <input type="text" class="form-control" name="nplaces">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      Data Excursió: <input type="date" class="form-control" name="d_excursio">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      Hora de partida: <input type="time" class="form-control" name="correu">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Desa</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group col-6 col-md-2">
          IMG: <label for="files" class="btn btn-dark">Selecciona</label>
          <input id="files" name="imatge" style="visibility:hidden;" type="file">
        </div>
        <div class="form-group col-6 col-md-2">
          <input type="radio" name="publica" value="0"> PRIVADA
        </div>
        <div class="form-group col-6 col-md-2">
          <input type="radio" name="publica" value="0"> PUBLICA
        </div>
        <div class="form-group col-6 col-md-2">
          <button type="submit" class="btn btn-dark">Penja</button>
        </div>
        <div class="form-group col-6 col-md-2">
          <button type="submit" class="btn btn-dark">Modifica</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Script per agafar els profesors de la BD i mostrarlos al formulari -->
  <script>
    $(document).ready(function(){
      function loadProf() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            var profe = JSON.parse(this.responseText);
            for (var p in profe) {
              var nomprofe = profe[p][1];
              var item = $("<option>", {text:nomprofe}); 
              $("#prof").append(item);
            }
          }
        };
        xhttp.open("GET", " http://api.gestioexcursions.me/Controladors/Professor/veureProfessor.php", true);
        xhttp.send();
      }

	function loadCurs() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            var curs = JSON.parse(this.responseText);
            for (var c in curs) {
              var nomcurs = curs[c][0];
              var item = $("<option/>", {text:nomcurs});
              $("#cursos").append(item);
            }
          }
        };
        xhttp.open("GET", " http://api.gestioexcursions.me/Controladors/Curs/veureCurs.php", true);
        xhttp.send();
      }

      loadCurs();
      loadProf();

    });
  </script>

  <p>
    <br>
  </p>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

</body>
</html>

<?php include_once "Footer.html"; ?>
