<?php
include '../../CONFIG/DBcon.php';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ssql = "select * from pofessor where correu = '" . $_POST["usuari"] . "' and contrasenya='" . $_POST["contra"] . "'";

echo $ssql;

$rs = mysqli_query($conn, $ssql);

if (mysqli_num_rows($rs)==1){
   //TODO CORRECTO!! He detectado un usuario
   $usuari_trobat = mysqli_fetch_object($rs);
   echo "Autenticado correctamente";
   header ("Location: http://localhost/Disseny/Projecte_Gestio/PUBLIC/BACK/AfegirExcursio.html");
   
}else{
   echo "Error de autenticació!";
   echo "<p><a href='http://localhost/Disseny/Projecte_Gestio/PUBLIC/BACK/AfegirAlumne.php'>Volver</a>";
}



mysqli_close($conn);