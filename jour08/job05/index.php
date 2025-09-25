<?php
session_start();

// Ajout de la sélection manuelle du joueur
if (isset($_POST['select_player'])) {
    $player_id = intval($_POST['player_id']);
    setcookie('player_id', $player_id, time() + 3600, '/');
    header("Location: index.php");
    exit;
}

// Attribution du joueur via cookie
if (!isset($_COOKIE['player_id'])) {
    // Affiche le formulaire de sélection de joueur
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>blabla</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h2>C'est Full AI je voulais juste voir le code</h2>
        <form method="post">
            <input type="hidden" name="player_id" value="1">
            <button type="submit" name="select_player" value="1">
                Joueur 1 (Croix X)
            </button>
        </form>
        <form method="post">
            <input type="hidden" name="player_id" value="2">
            <button type="submit" name="select_player" value="2">
                Joueur 2 (Rond O)
            </button>
        </form>
    </body>

    </html>
<?php
    exit;
} else {
    $player_id = $_COOKIE['player_id'];
}

// Initialisation des cases et du tour
if (!isset($_SESSION['cases'])) {
    $_SESSION['cases'] = array_fill_keys([
        '1_1',
        '1_2',
        '1_3',
        '2_1',
        '2_2',
        '2_3',
        '3_1',
        '3_2',
        '3_3'
    ], null);
    $_SESSION['tour'] = 1; // 1 = joueur X, 2 = joueur O
}

// Gestion du clic sur une case
foreach ($_SESSION['cases'] as $key => $val) {
    if (isset($_POST[$key]) && $val === null && $_SESSION['tour'] == $player_id) {
        $_SESSION['cases'][$key] = ($player_id == 1) ? 'cross' : 'circle';
        $_SESSION['tour'] = ($_SESSION['tour'] == 1) ? 2 : 1;
    }
}

// Pour reset
if (isset($_POST['reset'])) {
    session_destroy();
    setcookie('player_id', '', time() - 3600, '/');
    header("Location: index.php");
    exit;
}

if (isset($_POST['change_player'])) {
    setcookie('player_id', '', time() - 3600, '/');
    header("Location: index.php");
    exit;
}

$cases = $_SESSION['cases'];
$tour = $_SESSION['tour'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <p>
        Vous êtes le joueur <strong><?= $player_id ?></strong>
        (<?= $player_id == 1 ? 'Croix (X)' : 'Rond (O)' ?>).
        <?= ($tour == $player_id) ? "C'est votre tour !" : "En attente de l'autre joueur..." ?>
    </p>
    <form method="post" style="margin-bottom:20px;">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
    <form method="post" style="margin-bottom:20px;">
        <button type="submit" name="change_player">Changer de joueur</button>
    </form>
    <table border="1" style="border-collapse: collapse; width: 300px; height: 300px; text-align: center; font-size: 6em;">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <tr>
                <?php for ($j = 1; $j <= 3; $j++):
                    $name = "{$i}_{$j}";
                ?>
                    <td style="width: 100px; height: 100px; text-align: center; vertical-align: middle;">
                        <form method="post" style="margin:0;">
                            <input type="hidden" name="player_id" value="<?= $player_id ?>">
                            <?php if ($cases[$name] === null && $tour == $player_id): ?>
                                <?php if ($player_id == 1): // Joueur X 
                                ?>
                                    <button type="submit" name="<?= $name ?>" style="width:100%;height:100%;background:none;border:none;cursor:pointer;">
                                        <i class="fa-solid fa-xmark" style="font-size: 0.9em; color: #bbb;"></i>
                                    </button>
                                <?php else: // Joueur O 
                                ?>
                                    <button type="submit" name="<?= $name ?>" style="width:100%;height:100%;background:none;border:none;cursor:pointer;">
                                        <i class="fa-regular fa-circle" style="font-size: 0.9em; color: #bbb;"></i>
                                    </button>
                                <?php endif; ?>
                            <?php elseif ($cases[$name] === 'circle'): ?>
                                <i class="fa-regular fa-circle" style="font-size: 0.9em; color: #3498db;"></i>
                            <?php elseif ($cases[$name] === 'cross'): ?>
                                <i class="fa-solid fa-xmark" style="font-size: 0.9em; color: #e74c3c;"></i>
                            <?php endif; ?>
                        </form>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>