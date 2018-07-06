<?php
class Joueur{
    private $nom;
    private $vie=150;
    private $points=0;
    private $MF=0;
    private $MD=0;

    public function __construct($nom)
    {
        $this->nom=$nom;

    }
    public function Attaque($monstre){

    }
    public function SubitDegats($degats){
        if (rand(1,6)>2)
            $this->vie = ($this->vie - $degats);
    }
    public function getVie(){
        return $this->vie;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPoints(){
        return $this->points;
    }
    public function setPoints($p){
        $this->points+=$p;
    }
    public function getMF(){
        return $this->MF;
    }
    public function getMD(){
        return $this->MD;
    }
    public function setMF($i){
         $this->MF+=$i;
    }
    public function setMD($i){
       $this->MD+=$i;
    }
}