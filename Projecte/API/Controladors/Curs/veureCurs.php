<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: *');

include "../../Model/Config/DataBase.php";
include "../../Model/Curs.php";

$db = new DataBase();
$db_con = $db->conn();
$curs = new Curs($db_con);

echo $curs->readAll();
