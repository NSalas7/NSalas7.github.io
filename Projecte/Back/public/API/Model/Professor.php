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

    public function read(){

        $query = "SELECT nom FROM Professor";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }

    public function readAll(){

        $query = "SELECT * FROM Professor";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }

    public function admin(){
        $query = "SELECT admin from Professor";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt = $stmt->getResult();

        echo $stmt;
    }

    public function insert($nomI,$contrasenyaI,$rolI,$correuI){
        $query = "INSERT INTO professor (nom,correu,contrasenya,admin) VALUES ('$nomI','$correuI','$contrasenyaI','$rolI')";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

//        if ($this->conn->query($query) === TRUE){
//            echo "Perf";
//        }else{
//            echo "Fuck";
//        }
    }

}