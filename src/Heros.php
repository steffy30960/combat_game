<?php
namespace App;

use Personnage;

class Heros extends Personnage{
    public $vie;
    public $degat;
 

   public function __construct()
        {
            $this->vie = "200";
            $this->degat = "15";
            $this-> bonus_vie = "50" ;
            $this-> bonus_armure = "20";
        }
}
