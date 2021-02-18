<?php

include "../../Model/Config/DataBase.php";
include "../../Model/Professor.php";

header("Acces-Control-Allow-Origin: *");

$db = new DataBase();
$db_con = $db->conn();
$profe = new Professor($db_con);

$correu = $_REQUEST["usuari"];
$contra = $_REQUEST["contra"];

$rs = $profe->logIn($correu,$contra);


if (mysqli_num_rows($rs) == 1) {
    //TODO CORRECTO!! He detectado un usuario
    $usuari_trobat = mysqli_fetch_object($rs);
    header("Location: http://localhost/Back/Vistes/MostrarExcursio.php");

}
//} else {
//    header("Location: http://localhost/");
//}


mysqli_close($db_con);
