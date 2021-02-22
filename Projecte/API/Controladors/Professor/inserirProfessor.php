<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

include "../../Model/Config/DataBase.php";
include "../../Model/Professor.php";



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
