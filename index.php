<?php
use App\Heros;
use App\Minion;
use APP\Lieutenant;
use App\Personnage;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
$personnage= new Personnage;
$minion = new Minion;
$heros = new Heros;
$lieutenant = new Lieutenant;
require 'Story1.php';
require 'Story2.php';
require 'Story3.php';
require 'Story4.php';