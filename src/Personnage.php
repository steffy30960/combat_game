<?php

class Personnage {

    protected $vie;
    protected $degat;
    public $bonus_vie;
    public $bonus_armure;


    protected function attaque_heros($cible) {
       $cible->vie = "15" ;

    }
    protected function bonus_vie(){
        
    }

    
}