const boutons = document.querySelectorAll('[id^="action-"]');
const sections = document.querySelectorAll('[id^="sectionContenu-"]');

const masqueSection = () => {
    sections.forEach(section => {
        section.style.display = 'none';
    });
};
boutons.forEach(bouton => {
    bouton.addEventListener('click', (e) => {
        const idBtn = bouton.id.replace('action-', '');
        const sectionCible = document.querySelector('#sectionContenu-' + idBtn);

        masqueSection();
        if (sectionCible) {
            sectionCible.style.display = 'block';
        }
    });
});

const conteneur = document.getElementById('liste-missions');
const template = document.getElementById('mission-template');

window.afficherMissions = function(missions) {
    conteneur.innerHTML = '';

    missions.forEach(m => {
        const clone = template.content.cloneNode(true);

        clone.querySelector('.mission-desc').textContent = m.Description;
        clone.querySelector('.d-debut').textContent = m.DateDebut;
        clone.querySelector('.d-fin').textContent = m.DateFin;
        clone.querySelector('.mission-budget span').textContent = m.Budget;
        clone.querySelector('.mission-dep').textContent = m.IdDep;

        conteneur.appendChild(clone);
    });
};;