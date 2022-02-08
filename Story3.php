 <?php

    echo "<br>";
    echo "Le héros se fait attaquer par un minion : ";
    echo "<br>";
    echo "Le héros à " .   $heros->vie;
    echo "<br>";
    $heros->attack($minion->degat);
    echo "Le héros a perdu  ". $minion->degat .' points';
    echo "<br>";
    echo "Le héros à maintenant ". $heros->vie;