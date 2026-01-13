<?php

require_once __DIR__ . '/../../../../vendor/autoload.php';
session_start();
use App\Verification;
use App\Gestion\NouveauMembre\MariaDBNouveauMembreRepository;
use App\Gestion\NouvelleMission\MariaDBNouvelleMissionRepository;
use App\config\BddConnect;

$dbConnect = new BddConnect(); // Remplace par le bon namespace si besoin
$pdo = $dbConnect->connexion();

$verification = new Verification();
$verification->VerificationConnexion("Admin");

$membre = new MariaDBNouveauMembreRepository($pdo);
$mission = new MariaDBNouvelleMissionRepository($pdo);

$totalMembres = $membre->compterMembre();
$nbAdmins = $membre->compterMembre('Admin');
$nbAdherents = $membre->compterMembre('Adherent');
$nbBenevoles = $membre->compterMembre('Benevole');

$nbMission = $mission->compterMission();

$listeMembres = $membre->recupererTousLesMembres();
$listeMission = $mission->recupererTouteLesMissions();
require_once '../header.php';
?>

<main class="ContenueAdmin">
    <div class="ConteneurAction">
        <div class="conteneur_btn">
            <a href="#" class="btn_action" id="action-NewMembre">
                <h3>Nouveau Membre</h3>
                <p>Ajouter un bénévole ou adhérent</p>
            </a>

            <a href="#" class="btn_action" id="action-NewMission">
                <h3>Créer Mission</h3>
                <p>Lancer une nouvelle mission humanitaire</p>
            </a>

            <a href="#" class="btn_action" id="action-ListMembre">
                <h3>Liste des Membres</h3>
                <p>Liste de tous les membres d'AGIRabcd</p>
            </a>

            <a href="#" class="btn_action" id="action-ListMission">
                <h3>Liste des Missions</h3>
                <p>Liste de toutes les Missions d'AGIRabcd</p>
            </a>
        </div>

        <section class="gestionAction" id="sectionContenu-NewMembre">
            <h2>Ajouter un nouveau Membre</h2>

            <form action="../traitementPageGestion/traitement-membreAdmin.php" method="POST" class="formAdmin">
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

            <form action="../traitementPageGestion/traitement-missionAdmin.php" method="POST" class="formAdmin">

                <div class="formChamps">
                    <label for="description">Description de la mission <strong>*Maximum 100 caractères !</strong></label>
                    <textarea id="description" name="description" rows="4"
                              placeholder="Ajouter une description de la mission" maxlength="100" required></textarea>
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
        <section class="gestionAction" id="sectionContenu-ListMembre">
            <h2>Liste des Membres</h2>
            <div class="ConteneurTableau">
                <table class="Tableau">
                    <thead>
                    <tr>
                        <th>Nom / Tel</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listeMembres as $m): ?>
                        <tr>
                            <td><?= htmlspecialchars($m['Coordonné'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($m['email'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($m['Role'] ?? 'N/A') ?></td>
                            <td>
                                <a href="../traitementPageGestion/traitement-supprimerMembre.php?id=<?= $m['IdMembre'] ?>" class="btn-supprimer">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="gestionAction" id="sectionContenu-ListMission">
            <h2>Liste des Missions</h2>
            <div class="ConteneurTableau">
                <table class="Tableau">
                    <thead>
                    <tr>
                        <th>Descirption</th>
                        <th>Date de Debut</th>
                        <th>Date de Fin</th>
                        <th>Budget</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listeMission as $m): ?>
                        <tr>
                            <td><?= htmlspecialchars($m['Description'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($m['DateDebut'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($m['DateFin'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($m['Budget'] ?? 'N/A') ?> €</td>
                            <td>
                                <a href="../traitementPageGestion/traitement-supprimerMission.php?id=<?= $m['IdMission'] ?>" class="btn-supprimer">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <aside class="info-admin">
        <div class="tete-aside">
            <h3>Statistiques Générales</h3>
        </div>

        <div class="conteneurStat">
            <div class="statTotal">
                <span class="label">Total Membres</span>
                <span class="value"><?= $totalMembres ?></span>
            </div>

            <hr>

            <div class="ItemStat">
                <span class="cateAdmin"></span>
                <span class="label">Administrateurs</span>
                <span class="nombre"><?= $nbAdmins ?></span>
            </div>
            <div class="ItemStat">
                <span class="cateAdherent"></span>
                <span class="label">Adhérents</span>
                <span class="nombre"><?= $nbAdherents ?></span>
            </div>
            <div class="ItemStat">
                <span class="cateBenevole"></span>
                <span class="label">Bénévoles</span>
                <span class="nombre"><?= $nbBenevoles ?></span>
            </div>

            <hr>

            <div class="statTotalMissions">
                <span class="label">Missions en cours</span>
                <span class="value"><?= $nbMission ?></span>
            </div>
        </div>
    </aside>
</main>

<script src="../../js/gestionAction.js" defer></script>

<?php require_once '../footer.php'; ?>