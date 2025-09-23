<?php


function occurence($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    return "le caractere \"$char\" apparait $count fois dans la phrase : $str";
}


echo occurence("Test de phrase inutile pour compter les occurence de E", "e");