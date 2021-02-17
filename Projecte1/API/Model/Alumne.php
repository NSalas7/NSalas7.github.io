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

        $query = "SELECT nom FROM Alumne";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }

    public function readAll(){

        $query = "SELECT * FROM Alumne";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }


//    public function insert($nomI,$contrasenyaI,$rolI,$correuI){
//        $query = "INSERT INTO Alumne (nom,correu,contrasenya,admin) VALUES ('$nomI','$correuI','$contrasenyaI','$rolI')";
//
//        $stmt = $this->conn->prepare($query);
//        $stmt->execute();

//        if ($this->conn->query($query) === TRUE){
//            echo "Perf";
//        }else{
//            echo "Fuck";
//        }
    }

//}