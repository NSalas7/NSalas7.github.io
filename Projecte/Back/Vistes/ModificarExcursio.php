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
    <li class="breadcrumb-item active" aria-current="page">Modificar Excursió</li>
  </ol>
</nav>

  <div class="container" id="contenidorExcursions">
    <h1 id="titol">Modificar Excursió</h1>
    <!-- Formulari per donar d'alta una Excursió. -->
    <form action="" method="POST" id="form">
      <div class="form-row">
        <div class="form-group col-md-6">
          Nom:  <input type="text" class="form-control " id="nom" value="" name="nom" />
        </div>
        <div class="form-group col-md-6">
          Curs:
          <input type="text" disabled="disabled" class="form-control" id="curs" value="" name="curs" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          Lloc: <input type="text" class="form-control" id="lloc" value="" name="lloc" />
        </div>
        <div class="form-group col-md-6">
          Duració en hores: <input type="number" class="form-control" id="duracio" name="duracio">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          Data inici: <input type="date" class="form-control" id="d_inici" name="d_inici">
        </div>
        <div class="form-group col-md-6">
          Data fi: <input type="date" class="form-control" id="d_fi" name="d_fi">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          Recorregut: <input type="text" class="form-control" name="recorregut" id="recorregut" placeholder="URL de la Ruta.">
        </div>
        <div class="form-group col-md-6">
          Professors: 
          <input type="text" disabled="disabled" class="form-control" id="professor" value="" name="professor" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-9">
          Descripcio: <input type="textarea" class="form-control" id="descripcio" value="" name="decripcio" />
        </div>
        <div class="form-group col-md-3">
          Preu: <input type="text" class="form-control" id="preu" value="" name="preu" />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-6 col-md-3">
          IMG: <label for="files" class="btn btn-dark" id="imatge" >Visualitza</label>
          <input id="files" name="imatge" style="visibility:hidden;" type="file">
        </div>
        <div class="form-group col-6 col-md-3">
          <input type="radio" name="publica" class="pub" value="0"> PRIVADA
        </div>
        <div class="form-group col-6 col-md-3">
          <input type="radio" name="publica" class="pub" value="1"> PUBLICA
        </div>
        <div class="form-group col-6 col-md-3">
          <input type="button" onclick="modifica()" class="btn btn-dark"  value="Modifica">
        </div>
      </div>
    </form>
   </div>

  <!-- Script per agafar els profesors de la BD i mostrarlos al formulari -->

  <script>
    $(document).ready(function(){

      var id = sessionStorage.getItem("id");
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            var afegir = JSON.parse(this.responseText);
              var nomE = afegir[0].nom;
              $("#nom").val(nomE);
              var cursE = afegir[0].curs;
              $("#curs").val(cursE);
              var llocE = afegir[0].lloc;
              $("#lloc").val(llocE);
              var duracioE = afegir[0].duracio;
              $("#duracio").val(duracioE);
              var d_iniciE = afegir[0].d_inici;
              $("#d_inici").val(d_iniciE);
              var d_fiE = afegir[0].d_fi;
              $("#d_fi").val(d_fiE);
              var professorE = afegir[0].professor;
              $("#professor").val(professorE);
              var descripcioE = afegir[0].descripcio;
              $("#descripcio").val(descripcioE);
              var preuE = afegir[0].preu;
              $("#preu").val(preuE);
              var publicaE = afegir[0].publica;
              $(":radio[value=" + publicaE + "]").prop('checked', true);
            }
        };
        xhttp.open("POST", "http://api.gestioexcursions.me/Controladors/Excursio/visualitzarExcursio.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id);

      function loadProf() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            var profe = JSON.parse(this.responseText);
            for (var p in profe) {
              var nomprofe = profe[p][1];
              var item = $("<option>", {text:nomprofe}); 
              $("#professor").append(item);
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

      loadCurs();
      loadProf();

    });

    function modifica() {
      var id = sessionStorage.getItem("id");
          var nomE = $("#nom").val();
          var llocE = $("#lloc").val();
          var duracioE = $("#duracio").val();
          var d_iniciE = $("#d_inici").val();
          var d_fiE = $("#d_fi").val();
          var recorregutE = $("#recorregut").val();
          var descripcioE = $("#descripcio").val();
          var imatgeE = $("#imatge").val();
          var publicaE = $("#publica").val();
          var preuE = $("#preu").val();

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          // if (this.readyState === 4 && this.status === 200) {
          //      var id = this.responseText;
          //      console.log(id);
          //      if (id === "1"){
          //          location.replace("http://localhost/mostrarExcursions");
          //      }else{

          //      }
          // }
      };
      xhttp.open("POST", "http://api.gestioexcursions.me/Controladors/Excursio/modificarExcursio.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id + "&nom=" + nomE + "&lloc=" + llocE + "&duracio=" + duracioE + "&d_inici=" + d_iniciE + "&d_fi=" + d_fiE + "&recorregut=" + recorregutE + "&descripcio=" + descripcioE + "&imatge=" + imatgeE + "&publica=" + publicaE + "&preu=" + preuE);
        console.log(nomE);
      }
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
