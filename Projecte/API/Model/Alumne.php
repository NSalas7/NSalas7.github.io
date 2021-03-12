<?php

class Alumne{

    private $conn;
    private $nom;
    private $llinatge1;
    private $llinatge2;
    private $correu;
    private $contrasenya;

    public function __construct($db){
        $this->conn = $db;
    }

public function logIn($correu,$contra){
        $query = "select id as id from alumne where correu = '" . $correu . "' and contrasenya='" . $contra . "'";
        $result = mysqli_query($this->conn,$query);
        return mysqli_num_rows($result);
    }



    public function readUser(){
        $query = "SELECT pare.id,pare.correu,pare.contrasenya FROM pare, pare_has_alumne, alumne WHERE pare.id = pare_has_alumne.Pare_id AND pare_has_alumne.Pare_id = pare_has_alumne.Alumne_id AND pare_has_alumne.Alumne_id = alumne.id UNION SELECT alumne.id,alumne.correu,alumne.contrasenya FROM alumne WHERE EXISTS (SELECT alumne.id FROM alumne,pare WHERE alumne.id = pare.id)";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_all();
        return json_encode($result);
    }

    public function readAll(){

        $query = "SELECT * FROM alumne";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_all();
        return json_encode($result);
    }


    public function setUser($correu){
            $this->correu = $correu;
    }

    public function setContra($contra){
            $this->constrasenya = $contra;
    }
}
