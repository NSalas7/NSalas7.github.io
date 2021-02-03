<!DOCTYPE html>
<html>
<head>
	<title>Gestio Excursions</title>
</head>
<body>
<?php
include '../CONFIG/DBcon.php';
$usuariI = $_POST["usuari"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nom FROM pofessor WHERE correu = " $usuariI ;
?>
<?php
echo "Hola " ;
?>
</body>
</html>