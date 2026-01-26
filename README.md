Projet Pédagogique IUT de Paris-Rives de Seine 2025-2026, refonte du site de l'association AgirABCD avec un frontend développé en HTML, CSS et JavaScript, un backend développé en PHP et SQL et avec une base de données MariaDB

Projet réalisé par :
 - Johann Tixier (https://github.com/joh4nn0)
 - Tiago Pereira de Barros (https://github.com/Tiago-pereira-de-barros)
 - Satyam Peshwa (https://github.com/DreamBigGo)

Objectif de la refonte : 
 - Modernisé le site
 - amélioration de l'accessibilité du site
 - Ajout de fonctionnalité
 - Amélioration de la sécurité du site

Fonctionnalité développée :
 - Frontend :
    - Modernisation de l'interface : Refonte visuelle complète avec une charte graphique professionnelle et une mise en page aérée.
    - Navigation Intuitive : Menu structuré facilitant l'accès aux informations sur les délégations territoriales et les actions nationales/internationales.
    - Formulaires Interactifs : Système de contact avec validation des champs en temps réel pour améliorer l'expérience utilisateur.
      
 - Backend :
    - Espace Administration : Création d'un tableau de bord (Dashboard) affichant les statistiques globales des membres et des missions.
    - Gestion des membres et missions : Interfaces dédiées à l'ajout, la consultation et la suppression des membres et des missions humanitaires.
    - Système d'Authentification : Gestion des sessions sécurisées permettant de restreindre l'accès aux pages sensibles selon le rôle de l'utilisateur.
    - Communication avec la BDD : Utilisation de l'interface PDO pour une gestion fluide et sécurisée des données stockées sous MariaDB.

 - Sécurité :
    - Hachage des données : Sécurisation des mots de passe administrateurs via un l'algorithme.
    - Protection contre les attaques : Neutralisation des injections SQL grâce à l'utilisation systématique de requêtes préparées.
    - Contrôle d'accès : Vérification automatique des droits avant chaque accès à une page de gestion pour prévenir les intrusions.
    - Exception : Utilisation d'exception pour gérer correctement les erreurs.

Technologies utilisées :
 - PHP 8 (Programmation Orientée Objet)
 - MariaDB (Base de données)
 - HTML5 / CSS3 (Design responsive et moderne)
 - JavaScript (Interactivité du site)
 - Composer (Gestion de l'autoloader)

Remarques :
 - Projet réalisé dans un cadre pédagogique (IUT).
 - Utilisation d'une base de données en local sur PHPStrom.
 - Objectif principal : mise en place d'un projet web complet, consolidation des connaissances en frontend avec HTML, CSS et JavaScript, et apprentissage du backend avec PHP, et mise en place et interactivité avec une base de données.

Prérequis pour testé le projet :
 - Nous avons utilisé une base de données en local sur phpStorm.
 - Pour que le backend fonctionne correctement il faut créer dans le dossier “app” un dossier “config” et mettre dedans un fichier “BddConnect.php” :
	
  use App\Exceptions\BddConnectException;
  use PDO;
  
  class BddConnect{
     public \PDO $pdo;
     protected ?string $host = "";
     protected ?string $login = "";
     protected ?string $mdp = "";
     protected ?string $dbname = "";
     public function connexion() : \PDO {
         try{
             $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8";
             $this->pdo = new \PDO($dsn, $this->login, $this->mdp);
             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         }
         catch (\PDOException $e){
             throw new BddConnectException(" Erreur de connexion BDD" . $e->getMessage());
         }
         return $this->pdo;
     }
  }
  
  Pour $host, $login, $mdp et $dbname remplissez avec les informations de votre base de données
  
  Code sql de la base de données :
  
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
  
  
  
  
  
  Données de test table Membres : 
  
  INSERT INTO MEMBRE (Coordonné, Disponibilité, Role, email, mdp) VALUES
  ('Julie Mercier - 06 21 43 65 87', '2026-01-18', 'Admin', 'Julie@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Hugo Blanc - 07 32 54 76 98', '2026-01-18', 'Benevole', 'Hugo@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Chloé Guerin - 06 43 65 87 09', '2026-01-18', 'Adherent', 'Chloe@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Mathieu Boyer - 07 54 76 98 10', '2026-01-18', 'Benevole', 'Mathieu@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Manon Garnier - 06 65 87 09 21', '2026-01-18', 'Adherent', 'Manon@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Enzo Chevalier - 07 76 98 10 32', '2026-01-18', 'Benevole', 'Enzo@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Jade Francois - 06 87 09 21 43', '2026-01-18', 'Admin', 'Jade@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Nathan Legrand - 07 98 10 32 54', '2026-01-18', 'Adherent', 'Nathan@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Sarah Fontaine - 06 09 21 43 65', '2026-01-18', 'Benevole', 'Sarah@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Louis Guyot - 07 10 32 54 76', '2026-01-18', 'Adherent', 'Louis@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Inès Aubert - 06 21 32 43 54', '2026-01-18', 'Benevole', 'Ines@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Paul Lemaire - 07 32 43 54 65', '2026-01-18', 'Admin', 'Paul@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Clara Vidal - 06 43 54 65 76', '2026-01-18', 'Adherent', 'Clara@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Alexandre Colin - 07 54 65 76 87', '2026-01-18', 'Benevole', 'Alexandre@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Lola Renard - 06 65 76 87 98', '2026-01-18', 'Adherent', 'Lola@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Gabriel Adam - 07 76 87 98 09', '2026-01-18', 'Benevole', 'Gabriel@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Zoé Lemaitre - 06 87 98 09 10', '2026-01-18', 'Admin', 'Zoe@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Arthur Lacroix - 07 98 09 10 21', '2026-01-18', 'Adherent', 'Arthur@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Eva Masson - 06 09 10 21 32', '2026-01-18', 'Benevole', 'Eva@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm'),
  ('Théo Leclerc - 07 10 21 32 43', '2026-01-18', 'Adherent', 'Theo@agirabcd.fr', '$2y$12$.9wvByRTqnshX9lLKZTECe0oSoKEp2StnEo2OJmxumbVLzyg2X5Zm');
  
  
  Données de test table Mission : 
  
  INSERT INTO MISSION (Description, DateDebut, DateFin, Budget, Dep) VALUES
  ('Aide aux devoirs pour collégiens en difficulté', '2026-02-01', '2026-06-30', 1200.50, 78),
  ('Distribution de repas chauds - Maraude hivernale', '2026-01-20', '2026-03-15', 3500.00, 75),
  ('Atelier initiation informatique pour seniors', '2026-03-10', '2026-04-10', 500.00, 92),
  ('Rénovation d''un local associatif de quartier', '2026-05-01', '2026-05-20', 4200.75, 93),
  ('Organisation d''une brocante solidaire annuelle', '2026-06-12', '2026-06-14', 800.00, 77),
  ('Accompagnement administratif pour demandeurs d''emploi', '2026-02-15', '2026-07-15', 0.00, 91),
  ('Nettoyage des berges de la Seine après crues', '2026-04-05', '2026-04-06', 250.00, 78),
  ('Collecte de vêtements pour enfants défavorisés', '2026-03-01', '2026-03-08', 150.00, 94),
  ('Cours de français langue étrangère (FLE)', '2026-02-01', '2026-12-20', 2100.00, 93),
  ('Visites de courtoisie aux personnes isolées', '2026-01-18', '2026-12-31', 100.00, 95),
  ('Soutien logistique pour festival culturel local', '2026-07-10', '2026-07-15', 5500.00, 13),
  ('Atelier de réparation de vélos communautaire', '2026-04-20', '2026-10-20', 950.00, 69),
  ('Animation lecture en milieu hospitalier', '2026-02-10', '2026-06-10', 300.00, 31),
  ('Protection et recensement de la faune locale', '2026-05-15', '2026-08-15', 1800.00, 33),
  ('Banque alimentaire - Tri des denrées reçues', '2026-01-25', '2026-01-27', 0.00, 59),
  ('Sensibilisation au tri sélectif dans les écoles', '2026-03-20', '2026-06-20', 450.00, 44),
  ('Aide au transport pour personnes à mobilité réduite', '2026-02-01', '2026-08-01', 3200.00, 06),
  ('Aménagement d''un jardin partagé municipal', '2026-03-15', '2026-09-15', 2700.00, 67),
  ('Permanence juridique gratuite pour les familles', '2026-02-05', '2026-12-15', 1200.00, 21),
  ('Préparation de colis de Noël pour sans-abris', '2026-11-01', '2026-12-24', 6000.00, 75);


Démonstration :

[Je n'ai pas encore tourné la vidéo de démonstration]



