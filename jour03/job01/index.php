<?php

$numbers = [200, 204, 173, 98, 171, 404, 459];
$result = []; // Initialize an empty array to hold results

foreach ($numbers as $number) { // affiche les chiffres de $numbers en tant que $number un a un
    $result[$number] = ($number % 2 == 0) ? "Est Paire" : "Est Impaire";
}

foreach ($result as $number => $statut) {  
    echo $number . " " . $statut . "<br>";
}
