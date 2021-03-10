<?php
class Excursio{

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function readAll(){
      $query = "select excursio.id as id ,excursio.nom as nom ,excursio.public as publica ,curs.nom as nomCurs ,excursioactual.data_inici as data_inici ,excursioactual.preu as preu from excursio,curs,excursioactual,curs_has_excursioactual where excursio.id = excursioactual.Excursio_id and curs_has_excursioactual.ExcursioActual_id=excursioactual.id and curs_has_excursioactual.Curs_id = curs.id";

      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

      $result = $result->fetch_all();
      return json_encode($result);
    }

    public function read(){
      $query = "Select nom, imatge from excursio";

      $stmt = $this->conn->prepare($query);
      $stmt->execute();

      $result = $stmt->get_result();
      return $result;
    }

  public function pagar($id){
    $data = date("d-m-y  h:i:s");

    $query = "INSERT INTO Pagament (data,excursioactual_id) values('$data',$id) where excursioactual_id =". $id;
    
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
  }

  public function inserir($nomI,$cursI,$llocI,$duracio,$d_inici,$d_fi,$recorregut,$professors,$descripcioI,$imatge,$publica,$preu){


//echo $d_inici;

    $nomI = $this->conn->real_escape_string($nomI);
    $llocI = $this->conn->real_escape_string($llocI);
    $cursI = $this->conn->real_escape_string($cursI);
    $duracioI = $this->conn->real_escape_string($duracio);
    $dataI = $this->conn->real_escape_string($d_inici);
    $dataf = $this->conn->real_escape_string($d_fi);
    $recorregut = $this->conn->real_escape_string($recorregut);
    $profeId = $this->conn->real_escape_string($professors);
    $descricioI = $this->conn->real_escape_string($descricioI);
    $imatgeI = $this->conn->real_escape_string($imatge);
    $publicI = $this->conn->real_escape_string($publica);
    $preuI = $this->conn->real_escape_string($preu);

//echo $dataI;
//echo "<br/>";


    $ex = "INSERT INTO excursio (nom,duracio,descripcio,public,imatge) VALUES ('$nomI','$duracioI','$descricioI','$publicI','$imatgeI')";
    $stmt = $this->conn->prepare($ex);
    $stmt->execute();
    $idExcursio = $this->conn->insert_id;
	echo $ex;

    $exc_act = "INSERT INTO excursioactual (Excursio_id,data_inici,data_fi,preu) values ('$idExcursio','$dataI','$dataf','$preuI')";
    $stmt = $this->conn->prepare($exc_act);
    $stmt->execute();
    $id_excursioActual = $this->conn->insert_id;
	echo $exc_act;
	echo $id_excursioActual;

    $lloc = "INSERT INTO lloc (nom,cordenades) values ('$llocI','$recorregut')";
    $stmt = $this->conn->prepare($lloc);
    $stmt->execute();
    $id_lloc = $this->conn->insert_id;
	echo $lloc;

    $professors = "SELECT id FROM professor WHERE nom = '$profeId'";
    $result = mysqli_query($this->conn,$professors);
     if (mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$profeID= $row["id"];
}
}
//	echo $professors;
	//echo "profeID".$profeID;

    $profes = "INSERT INTO professor_has_excursioactual (excursioactual_id,professor_id) values ('$id_excursioActual','$profeID')";
    $stmt = $this->conn->prepare($profes);
    $stmt->execute();
	echo $profes;

    $has_lloc = "INSERT INTO excursioactual_has_lloc (excursioactual_id,lloc_id) values ('$id_excursioActual','$id_lloc')";
    $stmt = $this->conn->prepare($has_lloc);
    $stmt->execute();
echo $has_lloc;

    $cursos = "SELECT id FROM curs WHERE nom = '$cursI'";
    $result = mysqli_query($this->conn,$cursos);
     if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
                $cursID= $row["id"];
}
}


    $curs_ex = "INSERT INTO curs_has_excursioactual (Curs_id,ExcursioActual_id) values ('$cursID','$id_excursioActual')";
    $stmt = $this->conn->prepare($curs_ex);
    $stmt->execute();
echo $curs_ex;
  }

}
