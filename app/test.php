<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\config\BddConnect;
use App\Exceptions\BddConnectException;

try {
    $bdd = new BddConnect();
    $pdo = $bdd->connexion();
    echo "Connexion réussie !";

} catch (BddConnectException $e) {
    $type = $e->getType();
    echo "Connexion échouer";
}