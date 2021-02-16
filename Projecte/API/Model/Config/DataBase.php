<?php


class DataBase{
    private $connection;

    function conn(){
        $this ->connection = new mysqli("127.0.0.1:3308", "adminXavi", "12345678", "GestioExcursions");
        if($this->connection->connect_error){
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }
}