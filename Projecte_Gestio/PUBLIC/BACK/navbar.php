<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar bg-success justify-content">
  <img src="../IMG/logo_blanc.png" width="150" height="150" class="d-inline-block align-top">
  <input type="button" class="btn btn-secondary" value="Afegir Excursio" onclick="">
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="cursos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Cursos
    </button>
    <div class="dropdown-menu" aria-labelledby="cursos">
      <a class="dropdown-item" href="#">1r A</a>
      <a class="dropdown-item" href="#">2r A</a>
      <a class="dropdown-item" href="#">3r A</a>
      <a class="dropdown-item" href="#">4r A</a>
    </div>
  </div>
  <a><?php include_once "modalProfes.php" ?></a>
  <form action="#">
    <input type="text">
    <input type="submit" class="btn btn-light" value="Search">
  </form>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

