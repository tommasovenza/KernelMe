let lightMode = true;
console.log(lightMode);

// set localStorage
localStorage.setItem("light-dark-mode", "light");

if (!lightMode) {
    localStorage.setItem("light-dark-mode", "dark");
}

function checkLightDarkMode() {
    if (localStorage.getItem("light-dark-mode") !== null) {
        const whichMode = localStorage.getItem("light-dark-mode");
        console.log(whichMode);
    }
}

checkLightDarkMode();
