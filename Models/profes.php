<?php
header("Content-Type: application/json; charset=UTF-8");
include '../CONFIG/DBCon.php';

$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->prepare("SELECT Nom FROM Professors");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>