<?php
for ($i = 2; $i <= 1000; $i += 1) { // autre manière d'ecrire les chiffres sans variable
    $estPremier = true;
    for ($div = 2; $div <= sqrt($i); $div++) { // defini le nombre premier ((divisible par lui meme))
        if ($i % $div === 0) { // si divisible par lui meme alors ne pas afficher
            $estPremier = false;
            break;
        }
    }
    if ($estPremier) {
        echo $i . " <br>";
    }
}


/* ALED */