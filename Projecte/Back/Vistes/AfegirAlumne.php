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
        <form action="http://api.gestioexcursions.me/Controladors/Alumne/inserirAlumne.php" method="get" id="form">
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
                <select type="text" class="form-control" id="falu" name="curs">
                  <option>-- Selecciona --</option>
                  <option>1 PRIMARIA</option>
                  <option>2 PRIMARIA</option>
                  <option>3 PRIMARIA</option>
                  <option>4 PRIMARIA</option>
                  <option>5 PRIMARIA</option>
                  <option>6 PRIMARIA</option>
                  <option>1 ESO</option>
                  <option>2 ESO</option>
                  <option>3 ESO</option>
                  <option>4 ESO</option>
                </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <!-- Si l'alumne es menor d'edat, i es pitja sobre el CHECKBOX, aquest camp es bloquejarà. -->
              Correu Pare, Mare, Tutor: <input type="text" class="form-control" id="falu" name="correuAlumne" onfocus="protegeCampo(this)" id="correuA">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



</body>
</html>
