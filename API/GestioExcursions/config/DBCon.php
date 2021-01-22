<?php

class DataBaseCon{
    private $connection;

    function conn(){
        $this ->connection = new mysqli("52.157.103.150:3306", "admin", "admin7", "GestioExcursions");
        if($this->connection->connect_error){
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }


}



