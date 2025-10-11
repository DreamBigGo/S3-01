const menuburger = document.getElementById('nav-toggle');
const menuburgericon = document.querySelector('.Menu-Burger-Icon');
const navcache = document.querySelector('.nav-cache');

function checkScreenSize() {
    const largeurEcran = window.innerWidth;

    if (largeurEcran >= 1300) {
        menuburger.checked = false;
        navcache.style.display = 'none';
        menuburgericon.src = '/S3-01/Asset/img/MenuBurger.png';
    }
}

window.addEventListener('resize', checkScreenSize);

checkScreenSize();

menuburger.addEventListener('change', () => {
    if (menuburger.checked) {
        navcache.style.display = 'flex';
        menuburgericon.src = '/S3-01/Asset/img/croix.png';
        menuburgericon.style.height = '4em';
        menuburgericon.style.width = '4em';
    } else {
        navcache.style.display = 'none';
        menuburgericon.src = '/S3-01/Asset/img/MenuBurger.png';
        menuburgericon.style.height = '5em';
        menuburgericon.style.width = '5em';
    }
});