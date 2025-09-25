<?php
session_start();

if (!isset($_SESSION['compteur'])) {
    $_SESSION['compteur'] = 1;
} else {
    $_SESSION['compteur']++;
}

if (!isset($_SESSION['prenom'])) {
    $_SESSION['prenom'] = [];
}

// Ajouter un prénom si le formulaire est soumis
if (!empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}

echo "Nombre de visites : " . $_SESSION['compteur'];

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
        <form action="" method="post" style="display: inline;" border="1">
            <button type="button" onclick="location.reload();">Refresh</button>
            <button type="submit" name="reset" value="reset">Reset</button>
        </form>
        <br>
        <form action="index.php" method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" value="Envoyer">
        </form>
    </div>

    <section>
        <h2>Liste</h2>
        <ul>
            <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
                <li><?= $prenom ?></li>
            <?php endforeach; ?>
        </ul>
    </section>


    <footer>




    </footer>


</body>

<?php

if (isset($_POST['reset'])) {
    $_SESSION['compteur'] = 0;
    $_SESSION['prenoms'] = [];
}


echo session_save_path();

?>

</html>