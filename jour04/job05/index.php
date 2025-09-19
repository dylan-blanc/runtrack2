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
        $prenom = isset($_POST['user_surrname']) ? $_POST['user_surrname'] : '';  // check si la valeur existe
        $nom = isset($_POST['user_name']) ? $_POST['user_name'] : '';  // check si la valeur existe
        echo "Bonjour $prenom $nom"; // affiche "Bonjour" et le prenom et nom si elles existent
        ?> aujourd'hui nous sommes le <?php echo $date->format('d/m/Y H:i:s'); ?> et le nombre d’argument POST envoyé est : <?php echo count($_POST); ?>
    </p>

    <div class="formulaire">
        <form action="" method="post">
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
                    <input type="name" id="name" name="user_name" />
                </li>
                <li>
                    <label for="surrname">Prenom</label>
                    <input type="surrname" id="surrname" name="user_surrname" />
                </li>
                <li>
                    <label for="username_inscription">Nom d'utilisateur</label>
                    <input type="username" id="username_inscription" name="identifiant" />
                </li>
                <li>
                    <label for="password_inscription">Mot de Passe</label>
                    <input type="password" id="password_inscription" name="password" />
                </li>
                <!-- <li>
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
                <td> <?php echo $prenom = isset($_POST['user_surrname']) ? $_POST['user_surrname'] : $prenom; ?> </td>
            </tr>
        </tbody>
        <tbody>

            <td> <?php echo "Nom"; ?> </td>
            <td> <?php echo $nom = isset($_POST['user_name']) ? $_POST['user_name'] : $nom; ?> </td>
        </tbody>
    </table>

    <form method="post">
        <input type="username" name="username" placeholder="Nom d'utilisateur">
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Se connecter</button>
    </form>
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {  // check si les valeurs existent, les affecte a des variables
        $username = $_POST['username'];  // $username = $_Post['username']; affecte la valeur du formulaire à $username
        $password = $_POST['password']; // $password = $_Post['password']; affecte la valeur du formulaire à $password
    }
    if (isset($username) && $username === "John" && $password === "Rambo") { // $username === "John" , si le nom d'utilisateur est John et le mot de passe Rambo, alors =
        echo 'C’est pas ma guerre';
    }
    if (isset($username) && $username !== "John" && $password !== "Rambo") { // $username !== "John" , si le nom d'utilisateur n'est pas John et le mot de passe n'est pas Rambo, alors =
        echo 'Votre pire cauchemar';
    }

    ?>

</body>

</html>