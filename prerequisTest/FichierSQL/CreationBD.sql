CREATE TABLE PAYS (
                      id INT UNSIGNED NOT NULL AUTO_INCREMENT,
                      code INT(3) NOT NULL,
                      alpha2 VARCHAR(2) NOT NULL,
                      alpha3 VARCHAR(3) NOT NULL,
                      nom_en_gb VARCHAR(45) NOT NULL,
                      nom_fr_fr VARCHAR(45) NOT NULL,
                      PRIMARY KEY (id),
                      UNIQUE KEY alpha2 (alpha2),
                      UNIQUE KEY alpha3 (alpha3),
                      UNIQUE KEY code_unique (code)
);


CREATE TABLE LIEU(
                     IdDep INT AUTO_INCREMENT PRIMARY KEY,
                     NumRue INT,
                     Rue VARCHAR(200),
                     PAYS int unsigned NOT NULL,
                     CONSTRAINT FK_PAYS FOREIGN KEY(PAYS) REFERENCES PAYS(id)
);


CREATE TABLE MISSION(
                        IdMission INT AUTO_INCREMENT PRIMARY KEY,
                        Description VARCHAR(200),
                        DateDebut DATE,
                        DateFin DATE,
                        Budget FLOAT,
                        Dep INT
);


CREATE TABLE MEMBRE(
                       IdMembre INT AUTO_INCREMENT PRIMARY KEY,
                       Coordonné VARCHAR(200),
                       Disponibilité DATE,
                       Role VARCHAR(200),
                       email VARCHAR(200),
                       mdp VARCHAR(200)
);


CREATE TABLE RAPPORT(
                        IdRapport INT AUTO_INCREMENT PRIMARY KEY,
                        Affiche VARCHAR(200),
                        CompteRendu VARCHAR(200)
);