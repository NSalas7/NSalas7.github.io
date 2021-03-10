<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

include "../../Model/Config/DataBase.php";
include "../../Model/Professor.php";



$db = new DataBase();
$db_con = $db->conn();
$profe = new Professor($db_con);

$correu = $_REQUEST["email"];
$contra = $_REQUEST["password"];
$profe->setUser($correu);
$profe->setContra($contra);

echo $profe->logIn($correu,$contra);