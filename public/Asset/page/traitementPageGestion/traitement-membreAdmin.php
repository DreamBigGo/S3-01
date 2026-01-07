<?php
if(!session_id()) {
    session_start();
}

require_once __DIR__ . '/../../../../vendor/autoload.php';

use App\config\BddConnect;
use App\Exceptions\BddConnectException;
use App\Gestion\NouveauMembre\MariaDBNouveauMembreRepository;
use App\Membre;
use App\Messages;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try{
        $bdd = new BddConnect();
        $pdo = $bdd->connexion();

        $trousseau = new MariaDBNouveauMembreRepository($pdo);

        $nouveauMembre = new Membre(
            null,
            $_POST['coordonne'],
            $_POST['email'],
            $_POST['mdp'],
            $_POST['role'],
            $_POST['dispo']
        );

        if ($trousseau->save($nouveauMembre)) {
            Messages::goHome(
                "Membre ajouté avec succé",
                "success",
                "../pageGestion/admin.php"
            );
        }
    }
    catch(BddConnectException $e){
        Messages::goHome(
            $e->getMessage(),
            $e->getType(),
            "../pageGestion/admin.php"
        );
    }
}
else {
    header("Location: index.php");
    exit();
}