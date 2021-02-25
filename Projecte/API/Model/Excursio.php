<?php

class Excursio{

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

   public function readAll(){
$query = "select excursio.id,excursio.nom,excursio.public,
		(select GROUP_CONCAT(curs.nom SEPARATOR ',')
		from curs,excursioactual
		where curs.id = excursioactual.id),
              (select GROUP_CONCAT(excursioactual.data_inici SEPARATOR ',')
              from excursioactual,excursio
              where excursio.id = excursioactual.Excursio_id),
		(select excursioactual.preu from excursioactual where excursio.id = excursioactual.Excursio_id)
              from excursio";
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

      $query = "INSERT INTO Pagament (data,excursioactual_id) values('$data','$id') where excursioactual_id =". $id;

      $stmt = $this->conn->prepare($query);

      $stmt->execute();

  }

public function inserir($nomI,$duracioI,$descricioI,$publicI,$busI,$imatgeI,$cursI,$llocI,$dataI,$dataf,$recorregut,$profeId){

      $nomI = $this->conn->real_escape_string($nomI);
      $llocI = $this->conn->real_escape_string($llocI);
      $cursI = $this->conn->real_escape_string($cursI);
      $duracioI = $this->conn->real_escape_string($duracioI);
      $dataI = $this->conn->real_escape_string($dataI);
      $dataf = $this->conn->real_escape_string($dataf);
      $recorregut = $this->conn->real_escape_string($recorregut);
      $profeId = $this->conn->real_escape_string($profeId);
      $descricioI = $this->conn->real_escape_string($descricioI);
      $imatgeI = $this->conn->real_escape_string($imatgeI);
      $publicI = $this->conn->real_escape_string($publicI);


      $ex = "INSERT INTO excursio (nom,duracio,descripcio,public,bus,imatge) VALUE ('$nomI','$duracioI','$descricioI','$publicI','$busI','$imatgeI')";
      $stmt = $this->conn->prepare($ex);
      $stmt->execute();
      $idExcursio = $this->conn->insert_id;
      echo $idExcursio;

      $exc_act = "INSERT INTO excursioactual (Excursio_id,data_inici,data_fi) value ('$idExcursio','$dataI','$dataf')";
      echo $exc_act;
      $stmt = $this->conn->prepare($exc_act);
      $stmt->execute();
      $id_excursioActual = $this->conn->insert_id;
      echo $id_excursioActual;

      $lloc = "INSERT INTO lloc (nom,cordenades) value ('$llocI','$recorregut')";
      $stmt = $this->conn->prepare($lloc);
      $stmt->execute();
      $id_lloc = $this->conn->insert_id;
      echo $id_lloc;

      $profes = "INSERT INTO professor_has_excursioactual (excursioactual_id,professor_id) values ('$id_excursioActual','$profeId')";
      $stmt = $this->conn->prepare($profes);
      $stmt->execute();

      $has_lloc = "INSERT INTO excursioactual_has_lloc (excursioactual_id,lloc_id) values ('$id_excursioActual','$id_lloc')";
      $stmt = $this->conn->prepare($has_lloc);
      $stmt->execute();

	 $curs_ex = "INSERT INTO curs_has_excursioactual (Curs_id,ExcursioActual_id) values ('$id_Curs','$id_excursioActual')";
      $stmt = $this->conn->prepare($curs_ex);
      $stmt->execute();

    }
}
