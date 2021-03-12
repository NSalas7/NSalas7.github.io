<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: *');

include "../../Model/Config/DataBase.php";
include "../../Model/Excursio.php";

$db = new DataBase();
$db_con = $db->conn();
$excursio = new Excursio($db_con);




echo $excursio->readAll();
