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

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->num_rows == 1):
            $datos = $stmt->fetch_assoc();
            echo json_encode(array("error" => false, "tipo" => $datos["tipus_usuari"]));
            else:
            echo json_encode(array("error" => true));
        endif;
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