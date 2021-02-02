<?php

include '../CONFIG/DBCon.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Excursions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "LLISTA D'USUARIS : " . "<p/>";
    while ($row = $result->fetch_assoc()) {

        echo "ID: " . $row["id"] . " - Nom: " . $row["Nom"] . " - Lloc: " . $row["Lloc"]. " - Curs: " . $row["Cursos"]. " - Duracio: " . $row["Duracio"]. " - Data_Inici: " . $row["Data_Inici"]. " - Descripcio: " . $row["Descripcio"] ;
        echo " ";
        ?>
        <br>
        <?php
    }

    echo "<button>";
    echo "<a href='../Vistes/AfegirExcursio.html'>Inserir</a>";
    echo "</button>";
    echo "<p/>";
    //echo '<input type="submit" value="Borrar">';

} else {
    echo "No tens cap usuari en el regisre.";
}
$conn->close();
?>

