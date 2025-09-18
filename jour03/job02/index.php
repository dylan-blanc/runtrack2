<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$result = '';
for ($i = 0; $i < strlen($str); $i += 2) { // $i = 0 soit a partir de la première lettre, on saute une lettre sur deux jusqu'a la longeur de la chaine $strlen
    $result .= $str[$i]; // result = $str moins 1 caracteres
}

print $result; // afficher le resultat
