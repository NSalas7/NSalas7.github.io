<?php
include "../../Model/Config/DataBase.php";
include "../../Model/Professor.php";

header("Acces-Control-Allow-Origin: *");

$db = new DataBase();
$db_con = $db->conn();
$profe = new Professor($db_con);



$nomI = $_POST["nom"];
$correuI = $_POST["correu"];
$contrasenyaI = $_POST["contrasenya"];
$rolI = $_POST["rol"];


$profe->insert($nomI,$contrasenyaI,$rolI,$correuI);

$db_con->close();

header("Location: http://admin.gestioexcursions.me/mostrarProfessors");
