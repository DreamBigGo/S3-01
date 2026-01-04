<?php require_once '../header.php'; ?>

<main>
    <div class="conteneur_btn">
        <a href="" class="btn_action">
            <h3>Nouveau Membre</h3>
            <p>Ajouter un bénévole ou adhérent</p>
        </a>

        <a href="" class="btn_action">
            <h3>Créer Mission</h3>
            <p>Lancer une nouvelle mission humanitaire</p>
        </a>

        <a href="" class="btn_action">
            <h3>Rapport de Mission</h3>
            <p>Accès au rapport des missions</p>
        </a>
    </div>

    <section class="gestionAdmin">
        <h2>Ajouter un nouveau Membre</h2>

        <form action="" method="POST" class="formAdmin">
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
                    <label for="mdp">Mot de passe provisoire</label>
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

            <button type="submit" class="btnForm"> Enregistrer le Membre</button>
        </form>
    </section>

    <section class="gestionAdmin">

    </section>

    <section class="gestionAdmin">

    </section>
</main>

<?php require_once '../footer.php'; ?>