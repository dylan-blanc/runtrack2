USE `jour09`;
SELECT * FROM etudiants WHERE naissance < '2007-01-01';

USE `jour09`;
SELECT * FROM etudiants WHERE naissance < DATE_SUB(CURDATE(), INTERVAL 18 YEAR);