<?php
class MonstreFacile{
    private $EnVie;
    private $degats=10;
    private $point=1;
    public function __construct()
    {
        $this->EnVie=true;
    }

    public function Attaque(){

    }
    public function getEnVie(){
        return $this->EnVie;
    }
    public function getPoint(){
        return $this->point;
    }
    public function getDegats(){
        return $this->degats;
    }
}