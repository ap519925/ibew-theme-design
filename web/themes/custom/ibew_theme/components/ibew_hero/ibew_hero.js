// Initialize Splide if not already handled generally
document.querySelectorAll(".ibew-hero .splide").forEach(el => {
    if(!el.dataset.init) {
        el.dataset.init = true;
        new Splide(el).mount();
    }
});