<?php

header("Content-Type: application/json; charset=UTF-8");
header("Acces-Control-Allow-Origin: *");
include "../../Model/Config/DataBase.php";
include "../../Model/Curs.php";


$db = new DataBase();
$db_con = $db->conn();
$curs = new Curs($db_con);

echo $curs->readAll();
