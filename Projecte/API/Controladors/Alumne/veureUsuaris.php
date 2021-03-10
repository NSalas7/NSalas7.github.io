<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: *');

include "../../Model/Config/DataBase.php";
include "../../Model/Alumne.php";

$db = new DataBase();
$db_con = $db->conn();
$alumne = new Alumne($db_con);

echo $alumne->readUser();

$db_con->close();
