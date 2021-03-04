<?php
class Albumi{
    private $titulli;
    private $nrKangve;
    private $cmimi;

    public function __construct($titulli, $nrKangve, $cmimi){
        $this->titulli = $titulli;
        $this->nrKangve = $nrKangve;
        $this->cmimi = $cmimi;
    }

    public function getTitulli(){
        return $this->titulli;
    }
    public function getNrKangve(){
        return $this->nrKangve;
    }
    public function getCmimi(){
        return $this->cmimi;
    }

}