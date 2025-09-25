<?php
session_start();

// impossible de call le nombre de visites via juste les $_COOKIE ??
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

setcookie('nbvisites', $nbvisites, time() + 3600 * 24, "job02");


if (isset($_POST['reset'])) {
    setcookie('nbvisites', '', time() - 3600, "job02");
    $nbvisites = 0;
}

// Affichage du nombre de visites
echo "Nombre de visites : " . $nbvisites;


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
    <link href="<?= NULL; ?>" rel="stylesheet">
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
            <button type="submit" name="reset" value="reset">Reset</button>
            <button type="button" onclick="location.reload();">Refresh</button>
        </form>
    </div>


    <footer>




    </footer>


</body>

<?php

echo session_save_path();

?>

</html>