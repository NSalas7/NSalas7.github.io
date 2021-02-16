<?php include_once "Capçalera.php"; ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gestio Excursions</title>
  <!-- Logo del nom de la pagina -->
  <link rel="icon" type="image/png" href="../../Public/IMG/logo1_negre.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Estils/fullestil1.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body>
  <div class="container" id="contenidorExcursions">
  <h1 id="titol">Nova Excursió</h1>

         <!-- Formulari per donar d'alta una Excursió. -->
        <form action="../../API/Controladors/Excursio/inserirExcursio.php" method="POST" id="form">
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
            <div class="form-group col-md-12">
              Descripcio: <input type="textarea" class="form-control" name="descripcio">
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
                    <h2 class="modal-title" id="staticBackdropLabel">Contractar Autocar</h2>
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
            xhttp.open("GET", "../../API/Controladors/Professor/veureProfessor.php", true);
            xhttp.send();
          }

          function loadCurs() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState === 4 && this.status === 200) {
                var curs = JSON.parse(this.responseText);
                for (var c in curs) {
                  var nomcurs = curs[c][1];
                  var item = $("<option/>", {text:nomcurs});
                  $("#cursos").append(item);
                }
              }
            };
            xhttp.open("GET", "../../API/Controladors/Curs/veureCurs.php", true);
            xhttp.send();
          }

          loadProf();
          loadCurs();

        });
      </script>

<p>
  <br>
</p>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>

<?php include_once "Footer.html"; ?>