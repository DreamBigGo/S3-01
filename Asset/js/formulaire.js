const config = {
    etapes: [
        {
            form: '.form-id',
            btnSuivant: 'etape-id',
            divEtape: '.etape1',
            numero: '.numero1',
            separateur: null
        },
        {
            form: '.form-adresse',
            btnSuivant: 'etape-adresse',
            btnRetour: 'retour1',
            divEtape: '.etape2',
            numero: '.numero2',
            separateur: '.separateur1'
        },
        {
            form: '.form-contact-message',
            btnSuivant: 'etape-contact',
            btnRetour: 'retour2',
            divEtape: '.etape3',
            numero: '.numero3',
            separateur: '.separateur2'
        },
        {
            form: '.recapitulatif',
            btnRetour: 'retour3',
            divEtape: '.etape4',
            numero: '.numero4',
            separateur: '.separateur3'
        }
    ]
};

const elements = {
    forms: config.etapes.map(e => document.querySelector(e.form)),
    btnsSuivant: config.etapes.filter(e => e.btnSuivant).map(e => document.getElementById(e.btnSuivant)),
    btnsRetour: config.etapes.filter(e => e.btnRetour).map(e => document.getElementById(e.btnRetour)),
    divEtapes: config.etapes.map(e => document.querySelector(e.divEtape)),
    numeros: config.etapes.map(e => document.querySelector(e.numero)),
    separateurs: config.etapes.map(e => e.separateur ? document.querySelector(e.separateur) : null)
};

function remplirRecap() {
    const saisies = document.querySelectorAll('input, select, textarea');

    saisies.forEach(input => {
        if (input.id) {
            const paragraphe = document.querySelector('.saisie-' + input.id);
            if (paragraphe) {
                paragraphe.textContent = input.value;
            }
        }
    });
}

function afficherEtape(index) {
    // Masquer tous les formulaires
    elements.forms.forEach(form => {
        if (form) form.style.display = 'none';
    });

    if (elements.forms[index]) {
        elements.forms[index].style.setProperty('display', 'flex', 'important');
    }

    for (let i = 0; i <= index; i++) {
        if (elements.divEtapes[i]) {
            elements.divEtapes[i].style.backgroundColor = 'var(--main-color-bleu)';
        }
        if (elements.numeros[i]) {
            elements.numeros[i].style.color = 'white';
        }
        if (i > 0 && elements.separateurs[i]) {
            elements.separateurs[i].style.backgroundColor = 'var(--main-color-bleu)';
        }
    }

    for (let i = index + 1; i < config.etapes.length; i++) {
        if (elements.divEtapes[i]) {
            elements.divEtapes[i].style.backgroundColor = 'white';
        }
        if (elements.numeros[i]) {
            elements.numeros[i].style.color = 'var(--main-color-bleu)';
        }
        if (elements.separateurs[i]) {
            elements.separateurs[i].style.backgroundColor = 'white';
        }
    }
}

afficherEtape(0);

elements.btnsSuivant.forEach((btn, index) => {
    if (btn) {
        btn.addEventListener('click', (event) => {
            event.preventDefault();
            remplirRecap();
            afficherEtape(index + 1);
        });
    }
});

elements.btnsRetour.forEach((btn, index) => {
    if (btn) {
        btn.addEventListener('click', (event) => {
            event.preventDefault();
            afficherEtape(index);
        });
    }
});