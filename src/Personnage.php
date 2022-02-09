<?php
namespace App;
class Personnage {

    public $vie;
    public $degat;
    public $bonus_vie;
    public $bonus_armure;

    
    public function attack($degat){
        $this->vie =  $this->vie - $degat;
      
    }

  
}