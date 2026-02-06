document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("opacity-0", "translate-y-8");
                observer.unobserve(entry.target); // animate only once
            }
        });
    }, { threshold: 0.2 });

    const animatedElements = document.querySelectorAll("[data-animate]");
    animatedElements.forEach(el => observer.observe(el));
});
