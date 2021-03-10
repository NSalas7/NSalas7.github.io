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
        $query = "select * from alumne where correu = '" . $correu . "' and contrasenya='" . $contra . "'";

        $result = mysqli_query($this->conn,$query);

        return mysqli_num_rows($result);

    }




public function readUser(){
        $query = "select pare.id,pare.correu,pare.contrasenya from pare,pare_has_alumne,alumne WHERE pare.id = pare_has_alumne.Pare_id AND pare_has_alumne.Pare_id = pare_has_alumne.Alumne_id AND pare_has_alumne.Alumne_id = alumne.id UNION SELECT alumne.id,alumne.correu,alumne.contrasenya from alumne WHERE EXISTS (SELECT alumne.id from alumne,pare where alumne.id = pare.id)";

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


	public function inserir($nomI,$llinatge1,$llinatge2,$correuAI,$correuPI,$passwordI,$edatI,$cursI){
        if ($edatI >= 18){
            $query = "insert into alumne(contrasenya,correu,curs,llinatge1,llinatge2,nom) values ('$passwordI','$correuAI','$cursI','$nomI','$llinatge1','$llinatge2')";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
        }else{
            $query = "insert into pare(contrasenya,correu) values ('$passwordI','$correuPI')";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $pareId = $this->conn->insert_id;

            $alumne = "insert into alumne(curs,llinatge1,llinatge2,nom) values ('$cursI','$nomI','$llinatge1','$llinatge2')";
            $stmt = $this->conn->prepare($alumne);
            $stmt->execute();
            $alumneId = $this->conn->insert_id;

            $insert = "insert into pare_has_alumne(Alumne_id,Pare_Id) values ('$alumneId','$pareId')";
            $stmt = $this->conn->prepare($insert);
            $stmt->execute();

        }
}
}
