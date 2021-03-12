<?php

include "../../Model/Config/DataBase.php";
include "../../Model/VeureAlumnesPagats.php";

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: *');

$db = new DataBase();
$db_con = $db->conn();
$alumnespagats = new AlumnesPagats($db_con);

if(isset ( $_REQUEST["id"])){
    $id = $_REQUEST["id"];
    echo $alumnespagats->veure($id);
}
