
-- 1. Afficher tous les avions
SELECT * FROM avions;

-- 2. Afficher uniquement les colonnes modele et constructeur
SELECT modele, constructeur FROM avions;

-- 3. Afficher les avions ayant une capacité supérieure à 300
SELECT * FROM avions WHERE capacite > 300;

-- 4. Afficher les avions dont l’autonomie est inférieure à 7000 km
SELECT * FROM avions WHERE autonomie_km < 7000;

-- 5. Afficher les avions qui ne sont plus en service
SELECT * FROM avions WHERE en_service = 0;

-- 6. Afficher les avions dont le constructeur est Boeing
SELECT * FROM avions WHERE constructeur = 'Boeing';

-- 7. Afficher les avions dont la capacité est comprise entre 100 et 300 inclus
SELECT * FROM avions WHERE capacite BETWEEN 100 AND 300;

-- 8. Afficher tous les constructeurs sans doublons
SELECT DISTINCT constructeur FROM avions;

-- 9. Afficher tous les avions triés par autonomie (du plus faible au plus grand)
SELECT * FROM avions ORDER BY autonomie_km ASC;

-- 10. Afficher les avions triés par capacité décroissante
SELECT * FROM avions ORDER BY capacite DESC;

-- 11. Afficher les 3 avions ayant la plus grande autonomie
SELECT * FROM avions ORDER BY autonomie_km DESC LIMIT 3;

-- 12. Afficher les 5 avions avec la plus faible capacité
SELECT * FROM avions ORDER BY capacite ASC LIMIT 5;

-- 13. Afficher les avions dont l’autonomie est entre 6000 et 13000 km
SELECT * FROM avions WHERE autonomie_km BETWEEN 6000 AND 13000;

-- 1. Afficher tous les avions
SELECT * FROM avions;

-- 2. Afficher uniquement les colonnes modele et constructeur
SELECT modele, constructeur FROM avions;

-- 3. Afficher les avions ayant une capacité supérieure à 300
SELECT * FROM avions WHERE capacite > 300;

-- 4. Afficher les avions dont l’autonomie est inférieure à 7000 km
SELECT * FROM avions WHERE autonomie_km < 7000;

-- 5. Afficher les avions qui ne sont plus en service
SELECT * FROM avions WHERE en_service = 0;

-- 6. Afficher les avions dont le constructeur est Boeing
SELECT * FROM avions WHERE constructeur = 'Boeing';

-- 7. Afficher les avions dont la capacité est comprise entre 100 et 300 inclus
SELECT * FROM avions WHERE capacite BETWEEN 100 AND 300;

-- 8. Afficher tous les constructeurs sans doublons
SELECT DISTINCT constructeur FROM avions;

-- 9. Afficher tous les avions triés par autonomie (du plus faible au plus grand)
SELECT * FROM avions ORDER BY autonomie_km ASC;

-- 10. Afficher les avions triés par capacité décroissante
SELECT * FROM avions ORDER BY capacite DESC;

-- 11. Afficher les 3 avions ayant la plus grande autonomie
SELECT * FROM avions ORDER BY autonomie_km DESC LIMIT 3;

-- 12. Afficher les 5 avions avec la plus faible capacité
SELECT * FROM avions ORDER BY capacite ASC LIMIT 5;

-- 13. Afficher les avions dont l’autonomie est entre 6000 et 13000 km
SELECT * FROM avions WHERE autonomie_km BETWEEN 6000 AND 13000;

-- JOB03 : Afficher tous les étudiants
USE `jour09`;
SELECT * FROM etudiants;

-- JOB04 : Afficher le nom et la capacité de toutes les salles
USE `jour09`;
SELECT nom, capacite FROM salles;

-- JOB05 : Afficher le prénom, nom et date de naissance des étudiantes
USE `jour09`;
SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme';

-- JOB06 : Afficher les étudiants dont le prénom commence par 'T'
USE `jour09`;
SELECT * FROM etudiants WHERE prenom LIKE 'T%';

-- JOB07 : Afficher les étudiants nés avant 2007 et ceux ayant plus de 18 ans
USE `jour09`;
SELECT * FROM etudiants WHERE naissance < '2007-01-01';
USE `jour09`;
SELECT * FROM etudiants WHERE naissance < DATE_SUB(CURDATE(), INTERVAL 18 YEAR);

-- JOB08 : Afficher le nombre total d'étudiants
USE `jour09`;
SELECT COUNT(*) AS total_etudiants FROM etudiants;

-- JOB09 : Afficher les étudiants nés après 2007 et ceux ayant moins de 18 ans
USE `jour09`;
SELECT * FROM etudiants WHERE naissance > '2007-01-01';
USE `jour09`;
SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR);

-- JOB10 : Afficher la superficie totale des étages
USE `jour09`;
SELECT SUM(superficie) AS superficie_total FROM etage;

-- JOB11 : Afficher la capacité totale des salles
USE `jour09`;
SELECT SUM(capacite) AS capacite_total FROM salles;

-- JOB12 : Afficher les salles triées par capacité décroissante
USE `jour09`;
SELECT * FROM salles ORDER BY capacite DESC;

-- JOB13 : Afficher la capacité moyenne des salles
USE `jour09`;
SELECT AVG(capacite) AS capacite_moyenne FROM salles;

-- JOB14 : Afficher les étudiants nés entre 1998 et 2018
USE `jour09`;
SELECT prenom, nom, naissance FROM etudiants WHERE naissance > '1998-01-01' AND naissance < '2018-01-01';

-- JOB15 : Afficher le nom des salles et leur étage
USE `jour09`;
SELECT salles.nom AS nom_salle, etage.nom AS nom_etage
FROM salles
JOIN etage ON salles.id_etage = etage.id;

-- JOB16 : Afficher la plus grande salle et son étage
USE `jour09`;
SELECT 
    etage.nom AS nom_etage,
    salles.nom AS `Biggest Room`,
    salles.capacite
FROM salles
JOIN etage ON salles.id_etage = etage.id
ORDER BY salles.capacite DESC
LIMIT 1;