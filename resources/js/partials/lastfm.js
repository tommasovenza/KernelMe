const url = window.location.href
const lastFmButton = document.querySelector('#last-fm')

// functions
function callLastFmEndpoint() {
    console.log('called last fm!')
}

if (url.includes('last')) {
    lastFmButton.addEventListener('click', callLastFmEndpoint)
}
