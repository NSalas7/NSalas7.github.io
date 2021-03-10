<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');

include '../../Model/CONFIG/DataBase.php';
include '../../Model/Alumne.php';

$db = new DataBase();
$db_con = $db->conn();
$alumne = new Alumne($db_con);

$nomI = $_POST["nom"];
$llinatge1I = $_POST["llinatge1"];
$llinatge2I = $_POST["llinatge2"];
$correuAI = $_POST["correuAlumne"];
$correuPI = $_POST["correuPare"];
$passwordI = $_POST["contra"];
$edatI = $_POST["edat"];
$cursI = $_POST["curs"];

$alumne->inserir($nomI,$llinatge1,$llinatge2,$correuAI,$correuPI,$passwordI,$edatI,$cursI);

$db_con->close();

header("Location: http://www.gestioexcursions.me/mostrarExcursions");
