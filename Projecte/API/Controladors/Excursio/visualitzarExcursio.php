<?php
include "../../Model/Config/DataBase.php";
include "../../Model/VisualitzarExcursio.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

$db = new DataBase();
$db_con = $db->conn();
$ve = new EditarExcursio($db_con);

if(isset ( $_REQUEST["id"])){
    $id = $_REQUEST["id"];
    echo $ve->veure($id);
}