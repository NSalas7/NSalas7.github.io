<?php

include "../Config/DBCon.php";
include "../Controladors/Excursio.php";

header("Acces-Control-Allow-Origin: *");

$db = new DataBaseCon();
$db_con = $db->conn();

$excursioId = $_GET["id"]; // api/excursions?id=
$excursio = new Excursio($db_con);
$excursio->pagar($excursioId);
$db_con->close();