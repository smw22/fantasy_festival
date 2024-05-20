//header ham-menu transition
document.addEventListener('DOMContentLoaded', (event) => {
    const offScreenMenu = document.querySelector('.off-screen-menu');
    const hamMenu = document.querySelector('.ham-menu');

    hamMenu.addEventListener('click', () => {
        offScreenMenu.classList.toggle('active');
    });
});

//scroll animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            entry.target.classList.remove("show");
        }
    });
});

const hiddenElements = document.querySelectorAll(".information-text-box");
hiddenElements.forEach((el) => observer.observe(el));