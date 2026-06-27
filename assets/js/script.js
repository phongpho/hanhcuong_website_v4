document.addEventListener("DOMContentLoaded", function () {
    // --- 1. XỬ LÝ MOBILE MENU ---
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector(".nav-menu");

    function closeMobileNav() {
        if (navMenu) {
            navMenu.classList.remove("active");
        }
        document.querySelectorAll(".nav-item.dropdown-open").forEach(function (item) {
            item.classList.remove("dropdown-open");
        });
    }

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", function (e) {
            e.stopPropagation();
            navMenu.classList.toggle("active");
        });

        document.addEventListener("click", function (e) {
            if (navMenu.classList.contains("active") && 
                !navMenu.contains(e.target) && 
                !menuToggle.contains(e.target)) {
                closeMobileNav();
            }
        });
    }

    // --- 2. XỬ LÝ DROPDOWN "LĨNH VỰC" ---
    const toggleIcons = document.querySelectorAll('.dropdown-toggle-icon');
    
    toggleIcons.forEach(function (icon) {
        icon.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation(); // Rất quan trọng: Ngăn click nổi bọt

            // Tìm thẻ li.nav-item chứa nút mũi tên này
            const parentItem = icon.closest('.nav-item');
            if (!parentItem) return;

            const isOpen = parentItem.classList.contains("dropdown-open");

            // Đóng các dropdown khác đang mở (nếu có)
            document.querySelectorAll(".nav-item.dropdown-open").forEach(function (item) {
                item.classList.remove("dropdown-open");
            });

            // Nếu chưa mở thì mở lên
            if (!isOpen) {
                parentItem.classList.add("dropdown-open");
            }
        });
    });

    // --- 3. XỬ LÝ TAB LĨNH VỰC ---
    const fieldNodes = document.querySelectorAll(".fields-node");
    const fieldPanels = document.querySelectorAll(".fields-panel");

    fieldNodes.forEach(node => {
        node.addEventListener("click", function () {
            fieldNodes.forEach(n => n.classList.remove("active"));
            this.classList.add("active");

            fieldPanels.forEach(panel => panel.classList.remove("active"));
            const targetId = this.getAttribute("data-target");
            const targetPanel = document.getElementById(targetId);
            
            if (targetPanel) {
                targetPanel.classList.add("active");
            }
        });
    });

    /* ĐÃ TẮT TÍNH NĂNG TỰ ĐÓNG KHI CUỘN TRANG.
      Tính năng này gây xung đột trên mobile khi người dùng vô tình chạm lướt nhẹ 
      hoặc khi layout bị đẩy xuống lúc mở menu con. 
    */

    // --- 4. KHỞI TẠO AOS ---
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120,
            easing: 'ease-out'
        });
    } 
});