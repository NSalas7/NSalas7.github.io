<?php

include "../../Model/Config/DataBase.php";
include "../../Model/Professor.php";

$db = new DataBase();
$db_con = $db->conn();
$profe = new Professor($db_con);




$ssql = "select * from professor where correu = '" . $_POST["usuari"] . "' and contrasenya='" . $_POST["contra"] . "'";


$rs = mysqli_query($db_con, $ssql);

if (mysqli_num_rows($rs) == 1) {
    //TODO CORRECTO!! He detectado un usuario
    $usuari_trobat = mysqli_fetch_object($rs);
    header("Location: http://admin.gestioexcursions.me/MostrarExcursio.php");

} else {
    header("Location: http://admin.gestioexcursions.me/");
}


mysqli_close($db_con);