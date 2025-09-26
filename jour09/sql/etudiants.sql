CREATE TABLE etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(255),
    nom VARCHAR(255),
    naissance DATE,
    sexe VARCHAR(25),
    email VARCHAR(255)
);

INSERT INTO etudiants (prenom, nom, naissance, sexe, email) VALUES
('Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
('Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
('Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
('Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
('Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
('Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
('Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');