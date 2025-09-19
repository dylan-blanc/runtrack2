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
        $prenom = isset($_GET['user_surrname']) ? $_GET['user_surrname'] : '';  // check si la valeur existe
        $nom = isset($_GET['user_name']) ? $_GET['user_name'] : '';  // check si la valeur existe
        echo "Bonjour $prenom $nom"; // affiche "Bonjour" et le prenom et nom si elles existent
        ?> aujourd'hui nous sommes le <?php echo $date->format('d/m/Y H:i:s'); ?> et le nombre d’argument GET envoyé est : <?php echo count($_GET); ?>
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

    <table border="1">
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo "Prenom"; ?> </td>
                <td> <?php echo $prenom = isset($_GET['user_surrname']) ? $_GET['user_surrname'] : $prenom; ?> </td> <!--  recupère et affiche le prenoms, n'affiche rien si cela n'existe pas -->
            </tr>
        </tbody>
        <tbody>

            <td> <?php echo "Nom"; ?> </td>
            <td> <?php echo $nom = isset($_GET['user_name']) ? $_GET['user_name'] : $nom; ?> </td> <!--  recupère et affiche le nom, n'affiche rien si cela n'existe pas -->
        </tbody>
    </table>

</body>

</html>