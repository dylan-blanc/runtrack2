<?php
$chiffredepart = 1;
$chiffrefinal = 100;

for ($i = $chiffredepart; $i <= $chiffrefinal; $i += 1) {
    if ($i == 42) { // mettre la condition tout en avant si elle est concerner par une autre variable
        echo "La Plateforme <br>"; 
    } elseif ($i >= 25 && $i <= 50) { // entre 25 et 50 inclus
        echo "<u>" . $i . "</u><br>";
    } elseif ($i <= 20) { // inferieur a 20
        echo "<i>" . $i . "</i><br>";
    } else {
        echo $i . "<br>";
    }
}
?>


