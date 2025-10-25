<?php require_once 'header.php'; ?>


<nav class="formulaire">
    <div class="etape1">
        <h1 class="numero1">1</h1>
    </div>
    <div class="separateur1"></div>
    <div class="etape2">
        <h1 class="numero2">2</h1>
    </div>
    <div class="separateur2"></div>
    <div class="etape3">
        <h1 class="numero3">3</h1>
    </div>
    <div class="separateur3"></div>
    <div class="etape4">
        <h1 class="numero4">4</h1>
    </div>
</nav>
<main class="main-form">
    <section>
        <form action="" method="post" class="form-id">
            <h2>Identité</h2>
            <input type="text" name="nom" id="nom" required placeholder="Nom">

            <input type="text" name="prenom" id="prenom" required placeholder="Prenom">

            <input type="text" name="societe" id="societe" required placeholder="Société">

            <button type="submit" id="etape-id">Étape suivante</button>
        </form>
        <form action="" method="post" class="form-adresse">
            <h2>Adresse</h2>
            <input type="text" name="adresse" id="adresse" required placeholder="Adresse">

            <input type="text" name="cp" id="cp" required placeholder="Code Postal">

            <input type="text" name="ville" id="ville" required placeholder="Ville">

            <button type="submit" id="etape-adresse">Étape suivante</button>
            <button type="button" id="retour1">Retour</button>
        </form>
        <form action="" method="post" class="form-contact-message">
            <h2>Contact et Message</h2>
            <input type="text" name="telephone" id="telephone" required placeholder="Téléphone">

            <input type="email" name="email" id="email" required placeholder="email@exemple.com">

            <select id="objet" name="objet" required>
                <option>Contacter AGIRabcd</option>
                <option>Message pour A1 - Alsace</option>
                <option>Message pour B1 - Dordogne</option>
                <option>Message pour B2 - Aquitaine/Gironde</option>
                <option>Message pour B3 - Aquitaine/Sud</option>
                <option>Message pour B4 - Lot et Garonne</option>
                <option>Message pour B5 - Pau/Bearn</option>
                <option>Message pour C2 - Bourbonnais</option>
                <option>Message pour D2 - Côte d'Or</option>
                <option>Message pour D3 - Saône et Loire</option>
                <option>Message pour E1 - Côtes d'Armor</option>
                <option>Message pour E2 - Finistère</option>
                <option>Message pour E3 - Ille et Vilaine</option>
                <option>Message pour E4 - Morbihan</option>
                <option>Message pour E5 - Saint Mlao</option>
                <option>Message pour F2 - Eure et Loire</option>
                <option>Message pour F3 - Orleanais</option>
                <option>Message pour F4 - Touraine</option>
                <option>Message pour J1 - Hérault</option>
                <option>Message pour J2 - Pyrénées Orientales</option>
                <option>Message pour J3 - Gard</option>
                <option>Message pour J4 - Aude</option>
                <option>Message pour L2 - Moselle</option>
                <option>Message pour M1 - Haute Garonne</option>
                <option>Message pour M2 - Lot</option>
                <option>Message pour M3 - Hautes Pyrénées</option>
                <option>Message pour N1 - Nord</option>
                <option>Message pour N2 - Pas de Calais</option>
                <option>Message pour O1 - Basse Normandie</option>
                <option>Message pour O2 - Eure/Seine Maritime</option>
                <option>Message pour Q1 - Paris/Petite couronne</option>
                <option>Message pour Q3 - Seine et Marne</option>
                <option>Message pour Q4 - Norseinoise</option>
                <option>Message pour Q5 - Yveline</option>
                <option>Message pour R1 - Anjou/Maine</option>
                <option>Message pour R2 - Loire/Océan</option>
                <option>Message pour S1 - Somme</option>
                <option>Message pour S2 - Oise</option>
                <option>Message pour T1 - Charente/Maritime</option>
                <option>Message pour U1 - Alpes Maritimes</option>
                <option>Message pour U3 - Var</option>
                <option>Message pour U4 - Vaucluse</option>
                <option>Message pour V3 - Isère</option>
                <option>Message pour V4 - Loire</option>
                <option>Message pour V5 - Rhône</option>
                <option>Message pour V6 - Savoie/Haute Savoie</option>
                <option>Message pour V7 - Drôme/Ardèche</option>
                <option>Message pour Île de la Réunion</option>
                <option>Autre ...</option>
            </select>

            <textarea id="message" name="message" required placeholder="Message ..."></textarea>

            <button type="submit" id="etape-contact">Étape suivante</button>
            <button type="button" id="retour2">Retour</button>
        </form>
        <form action="" method="post" class="recapitulatif">
            <h2>Récapitulatif</h2>
            <ul>
                <li><p class="titre-recap">Nom : </p><p class="saisie-nom"></p></li>
                <li><p class="titre-recap">Prenom : </p><p class="saisie-prenom"></p></li>
                <li><p class="titre-recap">Société : </p><p class="saisie-societe"></p></li>
            </ul>
            <div class="sepaRecap"></div>
            <ul>
                <li><p class="titre-recap">Adresse : </p><p class="saisie-adresse"></p></li>
                <li><p class="titre-recap">Code Postal : </p><p class="saisie-cp"></p></li>
                <li><p class="titre-recap">Ville : </p><p class="saisie-ville"></p></li>
            </ul>
            <div class="sepaRecap"></div>
            <ul>
                <li><p class="titre-recap">Téléphone : </p><p class="saisie-telephone"></p></li>
                <li><p class="titre-recap">Adresse Email : </p><p class="saisie-email"></p></li>
                <li><p class="titre-recap">Objet : </p><p class="saisie-objet"></p></li>
                <li><p class="titre-recap">Message : </p><p class="saisie-message"></p></li>
            </ul>
            <button type="submit" id="recap">Envoyer</button>
            <button type="button" id="retour3">Retour</button>
        </form>
    </section>
    <aside>
        <h1>AGIRabcd</h1>
        <ul>
            <li><p class="titre-aside">Siège : </p><p class="text-aside">18-26 rue Goubet, 75019 Paris</p></li>
            <li><p class="titre-aside">Email :  </p><p class="text-aside">agirabcd@agirabcd.org</p></li>
            <li><p class="titre-aside">Téléphone : </p><p class="text-aside">01 47 70 18 90</p></li>
        </ul>
        <div class="separation-form"></div>
        <p class="conseille">* Nous vous invitons à vérifier la validité de chaque information transmise afin d’en garantir un traitement optimal.</p>
    </aside>
</main>

<script src="/S3-01/Asset/js/formulaire.js"></script>

<?php require_once 'footer.php' ?>