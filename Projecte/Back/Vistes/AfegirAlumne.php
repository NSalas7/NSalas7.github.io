<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gestio Excursions</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Estils/fullestil1.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Logo del nom de la pagina -->
  <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

<!-- Funcio que bloqueja el camp del correu de l'alumne, en cas que l'alumne sigui menor d'edat. -->
  <script>
    proteger=false;
    function protegeCampo(cmp){
      if (proteger) cmp.blur();
    }
    function toggle(){
      if (proteger) proteger=false; else proteger=true;
    }
  </script>


</head>
<!-- Imatge de fons. -->
<body background="IMG/forestbridge.jpg">
  <?php include_once 'CapçaleraLogin.html'; ?>
  <div class="container" id="contenidorAlumnes">
    <h1 id="titol">Formulari Registre</h1>

        <!-- Formulari per donar d'alta un Alumne. -->
        <form action="http://api.gestioexcursions.me/Controladors/Alumne/inserirAlumne.php" method="POST" id="form">
          <div class="form-row">
            <div class="form-group col-md-4">
              Nom alumne: <input type="textarea" class="form-control" id="falu" name="nom">
            </div>
            <div class="form-group col-md-4">
              Primer Llinatge:
                <input type="textarea" class="form-control" id="falu" name="llinatge1">
            </div>
            <div class="form-group col-md-4">
              Segon Llinatge:
                <input type="textarea" class="form-control" id="falu" name="llinatge2">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              Edat de l'Alumne: <input type="text" class="form-control" id="falu" name="edat">
            </div>
            <div class="form-group col-md-9">
              Curs:
                <select id="cursos" name="curs" class="form-control">
                    <option value="0">-- Selecciona --</option>
                </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <!-- Si l'alumne es menor d'edat, i es pitja sobre el CHECKBOX, aquest camp es bloquejarà. -->
              Correu Pare, Mare, Tutor: <input type="text" class="form-control" id="falu" name="correuAlumne" onfocus="protegeCampo(this)" id="correuA" placeholder="Posar en cas que l'alumne sigui menor d'edat.">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              Alumne major d'edat? <input type="checkbox" data-toggle="collapse" id="falu" data-target="#collapsediv1" onchange="toggle()" id="checkbox1"> 
            </div>
          </div>
           <div class="form-row">
            <!-- COLLAPSE que es deplegarà en cas que es faci click sobre el checkbox. -->
            <div class="form-group col-md-8">
              <div id='collapsediv1' class='collapse div1'>
                Correu Alumne: <input type="text" class="form-control" id="falu" name="correuPare" placeholder="Rellenar en cas que l'alumne sigui major d'edat.">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              Contrasenya: <input type="password" class="form-control" id="falu" name="contra">
            </div>
          </div>
          <div class="form-row">
           <div class="form-group ml-auto">
            <button type="submit" class="btn btn-dark float-right" id="bRegistre1">Registrar Alumne</button>
            </div>
          </div>
        </form>
        <p/>
      </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
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
      xhttp.open("GET", "http://api.gestioexcursions.me/Controladors/Curs/veureCurs.php", true);
      xhttp.send();
    }
    loadCurs();
  });
</script>

</body>
</html>