<?php
include '../../CONFIG/DBcon.php';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($ssql = "select * from alumne where correu = '" . $_POST["user"] . "' and contrasenya='" . $_POST["contra"] . "'") {
 	echo $ssql;
	$rs = mysqli_query($conn, $ssql);

	if (mysqli_num_rows($rs)==1){
   		$usuari_trobat = mysqli_fetch_object($rs);
   		header ("Location: http://localhost/Disseny/Projecte_Gestio/PUBLIC/BACK/AfegirExcursio.html");

 	}elseif ($ssql = "select * from pare where correu = '" . $_POST["user"] . "' and contrasenya='" . $_POST["contra"] . "'") {
		$rs = mysqli_query($conn, $ssql);
		if (mysqli_num_rows($rs)==1){
   			$usuari_trobat = mysqli_fetch_object($rs);
   			header ("Location: http://localhost/Disseny/Projecte_Gestio/PUBLIC/BACK/AfegirProfesor.html");
		}else{
   			header ("Location: http://localhost/Disseny/Projecte_Gestio/PUBLIC/FRONT/AfegirAlumne.php");
		}
	}
}
mysqli_close($conn);