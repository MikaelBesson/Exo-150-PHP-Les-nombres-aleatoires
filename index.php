<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$randomNbr = rand(50, 100);
echo "<div id=result> un nombre entre 50 et 100 : $randomNbr</div><br>";


/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
$randomNbr1 =rand(50, getrandmax());
echo "<p id=result1> un nombre entre 50 et le max : $randomNbr1</p><br>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 100
 * ==> si le nombre est inférieur ou égal à 50, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$randomNbr2 = rand(0, 100);
if($randomNbr2 <= 50){
    echo "<p id=result2> vous avez gagné votre nombre est : $randomNbr2</p><br>";
}
elseif($randomNbr2 > 50){
    echo "<p id=result2> vous avez perdu votre nombre est : $randomNbr2</p><br>";
}

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.

function randomM($min, $max){
     $result3 = rand($min, $max);
    if($result3 >= $max -100){
         return randomM($min, $max);
    }
    else {
        return $result3;
    }
};
echo randomM(0,1000);






