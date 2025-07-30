let lightMode = true
console.log(lightMode)
const icon = document.querySelector('.icon')

// set localStorage
localStorage.setItem('light-dark-mode', 'light')

if (!lightMode) {
    localStorage.setItem('light-dark-mode', 'dark')
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

checkLightDarkMode()
