<?php
require_once '../header.php';
require_once '../traitement_connexion.php';

VerificationConnexion('Admin');
?>

<main>
    <div class="conteneur_btn">
        <a href="#" class="btn_action" id="action-NewMembre">
            <h3>Nouveau Membre</h3>
            <p>Ajouter un bénévole ou adhérent</p>
        </a>

        <a href="#" class="btn_action" id="action-NewMission">
            <h3>Créer Mission</h3>
            <p>Lancer une nouvelle mission humanitaire</p>
        </a>

        <a href="#" class="btn_action" id="action-VoirRapport">
            <h3>Rapport de Mission</h3>
            <p>Accès au rapport des missions</p>
        </a>
    </div>

    <section class="gestionAction" id="sectionContenu-NewMembre">
        <h2>Ajouter un nouveau Membre</h2>

        <form action="../traitementPageGestion/admin/traitement-membreAdmin.php" method="POST" class="formAdmin">
            <div class="formChamps">
                <label for="coordonne">Coordonnées (Nom, Prénom, Téléphone)</label>
                <input type="text" id="coordonne" name="coordonne" placeholder="Ex: Jean Martin - 06 01 02..." required>
            </div>

            <div class="conteneurChamps">
                <div class="formChamps">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="exemple@agirabcd.fr" required>
                </div>
                <div class="formChamps">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp" required>
                </div>
            </div>

            <div class="conteneurChamps">
                <div class="formChamps">
                    <label for="role">Rôle du membre</label>
                    <select name="role" id="role" required>
                        <option value="" disabled selected>Choisir un statut</option>
                        <option value="Benevole">Bénévole</option>
                        <option value="Adherent">Adhérent</option>
                        <option value="Admin">Administrateur</option>
                    </select>
                </div>
                <div class="formChamps">
                    <label for="dispo">Date de disponibilité</label>
                    <input type="date" id="dispo" name="dispo">
                </div>
            </div>

            <button type="submit" class="btnForm">Enregistrer le Membre</button>
        </form>
    </section>

    <section class="gestionAction" id="sectionContenu-NewMission">
        <h2>Créer une nouvelle Mission</h2>

        <form action="../traitementPageGestion/admin/traitement-missionAdmin.php" method="POST" class="formAdmin">

            <div class="formChamps">
                <label for="description">Description de la mission</label>
                <textarea id="description" name="description" rows="4"
                          placeholder="Ajouter une description de la mission" required></textarea>
            </div>

            <div class="conteneurChamps">
                <div class="formChamps">
                    <label for="date_debut">Date de Début</label>
                    <input type="date" id="date_debut" name="date_debut" required>
                </div>
                <div class="formChamps">
                    <label for="date_fin">Date de Fin</label>
                    <input type="date" id="date_fin" name="date_fin" required>
                </div>
            </div>

            <div class="conteneurChamps" id="sectionContenu">
                <div class="formChamps">
                    <label for="budget">Budget alloué (€)</label>
                    <input type="number" step="0.01" id="budget" name="budget"
                           placeholder="Ex: 1500.00" required>
                </div>
                <div class="formChamps">
                    <label for="dep">Numero du Département</label>
                    <input type="number" id="dep" name="dep" placeholder="Ex: 78" required>
                </div>
            </div>

            <button type="submit" class="btnForm">Publier la Mission</button>
        </form>
    </section>

    <section class="gestionAction" id="sectionContenu-VoirRapport">

    </section>
</main>

<script src="../../js/gestionAction.js" defer></script>

<?php require_once '../footer.php'; ?>