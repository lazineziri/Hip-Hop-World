<?php

require_once "databaza.php";

class AlbumiMapper extends Database{
    private $connection;
    private $query;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function insertAlbumi($albumi){
        $this->query = "insert into albumi(titulli, nrKangve, cmimi) values(:titulli, :nrKangve, :cmimi)";
        $statement = $this->connection->prepare($this->query);

        $titulli = $albumi->getTitulli();
        $nrKangve = $albumi->getNrKangve();
        $cmimi = $albumi->getCmimi();
        $statement->bindParam(":titulli", $titulli);
        $statement->bindParam(":nrKangve", $nrKangve);
        $statement->bindParam(":cmimi", $cmimi);

        $statement->execute();
        return true;
    }

    public function getAlbumet(){
        $this->query = "select * from albumi";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result; //1244
    }

    public function fshijAlbumin($id){
        $this->query = "delete from albumi where id=:id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}