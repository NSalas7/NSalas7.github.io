<?php

header("Acces-Control-Allow-Origin: *");

include "../../Model/Config/DataBase.php";
include "../../Model/Excursio.php";


$db = new DataBase();
$db_con = $db->conn();
$excursio = new Excursio($db_con);

echo $excursio->readAll();
