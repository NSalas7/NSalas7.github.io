<?php

include "../../Model/Config/DataBase.php";
include "../../Model/Professor.php";

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: *');

$db = new DataBase();
$db_con = $db->conn();
$professor = new Professor($db_con);

echo $professor->readAll();
