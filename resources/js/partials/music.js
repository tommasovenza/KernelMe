const url = window.location.href
const musicImages = document.querySelectorAll('.music-card > img')
console.log(musicImages)

function showMusicCard(e) {
    console.log(e.target)
}

if (url.includes('music')) {
    musicImages.forEach(card => card.addEventListener('click', showMusicCard))
}
