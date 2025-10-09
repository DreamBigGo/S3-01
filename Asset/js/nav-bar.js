document.addEventListener('DOMContentLoaded', () => {
    const checkbox = document.getElementById('nav-toggle');
    const navCache = document.querySelector('.nav-cache');

    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            navCache.style.display = 'flex';  // afficher
        } else {
            navCache.style.display = 'none';  // cacher
        }
    });
});
