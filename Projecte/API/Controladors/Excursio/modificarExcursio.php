<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

include "../../Model/Config/DataBase.php";
include "../../Model/ModificarExcursio.php";

$db = new DataBase();
$db_con = $db->conn();
$exc = new EditarExcursio($db_con);

$nomI = $_POST["nom"];
$llocI = $_POST["lloc"];
$duracioI = $_POST["duracio"];
$d_iniciI = $_POST["d_inici"];
$d_fi = $_POST["d_fi"];
$recorregut = $_POST["recorregut"];
$descripcioI = $_POST["descripcio"];
$imatge = $_POST["imatge"];
$publica = $_POST["publica"];
$preu = $_POST["preu"];

if(isset ( $_REQUEST["id"])){
    $id = $_REQUEST["id"];
    $exc->modificar($nomI,$llocI,$duracioI,$d_iniciI,$d_fi,$recorregut,$descripcioI,$imatge,$publica,$preu);
}

$db_con->close();

header("Location: http://localhost/mostrarExcursions");