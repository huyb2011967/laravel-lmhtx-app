document.addEventListener('DOMContentLoaded', function () {
    const postsPerPage = 5;
    const postContainer = document.querySelector('.posts');
    const posts = Array.from(postContainer.querySelectorAll('.post'));
    const paginationContainer = document.getElementById('pagination');
    const totalPages = Math.ceil(posts.length / postsPerPage);
    let currentPage = 1;

    function showPage(pageNumber) {
        const start = (pageNumber - 1) * postsPerPage;
        const end = start + postsPerPage;

        posts.forEach((post, index) => {
            post.style.display = (index >= start && index < end) ? 'block' : 'none';
        });
        updatePagination(pageNumber);
    }

    function createPagination() {
        // Nút Previous
        const prevItem = document.createElement('li');
        prevItem.className = 'page-item';
        prevItem.innerHTML = `<a class="page-link" href="#">Previous</a>`;
        prevItem.addEventListener('click', function (e) {
            e.preventDefault();
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        });
        paginationContainer.appendChild(prevItem);

        // Các trang
        for (let i = 1; i <= totalPages; i++) {
            const pageItem = document.createElement('li');
            pageItem.className = 'page-item';
            pageItem.innerHTML = `<a class="page-link" href="#">${i}</a>`;
            pageItem.addEventListener('click', function (e) {
                e.preventDefault();
                currentPage = i;
                showPage(currentPage);
            });
            paginationContainer.appendChild(pageItem);
        }

        // Nút Next
        const nextItem = document.createElement('li');
        nextItem.className = 'page-item';
        nextItem.innerHTML = `<a class="page-link" href="#">Next</a>`;
        nextItem.addEventListener('click', function (e) {
            e.preventDefault();
            if (currentPage < totalPages) {
                currentPage++;
                showPage(currentPage);
            }
        });
        paginationContainer.appendChild(nextItem);

        // Đặt trang đầu tiên là trang đang hoạt động
        updatePagination(currentPage);
    }

    function updatePagination(activePage) {
        const paginationItems = Array.from(paginationContainer.querySelectorAll('.page-item'));
        paginationItems.forEach((item, index) => {
            if (index === activePage) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });

        // Vô hiệu hóa nút Previous khi ở trang đầu tiên
        if (currentPage === 1) {
            paginationItems[0].classList.add('disabled');
        } else {
            paginationItems[0].classList.remove('disabled');
        }

        // Vô hiệu hóa nút Next khi ở trang cuối cùng
        if (currentPage === totalPages) {
            paginationItems[paginationItems.length - 1].classList.add('disabled');
        } else {
            paginationItems[paginationItems.length - 1].classList.remove('disabled');
        }
    }

    // Khởi tạo
    createPagination();
    showPage(currentPage);
});
