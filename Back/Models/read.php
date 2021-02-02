<?php

include_once '../../config/DBCon.php';
include_once '../../models/Users.php';

//DB
$db = new DataBaseCon();
$db_con = $db->conn();

//User
$user = new Users($db_con);
$result = $user->read();

$users_array = array();

//Get Users

while ($row = $result->fetch_assoc()){


    $user = array(
        "id" => $row['id'],
        "Nom" => $row['Nom'],
        "Correu" => $row['Correu'],
        "Contrasenya" => $row['Contrasenya'],
    );

    array_push($users_array, $user);

}
//return json
echo json_encode($users_array);