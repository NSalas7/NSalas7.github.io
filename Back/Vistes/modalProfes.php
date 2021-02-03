<?php
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="FullEstils/fullestil1.css">
</head>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#staticBackdrop">
  Afegir Professor
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="staticBackdropLabel">Afegir Professor</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="inserir_profesor.php" method="get">
          <div class="form-row">
            <div class="form-group col-md-6">
              Nom: <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group col-md-6">
              Rol:
              <select id="Month" type="text" placeholder="Month" class="form-control" name="rol">
                <option>-- Null --</option>
                <option>Administrador</option>
                <option>Professor</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              Correu: <input type="text" class="form-control" name="correu">
            </div>
            <div class="form-group col-md-6">
              Curs:
              <select id="Month" type="text" placeholder="Month" class="form-control" name="curs">
                <option>-- Null --</option>
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
            <div class="form-group col-md-6">
              Contrasenya: <input type="text" class="form-control" name="contrasenya">
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Tancar</button>
        <button type="submit" class="btn btn-dark">Afegir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>