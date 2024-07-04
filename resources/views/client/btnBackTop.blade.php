<button onclick="topFunction()" id="backToTopBtn" title="Lên đầu trang">
    <i class="fa fa-angle-double-up"></i>
</button>

<script>
    let backToTopBtn = document.getElementById("backToTopBtn");

    // Hiển thị nút khi cuộn xuống 20px từ đầu trang
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    }

    // Khi nhấp vào nút, cuộn lên đầu trang
    function topFunction() {
        document.body.scrollTop = 0; // Dành cho Safari
        document.documentElement.scrollTop = 0; // Dành cho Chrome, Firefox, IE và Opera
    }
</script>