<?php
include_once "navbar.php"
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestio Excursions</title>
    <!-- Logo del nom de la pagina -->
    <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Estils/fullestil1.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

</head>
<body>

<div class="container">
    <h1 id="titol">Nou Professor</h1>

    <form action="../../API/Controladors/Professor/inserirProfessor.php" method="post" id="form">
        <div class="form-row">
            <div class="form-group col-md-6">
                Nom: <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group col-md-6">
                Rol:
                <select id="rol" type="text" placeholder="Month" class="form-control" name="rol">
                    <option>-- Null --</option>
                    <option value="0">Professor</option>
                    <option value="1">Administrador</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                Correu: <input type="text" class="form-control" name="correu">
            </div>
            <div class="dropdown col-md-6">
                Curs:<select id="cursos" name="cursos" class="form-control">
                <option value="0">-- Selecciona --</option>
            </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                Contrasenya: <input type="text" class="form-control" name="contrasenya">
            </div>
        </div>
        <div class="form-row col-6 col-md-2">
            <button type="submit" class="btn btn-dark">Crea</button>
        </div>


    </form>

</div>

<br>
<br>

<script>
  $(document).ready(function(){
    function loadCurs() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState === 4 && this.status === 200) {
                var curs = JSON.parse(this.responseText);
                for (var c in curs) {
                  var nomcurs = curs[c];
                  var item = $("<option/>", {text:nomcurs});
                  $("#cursos").append(item);
                }
              }
            }
            xhttp.open("GET", "../../API/Controladors/Curs/veureCurs.php", true);
            xhttp.send();
          };
    loadCurs();
  });
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


<?php
//include_once "Footer.html";
//?>

</body>
</html>