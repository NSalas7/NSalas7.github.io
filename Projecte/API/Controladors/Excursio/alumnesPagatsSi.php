<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: *');

include "../../Model/Config/DataBase.php";
include "../../Model/AlumnesPagatsSi.php";

$db = new DataBase();
$db_con = $db->conn();
$ve = new AlumnesPagatsSi($db_con);

if(isset ( $_REQUEST["id"])){
    $id = $_REQUEST["id"];
    echo $ve->PagatSi($id);
}
