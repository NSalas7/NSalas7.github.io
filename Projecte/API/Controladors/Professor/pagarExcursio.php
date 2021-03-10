<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

include "../Config/DBCon.php";
include "../Controladors/Excursio.php";



$db = new DataBaseCon();
$db_con = $db->conn();

$excursioId = $_GET["id"]; // api/excursions?id=
$excursio = new Excursio($db_con);
$excursio->pagar($excursioId);
$db_con->close();

