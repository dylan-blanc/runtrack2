<?php

$str = "cErtaines choses changent, et d'autres ne changeront jamais.";

$length = strlen($str); //longeur = nombre de caracteres dans la chaine

for ($i = 0; $i < $length; $i++) {  // parcourir chaque caractere de la chaine
     // Si on est au dernier caractere, afficher le premier
     // Sinon afficher le caractere suivant
    if ($i == $length - 1) {
        echo $str[0];
    } else {
        echo $str[$i + 1];
    }
}
