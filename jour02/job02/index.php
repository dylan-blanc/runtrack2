<?php
$chiffredepart = 1;
$chiffrefinal = 1337;


for ($i = $chiffredepart; $i <= $chiffrefinal; $i += 1) {
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        continue; // Passe à l'itération suivante sans afficher
    }
    if ($i == 42) {
        echo "<strong><u>42</u></strong><br>";
    }
    else {
        echo $i . "<br>";
    }
}
