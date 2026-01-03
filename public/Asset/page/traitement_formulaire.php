<?php

if(!session_id()) {
    session_start();
}

require_once __DIR__ . '/../../../vendor/autoload.php';

use App\config\BddConnect;
use App\Contact;
use App\MariaDBContactRepository;
use App\Exceptions\BddConnectException;
use App\Messages;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $bdd = new BddConnect();
        $pdo = $bdd->connexion();

        $trousseau = new MariaDBContactRepository($pdo);

        $nouveauMessage = new Contact(
            null,
            $_POST['nom'] ?? '',
            $_POST['prenom'] ?? '',
            $_POST['societe'] ?? '',
            $_POST['adresse'] ?? '',
            $_POST['cp'] ?? '',
            $_POST['ville'] ?? '',
            $_POST['telephone'] ?? '',
            $_POST['email'] ?? '',
            $_POST['objet'] ?? '',
            $_POST['message'] ?? ''
        );

        if ($trousseau->save($nouveauMessage)) {
            Messages::goHome(
                "Votre message a bien été envoyé.",
                "success",
                "index.php"
            );
        }

    } catch (BddConnectException $e) {
        Messages::goHome(
            $e->getMessage(),
            $e->getType(),
            "soliciter.php"
        );
    }
} else {
    header("Location: index.php");
    exit();
}