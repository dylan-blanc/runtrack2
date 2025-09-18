<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$consonnes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'];

$nbVoyelles = 0;
$nbConsonnes = 0;

for ($i = 0; $i < strlen($str); $i++) {  // parcourir chaque caractere de la chaine
    $char = $str[$i];
    if (in_array($char, $voyelles)) {
        $nbVoyelles++;  // Incrémente le compteur de voyelles
    } elseif (in_array($char, $consonnes)) {
        $nbConsonnes++;  // Incrémente le compteur de consonnes
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Exercices PhP</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Consonnes</th>
                <th>Voyelles</th>
            </tr>
        </thead>
        <tbody>

                    <?php echo "<tr><td>" . $nbConsonnes . "</td>"; ?>
                    <?php echo "<td>" . $nbVoyelles . "</td></tr>"; ?>

        </tbody>
    </table>
</body>

</html>