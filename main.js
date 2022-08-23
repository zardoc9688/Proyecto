let header = document.querySelector('.header');
let hambumgerMenu = document.querySelector('.hamburger-menu');

window.addEventListener('scroll', function(){
    let windowPosition = window.scrollY>0;
    header.classList.toggle('active',windowPosition)
})

hambumgerMenu.addEventListener('click', function () {
    header.classList.toggle('menu-open');
})
