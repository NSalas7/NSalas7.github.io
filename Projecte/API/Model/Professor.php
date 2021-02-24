<?php

class Professor{

    private $conn;
    private $nom;
    private $correu;
    private $constrasenya;
    private $rol;

    public function __construct($db){
        $this->conn = $db;
    }


    public function logIn($correu,$contra){

        $query = "select * from professor where correu = '" . $correu . "' and contrasenya='" . $contra . "'";

        $result = mysqli_query($this->conn,$query);

        return mysqli_num_rows($result);
    }

    public function readAll(){

        $query = "SELECT * FROM professor";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }

    public function admin(){
        $query = "SELECT admin from professor";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt = $stmt->getResult();

        echo $stmt;
    }

    public function insert($nomI,$contrasenyaI,$rolI,$correuI){
        $query = "INSERT INTO professor (nom,correu,contrasenya,admin) VALUES ('$nomI','$correuI','$contrasenyaI','$rolI')";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }

    public function setUser($correu){
        $this->correu = $correu;
    }

    public function setContra($contra){
        $this->contrasenya = $contra;
    }
}
