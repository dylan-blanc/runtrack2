<!DOCTYPE html>
<html>

<?php
$style = 'style0.css'; // Valeur par défaut

if (isset($_GET['style'])) {
    $choix = $_GET['style'];
    if (in_array($choix, ['style0', 'style1', 'style2', 'style3'])) {
        $style = $choix . '.css';
    }
}


?>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
    <link href="<?php echo $style; ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <h1>o/</h1>
        <p> BLABLABLA, TEST, BLABLABLA
            <br> Test changement de police d'ecriture
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
                    <select class="dropdown" id="style" name="style" size="<?php echo (isset($_GET['style']) && $_GET['style'] === 'style3') ? 4 : null; ?>">
                        <option class="option0" value="style0">Style par défaut</option>
                        <option class="option1" value="style1">Style 1</option>
                        <option class="option2" value="style2">Style 2</option>
                        <option class="option3" value="style3">Style 3</option>
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
                <button type="submit">Envoyer </button>
            </div>
        </form>
    </div>

    <footer>


    </footer>


</body>


</html>