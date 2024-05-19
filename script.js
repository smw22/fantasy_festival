document.addEventListener('DOMContentLoaded', (event) => {
    const offScreenMenu = document.querySelector('.off-screen-menu');
    const hamMenu = document.querySelector('.ham-menu');

    hamMenu.addEventListener('click', () => {
        offScreenMenu.classList.toggle('active');
    });
});

anime({
    targets: '.title-box',
    translateX: 250,
    rotateZ: 360,
    duration: 3000,
    loop: true,
});