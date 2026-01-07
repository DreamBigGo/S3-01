<?php

session_start();
require_once __DIR__ . '/../../../../vendor/autoload.php';

use App\config\BddConnect;
use App\Gestion\NouveauMembre\MariaDBNouveauMembreRepository;
use App\Messages;
use \App\Exceptions\BddConnectException;

try{
    if (isset($_GET['id'])) {
        $bdd = new BddConnect();
        $trousseau = new MariaDBNouveauMembreRepository($bdd->connexion());

        $trousseau->supprimerMembre($_GET['id']);
        Messages::goHome("Membre Supprimer", "success", "../pageGestion/admin.php");
    }
}
catch (BddConnectException $e){
    Messages::goHome($e->getMessage(), $e->getType(), "../pageGestion/admin.php");
}

header("Location: ../pageGestion/admin.php");
exit();