<?php
require_once '../header.php';
require_once '../traitement_connexion.php';

VerificationConnexion('Adherent');
?>

<main>
    <div class="conteneur_btn">
        <a href="#" class="btn_action" id="action-missionAdherent">
            <h3>Voir mes Missions</h3>
            <p>Accèder a vos missions en cours</p>
        </a>

        <a href="#" class="btn_action" id="action-rapportAdherent">
            <h3>Ajouter un rapport</h3>
            <p>Ajouter vos rapports de mission</p>
        </a>
    </div>

    <section class="gestionAction" id="sectionContenu-missionAdherent">
        <h1>Mission Adherent</h1>
    </section>

    <section class="gestionAction" id="sectionContenu-rapportAdherent">
        <h1>Rapport Adherent</h1>
    </section>
</main>

<script src="../../js/gestionAction.js" defer></script>

<?php require_once '../footer.php'; ?>