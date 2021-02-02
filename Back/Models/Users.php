<?php

class Users
{
    private $conn;
    private $id;
    private $Nom;
    private $Correu;
    private $pass;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //Read
    public function read()
    {
        $query = "Select * from Professors";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}