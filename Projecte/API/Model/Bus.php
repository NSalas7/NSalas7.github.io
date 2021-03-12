<?php

class Bus{

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function inserir($busI){
    	$bus = "INSERT INTO bus (capacitat) VALUE ('$busI')";
      	$stmt = $this->conn->prepare($ex);
      	$stmt->execute();
      	$idExcursio = $this->conn->insert_id;
    }