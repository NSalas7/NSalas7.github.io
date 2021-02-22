<?php


class DataBase{
    private $connection;

    function conn(){
        $this ->connection = new mysqli("10.0.1.4", "admin", "admin7", "GestioExcursions");
        if($this->connection->connect_error){
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }
}