let header = document.querySelector('.header');
let hambumgerMenu = document.querySelector('.hamburger-menu');

hambumgerMenu.addEventListener('click', function () {
    header.classList.toggle('menu-open');
})