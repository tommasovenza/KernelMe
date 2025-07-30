// Element
const icon = document.querySelector('.icon')
// initial mode
let lightMode = false

if (localStorage.getItem('light-dark-mode') !== null) {
    lightMode = localStorage.getItem('light-dark-mode')
}

// set localStorage
if (!lightMode) {
    localStorage.setItem('light-dark-mode', 'light')
}

function checkLightDarkMode() {
    if (localStorage.getItem('light-dark-mode') !== null) {
        const whichMode = localStorage.getItem('light-dark-mode')
        console.log(whichMode)

        const body = document.body
        if (whichMode === 'dark') {
            body.classList.add('dark-theme')
            icon.innerHTML = ''
            icon.innerHTML = `<i class="fa-solid fa-sun"></i>`
        } else {
            body.classList.remove('dark-theme')
            icon.innerHTML = `<i class="fa-solid fa-moon"></i>`
            localStorage.setItem('light-dark-mode', 'light')
            lightMode = true
        }
    }
}

function changeMode(e) {
    //
    if (e.target.classList.contains('fa-moon')) {
        lightMode = false
        localStorage.setItem('light-dark-mode', 'dark')
    } else {
        lightMode = true
        localStorage.setItem('light-dark-mode', 'light')
    }
    checkLightDarkMode()
}

// event listener
icon.addEventListener('click', changeMode)
// init
checkLightDarkMode()
