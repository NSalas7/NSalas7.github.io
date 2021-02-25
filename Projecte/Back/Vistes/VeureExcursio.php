<?php include_once "Capçalera.php"; ?>

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

  <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Anton&display=swap">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Logo del nom de la pagina -->
  
  <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

</head>

<body>
  <div class="container" id="contenidorExcursions">
    <h1 id="titol">Veure Excursió</h1>
    <!-- Formulari per donar d'alta una Excursió. -->
    <form id="form">
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
        <div class="form-group col-6 col-md-3">
          IMG: <label for="files" class="btn btn-dark">Visualitza</label>
          <input id="files" name="imatge" style="visibility:hidden;" type="file">
        </div>
        <div class="form-group col-6 col-md-3">
          <input type="radio" name="publica" value="0"> PRIVADA
        </div>
        <div class="form-group col-6 col-md-3">
          <input type="radio" name="publica" value="0"> PUBLICA
        </div>
        <div class="form-group col-6 col-md-3">
          <a href="mostrarPagaments" class="button btn btn-dark ">Alumnes Pagats</a>
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
              var nomcurs = curs[c][1];
              var item = $("<option/>", {text:nomcurs});
              $("#cursos").append(item);
            }
          }
        };
        xhttp.open("GET", " http://api.gestioexcursions.me/Controladors/Curs/veureCurs.php", true);
        xhttp.send();
      }

      loadProf();
      loadCurs();

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
