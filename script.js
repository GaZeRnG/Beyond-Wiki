document.addEventListener("DOMContentLoaded", () => {
    const slides = [...document.querySelectorAll(".wiki-links-images .mod")];
    const prevBtn = document.getElementById("prev");
    const nextBtn = document.getElementById("next");

    if (!slides.length || !prevBtn || !nextBtn) {
        console.warn("Carousel: missing elements");
        return;
    }

    const positions = ["far-left", "left", "center", "right", "far-right", "hidden"];
    let currentIndex = 2;

    const updatePositions = () => {
        slides.forEach((slide, i) => {
            let posIndex = (i - currentIndex + 2 + slides.length) % slides.length;

            if (posIndex >= positions.length) posIndex = positions.length - 1;

            slide.setAttribute("data-pos", positions[posIndex]);

            slide.onclick = positions[posIndex] === "center" ? null : (e) => {
                e.preventDefault();
                const direction = posIndex < 2 ? -1 : 1;
                rotate(direction);
            };
        });
    };

    const rotate = (direction) => {
        currentIndex = (currentIndex + direction + slides.length) % slides.length;
        updatePositions();
    };

    prevBtn.onclick = () => rotate(-1);
    nextBtn.onclick = () => rotate(1);
    
    // Keyboard
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") rotate(-1);
        if (e.key === "ArrowRight") rotate(1);
    });

    // Touch
    let touchStartX = 0;
    let touchEndX = 0;
    const container = document.querySelector(".wiki-links");

    container.addEventListener("touchstart", (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, {passive: true}); 

    container.addEventListener("touchend", (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, {passive: true});

    const handleSwipe = () => {
        const swipeThreshold = 50;
        const diff = touchEndX - touchStartX;

        if (Math.abs(diff) > swipeThreshold) {
            rotate(diff > 0 ? -1 : 1);
        }
    };

    updatePositions();
});