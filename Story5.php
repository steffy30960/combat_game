<?php
echo "<br>";
echo "Le héros doit combattre le chef minion Durant 5 tours : ";
echo "<br>";
// boucle combat pendant 5 tours
for ($i = 0; $i <= 5; $i++) {
    $bonus_armure = false; // a chaque tour la valeur revient a false
    $bonus_vie = false;    // a chaque tour la valeur revient a false
    //condition 1 /3 bonus armure
    if (rand(0, 2) == 1) {
        $heros->bonus_armure();
        $bonus_armure = true;  // qd y a le bonus ca passe a true
    }
    //condition 1/5 bonus vie
    if (rand(0, 4) == 2) {
        $heros->bonus_vie();
        $bonus_vie = true;     // qd y a le bonus ca passe a true
    }
    if ($heros->vie <= 0 ){
        $heros->vie = 0;
        echo "Le heros est mort";
       
    }elseif ($chef_minion->vie <= 0){
        $chef_minion->vie = 0;
        echo "Le chef minion est mort";
        // je stoppe ma boucle
        break;   
    }
   
    echo "<br>";
    echo "Point de vie : " .  $heros->vie;
    echo "<br>";
    // condition si bonus armure ca s'affiche
    if ($bonus_armure == true) {
        echo "bonus armure : " .  $heros->bonus_armure;
        echo "<br>";
    }
    // heros attaque chef minion
    $heros->attack($chef_minion->degat);
    echo "<br>";
    // chef minion attaque heros
    $chef_minion->attack($heros->degat); 
  
}
