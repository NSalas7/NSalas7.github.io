<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

include "../../Model/Config/DataBase.php";
include "../../Model/Excursio.php";

$db = new DataBase();
$db_con = $db->conn();
$exc = new Excursio($db_con);

$nomI = $_POST["nom"];
$cursI = $_POST["curs"];
$llocI = $_POST["lloc"];
$duracioI = $_POST["duracio"];
$d_iniciI = $_POST["d_inici"];
$d_fi = $_POST["d_fi"];
$recorregut = $_POST["recorregut"];
$professors = $_POST["profes"];
$descripcioI = $_POST["descripcio"];
$imatge = $_POST["imatge"];
$publica = $_POST["publica"];
$preu = $_POST["preu"];
/*
echo $nomI;
echo $cursI;
echo $llocI;
echo $duracioI;
echo $d_iniciI;
echo $d_fi;
echo $recorregut;
echo $professors;
echo $descripcioI;
echo $imatge;
echo $publica;
echo $preu;
*/

$exc->inserir($nomI,$cursI,$llocI,$duracio,$d_iniciI,$d_fi,$recorregut,$professors,$descripcioI,$imatge,$publica,$preu);

$db_con->close();

//header("Location: http://admin.gestioexcursions.me/mostrarExcursions");

