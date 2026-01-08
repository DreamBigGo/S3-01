<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Asset/css/style.css">
    <title> AgirAbcd </title>
</head>
<body>

<?php
if(!session_id()){
    session_start();
}

// Récupère le nom du fichier actuel pour l'active
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="menu">
    <!-- Logo -->
    <img class="logo" src="/Asset/img/Logo_de_lorganisation_AGIRabcd.png" alt="Logo Agirabcd">

    <!-- Liens du menu -->
    <a href="/index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Accueil</a>
    <a href="/Asset/page/quisommenous.php" class="<?= ($currentPage == 'quisommenous.php') ? 'active' : '' ?>">Qui sommes-nous</a>
    <a href="/Asset/page/actionfrance.php" class="<?= ($currentPage == 'actionfrance.php') ? 'active' : '' ?>">Action France</a>
    <a href="/Asset/page/actionint.php" class="<?= ($currentPage == 'actionint.php') ? 'active' : '' ?>">Action International</a>
    <a href="/Asset/page/NousRejoindre.php" class="<?= ($currentPage == 'NousRejoindre.php') ? 'active' : '' ?>">Nous rejoindre</a>


    <!-- Boutons -->
    <a class="btn" href="/Asset/page/soliciter.php"><input class="styled" type="button" value="Contacté AGIRabcd" /></a>
    <a class="btn" href="/Asset/page/soutenir.php"><input class="styled" type="button" value="Soutenir AGIRabcd" /></a>
    <a class="btn" href="/Asset/page/connexion.php"><input class="styled" type="button" value="Se connecter" /></a>

    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <label for="nav-toggle" class="nav-toggle-label">
        <img src="/Asset/img/MenuBurger.png" alt="Menu Burger" class="Menu-Burger-Icon">
    </label>
</nav>

<nav class="nav-cache">
    <a href="/index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Accueil</a>
    <a href="/Asset/page/quisommenous.php" class="<?= ($currentPage == 'quisommenous.php') ? 'active' : '' ?>">Qui sommes-nous</a>
    <a href="/Asset/page/actionfrance.php" class="<?= ($currentPage == 'actionfrance.php') ? 'active' : '' ?>">Action France</a>
    <a href="/Asset/page/actionint.php" class="<?= ($currentPage == 'actionint.php') ? 'active' : '' ?>">Action International</a>
    <a href="/Asset/page/NousRejoindre.php" class="<?= ($currentPage == 'NousRejoindre.php') ? 'active' : '' ?>">Nous rejoindre</a>

    <div class="separateur"></div>

    <a class="btn" href="/Asset/page/soliciter.php"><input class="styled" type="button" value="Contacté AGIRabcd" /></a>
    <a class="btn" href="/Asset/page/soutenir.php"><input class="styled" type="button" value="Soutenir AGIRabcd" /></a>
    <a class="btn" href="/Asset/page/connexion.php"><input class="styled" type="button" value="Se connecter" /></a>
</nav>

<script src="/Asset/js/nav-bar.js"></script>

<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
use App\Messages;

Messages::messageFlash();
?>

<nav id="breadcrumb" class="breadcrumb"> Accueil </nav>
<script src="/Asset/js/breadcrumb.js"></script>
