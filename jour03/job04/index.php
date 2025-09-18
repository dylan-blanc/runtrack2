<?php

$str = "Dans l'espace, personne ne vous entend crier";
$compte = [];
$ordre = [];

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    // On ignore les caractères spéciaux
    if ($char === "\n" || $char === "'" || $char === "," || $char === " ") {
        continue;
    }
    if (!isset($compte[$char])) {
        $ordre[] = $char; // On garde l'ordre d'apparition
        $compte[$char] = 1;
    } else {
        $compte[$char]++;  
    }
}

foreach ($ordre as $char) {
    echo $char . " " . $compte[$char] . " fois<br>";
}
