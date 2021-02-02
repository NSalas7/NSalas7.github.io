<?php

$db = new DataBaseCon();
$db_con = $db->conn();

$excursio = new Excursio($db_con);
$result = $excursio->read();


//Get Users

while ($row = $result->fetch_assoc()){


  $exc = array(
    "Nom" => $row['Name'],
    "Imatge" => $row['Imatge'],
    );


}
