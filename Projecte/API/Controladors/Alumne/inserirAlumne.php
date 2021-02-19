<?php
include '../CONFIG/DBCon.php';

header("Acces-Control-Allow-Origin: *");

$nomI = $_GET["nom"];
$llinatge1I = $_GET["llinatge1"];
$llinatge2I = $_GET["llinatge2"];
$correuAI = $_GET["correuAlumne"];
$passwordI = $_GET["contra"];
$cursI = $_GET["curs"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Alumnes (Nom, Llinatge1, Llinatge2, Correu, Contrasenya, Curs) VALUES ('$nomI', '$llinatge1I', '$llinatge2I', '$correuAI', '$passwordI', '$cursI')" ;


echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "S'ha afegit l'usuari correctament. ";
}
echo "<p/>";
echo "<button class='btn btn-dark'>";
echo "<a href='veureAlumnes.php'>Tornar</a>";
echo "</button>";

mysqli_close($conn);