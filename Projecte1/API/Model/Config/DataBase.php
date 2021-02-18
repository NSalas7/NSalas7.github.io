<?php


class DataBase{
    private $connection;

    function conn(){
        $this ->connection = new mysqli("localhost", "root", "root", "gestio");
        if($this->connection->connect_error){
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }
}