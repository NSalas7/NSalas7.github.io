<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gestio Excursions</title>

    <!-- CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    </ol>
</nav>

<div id="excursions" class="container">

</div>

<script>

    function carregarExcursions(){
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
                        var CardDeck = $("<div/>", {class: "card-group"});
                        $("#excursions").append(rowDIV);
                    }
                    i++

                    var idEx = ex[e].id;

                    var titol = ex[e].nom;
                    var imatge = "/IMG/" + ex[e].imatge;

                    var colDIV = $("<div/>",{class: "col-md-4", style: "width:300px; heigh:300px"});
                    var cardDIV = $("<div/>",{class: "card text-center", id: idEx});
                    var cardIMG = $("<img/>",{class: "card-img-top", src: imatge});
                    cardDIV.append(cardIMG);
                    var cardBody = $("<div/>",{class: "card-body"});
                    var Separadors = $("<div/>",{class: "Separador"});
                    var cardTitol = $("<h4/>",{class: "card-title", text: titol});
                    var boto = $("<button/>",{class: "btn btn-secondary botoVeureExcursio", id: "botoVeureExcursio" + idEx, text:"Detalls", value: idEx});
                    var iconoUll = $("<i/>", {class: "fa fa-eye" });
                    boto.append(iconoUll)
                    cardBody.append(Separadors, cardTitol,boto);
                    cardDIV.append(cardBody);
                    colDIV.append(cardDIV);
                    CardDeck.append(colDIV);
                    rowDIV.append(CardDeck);
                    //var idE = $("#botoVeureExcursio" + idEx).val();

                }
                $(".botoVeureExcursio").click(function(){
                    var info = $(this).val();
                    console.log("HOLA " + info);
                    sessionStorage.clear;
                    sessionStorage.setItem("idE",info);
                    window.location = "http://localhost/veureExcursio";
                });
            }
        };
        xhttp.open("GET", "http://api.gestioexcursions.me/Controladors/Excursio/excursioFront.php", true);
        xhttp.send();
    }

    carregarExcursions();
</script>

</body>
</html>

<?php
include "Footer.html";
?>