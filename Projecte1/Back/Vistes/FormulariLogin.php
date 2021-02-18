<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestio Excursions</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Back/Public/Estils/fullestil1.css">

    <!-- Logo del nom de la pagina -->
    <link rel="icon" type="image/png" href="Back/Public/IMG/logo1_negre.png">
</head>
<!-- Imatge de fons. -->
<body background="Back/Public/IMG/forestbridge.jpg">
<?php include_once 'CapçaleraLogin.html'; ?>




<div class="container" id="contenidorIniciSessio">
    <h1 id="titol">Inici Sessió</h1>

    <!-- Formulari per donar d'alta un Alumne. -->
    <form action="" method="post" id="formul">
        <div class="form-row">
            <div class="form-group mx-auto">
                <div id="us"><h5>Usuari:</h5>
                    <input type="text" class="form-control falu"  name="usuari" placeholder="@ e-mail" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group mx-auto">
                <div id="co"><h5>Contrasenya:</h5>
                    <input type="password" class="form-control falu"  name="contra" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group mx-auto">
                <input type="button" onclick="loadDoc()" class="btn btn-dark" id="binici" value="Iniciar Sessio">
            </div>
        </div>
    </form>
</div>







<script src="Back/Public/Js/login.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>