// meet our team slider Script
const slider = document.getElementById('slider');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
let cardWidth;
let autoSlide;

function updateCardWidth() {
    cardWidth = document.querySelector('.team-card').offsetWidth;
}
window.addEventListener('resize', updateCardWidth);
updateCardWidth();

function slideNext() {
    slider.style.transition = 'transform 0.5s ease-in-out';
    slider.style.transform = `translateX(-${cardWidth}px)`;
    setTimeout(() => {
        slider.appendChild(slider.firstElementChild);
        slider.style.transition = 'none';
        slider.style.transform = 'translateX(0)';
    }, 500);
}

function slidePrev() {
    slider.insertBefore(slider.lastElementChild, slider.firstElementChild);
    slider.style.transition = 'none';
    slider.style.transform = `translateX(-${cardWidth}px)`;
    setTimeout(() => {
        slider.style.transition = 'transform 0.5s ease-in-out';
        slider.style.transform = 'translateX(0)';
    }, 10);
}

next.addEventListener('click', () => {
    slideNext();
    restartAutoSlide();
});
prev.addEventListener('click', () => {
    slidePrev();
    restartAutoSlide();
});

function startAutoSlide() {
    autoSlide = setInterval(slideNext, 2000);
}

function restartAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
}

startAutoSlide();
// meet our team slider script End