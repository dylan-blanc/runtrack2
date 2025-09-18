<?php

$str = "Les choses que l'on possede finissent par nous posseder"; // replacer les é par e

// Convertir la chaîne en tableau de caractères
$chars = str_split($str);

// Parcourir le tableau à l'envers avec foreach
foreach (array_reverse($chars) as $char) {
    print $char;
}
