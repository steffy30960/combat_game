<?php

    echo "<br>";
    echo "Le héros à " .   $heros-> vie;
    echo "<br>";
    $heros->bonus_armure();
    echo "Le héros a récupéré un bonus de vie supplémentaire de ". $heros->bonus_armure. ' points';
    echo "<br>";
    echo "Le héros à maintenant ". $heros->vie;