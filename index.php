<?php
use App\Personnage;
use App\Heros;
use App\Minion;
use App\Lieutenant;
use App\Chef_minion;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$personnage= new Personnage;
$heros = new Heros;
$minion = new Minion;
$lieutenant = new Lieutenant;
$chef_minion = new Chef_minion;
require 'Story1.php';
require 'Story2.php';
require 'Story3.php';
require 'Story4.php';
require 'Story5.php';