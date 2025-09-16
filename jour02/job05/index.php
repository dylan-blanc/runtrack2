<?php
$chiffredepart = 1;
$chiffrefinal = 1000;

for ($i = $chiffredepart; $i <= $chiffrefinal; $i += 1) {
    if ($i < 2) continue; // 0 et 1 ne sont pas premiers
    $estPremier = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $estPremier = false;
            break;
        }
    }
    if ($estPremier) {
        echo $i . "<br>";
    }
}
?>

