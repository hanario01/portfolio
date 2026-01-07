document.addEventListener("DOMContentLoaded", () => {

    const targets = document.querySelectorAll(
        ".about-text, .menu-list"
    );

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {

                if (entry.target.classList.contains("menu-list")) {
                    setTimeout(() => {
                        entry.target.classList.add("is-active");
                    }, index * 200);
                } else {
                    entry.target.classList.add("is-active");
                }

                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    targets.forEach(target => observer.observe(target));
});
