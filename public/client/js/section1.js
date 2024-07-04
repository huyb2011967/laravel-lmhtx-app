document.addEventListener('DOMContentLoaded', function () {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const slides = document.querySelectorAll('.slider-item-s-1');
    let currentSlide = 0;
  
    function showSlide(n) {
      slides.forEach(slide => slide.classList.remove('active'));
      slides[n].classList.add('active');
    }
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }
  
    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }
  
    nextBtn.addEventListener('click', () => {
      nextSlide();
      clearInterval(slideInterval);
    });
  
    prevBtn.addEventListener('click', () => {
      prevSlide();
      clearInterval(slideInterval);
    });
  
    let slideInterval = setInterval(nextSlide, 10000); // Slide chuyển động sau mỗi 5 giây
  
    showSlide(currentSlide);
  });
  