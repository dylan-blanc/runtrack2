<?php

function calcule($a, $b, $operation) {
    switch ($operation) {
        case "+":
            return "l'addition est : " . $a + $b . "<br>";
            case "-":
                return "La soustraction est : " . $a - $b . "<br>";
            case "*":
                return "La multiplication est : " . $a * $b . "<br>";
            case "/":
                return "La division est : " . $a / $b . "<br>";
            case "%":
                return "Le modulo est : " . $a % $b . "<br>";
    }
}

echo"le premier chiffre etant 100 et le deuxieme etant 10 <br> <br>";

echo calcule(100, 10,"+");
echo calcule (100, 10, "-");
echo calcule(100, 10, "*");
echo calcule (100,10, "/");
echo calcule (100,10,"%");


