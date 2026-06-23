document.addEventListener("DOMContentLoaded", function () {

    const container = document.getElementById("videoScroll");
    const buttons = document.querySelectorAll(".scroll-btn");

    if (!container || buttons.length === 0) return;

    const scrollAmount = 340;

    buttons.forEach(btn => {
        btn.addEventListener("click", function () {
            const dir = Number(this.dataset.dir);

            container.scrollBy({
                left: dir * scrollAmount,
                behavior: "smooth"
            });
        });
    });

});