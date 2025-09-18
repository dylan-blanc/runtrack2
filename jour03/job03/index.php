<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouyAEIOUY";


for ($i = 0; $i < strlen($str); $i++) {  // parcourir chaque caractere de la chaine
    if (strpos($voyelles, $str[$i]) !== false) {  // Verifier si le caractere est une voyelle
        echo $str[$i];  // Afficher le caractere s'il est une voyelle
    }
}


