<?php

$str = "Dans l'espace, personne ne vous entend crier";
$compte = [];
$ordre = [];
$total = 0;

for ($i = 0; $i < strlen($str); $i++) {  // Parcours chaque caractère de la chaîne
    $char = $str[$i];  
    // On ignore les caractères spéciaux et espace
    if ($char === "'" || $char === "," || $char === " ") {
        continue;
    }
    if (!isset($compte[$char])) { 
        $ordre[] = $char; // On garde l'ordre d'apparition des lettres
        $compte[$char] = 1;  // compte le nombre d'apparitions d'une lettre et ajoute 1 unité au compteur
    } else {
        $compte[$char]++;    // Incrémente le compteur si le caractère a déjà été vu
    }
}

foreach ($ordre as $char) { 
    echo $char . " " . $compte[$char] . " fois<br>";
}

count ($compte); {
    echo "Il y a " . count($compte) . " lettres différentes dans la phrase.";
}

if (isset($compte)) {
    foreach ($compte as $char) {
        $total += $char;
    }
    echo "<br> Il y a " . $total . " lettres total dans la phrase.";
}

