<?php

class bmi{
    public $berat, $tinggi;
    function __construct($berat, $tinggi)
    {
        $this->berat= $berat;
        $this->tinggi= $tinggi;
    }
    function nilaibmi(){
        return $this->berat / ($this->tinggi * $this->tinggi);
    }
    function statusbmi()
    {
        if($this->nilaibmi() < 18.5 ) 
        {
            return "kekurangan berat badan";
        }
        elseif($this->nilaibmi() >= 18.5 &&  $this->nilaibmi() <= 24.9 ) 
        {
            return "normal (ideal)";
        }
        elseif($this->nilaibmi() >= 25.0 &&  $this->nilaibmi() <= 29.9 ) 
        {
            return "kelebihan berat badan";
        }
        elseif($this->nilaibmi() >= 30.0) 
        {
            return "kegemukan (obesitas)";
        }
    }
}


?>