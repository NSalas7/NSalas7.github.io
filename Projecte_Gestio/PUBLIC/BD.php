<?php

include '../CONFIG/DBcon.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Professors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "LLISTA D'USUARIS : " . "<p/>";
    while ($row = $result->fetch_assoc()) {

        echo "ID: " . $row["id"] . " - Nom Professor: " . $row["Nom"] . " - Correu: " . $row["Correu"]. " - Contrasenya: " . $row["Contrasenya"] ;
        echo " ";
        echo "<button>";
        echo "<a href='borrar.php?id=".$row["id"]."'>Borrar</a>";
        echo "</button>";
        echo "<p/>";
    }

    echo "<button>";
    echo "<a href='afegir.html'>Inserir</a>";
    echo "</button>";
    echo "<p/>";
    //echo '<input type="submit" value="Borrar">';

} else {
    echo "No tens cap usuari en el regisre.";
}
$conn->close();
?>

