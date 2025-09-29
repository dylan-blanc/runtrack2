<?php
require_once __DIR__ . "/../librarieDB.php";



try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<span style='margin-left: 45%;'>Connexion PDO réussie !</span><br><br>";
} catch (PDOException $e) {
    echo "Erreur lors de la connexion ";
}

// . $e->getMessage();

$stmt = $pdo->query($affichersallescapacitedasc);


echo "<table border='1' width='50%' style='margin-left: 25%; margin-top: 5%; text-align: center;'>";
echo "<tr><th>Nom</th><th>Capacité</th></tr>";

while (($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['capacite'] . "</td>";
    echo "</tr>";
}
