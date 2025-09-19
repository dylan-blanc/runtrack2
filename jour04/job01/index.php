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
    <?php
    // Initialiser la date AVANT de l'utiliser
    $date = new DateTime();
    $date->modify('+2 hours');
    ?>
    <h1>o/</h1>
    <p>
        <?php
        $prenom = isset($_GET['user_surrname']) ? $_GET['user_surrname'] : ''; // isset verifie si la variable existe, si elle n'existe pas on lui affecte une valeur vide (affiche pas d'erreur "variable n'existe pas) _get recupere les valeurs dans l'url et l'assigne a $prenom
        $nom = isset($_GET['user_name']) ? $_GET['user_name'] : '';
        echo "Bonjour $prenom $nom"; // Affiche le prénom et le nom de $_get (dans l'url, apres avoir rempli le formulaire)
        ?> aujourd'hui nous sommes le <?php echo $date->format('d/m/Y H:i:s'); ?> et le nombre d’argument GET envoyé est : <?php echo count($_GET); ?> <!--  affiche l'heure GMT+2, compte le nombre de $_get et l'affiche  -->
    </p>

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
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="user_name" />
                </li>
                <li>
                    <label for="surrname">Prenom</label>
                    <input type="text" id="surrname" name="user_surrname" />
                </li>
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
</body>

</html>