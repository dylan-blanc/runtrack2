CREATE TABLE etage (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    numero INT,
    superficie INT
);

INSERT INTO etage (id, nom, numero, superficie) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);