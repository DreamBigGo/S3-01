/*
* Définition de variables avec const, et je leur attribue différents éléments de la page HTML :
*   - const sert à définir des variables constantes, c'est-à-dire qui ne vont pas changer au cours de l'exécution de la page
*   - getElementById sert à récupérer un élément par son id et querySelector fait la même chose mais avec la classe
*/

const menuburger = document.getElementById('nav-toggle');
const menuburgericon = document.querySelector('.Menu-Burger-Icon');
const navcache = document.querySelector('.nav-cache');

/*
* Je définis une fonction qui va vérifier la taille de l’écran
*/

function checkScreenSize() {
    // Je définis largeurEcran qui prend comme valeur la largeur de l’écran
    const largeurEcran = window.innerWidth;
    // Condition qui vérifie si l’écran est supérieur ou égal à 1300 px
    if (largeurEcran >= 1300) {
        // Si l’écran est supérieur ou égal à 1300 px, alors la checkbox est décochée
        menuburger.checked = false;
        // La nav-bar supplémentaire disparaît
        navcache.style.display = 'none';
        // La source de l’image est modifiée
        menuburgericon.src = '/S3-01/Asset/img/MenuBurger.png';
    }
}

// Définition d’un événement pour vérifier la taille de l’écran
window.addEventListener('resize', checkScreenSize);

// Appel de la fonction pour qu’elle vérifie la taille de l’écran au lancement du script
checkScreenSize();

/*
* Je définis différents événements, afin d’afficher les éléments adéquats au clic sur l’un des deux boutons :
*  - .addEventListener permet de définir un événement avec, par exemple :
*       - click -> permet de dire « fais ça si le bouton est cliqué »
*       - il en existe d’autres, comme change pour les checkbox ou resize pour la taille de l’écran
*/

menuburger.addEventListener('change', () => {
    if (menuburger.checked) {
        navcache.style.display = 'flex';
        menuburgericon.src = '/S3-01/Asset/img/croix.png';
        menuburgericon.style.marginTop = '0.9em';
        menuburgericon.style.height = '100px';
        menuburgericon.style.width = '50px';
    } else {
        navcache.style.display = 'none';
        menuburgericon.src = '/S3-01/Asset/img/MenuBurger.png';
        menuburgericon.style.marginTop = '0';
        menuburgericon.style.height = '5em';
        menuburgericon.style.width = '5em';
    }
});