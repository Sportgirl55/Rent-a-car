window.onload = function () {
    const hamb = document.querySelector('.hamb');
    const closeMenu = document.querySelector('.close-menu');
    const header = document.querySelector('.header-page');
    
    hamb.addEventListener('click', () => {
        header.classList.add('open');
    });
    
    closeMenu.addEventListener('click', () => {
        header.classList.remove('open');
    })
    
    if (document.querySelector('.btn-scroll')) {
        const anchors = document.querySelector('.btn-scroll');
    
        anchors.addEventListener('click', () => {
            const blockID = document.querySelector('.cars');
        
            blockID.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        })
    }
}
    
    

