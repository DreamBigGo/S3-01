<?php
session_start();
require_once __DIR__ . '/../../../vendor/autoload.php';

use App\config\BddConnect;
use App\connexion\MariaDBUserRepository;
use App\connexion\Membre;

$bdd = new BddConnect();
$pdo = $bdd->connexion();
$trousseau = new MariaDBUserRepository($pdo);

$email = "exemple@agirabcd.fr";
$mdp = "1234";

$mdpHache = password_hash($mdp, PASSWORD_DEFAULT);

$nouveauMembre = new Membre(null, $email, $mdpHache);

if ($trousseau->save($nouveauMembre)) {
    echo "Membre créé avec succès !";
}