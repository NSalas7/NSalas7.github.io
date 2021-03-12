<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gestio Excursions</title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="Estils/fullestil1.css">
  
  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

  <!-- Logo del nom de la pagina -->
  <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

</head>

<body>

<?php 
    include_once 'Capçalera.php'; 
?>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" id="bread"> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="mostrarExcursions">Inici</a></li>
    <li class="breadcrumb-item active" aria-current="page">Realitzar Pagament</li>
  </ol>
</nav>

<div class="container" id="contenidorPagament">
    <h2 id="titolForm" class="mt-2">Pagar Excursió</h2>
    <form action="../../API/Controladors/Professor/pagarExcursio.php">
        
        <div class="row g-3 align-items-center" id="PagamentTitular">
            <div class="col-sm-2">
                <label class="col-form-label"><h6>Titular: </h6></label>
            </div>
            <div class="col-sm-9">
                <input type="text" id="nomtitular" class="form-control falu">
            </div>
        </div>

        <div class="row g-3 align-items-center" id="PagamentTitular">
            <div class="col-sm-2">
                <label class="col-form-label"><h6>Numero Targeta: </h6></label>
            </div>
            <div class="col-sm-9">
                <input type="text" id="nTargeta" class="form-control falu" >
            </div>
        </div>
        <div class="row g-3 align-items-center" id="PagamentTitular">
            <label class="col-form-label col-sm-3">
                <h6> Data Caducitat : </h6>
            </label>

            <div class="col-sm-2">
                <select class="falu">
                    <option value="00">-- MES --</option>
                    <option value="01">Gener</option>
                    <option value="02">Febrer </option>
                    <option value="03">Març</option>
                    <option value="04">Abril</option>
                    <option value="05">Maig</option>
                    <option value="06">Juny</option>
                    <option value="07">Juliol</option>
                    <option value="08">Agost</option>
                    <option value="09">Septembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Desembre</option>
                </select>
            </div> 

            <div class="col-sm-2">
                <select class="falu">
                    <option value="00">-- ANY --</option>
                    <option value="21"> 2021</option>
                    <option value="22"> 2022</option>
                    <option value="23"> 2023</option>
                    <option value="24"> 2024</option>
                    <option value="25"> 2025</option>
                    <option value="26"> 2026</option>
                    <option value="27"> 2027</option>
                    <option value="28"> 2028</option>
                </select>
            </div>

            <label class="col-form-label col-sm-1">
                <h6> CVV : </h6>
            </label>

            <div class="col-sm-2">
                <input type="text" class="falu" id="cvv" placeholder=" Mirar al revers de la targeta. " name="CVV">
            </div>                           
        </div>

        <div class="form-group" id="pay-now">
            <button type="submit" class="btn btn-dark mb-4 mt-4" id="confirm-purchase">Pagar</button>
        </div>
    </form>
</div>

<div>
    <a href="veureExcursio"  class="btn btn-dark" id="tornar"> Tornar </a>
</div>

<p>
    <br>
</p>

<?php 
    include_once 'Footer.html'; 
?>

</body>
</html>