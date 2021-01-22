<?php
header("Content-Type: application/json; charset=UTF-8");

$servername = "52.157.103.150";
$username = "admin";
$password = "admin7";
$dbname = "gestioexcursions";



$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->prepare("select  * from Professors");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>