document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel-slide');
    let currentIndex = 0;
    const slideWidth = slides[0].clientWidth;

    function goToSlide(index) {
        carousel.style.transform = `translateX(-${slideWidth * index}px)`;
        currentIndex = index;
    }

    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        goToSlide(currentIndex);
    }, 5000);
});
