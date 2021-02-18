<?php

header("Content-Type: application/json; charset=UTF-8");

include "../../Model/Config/DataBase.php";
include "../../Model/Alumne.php";


$db = new DataBase();
$db_con = $db->conn();
$alumne = new Alumne($db_con);

echo $alumne->readAll();
