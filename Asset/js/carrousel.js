const track = document.querySelector('.carrousel-img');
let scrollPos = 0;

function scrollLogos() {
    scrollPos += 0.5;
    if (scrollPos >= track.scrollWidth / 2) scrollPos = 0;
    track.style.transform = `translateX(-${scrollPos}px)`;
    requestAnimationFrame(scrollLogos);
}

track.innerHTML += track.innerHTML;
scrollLogos();