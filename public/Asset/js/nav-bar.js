const menuburger = document.getElementById('nav-toggle');
const menuburgericon = document.querySelector('.Menu-Burger-Icon');
const navcache = document.querySelector('.nav-cache');

function verifTailleEcran() {
    const largeurEcran = window.innerWidth;
    if (largeurEcran >= 1300) {
        menuburger.checked = false;
        navcache.style.display = 'none';
        menuburgericon.src = '/Asset/img/MenuBurger.png';
    }
}

window.addEventListener('resize', verifTailleEcran);

verifTailleEcran();

menuburger.addEventListener('change', () => {
    if (menuburger.checked) {
        navcache.style.display = 'flex';
        menuburgericon.src = '/Asset/img/croix.png';
        menuburgericon.style.marginTop = '0.9em';
        menuburgericon.style.height = '50px';
        menuburgericon.style.width = '50px';
    } else {
        navcache.style.display = 'none';
        menuburgericon.src = '/Asset/img/MenuBurger.png';
        menuburgericon.style.marginTop = '0';
        menuburgericon.style.height = '5em';
        menuburgericon.style.width = '5em';
    }
});