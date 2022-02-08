<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require 'src/Autoloader.php';


Autoloader :: register();
use App\Heros;
$heros = new Heros;
var_dump("super");