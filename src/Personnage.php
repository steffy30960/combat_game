<?php

class personnage {

    protected $vie;
    protected $degat;
    public $bonus_vie;
    public $bonus_armure;
    public $nom;

    public function __construct()
    {
        $this->vie = "";
        $this->degat = "";
        $this-> bonus_vie = "50" ;
        $this-> bonus_armure = "20";
        $this-> nom = $nom;
    }

    protected function attaque_heros($cible) {
       $cible-> vie = "15" ;

    }
    protected function vie_heros(){
        
    }

    
}