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

        if ($query = "select * from alumne where correu = " . $correu . "' and contrasenya='" . $contra . "'") {

            if (mysqli_num_rows($rs)==1){
                $result = mysqli_query($this->conn,$query);
                return mysqli_num_rows($result);
            }

            elseif ($query = "select * from pare where correu = " . $correu . "' and contrasenya='" . $contra . "'") {
                if (mysqli_num_rows($rs)==1){
                    $result = mysqli_query($this->conn,$query);
                    return mysqli_num_rows($result);
                }
            }
        }
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

        $query = "SELECT * FROM alumne";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }
}