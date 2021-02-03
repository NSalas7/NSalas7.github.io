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
  <link rel="stylesheet" type="text/css" href="../FullEstils/fullestil1.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Logo del nom de la pagina -->
  <link rel="icon" type="image/png" href="../IMG/logo1_negre.png">
</head>
<!-- Imatge de fons. -->
<body background="../IMG/forestbridge.jpg">
  <?php include_once 'CapçaleraFront.html'; ?>
    <div class="container-sm" id="contenidorIniciSessio">
    <h1 id="titol">Inici Sessió</h1>

        <!-- Formulari per donar d'alta un Alumne. -->
        <form action="ComprovarAlumne.php" method="post" id="formul">
          <div class="form-row">
            <div class="form-group mx-auto">
              <div id="us"><h5>Usuari:</h5>
              <input type="textarea" class="form-control falu" name="user" placeholder="@ e-mail">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group mx-auto">
              <div id="co"><h5>Contrasenya:</h5>
                <input type="password" class="form-control falu" name="contra">
              </div>
            </div>
          </div>
          <div class="form-row mx-auto">
            <div class="form-group mx-auto">
             <button class="btn btn-dark" id="binici"><h6>Iniciar Sessió</h6></button>
              <br>
              <a href="AfegirAlumne.php" class="btn btn-dark" id="bRegistre"><h6>Registrar Alumne</h6></a>
            </div>
          </div>
        </form>
      </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>