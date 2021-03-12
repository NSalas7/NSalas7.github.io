<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gestio Excursions</title>

    <!-- CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="Estils/fullestil1.css">

    <!-- JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Logo del nom de la pagina -->
    
    <link rel="icon" type="image/png" href="IMG/logo1_negre.png">

</head>

<body>

<?php
    include "Capçalera.php";
?>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" id="bread"> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="mostrarExcursions">Inici</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalls de la Excursio</li>
  </ol>
</nav>

<div id="excursions" class="container">

</div>

<script>
    $(document).ready(function(){
        var id = sessionStorage.getItem("id");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function (){
                if (this.readyState === 4 && this.status === 200) {
                    var ex = JSON.parse(this.responseText);
                    var i = 0;
                    for (e in ex){
                        if (i === 3){
                            i === 0;
                        }
                        if (i === 0){
                            var rowDIV = $("<div/>", {class: "row",});
                            $("#excursions").append(rowDIV);
                        }
                        i++

                        var idEx = ex[e].id;
                        var titol = ex[e].nom;
                        var descripcio = ex[e].descripcio;
                        var preu = ex[e].preu;
                        var lloc = ex[e].lloc;
                        var duracio = ex[e].duracio;
                        var d_inici = ex[e].d_inici;
                        var imatge = "/IMG/" + ex[e].imatge;

                        var colDIV = $("<div/>",{class: "col-md-4 imatge" });
                        var IMGA = $("<img/>",{src: imatge, style: "max-width: 100%;"});
                        colDIV.append(IMGA);

                        var informacio = $("<div/>",{class: "col-md-8"});
                        var cardTitol = $("<h2/>",{class: "card-title", text: titol, id:"titolExcursio"});
                        var BotdeLinia =  $("<p/>");
                        var cardTextInfo =  $("<h6/>",{class: "card-title", text: "INFORMACIÓ : ", id:"informacioexcursio"});
                        var BotdeLinia1 =  $("<p/>");
                        var cardTextDesc =  $("<p/>",{class: "card-title", text: descripcio, id:"descripcioExcursio"});
                        var BotdeLinia2 =  $("<p/>");
                        var cardTextLloc =  $("<h6/>",{class: "card-title", text: "LLOC : " + lloc, id:"descripcioExcursio"});
                        var BotdeLinia3 =  $("<p/>");
                        var cardTextDuracio =  $("<h6/>",{class: "card-title", text: "DURACIÓ : " + duracio + " hores", id:"descripcioExcursio"});
                        var BotdeLinia5 =  $("<p/>");
                        var cardTextDInici =  $("<h6/>",{class: "card-title", text: "DATA DE L'EXCURSIÓ : " + d_inici, id:"descripcioExcursio"}, "<p/>");
                        var BotdeLinia8 =  $("<p/>");
                        var cardTextPreu =  $("<h6/>",{class: "card-title", text: "Preu: " + preu + " €", id:"preuExcursio"});
                        var botoTornar = $("<a/>",{class: "btn btn-secondary", id: "botoEnrrera", text:"Tornar" , href: "mostrarExcursions"});
                        var botoPagar = $("<a/>",{class: "btn btn-secondary", id: "botoPagar", text:"Pagar Excursio", href:"pagarExcursio" });
                        informacio.append(cardTitol, BotdeLinia, cardTextInfo, BotdeLinia1, cardTextDesc, BotdeLinia2, cardTextLloc, BotdeLinia3, cardTextDuracio, BotdeLinia5, cardTextDInici, BotdeLinia8, cardTextPreu);
                        rowDIV.append(colDIV, informacio, botoTornar, botoPagar);

                    }
                }
            };
            xhttp.open("POST", "http://api.gestioexcursions.me/Controladors/Excursio/visualitzarExcursio.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + id);
    });
</script>

<?php
    include "Footer.html";
?>

</body>
</html>

