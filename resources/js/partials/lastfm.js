const url = window.location.href
const recentTracksBtn = document.querySelector('#recent-tracks')
const last7DaysBtn = document.querySelector('#last-7-days')
const last30DaysBtn = document.querySelector('#last-30-days')
const topArtistBtn = document.querySelector('#top-artist')
const topAlbumBtn = document.querySelector('#top-album')
const outputDom = document.querySelector('#showTracks')

// functions
async function callBackend(endpoint) {
    // trim
    const cleanEndpoint = endpoint.trim()
    // show animation
    showSpinner()
    // get response
    const response = await fetch(cleanEndpoint)
    const data = await response.json()
    // Process Data
    processData(data)
    // remove Animation
    removeSpinner()
}

function processData(data) {
    // clean html
    outputDom.innerHTML = ''

    // Try
    try {
        // key // pull out keys from data
        const key = Object.keys(data)[0]
        // if else
        if (key === 'recenttracks') {
            const recentTracks = data[key].track
            // print
            printRecentTracks(recentTracks)
        } else if (key === 'topartists') {
            const topArtists = data[key].artist
            // print
            printTopArtistsOrAlbum(topArtists)
        } else if (key === 'topalbums') {
            // print
            const topAlbums = data[key].album
            printTopArtistsOrAlbum(topAlbums)
        }
    } catch (error) {
        console.log(error)
        outputDom.innerText = `${error}`
    }
}

function printTopArtistsOrAlbum(data) {
    // create a new ul
    const newList = document.createElement('ul')
    // loop
    for (const [index, item] of data.entries()) {
        const listItem = document.createElement('li')
        // log
        // console.log(item)
        const imageUrl = item.image[3]['#text']
        const artistName = item.name
        const playcount = item.playcount
        const url = item.url
        console.log(artistName)
        console.log(url)
        console.log(playcount)

        const textContainer = document.createElement('div')
        const image = document.createElement('img')
        textContainer.innerHTML = `
        <div class="counter">N° <strong>${index + 1}</strong></div>
        <div class="playcount">PlayCount: <strong>${playcount}</strong></div>
        <div class="artist-name"> <a href="${url}">Name: ${artistName}</a></div>
        `
        image.src = imageUrl
        image.alt = artistName
        image.style.height = '160px'
        image.style.width = '160px'
        textContainer.classList.add('text-container')
        listItem.classList.add('last-fm-list-style')
        listItem.appendChild(image)
        listItem.appendChild(textContainer)
        newList.appendChild(listItem)
    }
    outputDom.appendChild(newList)
}

function printRecentTracks(recentTracks) {
    // create a new ul
    const newList = document.createElement('ul')
    // loop
    for (const item of recentTracks) {
        const listItem = document.createElement('li')
        const imageUrl = item.image[3]['#text']
        const song = item.name
        const textContainer = document.createElement('div')
        const image = document.createElement('img')
        const album = item.album['#text']
        const artist = item.artist['#text']
        textContainer.innerHTML = `
        <div class="song-name">Song: <strong>${song}</strong></div>
        <div class="artist-name">Artist: ${artist}</div>
        <div class="album-name">Album: ${album}</div>
        `
        image.src = imageUrl
        image.alt = song
        image.style.height = '80px'
        image.style.width = '80px'
        textContainer.classList.add('text-container')
        listItem.classList.add('last-fm-list-style')
        listItem.appendChild(image)
        listItem.appendChild(textContainer)
        newList.appendChild(listItem)
    }
    outputDom.appendChild(newList)
}

function showSpinner() {
    document.querySelector('.spinner').classList.add('show')
}

function removeSpinner() {
    document.querySelector('.spinner').classList.remove('show')
}

function init() {
    // listeners
    recentTracksBtn.addEventListener('click', () => {
        callBackend('/last-fm/recent-tracks')
    })
    last7DaysBtn.addEventListener('click', () => callBackend('/last-7-days'))
    last30DaysBtn.addEventListener('click', () => callBackend('/last-30-days'))
    topArtistBtn.addEventListener('click', () => callBackend('/top-artist'))
    topAlbumBtn.addEventListener('click', () => callBackend('/top-album'))

    // set timeout
    setTimeout(() => callBackend('/last-fm/recent-tracks'), 100)
}

// init page
if (url.includes('listens')) {
    init()
}
