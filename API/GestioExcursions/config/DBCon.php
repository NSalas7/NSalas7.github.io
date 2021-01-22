<?php

class DataBaseCon{
    private $connection;

    function conn(){
        $this ->connection = new mysqli("127.0.0.1:3308", "root", "", "GestioExcursions");
        if($this->connection->connect_error){
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }


}



