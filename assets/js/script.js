document.addEventListener("DOMContentLoaded", function () {
    // --- 1. XỬ LÝ MOBILE MENU (TRƯỢT TRÁI + ĐÓNG KHI BẤM NGOÀI) ---
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector(".nav-menu");

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
                navMenu.classList.remove("active");
            }
        });
    }

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

    
    
});