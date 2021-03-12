<?php

class AlumneInserir{

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

   public function inserir($nomI, $llinatge1I, $llinatge2I, $edatI, $cursI, $correuPI, $correuAI, $passwordI){

    $nomI = $this->conn->real_escape_string($nomI);
    $llinatge1I = $this->conn->real_escape_string($llinatge1I);
    $llinatge2I = $this->conn->real_escape_string($llinatge2I);
    $edatI = $this->conn->real_escape_string($edatI);
    $cursI = $this->conn->real_escape_string($cursI);
    $correuPI = $this->conn->real_escape_string($correuPI);
    $correuAI = $this->conn->real_escape_string($correuAI);
    $passwordI = $this->conn->real_escape_string($passwordI);

	if($edatI >= 18){
	    $alumneM = "INSERT INTO alumne (nom, llinatge1, llinatge2, correu, contrasenya, curs) VALUES ('$nomI', '$llinatge1I', '$llinatge2I',$correuAI,$passwordI,'$cursI')";
            $stmt = $this->conn->prepare($alumneM);
            $stmt->execute();
          }else{
            $query = "INSERT INTO pare (contrasenya, correu) VALUES ('$passwordI', '$correuPI')";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $pareId = $this->conn->insert_id;
            echo $query;

            $alumne = "INSERT INTO alumne (nom, llinatge1, llinatge2, curs) VALUES ('$nomI', '$llinatge1I', '$llinatge2I', '$cursI')";
            $stmt = $this->conn->prepare($alumne);
            $stmt->execute();
            $alumneId = $this->conn->insert_id;
            echo $alumne;

            $insertar = "INSERT INTO pare_has_alumne (Pare_Id, Alumne_id) VALUES ('$alumneId','$pareId')";
            $stmt = $this->conn->prepare($insertar);
            $stmt->execute();
            echo $insertar
	}
    }
}
