<?php


class Excursio{

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function readAll(){
      header("Content-Type: application/json; charset=UTF-8");

        $query = "SELECT * FROM Excursio";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }

  public function read(){
    $query = "Select Nom, Imatge from Excursio";

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

      $ex = "INSERT INTO excursio (nom,duracio,descripcio,public,bus,imatge) VALUES ('$nomI','$duracioI','$descricioI','$publicI','$busI','$imatgeI')";
      echo $ex;
      $stmt = $this->conn->prepare($ex);
      $stmt->execute();
      $idExcursio = $this->conn->insert_id;
      echo $idExcursio;

      $curs = "INSERT INTO curs (nom) value ('$cursI')";
      $stmt = $this->conn->prepare($curs);
      $ResultSet = $stmt->execute();
      echo $ResultSet;
      $id_Curs = $this->conn->insert_id;
      echo $id_Curs;

      $lloc = "INSERT INTO lloc (nom,cordenades) value ('$llocI','$recorregut')";
      $stmt = $this->conn->prepare($lloc);
      $stmt->execute();
      $id_lloc = $this->conn->insert_id;
      echo $id_lloc;

      $exc_act = "INSERT INTO excursioactual (Excursio_id,data_inici,data_fi) values ('$idExcursio','$dataI','$dataf')";
      $stmt = $this->conn->prepare($exc_act);
      $stmt->execute();
      $id_excursioActual = $this->conn->insert_id;
      echo $id_excursioActual;


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
