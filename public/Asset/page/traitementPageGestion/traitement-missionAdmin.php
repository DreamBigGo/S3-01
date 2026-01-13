<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!session_id()) {
    session_start();
}

require_once __DIR__ . '/../../../../vendor/autoload.php';

use App\config\BddConnect;
use App\Exceptions\BddConnectException;
use App\Gestion\NouvelleMission\MariaDBNouvelleMissionRepository;
use App\Gestion\NouvelleMission\NouvelleMission;
use App\Messages;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try{
        $bdd = new BddConnect();
        $pdo = $bdd->connexion();

        $trousseau = new MariaDBNouvelleMissionRepository($pdo);

        $nouvellemission = new NouvelleMission(
            null,
            $_POST['description'],
            $_POST['date_debut'],
            $_POST['date_fin'],
            $_POST['budget'],
            $_POST['dep']
        );

        if ($trousseau->save($nouvellemission)) {
            Messages::goHome(
                "Mission ajouté avec succés",
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