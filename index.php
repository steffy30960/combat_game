<?php
use App\Minion;
use App\Heros;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';




$heros = new Heros;




require 'Story1.php';