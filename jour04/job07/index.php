<head>
    <meta charset="utf-8" />
    <title>blabla</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>o/</h1>
    <p>
    </p>

    <div class="formulaire">
        <form action="" method="get">
            <ul>
                <li>
                    <label for="hauteur">Hauteur</label>
                    <input type="text" id="hauteur" name="hauteur" />
                </li>
                <li>
                    <label for="largeur">Largeur</label>
                    <input type="text" id="largeur" name="largeur" />
                </li>
            </ul>
            <div>
                <button type="submit">Envoyer </button>
            </div>
        </form>
    </div>

    <?php

    echo "<pre>";
    $l =  $_GET['largeur'] ?? 0; // $l = largeur via le formulaire
    $h =  $_GET['hauteur'] ?? 0;  // $h = hauteur via le formulaire

    if ($l > 1 && $h > 0) { // la largeur a un minimum de 2 et la hauteur un minimum de 0
        $roof = max(1, intdiv($l, 2)); // centre le haut de la maison, largeur divisé par 2 arrondi au supérieur, 2 ligne de haut
        for ($i = 0; $i < $roof; $i += 1) { // commence à 0 (premiere ligne), tant que i < roof, incrémente i de 1 jusqu'ça ce que i = roof
            echo str_repeat(' ', $roof - $i - 1) . '/' . str_repeat('_', $i * 2) . "\\\n";  // repete les espaces jusqu'au centre puis ajoute /, repete _ par "i" multiplier par 2 fois puis ajoute \ pour faire le haut de la maison, ajoute une nouvelle ligne jusqu'à atteindre la hauteur
        }
        echo str_repeat('|' . str_repeat(' ', $l - 2) . "|\n", $h);  // repete | puis espace et enfin | par le nombre de largeur -2 (pour les |) et ajoute une nouvelle ligne jusqu'à la hauteur
        echo str_repeat('-', $l) . '</pre>'; // en tout dernier, apres la boucle, repete - par le nombre de $largeur
    }
    echo "</pre>";

    
    ?>


</body>

</html>