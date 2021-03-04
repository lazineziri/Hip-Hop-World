<?php


class Database{
    private $connection;
    private $host = "localhost";
    private $dbname = "Hip-Hop-World";

    protected function getConnection(){
        $this->createConnection();
        return $this->connection;
    }

    private function createConnection(){
        try{
            $this->connection = new PDO("mysql:host=$this->host; dbname=$this->dbname", "root", "");
        }catch(PDOException $e){
            print("Error: ".$e->getMessage()."<br/>");
            die();
        }
    }
}