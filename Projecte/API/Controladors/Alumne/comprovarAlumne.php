<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

include "../../Model/Config/DataBase.php";
include "../../Model/Alumne.php";



$db = new DataBase();
$db_con = $db->conn();
$alu = new Alumne($db_con);

$correu = $_REQUEST["email"];
$contra = $_REQUEST["password"];
$alu->setUser($correu);
$alu->setContra($contra);

echo $alu->logIn($correu,$contra);