<?php


class Excursio
{

  public function __construct($db){
    $this->conn = $db;
  }

  public function read(){
    $query = "Select Nom, Imatge from Excursions";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    $result = $stmt->get_result();

    return $result;
  }
}
