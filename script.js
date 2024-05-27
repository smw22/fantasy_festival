//header ham-menu transition
document.addEventListener('DOMContentLoaded', (event) => {
    const offScreenMenu = document.querySelector('.off-screen-menu');
    const hamMenu = document.querySelector('.ham-menu');
    const spanTopLine = document.querySelector('.ham-menu-first-span');
    const spanDownLine = document.querySelector('.ham-menu-last-span');
    const spanMidleLine = document.querySelector('.ham-menu-midle-span');



    hamMenu.addEventListener('click', () => {
        offScreenMenu.classList.toggle('active');
        spanTopLine.classList.toggle('active');
        spanDownLine.classList.toggle('active');
        spanMidleLine.classList.toggle('active');

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
const hiddenElementsTitle = document.querySelectorAll(".title-box");
hiddenElements.forEach((el) => observer.observe(el));
hiddenElementsTitle.forEach((el) => observer.observe(el));
