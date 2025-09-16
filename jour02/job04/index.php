<?php
$chiffredepart = 1;
$chiffrefinal = 100;

for ($i = $chiffredepart; $i <= $chiffrefinal; $i += 1) {
    if ($i % 3 == 0 && $i % 5 == 0) { // if "nombre" est un multiple de 3 et de 5 alors = FizzBuzz
        echo "FizzBuzz <br>";
    }
    elseif ($i % 3 == 0) {
        echo "Fizz <br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz <br>";
    } else {
        echo $i . "<br>";
    }
}

?>

<!-- % est l'opérateur qui calcule le reste de la division de deux nombres.
Par exemple, $i % 3 calcule le reste de la division de $i par 3. -->
