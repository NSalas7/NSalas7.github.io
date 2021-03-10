<?php

class EditarExcursio{
    

    private $conn;
    private $nom;

    public function __construct($db){
        $this->conn = $db;
    }

    public function modificar($nomI,$llocI,$duracioI,$d_iniciI,$d_fi,$recorregut,$descripcioI,$imatge,$publica,$preu){
        $nomI = $this->conn->real_escape_string($nomI);
        $llocI = $this->conn->real_escape_string($llocI);
        $duracioI = $this->conn->real_escape_string($duracioI);
        $dataI = $this->conn->real_escape_string($d_iniciI);
        $dataf = $this->conn->real_escape_string($d_fi);
        $recorregut = $this->conn->real_escape_string($recorregut);
        $descripcioI = $this->conn->real_escape_string($descripcioI);
        $imatgeI = $this->conn->real_escape_string($imatge);
        $publicI = $this->conn->real_escape_string($publica);
        $preuI = $this->conn->real_escape_string($preu);

        $ex = "UPDATE excursio SET nom =  ?, duracio = ?, descripcio = ?, public = ?, imatge = ? WHERE excursio.id = ?";
            $stmt = $this->conn->prepare($ex);
            $stmt->bind_param('sssisi',$nomI, $duracioI, $descripcioI, $publicI, $imatgeI, $id);
            $stmt->execute();
                echo $ex;

        $exc_act = "UPDATE excursioactual SET data_inici = ?, data_fi = ?, preu = ? WHERE excursioactual.Excursio_id = ?";
            $stmt = $this->conn->prepare($exc_act);
            $stmt->bind_param('ssii', $dataI, $dataf, $preuI, $id);
            $stmt->execute();
                echo $exc_act;

        $lloc = "UPDATE lloc SET nom = ?, cordenades = ? WHERE lloc.id = (SELECT excursio.id FROM excursio WHERE excursio.id = ?)";
            $stmt = $this->conn->prepare($lloc);
            $stmt->bind_param('ssi', $llocI, $recorregut, $id);
            $stmt->execute();
                echo $lloc;

        // $professors = "SELECT id FROM professor WHERE nom = '$profeId'";
        // $result = mysqli_query($this->conn,$professors);
        // if (mysqli_num_rows($result)>0){
        //     while($row = mysqli_fetch_assoc($result)){
        //         $profeID= $row["id"];
        //     }
        // }

        // $profes = "INSERT INTO professor_has_excursioactual (excursioactual_id,professor_id) values ('$id_excursioActual','$profeID')";
        // $stmt = $this->conn->prepare($profes);
        // $stmt->execute();
        //     echo $profes;

        // $has_lloc = "INSERT INTO excursioactual_has_lloc (excursioactual_id,lloc_id) values ('$id_excursioActual','$id_lloc')";
        // $stmt = $this->conn->prepare($has_lloc);
        // $stmt->execute();
        //     echo $has_lloc;

        // $cursos = "SELECT id FROM curs WHERE nom = '$cursI'";
        //     $result = mysqli_query($this->conn,$cursos);
        //         if (mysqli_num_rows($result)>0){
        //             while($row = mysqli_fetch_assoc($result)){
        //                 $cursID= $row["id"];
        //             }
        //         }

        // $curs_ex = "INSERT INTO curs_has_excursioactual (Curs_id,ExcursioActual_id) values ('$cursID','$id_excursioActual')";
        //     $stmt = $this->conn->prepare($curs_ex);
        //     $stmt->execute();
        //         echo $curs_ex;
    }
}