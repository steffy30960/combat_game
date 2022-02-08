<?php
namespace App;

class Heros extends Personnage{
    public $vie;
    public $degat;
 

   public function __construct()
        {
            $this->vie = 200;
            $this->degat = 15;
            $this->bonus_vie = 50 ;
            $this->bonus_armure = 20;
        }
    public function bonus_vie(){
        $this->vie = $this->vie + 50;
    }
    public function bonus_armure(){
        $this->vie =  $this->vie + 20;

    }
}

