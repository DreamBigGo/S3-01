<?php
/**
 * Script de test des opérations sur la base de données
 *
 * Ce script démontre les opérations CRUD (Create, Read, Update, Delete)
 * sur une table 'nom' via PDO (PHP Data Objects).
 */

require_once __DIR__ . '/../vendor/autoload.php';

use App\config\BddConnect;

// Initialise la connexion à la base de données
$bdd=new BddConnect();
$pdo = $bdd->connexion();

/**
 * Affiche le contenu complet de la table 'nom'
 *
 * @param PDO $pdo Objet de connexion PDO
 * @return void
 */
function showTable($pdo): void
{
    // Recupere tous les enregistrements de la table 'nom'
    $sql=$pdo->query('SELECT * FROM nom');
    // Parcourt chaque ligne et affiche l'id et le nom separes par une tabulation
    foreach ($sql as $row){
        print $row['id']."\t";
        print $row["nom"]."\n";
    }
}

/**
 * Supprime tous les enregistrements de la table 'nom'
 *
 * @param PDO $pdo Objet de connexion PDO
 * @return void
 */
function deleteLigne($pdo): void
{
    $pdo->exec('DELETE FROM nom');
}

/**
 * Insère deux enregistrements dans la table 'nom'
 * - id=3, nom="GERARD"
 * - id=10, nom="DUPONT"
 *
 * @param PDO $pdo Objet de connexion PDO
 * @return void
 */
function ajouteLigne($pdo): void
{
    $pdo->exec('INSERT INTO nom(id,nom) values(3,"GERARD")');
    $pdo->exec('INSERT INTO nom(id,nom) values(10,"DUPONT")');
}

/**
 * Met à jour l'enregistrement avec id=3
 * Change le champ 'nom' à "JEAN"
 *
 * @param PDO $pdo Objet de connexion PDO
 * @return void
 */
function modifLigne($pdo): void
{
    $pdo->exec('UPDATE nom SET nom="JEAN" WHERE id=3');
}

// Exécution : appeler la fonction que vous voulez
modifLigne($pdo);
showTable($pdo);
