let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const intervalTime = 5000; // 3 seconds

function showSlide() {
    const slidesContainer = document.querySelector('.slides');
    slidesContainer.style.transform = `translateX(${-currentSlide * 100}%)`;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide();
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide();
}

// Automatically scroll to the next slide every 3 seconds
setInterval(nextSlide, intervalTime);