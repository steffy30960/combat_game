
<?php
echo "<br>";
echo "Le héros  récupere un bonus armure se fait attaquer par un Lieutenant minion : ";
echo "<br>";
echo "Le héros à " .   $heros->vie;
echo "<br>";
$heros->bonus_armure();
echo "Le héros a récupéré un bonus de vie supplémentaire de ". $heros->bonus_armure. ' points';
echo "<br>";
$heros->attack($lieutenant->degat);
echo "Le héros a perdu  " . $lieutenant->degat . ' points';
echo "<br>";
echo "Le héros à maintenant " . $heros->vie;



