const hamb = document.querySelector('.hamb');
const closeMenu = document.querySelector('.close-menu');
const header = document.querySelector('.header-page');

hamb.addEventListener('click', () => {
    header.classList.add('open');
});

closeMenu.addEventListener('click', () => {
    header.classList.remove('open');
})