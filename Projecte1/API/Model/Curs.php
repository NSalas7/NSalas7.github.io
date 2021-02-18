<?php


class Curs
{

    private $conn;
    private $nom;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {

        $query = "SELECT * FROM Curs";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }
}