<?php
header("Content-Type: application/json; charset=UTF-8");

$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "gestioexcursions";



$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->prepare("select  * from Professors");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>