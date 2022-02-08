<?php
namespace APP;
class Minion extends Personnage
{
    public $vie;
    public $degat;

    public function __construct(){
        $this-> vie = 10;
        $this-> degat = 10;
    }
};