
<?php
class AlumneInserir{

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function inserir($nomI, $llinatge1I, $llinatge2I, $edatI, $cursI, $correuPI, $correuAI, $passwordI){
        echo $correuPI;


        if ($edatI < 18) {
            $sql = " INSERT INTO pare (correu, contrasenya) VALUES ('$correuPI', '$passwordI')" ;
            $ssql = " INSERT INTO alumne (nom, llinatge1, llinatge2, curs) VALUES ('$nomI', '$llinatge1I', '$llinatge2I', '$cursI')" ;
            echo $ssql;
            echo $sql;
            if ($this->conn->query($sql) === TRUE) {
                $idpare = $this->conn->insert_id;
                echo "New record created successfully. Last inserted ID is: " . $idpare;

                echo $idpare;
            }
            echo $ssql;
            if ($this->conn->query($ssql) === TRUE) {
                $idalumne = $this->conn->insert_id;
                echo "New record created successfully. Last inserted ID is: " . $idalumne;

                echo $idalumne;
            }

            $add = " INSERT INTO pare_has_alumne (Pare_id, Alumne_id) VALUES ('$idpare', '$idalumne')" ;
            echo $add;
            if ($this->conn->query($add) === TRUE) {
                echo "S'ha afegit l'usuari correctament. ";
            }

        }else{
            $sqlA = "INSERT INTO alumne (nom, llinatge1, llinatge2, correu, contrasenya, curs) VALUES ('$nomI', '$llinatge1I', '$llinatge2I', '$correuAI', '$passwordI', '$cursI')" ;
            echo $sqlA;
        }
    }
}


