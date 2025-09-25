<?php
session_start();

if (!isset($_SESSION['compteur'])) {
    $_SESSION['compteur'] = 1;
} else {
    $_SESSION['compteur']++;
}

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter un prénom si le formulaire est soumis
if (!empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $_SESSION['prenoms'][] = $prenom;
    setcookie('prenom', $prenom, time() + 3600, "/");
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}

// reset le compteur et supprime le cookie
if (isset($_POST['reset'])) {
    $_SESSION['compteur'] = 0;
    $_SESSION['prenoms'] = [];
    setcookie('prenom', '', time() - 3600, "/");
}

// enleve le formulaire apres envoi
$degage = "";
if (!empty($_POST['prenom']) || isset($_COOKIE['prenom'])) {
    $degage = "display: none;";
}

$plusdegage = "";
if (isset($_POST['prenom']) || isset($_COOKIE['prenom'])) {
    $plusdegage = "display: NULL;";
} else {
    $plusdegage = "display: none;";
}

if (isset($_POST["Deconnexion"])) {
    setcookie('prenom', '', time() - 3600, "/");
    $plusdegage = "display: none;";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
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
        <form action="" method="post" style="<?= $degage ?>">
            <label for="bonjourprenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom">
            <button type="submit" value="Envoyer">Connexion</button>

        </form>
        <form action="" method="post" style="<?= $plusdegage ?>">
            <button type="submit" name="Deconnexion" value="">deco</button>
        </form>

    </div>

    <section>

        <br> <br>

        <?php
        if (isset($_COOKIE['prenom'])) {
            bonjourcookie();
        }
        ?>


    </section>

    <section>
        <article>

        </article>


        <footer>




        </footer>


</body>

<br><br>

<?php




function bonjourcookie()
{
    if (isset($_COOKIE['prenom'])) {
        $prenom = htmlspecialchars($_COOKIE['prenom']);
        echo "Bonjour " . $prenom;
    }
}





echo session_save_path();


?>

</html>