document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelector('.slides-2');
    const slideElements = document.querySelectorAll('.slide-2');
    const prevBtn = document.querySelector('.prevBtn');
    const nextBtn = document.querySelector('.nextBtn');
    let currentIndex = 0;
    let slideWidthPercentage = 33.33; // Default slide width percentage for large screens

    function updateSlideWidth() {
        if (window.innerWidth >= 1024) {
            slideWidthPercentage = 33.33; // 3 slides per view
        } else if (window.innerWidth >= 768) {
            slideWidthPercentage = 50; // 2 slides per view
        } else {
            slideWidthPercentage = 100; // 1 slide per view
        }
    }

    function updateSlidePosition() {
        slides.style.transform = `translateX(${-currentIndex * slideWidthPercentage}%)`;
    }

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlidePosition();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentIndex < slideElements.length - (100 / slideWidthPercentage)) {
            currentIndex++;
            updateSlidePosition();
        }
    });

    function autoSlide() {
        if (currentIndex < slideElements.length - (100 / slideWidthPercentage)) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlidePosition();
    }

    setInterval(autoSlide, 5000); // Change slide every 3 seconds

    window.addEventListener('resize', () => {
        updateSlideWidth();
        updateSlidePosition();
    });

    // Initial setup
    updateSlideWidth();
    updateSlidePosition();
});