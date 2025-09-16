<?php
echo '<pre>'; // pour afficher le texte en mode preformaté (respect des espaces et des sauts de ligne)

$largeur = 20;
$hauteur = 10;

// Affichage du rectangle en utilisant uniquement des caracteres
for ($ligne = 0; $ligne < $hauteur; $ligne += 1) { // commence a 0 (toute premiere ligne) et s'arrete a 9 (10 lignes)
    if ($ligne === 0 || $ligne === $hauteur - 1) { // si on est a la premiere ligne ou $hauteur moins 1 donc 9iem ligne
        echo str_repeat('#', $largeur); // repeter le contenu dans ' ' donc # autant de fois que $larguer soit 20x
    } else {
        echo '1' . str_repeat(' ', $largeur - 2) . '1'; // sinon ecrire 1 au début "echo '1' " puis faire faire un espace et le répéter par le nombre $largeur soit 20fois moins 2 " str_repeat(' ', $largeur - 2) "  puis réecrire " 1 "
    }
    echo "\n"; // aller a la ligne
}

echo "</pre>"; // fin du mode preformaté
?>