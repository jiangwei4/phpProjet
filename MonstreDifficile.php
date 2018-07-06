<?php
require 'MonstreFacile.php';
class MonstreDifficile extends MonstreFacile{
private $point=2;
private $degatsSort=5;
    public function __construct()
    {
        Parent::__construct();
    }
    public function Attaque(){

    }
    public function getEnVie(){
        return Parent::getEnVie();
    }
    public function getPoint(){
        return $this->point;
    }
    public function getDegatsSort()
    {
        return $this->degatsSort;
    }
}