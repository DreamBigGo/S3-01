<?php
require_once '../header.php';
require_once '../traitement_connexion.php';

VerificationConnexion('Benevole');
?>

<main>
    <div class="conteneur_btn">
        <a href="#" class="btn_action" id="action-missionBenevole">
            <h3>Voir mes Missions</h3>
            <p>Accèder a vos missions en cours</p>
        </a>

        <a href="#" class="btn_action" id="action-rapportBenevole">
            <h3>Ajouter un rapport</h3>
            <p>Ajouter vos rapports de mission</p>
        </a>
    </div>

    <section class="gestionAction" id="sectionContenu-missionBenevole">
        <h1>Mission Disponible : </h1>

        <div id="liste-missions" class="missions-grid"></div>
        <template id="mission-template">
            <article class="ArticleMission">
                <div class="ConteneurMission">
                    <h3 class="mission-desc"></h3>
                    <div class="mission-dates">
                        <p><strong>Début :</strong> <span class="d-debut"></span></p>
                        <p><strong>Fin :</strong> <span class="d-fin"></span></p>
                    </div>
                    <p class="mission-budget">Budget : <span></span> €</p>
                </div>
                <span class="mission-dep"></span>
            </article>
        </template>
    </section>

    <section class="gestionAction" id="sectionContenu-rapportBenevole">
        <h1>Rapport Benevole</h1>
    </section>
</main>

<script src="../../js/gestionAction.js" defer></script>

<?php require_once '../footer.php'; ?>