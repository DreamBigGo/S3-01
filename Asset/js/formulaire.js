const btn_id = document.getElementById('etape-id');
const btn_adresse = document.getElementById('etape-adresse');
const btn_retour1 = document.getElementById('retour1');
const btn_retour2 = document.getElementById('retour2');
const form_id = document.querySelector('.form-id');
const form_adresse = document.querySelector('.form-adresse');
const form_contact_message = document.querySelector('.form-contact-message');
const div_id = document.querySelector('.Identité');
const div_adresse = document.querySelector('.Adresse');
const div_contact = document.querySelector('.contact-raison');

form_id.style.display = 'flex';
form_adresse.style.display = 'none';
form_contact_message.style.display = 'none';

div_id.style.borderBottom = '5px solid var(--main-color-bleu)';
div_adresse.style.borderBottom = 'none';
div_contact.style.borderBottom = 'none';

btn_id.addEventListener('click', () => {
    form_id.style.display = 'none';
    form_adresse.style.setProperty('display', 'flex', 'important');
    div_id.style.borderBottom = 'none';
    div_adresse.style.borderBottom = '5px solid var(--main-color-bleu)';
});
btn_adresse.addEventListener('click', () => {
    form_adresse.style.display = 'none';
    form_contact_message.style.setProperty('display', 'flex', 'important');
    div_adresse.style.borderBottom = 'none';
    div_contact.style.borderBottom = '5px solid var(--main-color-bleu)';
});
btn_retour1.addEventListener('click', () => {
    form_adresse.style.display = 'none';
    form_id.style.setProperty('display', 'flex', 'important');
    div_adresse.style.borderBottom = 'none';
    div_id.style.borderBottom = '5px solid var(--main-color-bleu)';
});
btn_retour2.addEventListener('click', () => {
    form_contact_message.style.display = 'none';
    form_adresse.style.setProperty('display', 'flex', 'important');
    div_contact.style.borderBottom = 'none';
    div_adresse.style.borderBottom = '5px solid var(--main-color-bleu)';
});