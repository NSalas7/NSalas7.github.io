<?php

class DataBaseCon{
    private $connection;

    function conn(){
        $this ->connection = new mysqli("localhost", "root", "root", "mydb");
        if($this->connection->connect_error){
            die("Connection failed: " . $this->connection->connect_error);
        }else{
            echo "Works";
        }
        return $this->connection;
    }


}



