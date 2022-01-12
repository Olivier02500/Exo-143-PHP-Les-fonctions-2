<?php

//exercice1
$myFunction = function(){
    return true;
};
$myFunction();

//exercice2
function nFunction ($prenom){
    echo $prenom."<br>";
}
nFunction("Olivier");

//exercice3
function nameFunction ($prenom, $nom){
    echo $prenom." ".$nom."<br>";
}
nameFunction("Olivier", "Peuchet");

//exercice4
function number ($nombre1, $nombre2){
    if ($nombre1 > $nombre2) {
        echo "$nombre1 est plus grand que $nombre2 <br>";
    } elseif ($nombre1 < $nombre2) {
        echo "$nombre1 est plus petit que $nombre2 <br>";
    } else {
        echo "Ils sont égaux <br>";
    }
}
number(3, 9);

//exercice5
function concatenation  ($nombre, $string){
    echo $nombre." ".$string."<br>";
}
concatenation(4, "roue");

//exercice6
function me ($nom, $prenom, $age){
    echo "Bonjour $nom $prenom, tu as $age ans <br>";
}
me("Peuchet", "olivier", 24);

//exercice7
function genre ($age, $genre){
    if ($age < 18 && $genre === "Homme"){
        echo "Vous êtes un homme pas encore majeur <br>";
    }
    elseif ($age >= 18 && $genre === "Homme"){
        echo "Vous êtes un homme majeur <br>";
    }
    elseif ($age < 18 && $genre === "Femme"){
        echo "Vous êtes une femme pas encore majeur <br>";
    }
    else{
        echo "Vous êtes une femme majeur <br>";
    }
}
genre(24, "Femme");

//exercice8
function exo8 ($nombre1, $nombre2, $nombre3){
    echo $nombre1 + $nombre2 + $nombre3;
}
exo8(9, 1, 5);
?>
