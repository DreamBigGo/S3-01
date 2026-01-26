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
 - Nous avons utilisé une base de données en local sur phpStorm, pour que le backend fonctionne correctement il faut créer dans le dossier “app” un dossier “config” et mettre dedans un fichier “BddConnect.php”
 - Dans le projet, vous trouverez un dossier nommé "prerequisTest". Dedans, vous trouverez un fichier texte nommé "FichierBddConnect". Il correspond au fichier “BddConnect.php”, toujours dans "prerequisTest", vous trouverez le fichier "CreationBD.sql" qui correspond au code SQL de la base de données. Enfin, il y a le fichier "DonneeDeTest", dedans, vous trouverez des données pour remplir la base de données afin de pouvoir tester les fonctionnalités.

Démonstration :

 - Cette vidéo présente le contexte, les fonctionnalités principales et une démonstration rapide du projet.

[![Vidéo de présentation](https://img.youtube.com/vi/zpHX7cMLyY8/0.jpg)](https://youtu.be/zpHX7cMLyY8)



