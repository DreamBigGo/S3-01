
<?php

if(!session_id()){
    session_start();
}

require_once 'Asset/page/header.php';
?>


<main>
    <h1>AGIRabcd*, ONG reconnue d'utilité publique, mobilise les compétences de ses bénévoles au service des personnes fragilisées en France et des pays en développement dans le monde. </h1>
    <p>* Association Générale des Intervenants Retraités pour les Actions de Bénévoles pour la Coopération et le Développement</p>
    <a class="savoir" href="">En savoir Plus</a>

    <div class="Presentation">
        <ul class="france">
            <li><h2>En France</h2></li>
            <li><p>L’<a href="">autonomie</a> de chacun grâce à la maîtrise du français et du numérique </p></li>
            <li><p>La <a href="">recherche d’emploi</a> ou l’aide à la création d’entreprise </p></li>
            <li><p>La <a href="">mobilité territoriale</a> conduite d’un véhicule personnel ou usage des transports en commun </p></li>
            <li><p>La <a href="">santé </a>et l'accès aux services de santé, la sortie de l'isolement social des personnes âgées. </p></li>
            <div class="actions">
            <a  href="index.html">
                <input class="styled" type="button" value="Nos actions en france" />
            </a>
            </div>
        </ul>
        <ul class="international">

                <li><h2>L'international</h2></li>
                <li><p>Réalisation de <a href="">missions ponctuelles</a> ou des programmes spécifiques dans un domaine précis </p></li>
                <li><p>Création de <a href="">projets de co-développement</a> impliquant de nombreux experts dans différents secteurs d’activités.
                    </p>
                </li>



            <div class="actions">
            <a  href="index.html">
                <input class="styled" type="button" value="Nos actions à l'international" />
            </a>
            </div>
        </ul>
    </div>
    <h1>Les actualités d'AGIRabcd</h1>

    <section class="actualitéAgir">
        <div class="actu">
            <h2>Nouvelle lettre d'information trimestrielle d'Agirabcd</h2>
            <ul>
                <li><p>Agirabcd a le plaisir de vous annoncer le lancement de sa nouvelle lettre d'information trimestrielle !</p></li>
                <li><p>Objectif ? Vous tenir informé(e) de nos actualités, projets, actions en France et à l'international, témoignages de bénévoles, et bien plus encore...</p></li>
                <li><p><a href="#">Cliquez ici</a> pour lire notre première lettre d'information</p></li>
                <li><p>Vous souhaitez recevoir les prochaines éditions directement par courriel ?</p><a href="#">Inscrivez-vous ici</a></li>
                <li><p>Merci pour votre intérêt et votre engagement à nos côtés !</p></li>
            </ul>
        </div>
        <div class="actu">
            <h2>Le savoir-faire de la cuisine française en Ouganda</h2>
            <img src="Asset/img/actuOuganda.png" class="imgActu">
            <p>François, adhérent de la délégation territoriale Meurthe-et-Moselle, s’est rendu en Ouganda pour réaliser une mission de renforcement de la qualité en cuisine.</p>
            <a href="#">En savoir plus</a>
        </div>
        <div class="actu">
            <h2>Une action solidaire avec Madagascar </h2>
            <img src="Asset/img/actuMadagascar.png" class="imgActu">
            <h3>Agir pour des ruches solidaires à Madagascar</h3>
            <p>Parrainez vos ruches malgaches pour améliorer les revenus des paysan.ne.s et contribuer à la biodiversité locale</p>
            <h2 class="SommeRec">1059€ collecté</h2>
            <a  href="#">
                <input class="styled" type="button" value="Contribué"/>
            </a>
        </div>
    </section>
    <h1>Nos Partenaires :</h1>
</main>
<?php require_once 'Asset/page/footer.php' ?>
