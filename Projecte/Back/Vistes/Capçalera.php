  <!DOCTYPE html>
  <html lang="en">
  <head>

    <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="assets/js/custom.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Estils/fullestil1.css">
    <!-- Logo del nom de la pagina -->
    <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light" id="colornavbar">
    <img src="IMG/logo_negre.png" class="d-inline-block align-top" id="capçaleraBackCards">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent"><br>

      <a href="MostrarExcursio.php" id="linkExcursions"> Excursions <img src="IMG/mochila.png" alt="mochila" id="mochilaBoto"></a>

      <input type="date" id="calendari" name="calendari">

    <!-- Ens du al DataTable de els professors -->
    <a href="MostrarProfessor.php" id="mostrarProfessor"> Professors <i class="fa fa-user"></i></a>

    <!-- Ens du al DataTable de els alumnes -->
    <a href="MostrarAlumne.php" id="mostrarAlumnes"> Alumnes <i class="fa fa-graduation-cap"></i></a>

    <!-- Ens du al DataTable de els pagaments efectuats -->
    <a href="MostrarPagos.php" id="mostrarPagos"> Pagaments <i class="fa fa-money"></i></a>

     <!-- Ens du a la pàgina de Login -->
    <a href="../../Public/index.php" id="tancarSessio"> Tancar Sessió <i class="fa fa-sign-out"></i></a>

  </div>

  </nav>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <script   src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"   integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="   crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
  </html>
