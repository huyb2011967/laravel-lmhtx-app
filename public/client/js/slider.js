let currentIndex = 0;
let slider = document.querySelector('.slider-1');
let items = document.querySelectorAll('.slider-item-1');
let itemWidth = items[0].getBoundingClientRect().width;

function updateSlider() {
    items = document.querySelectorAll('.slider-item-1'); // Update the items
    itemWidth = items[0].getBoundingClientRect().width;
    slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}

function showNextSlide() {
    if (currentIndex < items.length - 4) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}

function showPrevSlide() {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = items.length - 4;
    }
    slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}

document.getElementById('nextBtn-1').addEventListener('click', showNextSlide);
document.getElementById('prevBtn-1').addEventListener('click', showPrevSlide);

// Tự động trượt sau mỗi 3 giây
setInterval(showNextSlide, 3000);

// Cập nhật kích thước của các thẻ khi cửa sổ thay đổi kích thước
window.addEventListener('resize', updateSlider);

// Khởi tạo slider với chiều rộng ban đầu
updateSlider();
