<?php

$decalage = 2;

$str = "La Plateforme test de phrase Inutile A b c d E F G H I J K L M N O P Q R S T U V W X Y Z";

function selection($str, $decalage)
{
    if (isset($_GET["fonction"])) {
        switch ($_GET["fonction"]) {
            case "gras":
                return gras($str);
            case "cesar":
                return cesar($str, $decalage);
            case "plateforme":
                return plateforme($str);
            default:
                return $str;
        }
    }
    return $str;
}

function gras($str)
{
    $phrase = explode(' ', $str); // $phrase sépare la phrase en lettre individuel "explode" dont la source est : $str
    foreach ($phrase as &$lettre) {  // parcourt chaque mot de la phrase, le mot actuel devenant $lettre
        if (isset($lettre[0]) && ctype_upper($lettre[0])) {  //verifie si la lettre est une majuscule
            $lettre = '<b>' . $lettre[0] . '</b>' . substr($lettre, 1); // met en gras la $lettre si elle est une majuscule
        }
    }
    // On recompose la phrase depuis $phrase et donc $str
    return implode(' ', $phrase);
}

function cesar($str, $decalage)
{
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        // Décale seulement les lettres
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $base = ctype_upper($char) ? ord('A') : ord('a');
            $result .= chr(($ascii - $base + $decalage) % 26 + $base);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function plateforme ($str)
{
    return str_replace("me", "me_", $str);  // "str_replace" remplace le premier contenu des guillemets par le deuxieme contenu des guillemets dont la source est $str exemple:  str_replace("Test", "test_", $str);
}

echo selection($str, $decalage);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
    <link href="<?= $style; ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <h1>o/</h1>
        <p> 
            <br> 
        </p>
    </header>

    <div class="formulaire">
        <form action="" method="get">
            <ul>
                <!-- <li>
                    <label for="gender">Sexe</label>
                    <select id="gender" name="user_gender">
                        <option value="Choice">Choisir</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </li> -->

                <li>
                    <label for="style">Style</label>
                    <select class="dropdown" id="fonction" name="fonction" size="<?= (isset($_GET['style']) && $_GET['style'] === 'style3') ? 4 : null; ?>"> <!-- si style3 est sélectionné, afficher 4 options sinon l'affichage de base -->
                        <option class="option0" value="gras">Gras</option>
                        <option class="option1" value="cesar">Cesar</option>
                        <option class="option2" value="plateforme">Plateforme</option>
                    </select>
                </li>
                <!-- <li>
                    <label for="surrname">Prenom</label>
                    <input type="text" id="surrname" name="user_surrname" />
                </li> -->
                <!-- <li>
                    <label for="mail">E-mail</label>
                    <input type="email" id="mail" name="user_mail" />
                </li>
                <li>
                    <label for="Phone">Téléphone</label>
                    <input type="Phone" id="Phone" name="user_Phone" />
                </li>
                <li>
                    <label for="msg">Message</label>
                    <textarea id="msg" name="user_message"></textarea>
                </li> -->
            </ul>
            <div>
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>

    <footer>


    </footer>


</body>


</html>