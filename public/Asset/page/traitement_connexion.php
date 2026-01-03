<?php

if(!session_id()) {
    session_start();
}

require_once __DIR__ . '/../../../vendor/autoload.php';

use App\config\BddConnect;
use App\connexion\MariaDBUserRepository;
use App\connexion\Authentification;
use App\Exceptions\AuthentificationException;
use App\Exceptions\BddConnectException;
use App\Messages;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $bdd = new BddConnect();
        $pdo = $bdd->connexion();

        $trousseau = new MariaDBUserRepository($pdo);
        $auth = new Authentification($trousseau);

        try {
            if(empty($_POST['email']) || empty($_POST['password'])) {
                throw new AuthentificationException("Tous les champs sont obligatoire");
            }

            $auth->login($_POST['email'], $_POST['password']);

            Messages::goHome("Connexion Réussi", "success", "admin.php");

        } catch(AuthentificationException $e) {
            Messages::goHome($e->getMessage(), $e->getType(), "connexion.php");
        }
    }
    catch (BddConnectException $e) {
        Messages::goHome($e->getMessage(), $e->getType(), "connexion.php");
    }
}
else {
    header("Location: index.php");
    exit();
}