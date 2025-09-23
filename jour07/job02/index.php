<?php

$date = new DateTime("now"); // Date et heure actuelle
$date->modify('+2 hours'); // date et heure actuelle + 2 heures
$jour = "Nous sommes le " . $date->format("d/m/Y") . " et il est " . $date->format("H:i:s");

function bonjour($jour, $heure)
{
    if ($heure <= 24 && $heure >= 17) {
        return "Bonsoir " . $jour;
    }
    return "Bonjour " . $jour;
}

echo bonjour($jour, $date->format("H"));

/**
 * Si l'heure est entre 17 et 24h afficher Bonsoir sinon afficher Bonjour
 */
