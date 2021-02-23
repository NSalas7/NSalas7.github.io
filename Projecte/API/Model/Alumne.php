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

    public function read(){

        $query = "SELECT nom FROM alumne";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }

    public function readAll(){

        $query = "SELECT alumne.id,alumne.nom,alumne.llinatge1,alumne.llinatge2,alumne.curs,pare.correu
		from alumne,pare
		where alumne.id = pare.id";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }
}
