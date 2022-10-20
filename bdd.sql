CREATE TABLE eleve
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(255),
    password VARCHAR(255)
)

    INSERT INTO eleve (nom, prenom, email, password) value ('Yonathan', 'Cardoso', 'yonathancardoso@ecole.fr', 'azerty123');
INSERT INTO eleve (nom, prenom, email, password) value ('Anaia', 'Dadoun', 'AnaiaDadoun@ecole.fr', 'azerty456');
INSERT INTO eleve (nom, prenom, email, password) value ('Noa', 'Sillam', 'NoaSillam@ecole.fr', 'azerty789');
INSERT INTO eleve (nom, prenom, email, password) value ('Orel', 'Abecassis', 'OrelAbecassis@ecole.fr', 'azerty101112');