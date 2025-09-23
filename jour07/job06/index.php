<?php

function change($char)
{
    switch ($char) {
        case 'a':
        case 'A':
            return '4';
        case 'b':
        case 'B':
            return '8';
        case 'e':
        case 'E':
            return '3';
        case 'g':
        case 'G':
            return '6';
        case 'l':
        case 'L':
            return '1';
        case 's':
        case 'S':
            return '5';
        case 't':
        case 'T':
            return '7';
        default:
            return $char;
    }
}

function leetspeak($str)
{
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $result .= change($str[$i]);
    }
    return $result;
}

echo leetspeak("TEST DE PHRASE inutile servant a voir si les lettres sont bien remplacer par des chiffres");
