<?php
namespace App;
class Heros {
    private $vie;
    private $degat;
    public $bonus_vie;
    public $bonus_armure;

   public function __construct()
        {
            $this->vie = "200";
            $this->degat = "15";
            $this-> bonus_vie = "50" ;
            $this-> bonus_armure = "20";
        }
}
