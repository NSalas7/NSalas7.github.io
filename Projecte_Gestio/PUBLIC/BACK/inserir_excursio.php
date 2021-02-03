<?php
include '../../CONFIG/DBcon.php';

$nomI = $_GET["nom"];
$llocI = $_GET["lloc"];
$cursI = $_GET["curs"];
$duracioI = $_GET["duracio"];
$d_iniciI = $_GET["d_inici"];
$descripcioI = $_GET["descripcio"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nomI = $conn->real_escape_string($nomI);
$llocI = $conn->real_escape_string($llocI);
$cursI = $conn->real_escape_string($cursI);
$duracioI = $conn->real_escape_string($duracioI);
$d_iniciI = $conn->real_escape_string($d_iniciI);
$descripcioI = $conn->real_escape_string($descripcioI);

$sql = "INSERT INTO Excursions (Nom, Lloc, Cursos, Duracio, Data_Inici, Descripcio) VALUES ('$nomI', '$llocI', '$cursI', '$duracioI', '$d_iniciI', '$descripcioI')" ;

echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "S'ha afegit la excursio correctament. ";
}
echo "<p/>";
echo "<button class='btn btn-dark'>";
echo "<a href='BDexcursions.php'>Tornar</a>";
echo "</button>";

mysqli_close($conn);