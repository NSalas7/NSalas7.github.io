<?php
include "../../Model/Config/DataBase.php";
include "../../Model/Bus.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');
$db = new DataBase();
$db_con = $db->conn();
$bus = new Bus($db_con);



$nplaces = $_POST["nplaces"];

$bus->inserir($nplaces);

$db_con->close();