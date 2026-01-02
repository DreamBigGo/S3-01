<?php

/**
 * Ca permet de garder en memoire cote server qui posséde une session precise. (Je pense)
 * Par exemple le type d'utilisateur donc admin ou bénévole par example
 */
if(!session_id()){
    session_start();
}
require_once __DIR__ . '/../vendor/autoload.php';

use App\config\BddConnect;
use App\config\Personne;

//NECESSAIRE POUR MARCHER (Je pense)
if($_SERVER["REQUEST_METHOD"]==="POST"){

    //Connexion a la base de donnnees
$bdd=new BddConnect();
try {
    $pdo = $bdd->connexion();
} catch (\App\Exceptions\BddConnectException $e) {
    echo "BD pas connecter";
}

//Preparation de la requete SQL
$sql='INSERT INTO nom(id,nom) values(:id,:nom)'; // :id et :nom permet de mettre la valeur plus tard
$stmt=$pdo->prepare($sql);

//Une classe pour permettre vite fait de garder en memoire les valeurs envoyer par POST
$personnes=new Personne($_POST["id"],$_POST["nom"]);

//Commence la requete SQL
$stmt->execute([
    "id"=>$personnes->getId(), //ajoute :id par l'ID de getID();
    "nom"=>$personnes->getNom()
]);
} else{
    header("Location:index.php");
    exit();
}
