<?php
// JOB03 : Afficher tous les étudiants
$affichertouslesetudiants = "SELECT * FROM etudiants";

// JOB04 : Afficher le nom et la capacité de toutes les salles
$affichernomcapacitesalles = "SELECT nom, capacite FROM salles";

// JOB05 : Afficher le prénom, nom et date de naissance des étudiantes
$afficheretudiantes = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";

// JOB06 : Afficher les étudiants dont le prénom commence par 'T'
$afficheretudiantspreT = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";

// JOB07 : Afficher les étudiants nés avant 2007 et ceux ayant plus de 18 ans
$afficheretudiantsavant2007 = "SELECT * FROM etudiants WHERE naissance < '2007-01-01'";
$afficheretudiantsplus18ans = "SELECT * FROM etudiants WHERE naissance < DATE_SUB(CURDATE(), INTERVAL 18 YEAR)";

// JOB08 : Afficher le nombre total d'étudiants
$affichernombreetudiants = "SELECT COUNT(*) AS total_etudiants FROM etudiants";

// JOB09 : Afficher les étudiants nés après 2007 et ceux ayant moins de 18 ans
$afficheretudiantsapres2007 = "SELECT * FROM etudiants WHERE naissance > '2007-01-01'";
$afficheretudiantsmoins18ans = "SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)";

// JOB10 : Afficher la superficie totale des étages
$affichersuperficietotaletages = "SELECT SUM(superficie) AS superficie_total FROM etage";

// JOB11 : Afficher la capacité totale des salles
$affichercapacitetotalesalles = "SELECT SUM(capacite) AS capacite_total FROM salles";

// JOB12 : Afficher les salles triées par capacité décroissante
$affichersallescapacitedesc = "SELECT * FROM salles ORDER BY capacite DESC";
$affichersallescapacitedasc = "SELECT * FROM salles ORDER BY capacite ASC";

// JOB13 : Afficher la capacité moyenne des salles
$affichercapacitemoyennesalles = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";

// JOB14 : Afficher les étudiants nés entre 1998 et 2018
$afficheretudiants1998_2018 = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance > '1998-01-01' AND naissance < '2018-01-01'";

// JOB15 : Afficher le nom des salles et leur étage
$affichersallesetages = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles JOIN etage ON salles.id_etage = etage.id";

// JOB16 : Afficher la plus grande salle et son étage
$afficherplusgrandesalleetage = "SELECT etage.nom AS nom_etage, salles.nom AS `Biggest Room`, salles.capacite FROM salles JOIN etage ON salles.id_etage = etage.id ORDER BY salles.capacite DESC LIMIT 1";


// A
// <-----------------------   JOUR10  ----------------------->
// B

// $result = $pdo->query($affichertouslesetudiants);

$Nomdessalles = "SELECT nom FROM salles";
$jecomprendpaslaconsigne = "capacite total des salles tout etage confondus";
$jecomprendpaslaconsigne2bis = "capacite moyenne des salles tout etage confondus";