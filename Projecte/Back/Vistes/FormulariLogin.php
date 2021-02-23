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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <script src="Js/login.js"></script>

    <!-- Logo del nom de la pagina -->
    
    <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

</head>

<!-- Imatge de fons. -->
<body background="IMG/forestbridge.jpg">

    <?php include_once 'CapçaleraLogin.html'; ?>

    <div class="container" id="contenidorIniciSessio">
        <h1 id="titol">Inici Sessió</h1>

    <!-- Formulari per donar d'alta un Alumne. -->
    <form action="" method="post" id="formul">
        <div class="form-row">
            <div class="form-group mx-auto">
                <div id="us"><h5>Usuari:</h5>
                    <input type="text" class="form-control falu" id="user"  name="usuari" placeholder="@ e-mail" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group mx-auto">
                <div id="co"><h5>Contrasenya:</h5>
                    <input type="password" class="form-control falu" id="contrasenya" name="contra" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group mx-auto">
                <input type="button" onclick="logIn()" class="btn btn-dark" id="binici" value="Iniciar Sessio">
            </div>
        </div>
    </form>
</div>

</body>
</html>
