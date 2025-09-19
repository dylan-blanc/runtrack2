<?php
$heightRaw = '';
$widthRaw = '';

if (isset($_GET['hauteur'])) {
    $heightRaw = $_GET['hauteur'];
}

if (isset($_GET['largeur'])) {
    $widthRaw = $_GET['largeur'];
}

$heightText = trimSpaces($heightRaw);
$widthText = trimSpaces($widthRaw);
$submitted = isset($_GET['hauteur']) || isset($_GET['largeur']);
$house = '';
$error = '';

if ($submitted) {
    $heightSuccess = false;
    $widthSuccess = false;
    $height = parsePositiveInt($heightText, $heightSuccess);
    $width = parsePositiveInt($widthText, $widthSuccess);

    if ($heightSuccess && $widthSuccess && $height > 0 && $width > 0) {
        $house = buildHouse($width, $height);
    } else {
        $error = 'Veuillez saisir deux entiers positifs.';
    }
}

function stringLength($text)
{
    $length = 0;
    while (isset($text[$length])) {
        $length++;
    }
    return $length;
}

function trimSpaces($text)
{
    $length = stringLength($text);
    $start = 0;

    while ($start < $length && $text[$start] === ' ') {
        $start++;
    }

    $end = $length - 1;

    while ($end >= $start && $text[$end] === ' ') {
        $end--;
    }

    $result = '';
    $index = $start;

    while ($index <= $end) {
        $result .= $text[$index];
        $index++;
    }

    return $result;
}

function parsePositiveInt($text, &$success)
{
    $success = false;
    $length = stringLength($text);

    if ($length === 0) {
        return 0;
    }

    $digits = [
        '0' => 0,
        '1' => 1,
        '2' => 2,
        '3' => 3,
        '4' => 4,
        '5' => 5,
        '6' => 6,
        '7' => 7,
        '8' => 8,
        '9' => 9,
    ];

    $value = 0;
    $index = 0;

    while ($index < $length) {
        $char = $text[$index];

        if (!isset($digits[$char])) {
            return 0;
        }

        $value = $value * 10 + $digits[$char];
        $index++;
    }

    $success = true;
    return $value;
}

function repeatChar($char, $count)
{
    if ($count <= 0) {
        return '';
    }

    $result = '';
    $i = 0;

    while ($i < $count) {
        $result .= $char;
        $i++;
    }

    return $result;
}

function computeRoofHeight($width)
{
    $total = $width + 2;
    $height = 0;

    while ($total > 0) {
        $height++;
        $total -= 2;
    }

    return $height;
}

function buildHouse($width, $height)
{
    $roofHeight = computeRoofHeight($width);
    $result = '';
    $hasLine = false;
    $row = 0;

    while ($row < $roofHeight) {
        $padding = $roofHeight - $row - 1;

        if ($padding < 0) {
            $padding = 0;
        }

        $inner = $row * 2;

        if ($inner > $width) {
            $inner = $width;
        }

        $line = repeatChar(' ', $padding) . '/' . repeatChar('_', $inner) . '\\';

        if ($hasLine) {
            $result .= "\n";
        }

        $result .= $line;
        $hasLine = true;
        $row++;
    }

    $walls = $height - 2;

    if ($walls < 0) {
        $walls = 0;
    }

    $row = 0;

    while ($row < $walls) {
        if ($hasLine) {
            $result .= "\n";
        }

        $result .= '|' . repeatChar(' ', $width) . '|';
        $hasLine = true;
        $row++;
    }

    if ($hasLine) {
        $result .= "\n";
    }

    $result .= '|' . repeatChar('_', $width) . '|';

    return $result;
}

function escapeHtml($text)
{
    $map = [
        '&' => '&amp;',
        '<' => '&lt;',
        '>' => '&gt;',
        '"' => '&quot;',
        "'" => '&#039;',
    ];

    $result = '';
    $index = 0;

    while (isset($text[$index])) {
        $char = $text[$index];

        if (isset($map[$char])) {
            $result .= $map[$char];
        } else {
            $result .= $char;
        }

        $index++;
    }

    return $result;
}
?>
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
                <li>
                    <label for="hauteur">Hauteur</label>
                    <input type="text" id="hauteur" name="hauteur" value="<?= escapeHtml($heightText) ?>" />
                </li>
                <li>
                    <label for="largeur">Largeur</label>
                    <input type="text" id="largeur" name="largeur" value="<?= escapeHtml($widthText) ?>" />
                </li>
            </ul>
            <div>
                <button type="submit">Envoyer </button>
            </div>
        </form>
    </div>

    <?php if ($error !== ''): ?>
        <p class="error"><?= escapeHtml($error) ?></p>
    <?php endif; ?>

    <?php if ($house !== ''): ?>
        <pre><?= escapeHtml($house) ?></pre>
    <?php endif; ?>
</body>

</html>