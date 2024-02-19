const hamburger = document.querySelector('.hamburger');
const menuPrimary = document.querySelector('#menu-primary');


hamburger.addEventListener('click', () => {
    hamburger.classList.toggle("active");
    menuPrimary.classList.toggle("active");
}, false);


document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    menuPrimary.classList.remove('active');
}, false));