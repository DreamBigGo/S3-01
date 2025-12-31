<?php
require_once __DIR__.'/../public/Asset/page/header.php';
?>

<form action="" method="post">
    <label for="id">Identifiant</label>
    <input type="number" name="id" id="id" required placeholder="1">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" required placeholder="Nom">
</form>

<?php require_once __DIR__.'/../public/Asset/page/footer.php' ?>