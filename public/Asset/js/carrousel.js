const track = document.querySelector('.carrousel-img');
let scrollPos = 0;

function scrollPartenaires() {
    scrollPos += 0.5;
    if (scrollPos >= track.scrollWidth / 2) scrollPos = 0;
    track.style.transform = `translateX(-${scrollPos}px)`;
    requestAnimationFrame(scrollPartenaires);
}

track.innerHTML += track.innerHTML;
scrollPartenaires();