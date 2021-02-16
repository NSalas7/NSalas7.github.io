<?php


include "../../Model/Config/DataBase.php";
include "../../Model/Professor.php";

header("Content-Type: application/json; charset=UTF-8");

$db = new DataBase();
$db_con = $db->conn();
$professor = new Professor($db_con);

echo $professor->readAll();
