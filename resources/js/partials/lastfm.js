const url = window.location.href
const recentTracksBtn = document.querySelector('#recent-tracks')
const last7DaysBtn = document.querySelector('#last-7-days')
const last30DaysBtn = document.querySelector('#last-30-days')
const topArtistBtn = document.querySelector('#top-artist')
const topAlbumBtn = document.querySelector('#top-album')
const outputDom = document.querySelector('#showTracks')

async function passingDataToBackend(artists) {
    const backendRoute = '/fetch-artists-images'
    console.log(artists)
    const stringArtists = artists.join(',')
    console.log(stringArtists)

    const response = await fetch(
        `${backendRoute}?artists=${encodeURIComponent(stringArtists)}`
    )
    const data = await response.json()
    console.log(data)

    return data
}

// functions
async function callBackend(endpoint) {
    // trim
    const cleanEndpoint = endpoint.trim()
    // show animation
    showSpinner()
    try {
        // get response
        const response = await fetch(cleanEndpoint)
        const data = await response.json()
        // Process Data
        processData(data)
    } catch (error) {
        //
        outputDom.innerText = `${error}`
    }
    // remove Animation
    removeSpinner()
}

function processData(data) {
    // clean html
    outputDom.innerHTML = ''

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
}

async function printTopArtistsOrAlbum(data) {
    // console.log(data)
    const artists = []
    // const endpoints = []
    // create a new ul
    const newList = document.createElement('ul')
    // loop
    for (const [index, item] of data.entries()) {
        const listItem = document.createElement('li')
        // log
        const imageUrl = item.image[3]['#text']
        const artistName = item.name
        const playcount = item.playcount
        const url = item.url

        // push artist name
        artists.push(artistName.toLowerCase())

        const textContainer = document.createElement('div')
        const image = document.createElement('img')
        textContainer.innerHTML = `
        <div class="counter">N° | <strong>${index + 1}</strong></div>
        <div class="playcount">PlayCount | <strong>${playcount}</strong></div>
        <div class="artist-name"> <a href="${url}"> <strong>${artistName}</strong></a></div>
        `
        image.src = imageUrl
        image.alt = artistName
        image.style.height = '160px'
        image.style.width = '160px'
        image.setAttribute('loading', 'lazy')
        textContainer.classList.add('text-container')
        listItem.classList.add('last-fm-list-style')
        listItem.appendChild(image)
        listItem.appendChild(textContainer)
        newList.appendChild(listItem)
    }
    // printing list item
    outputDom.appendChild(newList)

    // call backend to fetch images
    const images = await passingDataToBackend(artists)
    // console.log(images)
    // get all images field
    let fields = document.querySelectorAll('.last-fm-list-style > img')
    // set a counter
    let counter = 0
    // foreach on data
    for (const key in images) {
        // skipping
        if (!Object.hasOwn(images, key)) continue
        // get current image
        const imageUrl = images[key]
        // printing
        fields[counter].src = imageUrl
        // incrementing counter
        counter++
    }
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
        <div class="song-name">Song | <strong>${song}</strong></div>
        <div class="artist-name">Artist | <strong>${artist}</strong></div>
        <div class="album-name">Album | <strong>${album}</strong></div>
        `
        image.src = imageUrl
        image.alt = song
        image.style.height = '160px'
        image.style.width = '160px'
        image.setAttribute('loading', 'lazy')
        textContainer.classList.add('text-container')
        listItem.classList.add('last-fm-list-style')
        listItem.appendChild(image)
        listItem.appendChild(textContainer)
        newList.appendChild(listItem)
    }
    outputDom.appendChild(newList)
}

function createEnpoints(artists) {
    const endpoints = []
    artists.forEach(artist => {
        let newArtistName = ''
        for (let index = 0; index < artist.length; index++) {
            let letter = artist[index]
            // console.log(letter)
            if (letter === ' ') {
                letter = '+'
            }
            newArtistName += letter
        }
        // console.log(newArtistName)
        endpoints.push(
            `https://api.deezer.com/search/artist?q=${newArtistName}&limit=1`
        )
    })
    return endpoints
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
