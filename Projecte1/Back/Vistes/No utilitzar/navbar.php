<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Required meta tags -->
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

  <!-- Boto que ens serveix per redirigermos a la pàgina de afegir excursions -->
  <a href="Cards.php" class="btn btn-secondary" role="button" aria-pressed="true" id="botoAfegirExcursio" > Excursions <img src="IMG/mochila.png" alt="mochila" id="mochilaBoto"></a>

  <!--Dropdown de els cursos que tenim --> 
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="botoCursos">
    Cursos
  </button>
    <ul class="dropdown-menu" aria-labelledby="botoCursos" id="cursos">
    </ul>
  </div>

  <div id="cercar">
  <form  class="form-inline my-2 my-lg-0">
    <input type="text" id="cercador">
    <button class="btn btn-light" value="Search" id="botoCercar"> Search <i class="fa fa-search"></i></button>
  </form>
</div>
</div>

</nav>


<script>
  $(document).ready(function(){
    function loadCurs() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState === 4 && this.status === 200) {
                var curs = JSON.parse(this.responseText);
                for (var c in curs) {
                  var nomcurs = curs[c][1];
                  var item = $("<li/>");
                  var a = $("<a/>", {text:nomcurs, class: "dropdown-item" , href : "#"});
                  item.append(a);
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
