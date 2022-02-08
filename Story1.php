<?php

    echo "Le héros à " .   $heros-> vie;
    echo "<br>";
    $heros->bonus_vie();
    echo "Le héros a récupéré un bonus de vie supplémentaire de ". $heros->bonus_vie. ' points';
    echo "<br>";
    echo "Le héros à maintenant ". $heros->vie;