<?php


include "../../Model/Config/DataBase.php";
include "../../Model/Professor.php";

header("Acces-Control-Allow-Origin: *");

$db = new DataBase();
$db_con = $db->conn();
$professor = new Professor($db_con);

echo $professor->readAll();
