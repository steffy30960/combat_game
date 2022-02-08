<?php
namespace App;
class Personnage {

    protected $vie;
    protected $degat;
    public $bonus_vie;
    public $bonus_armure;


   

    
    public function attack($degat){
        $this->vie =  $this->vie -$degat;
    }

    
}