const url = window.location.href
const musicGrid = document.querySelector('.music-grid-container')
const musicImages = document.querySelectorAll('.music-card > img')
// console.log(musicImages)
const modal = document.querySelector('#myModal')

function closeModal(e) {
    if (e.target.classList.contains('close')) {
        e.target.parentElement.parentElement.style = ''
    }
}

function showMusicCard(e) {
    if (e.target.classList.contains('instrument')) {
        console.log(e.target)
        // show modal
        modal.style.display = 'flex'
        // const musicCard = document.createElement('div')
        // get src and alt attributes
        const src = e.target.src
        const alt = e.target.alt
        console.log(src)
        modal.innerHTML = `
        <div class="modal-content">
        <span class="close">&times;</span>
            <img src="${src}" alt="${alt}">
            <p>${alt}</p>
        </div>
        `
    } else {
        return
    }
}

if (url.includes('music')) {
    musicGrid.addEventListener('click', showMusicCard)
    modal.addEventListener('click', closeModal)
}
