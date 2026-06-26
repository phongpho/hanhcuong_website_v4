document.addEventListener("DOMContentLoaded", function () {
    // --- 1. XỬ LÝ MOBILE MENU (TRƯỢT TRÁI + ĐÓNG KHI BẤM NGOÀI) ---
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
        // Bấm vào nút 3 gạch để bật/tắt menu
        menuToggle.addEventListener("click", function (e) {
            e.stopPropagation(); // Ngăn sự kiện nổi bọt lên document
            navMenu.classList.toggle("active");
        });

        // Tự động đóng menu khi bấm vào bất kỳ vùng nào khác ngoài menu và nút 3 gạch
        document.addEventListener("click", function (e) {
            // Nếu menu đang mở VÀ vị trí bấm KHÔNG NẰM TRONG menu VÀ KHÔNG PHẢI nút 3 gạch
            if (navMenu.classList.contains("active") && 
                !navMenu.contains(e.target) && 
                !menuToggle.contains(e.target)) {
                closeMobileNav();
            }
        });
    }

    // Dropdown "Lĩnh vực" trên mobile (tap để mở/đóng submenu)
    document.querySelectorAll(".nav-item.dropdown > a").forEach(function (link) {
        link.addEventListener("click", function (e) {
            if (window.innerWidth > 768) return;

            e.preventDefault();
            var parent = link.parentElement;
            var isOpen = parent.classList.contains("dropdown-open");

            document.querySelectorAll(".nav-item.dropdown-open").forEach(function (item) {
                item.classList.remove("dropdown-open");
            });

            if (!isOpen) {
                parent.classList.add("dropdown-open");
            }
        });
    });

    // --- 2. XỬ LÝ TAB LĨNH VỰC ---
    const fieldNodes = document.querySelectorAll(".fields-node");
    const fieldPanels = document.querySelectorAll(".fields-panel");

    fieldNodes.forEach(node => {
        node.addEventListener("click", function () {
            // Xóa trạng thái active cũ
            fieldNodes.forEach(n => n.classList.remove("active"));
            // Kích hoạt nút mới
            this.classList.add("active");

            // Ẩn nội dung cũ
            fieldPanels.forEach(panel => panel.classList.remove("active"));
            // Hiện nội dung mới
            const targetId = this.getAttribute("data-target");
            const targetPanel = document.getElementById(targetId);
            
            if (targetPanel) {
                targetPanel.classList.add("active");
            }
        });
    });


    window.addEventListener("scroll", function() {
        if (navMenu && navMenu.classList.contains("active")) {
            closeMobileNav();
        }
    });

    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000, // Tốc độ 1 giây
            once: true,     // Cuộn xuống hiện 1 lần (đổi thành false nếu muốn cuộn lên/xuống liên tục)
            offset: 120,
            easing: 'ease-out'
        });
    } 
    
    
});