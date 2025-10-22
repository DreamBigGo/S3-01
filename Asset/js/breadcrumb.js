// Récupérer le fil depuis la session ou créer un nouveau
let breadcrumb = sessionStorage.getItem('breadcrumb');
breadcrumb = breadcrumb ? JSON.parse(breadcrumb) : ['Accueil'];

// Nom de la page actuelle depuis l'URL
const path = window.location.pathname;
let pageName = "Accueil";

// Associer chaque fichier à un nom lisible
if(path.includes("quisommenous.php")) pageName = "Qui sommes-nous";
else if(path.includes("actionfrance.php")) pageName = "Action France";
else if(path.includes("actionint.php")) pageName = "Action International";
else if(path.includes("soliciter.php")) pageName = "Contacté AGIRabcd";
else if(path.includes("soutenir.php")) pageName = "Soutenir AGIRabcd";

// Ajouter la page actuelle au fil
const index = breadcrumb.indexOf(pageName);
if(index !== -1){
    breadcrumb = breadcrumb.slice(0, index + 1); // retour arrière
}else{
    breadcrumb.push(pageName); // nouvelle page
}

// Affichage du fil cliquable
function updateBreadcrumb() {
    const breadcrumbNav = document.getElementById('breadcrumb');
    breadcrumbNav.innerHTML = '';
    breadcrumb.forEach((page, i) => {
        const span = document.createElement('span');
        if(i < breadcrumb.length - 1){
            const link = document.createElement('a');
            link.href = "#";
            link.textContent = page;
            link.addEventListener('click', (e) => {
                e.preventDefault();
                breadcrumb = breadcrumb.slice(0, i + 1);
                updateBreadcrumb();
                sessionStorage.setItem('breadcrumb', JSON.stringify(breadcrumb));
            });
            span.appendChild(link);
        } else {
            span.textContent = page;
        }
        breadcrumbNav.appendChild(span);
        if(i < breadcrumb.length - 1){
            const sep = document.createElement('span');
            sep.textContent = " / ";
            breadcrumbNav.appendChild(sep);
        }
    });
}

// Stocker le fil en session et afficher
sessionStorage.setItem('breadcrumb', JSON.stringify(breadcrumb));
updateBreadcrumb();
