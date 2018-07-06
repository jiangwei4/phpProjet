<?php
class De{
private $De ;

public function __construct($valMax)
{
    $this->De=$valMax;
}

    public function LanceLeDe(){
        return rand(1,$this->De);
    }
}