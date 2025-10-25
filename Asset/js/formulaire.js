/*
* Définition de variables avec const, et je leur attribue différents éléments de la page HTML :
*   - const sert à définir des variables constantes, c'est-à-dire qui ne vont pas changer au cours de l'exécution de la page
*   - getElementById sert à récupérer un élément par son id et querySelector fait la même chose mais avec la classe
*/

const btn_id = document.getElementById('etape-id');
const btn_adresse = document.getElementById('etape-adresse');
const btn_contact = document.getElementById('etape-contact');

const btn_retour1 = document.getElementById('retour1');
const btn_retour2 = document.getElementById('retour2');
const btn_retour3 = document.getElementById('retour3');

const form_id = document.querySelector('.form-id');
const form_adresse = document.querySelector('.form-adresse');
const form_contact_message = document.querySelector('.form-contact-message');
const form_recapitulatif = document.querySelector('.recapitulatif');

const divEtape1 = document.querySelector('.etape1');
const divEtape2 = document.querySelector('.etape2');
const divEtape3 = document.querySelector('.etape3');
const divEtape4 = document.querySelector('.etape4');

const numero1 = document.querySelector('.numero1');
const numero2 = document.querySelector('.numero2');
const numero3 = document.querySelector('.numero3');
const numero4 = document.querySelector('.numero4');

const divSepa1 = document.querySelector('.separateur1');
const divSepa2 = document.querySelector('.separateur2');
const divSepa3 = document.querySelector('.separateur3');
/*
* J’attribue les valeurs de base, c’est-à-dire que, par exemple, je définis quels formulaires sont visibles et lesquels sont cachés :
*  - le .style permet de modifier le CSS
*  - le .display permet de modifier la visibilité de l’élément
*/

form_id.style.display = 'flex';
form_adresse.style.display = 'none';
form_contact_message.style.display = 'none';
form_recapitulatif.style.display = 'none';
divEtape1.style.backgroundColor = 'var(--main-color-bleu)';
numero1.style.color = 'white';

function remplirRecap() {
    const saisie = document.querySelectorAll('input, select, textarea');

    saisie.forEach(input => {
        if (input.id) {
            const paragraphe = document.querySelector('.saisie-' + input.id);
            if (paragraphe) {
                paragraphe.textContent = input.value;
            }
        }
    });
}

/*
* Je définis différents événements, afin d’afficher les éléments adéquats au clic sur l’un des deux boutons :
*  - .addEventListener permet de définir un événement avec, par exemple :
*       - click -> permet de dire « fais ça si le bouton est cliqué »
*       - il en existe d’autres, comme "change" pour les checkbox ou "resize" pour la taille de l’écran
*/
btn_id.addEventListener('click', (event) => {
    event.preventDefault();
    remplirRecap();
    form_id.style.display = 'none';
    form_adresse.style.setProperty('display', 'flex', 'important');
    divSepa1.style.backgroundColor = 'var(--main-color-bleu)';
    divEtape2.style.backgroundColor = 'var(--main-color-bleu)';
    numero2.style.color = 'white';
});
btn_adresse.addEventListener('click', (event) => {
    event.preventDefault();
    remplirRecap();
    form_adresse.style.display = 'none';
    form_contact_message.style.setProperty('display', 'flex', 'important');
    divSepa2.style.backgroundColor = 'var(--main-color-bleu)';
    divEtape3.style.backgroundColor = 'var(--main-color-bleu)';
    numero3.style.color = 'white';
});
btn_contact.addEventListener('click', (event) => {
    event.preventDefault();
    remplirRecap();
    form_contact_message.style.display = 'none';
    form_recapitulatif.style.setProperty('display', 'flex', 'important');
    divSepa3.style.backgroundColor = 'var(--main-color-bleu)';
    divEtape4.style.backgroundColor = 'var(--main-color-bleu)';
    numero4.style.color = 'white';
})
btn_retour1.addEventListener('click', () => {
    form_adresse.style.display = 'none';
    form_id.style.setProperty('display', 'flex', 'important');
    divSepa1.style.backgroundColor = 'white';
    divEtape2.style.backgroundColor = 'white';
    numero2.style.color = 'var(--main-color-bleu)';
});
btn_retour2.addEventListener('click', () => {
    form_contact_message.style.display = 'none';
    form_adresse.style.setProperty('display', 'flex', 'important');
    divSepa2.style.backgroundColor = 'white';
    divEtape3.style.backgroundColor = 'white';
    numero3.style.color = 'var(--main-color-bleu)';
});
btn_retour3.addEventListener('click', () => {
    form_recapitulatif.style.display = 'none';
    form_contact_message.style.setProperty('display', 'flex', 'important');
    divSepa3.style.backgroundColor = 'white';
    divEtape4.style.backgroundColor = 'white';
    numero4.style.color = 'var(--main-color-bleu)';
})