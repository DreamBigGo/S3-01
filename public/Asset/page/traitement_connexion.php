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

            $role = $_SESSION['user_role'] ?? '';

            if($role === 'Admin') {
                $destination = "pageGestion/admin.php";
            }
            elseif ($role === 'Benevole') {
                $destination = "pageGestion/benevole.php";
            }
            elseif ($role === 'Adherent') {
                $destination = "pageGestion/adherent.php";
            }
            else{
                $destination = "pageGestion/connexion.php";
            }
            Messages::goHome("Connexion Réussie", "success", $destination);

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

function VerificationConnexion(string $roleAttendu): void {
    if (!isset($_SESSION['user_id'])) {
        Messages::goHome("Vous n'êtes pas autorisé a accéder a cette page !", "danger", "index.php");
        exit();
    }
    if ($_SESSION['user_role'] !== $roleAttendu) {
        Messages::goHome("Vous n'êtes pas autorisé a accéder a cette page !", "danger", "index.php");
        exit();
    }
}