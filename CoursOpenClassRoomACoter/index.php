<?php
$userAge = 30;
$prenom = "Dylan";
$nom = "Blanc";
$date = new DateTime();
$date->modify('+2 hours');

$CeciEstUnString = "Bonjour"; // texte, ou encore string
$StringAvecDesVariable = 'Bonjour ' . $prenom . ' ' . $nom;
$CeciEstUnEntier = 10; // Nombre entier ou int
$CeciEstUneDecimal = 0.5; // Nombre décimal ou float
$CeciEstUnBoolean = true; // deux valeur soit True ou false^
$CeciaAucuneValeur = null; // valeur nulle, vide, rien

echo NULL; // echo affiche une variable


// /////////////////////////////////////////CHIFFRES EN PHP/////////////////////////////////////////
$premiernombre = 10;
$deuxiemenombre = 5;

echo $premiernombre + $deuxiemenombre . "\n"; // 10+5 > 15
echo $premiernombre - $deuxiemenombre . "\n"; // 10-5 > 5
echo $premiernombre - $deuxiemenombre + ($premiernombre * $deuxiemenombre) . "\n"; // 10-5+50 > 55
echo $premiernombre / $deuxiemenombre . "\n"; // 10/5 > 2
echo $premiernombre % $deuxiemenombre . "\n"; // 10%5 > 0 (modulo, reste de la division)
echo $premiernombre * $deuxiemenombre . "\n"; // 10*5 > 50 (multiplication)
echo $premiernombre ** $deuxiemenombre . "\n"; // 10^5 > 100000 (exponentiation, puissance)

echo (10+5) * 3 . "\n"; // 15*3 > 45 (parenthèse avant multiplication)
echo 10 + 5 * 3 . "\n"; // 10+15 > 25 (multiplication avant addition)
echo (10 + 5) * 3 / 2 . "\n"; // 15*3/2 > 22.5 (parenthèse avant multiplication avant division)
echo (10 + 5) * (3 / 2) . "\n"; // 15*1.5 > 22.5 (parenthèse avant multiplication)
echo 10 + (5 * 3) / 1.2 . "\n"; // 10+15/1.2 > 22.5 (parenthèse avant division)
echo ($premiernombre + $deuxiemenombre) * ($premiernombre / $deuxiemenombre) - (7 + 0.5) . "\n"; // (10+5)*(10/5)-(7+0.5) > 15*2-7.5 > 30-7.5 > 22.5 (parenthèse avant multiplication avant division avant soustraction avant addition)

for ($i = 1; $i <= 22.5; $i += 1) {
    if ($i == 20)   {
        else 
    echo $i . "\n"; // affiche les chiffres de 1 à 22.5
}

?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>TEST</h1>
    <p> <?php echo "Bonjour " . $prenom . ' ' . $nom;
        ?> aujourd'hui nous sommes le <?php echo $date->format('d/m/Y H:i:s'); ?></p> <!--  date(?d/m/Y h:i:s?); data format, jour/mois/année, heure/minute/seconde // $date->format, affiche le fuseau horraire +2h (variable date) -->
    <div class="PhPvaleurNombre"><img src="valeurChiffresPhP.png" alt="Logo PHP" /></div>

</body>

</html>