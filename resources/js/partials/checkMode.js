// Elements
const body = document.body
const icon = document.querySelector('.icon')
const iconMobile = document.querySelector('.icon-mobile')
let whichMode = localStorage.getItem('light-dark-mode') || 'dark'

function checkLightDarkMode() {
    if (whichMode === 'dark') {
        body.classList.add('dark-theme')
        icon.innerHTML = `<i class="fa-solid fa-sun"></i>`
        iconMobile.innerHTML = `<i class="fa-solid fa-sun"></i>`
    } else {
        body.classList.remove('dark-theme')
        icon.innerHTML = `<i class="fa-solid fa-moon"></i>`
        iconMobile.innerHTML = `<i class="fa-solid fa-moon"></i>`
    }
}

function changeMode(e) {
    if (e.target.classList.contains('fa-moon')) {
        whichMode = 'dark'
    } else {
        whichMode = 'light'
    }
    // save state in localStorage
    localStorage.setItem('light-dark-mode', whichMode)
    // reapply theme and icons
    checkLightDarkMode()
}

// Dark/Light Mode on Desktop and Mobile
icon.addEventListener('click', changeMode)
iconMobile.addEventListener('click', changeMode)
// init
checkLightDarkMode()
