const hamburger = document.querySelector('.menu-hidden')
const closeBtn = document.querySelector('.cross-hidden > i')
const menuControls = document.querySelector('.menu-controls')

function closeMenu() {
    document.querySelector('.navigation-mobile').classList.toggle('active')
}

function showMenu(e) {
    if (
        e.target.classList.contains('fa-bars') ||
        e.target.classList.contains('menu-hidden')
    ) {
        document.querySelector('.navigation-mobile').classList.toggle('active')
    }
}
menuControls.addEventListener('click', showMenu)
closeBtn.addEventListener('click', closeMenu)
