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
    <h1>o/</h1>
    <p>
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
                    <label for="nombre">Chiffre</label>
                    <input type="text" id="nombre" name="nombre" />
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


    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre']; // Récupère la valeur du champ 'nombre' du formulaire et lui assigne la variable $nombre
        if ($nombre % 2 == 0) {  // nombre divisible par 2
            echo "Le nombre $nombre est pair."; // si divisible par 2 alors ecrire =
        } else {
            echo "Le nombre $nombre est impair."; // si non divisible par 2 alors ecrire =
        }
    }


    ?>


</body>

</html>