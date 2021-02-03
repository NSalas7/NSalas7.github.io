<?php
include '../../CONFIG/DBcon.php';

$nomI = $_GET["nom"];
$correuI = $_GET["correu"];
$contrasenyaI = $_GET["contrasenya"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Professors (Nom, Correu, Contrasenya) VALUES ('$nomI', '$correuI', '$contrasenyaI')" ;

if ($conn->query($sql) === TRUE) {
    echo "S'ha afegit l'usuari correctament. ";
}
echo "<p/>";
echo "<button class='btn btn-dark'>";
echo "<a href='BD.php'>Tornar</a>";
echo "</button>";

mysqli_close($conn);