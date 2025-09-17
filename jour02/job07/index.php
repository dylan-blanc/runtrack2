<?php
echo '<pre>';

$hauteur = 30;

for ($ligne = 0; $ligne < $hauteur; $ligne += 1) { // commence a 0 (toute premiere ligne) et s'arrete a 29 (30 lignes)
    $padding = $hauteur - $ligne - 1; // variable pour centrer le triangle
    echo str_repeat(' ', $padding); // répéter "espace" jusq'à atteindre une autre variable (padding)

    if ($ligne === 0) { // si on est a la première ligne
        echo '/' . '\\';
    } elseif ($ligne === $hauteur - 1) { // si on est a la dernière ligne
        echo '/' . str_repeat('_', $ligne * 2) . '\\'; // répéter "_" autant de fois que la variable (ligne) multipliée par 2
    } else { 
        echo '/' . str_repeat(' ', $ligne * 2) . '\\'; // répéter "espace" autant de fois que la variable (ligne) multipliée par 2
    }

    echo "\n";
}

echo "</pre>";