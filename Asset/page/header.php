<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/S3-01/Asset/css/style.css">
    <title> AgirAbcd </title>
</head>
<body>

<?php
// Récupère le nom du fichier actuel pour l'active
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="menu">
    <!-- Logo -->
    <a href="/S3-01/index.php">
        <img class="logo" src="/S3-01/Asset/img/Logo_de_lorganisation_AGIRabcd.png" alt="Logo Agirabcd">
    </a>

    <!-- Liens du menu -->
    <a href="/S3-01/index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Accueil</a>
    <a href="/S3-01/Asset/page/quisommenous.php" class="<?= ($currentPage == 'quisommenous.php') ? 'active' : '' ?>">Qui sommes-nous</a>
    <a href="/S3-01/Asset/page/actionfrance.php" class="<?= ($currentPage == 'actionfrance.php') ? 'active' : '' ?>">Action France</a>
    <a href="/S3-01/Asset/page/actionint.php" class="<?= ($currentPage == 'actionint.php') ? 'active' : '' ?>">Action International</a>


<!-- Boutons -->
    <a class="btn" href="/S3-01/Asset/page/soliciter.php"><input class="styled" type="button" value="Soliciter AGIRabcd" /></a>
    <a class="btn" href="/S3-01/Asset/page/soutenir.php"><input class="styled" type="button" value="Soutenir AGIRabcd" /></a>
</nav>