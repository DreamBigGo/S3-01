<?php
if(!session_id()) {
    session_start();
}

require_once __DIR__ . '/../../../../../vendor/autoload.php';

use App\config\BddConnect;
use App\Exceptions\BddConnectException;
use App\Gestion\admin\NouvelleMission\MariaDBNouvelleMissionRepository;
use App\Gestion\admin\NouvelleMission\NouvelleMission;
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
                "Mission ajouté avec succé",
                "success",
                "../../pageGestion/admin.php"
            );
        }
    }
    catch(BddConnectException $e){
        Messages::goHome(
            $e->getMessage(),
            $e->getType(),
            "../../pageGestion/admin.php"
        );
    }
}
else {
    header("Location: index.php");
    exit();
}