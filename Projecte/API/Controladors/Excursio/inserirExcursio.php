<?php
include "../../Model/Config/DataBase.php";
include "../../Model/Excursio.php";
header("Acces-Control-Allow-Origin: *");
$db = new DataBase();
$db_con = $db->conn();
$ex = new Excursio($db_con);



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
if (isset($_POST["bus"])){
    $bus = $_POST["bus"];
}else{
    $bus = 0;
}

$ex->inserir($nomI,$duracioI,$descripcioI,$publica,$bus,$imatge,$cursI,$llocI,$d_iniciI,$d_fi,$recorregut,$professors);

$db_con->close();

header("Location: http://admin.gestioexcursions.me/mostrarExcursions");
