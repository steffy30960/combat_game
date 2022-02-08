<?php
use App\Minion;
use App\Heros;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';




$heros = new Heros;
echo "vie Heros : "  .  $heros->vie;

$minion = new Minion;
$heros->attack($minion->degat);
echo "<br> vie Heros : "  .  $heros->vie;