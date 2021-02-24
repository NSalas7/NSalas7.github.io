<!DOCTYPE html>

<html lang="en">

<head>

  <title>Gestio Excursions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- css -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.bootstrap4.min.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="/Estils/fullestil1.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- js -->

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.bootstrap4.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
  
  <!-- Logo del nom de la pagina -->
  
  <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

</head>

<body>
 
  <?php 
  include_once "Capçalera.php"; 
  ?>

  <p>
    <br>
  </p>

  <div class="container">

  <div class="row">

        <div class="col-md-2 col-sm-4 mb-4">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="botoCursos">
                    Cursos
                </button>
                <ul class="dropdown-menu" aria-labelledby="botoCursos" id="cursos">
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 mb-4">

            <!-- Boto que ens serveix per redirigermos a la pàgina de afegir excursions -->
            <a href="afegirExcursio" class="btn btn-secondary" role="button" aria-pressed="true" id="botoAfegirExcursio" >Afegir Excursio <img src="IMG/mochila.png" alt="mochila" id="mochilaBoto"></a>
        </div> 

        <div class="col-md-3 col-sm-4 mb-4">
              <input type="date" id="calendari" name="calendari">
        </div>

        <div class="col-md-3 col-sm-4 mb-4">

            <!-- Boto que ens serveix per redirigermos a la pàgina de afegir excursions -->
            <a href="veureExcursio" class="btn btn-secondary" role="button" aria-pressed="true" id="botoAfegirExcursio" >Veure Excursio <i class="fa fa-eye"></i></a>
        </div>
    </div>


    <div class="row">
      <div class="col">
        <table id="taula" class="table table-striped table-bordered display nowrap">
          <thead>
	      <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Publica?</th>
                <th>Curs</th>
                <th>Data Inici</th>
                <th>Preu</th>
             </tr>
          </thead>
        </table>
      </div>
    </div>
    <br>
  </div>

  <script src="/Js/mostrarExcursions.js"></script>

  <p>
    <br>
  </p>

<?php 
include_once "Footer.html"; 
?>

</body>
</html>
