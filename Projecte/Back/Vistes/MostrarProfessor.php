<!DOCTYPE html>

<html lang="en">

<head>

  <title>Gestio Excursions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- css -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.bootstrap4.min.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="/Estils/fullestil1.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Anton&display=swap">

  <!-- js -->

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

  <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

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

  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="mostrarExcursions">Inici</a></li>
    <li class="breadcrumb-item active" aria-current="page">Professors</li>
  </ol>
</nav>

  <p>
    <br>
  </p>

  <div class="container">

  <!-- Button trigger modal -->
  <div class="row">

   <?php 
    include_once "AfegirProfesor.php";
   ?>

  </div>

  <p>
    <br>
  </p>

  <div class="row">
    <div class="col">
      <table id="taula" class="table table-striped table-bordered display dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Correu</th>
            <th>Contrasenya</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  <p>
    <br>
  </p>

</div>

<script src="/Js/mostrarProfessor.js"></script>

<p>
  <br>
</p>

<?php 
include_once "Footer.html"; 
?>

</body>
</html>
