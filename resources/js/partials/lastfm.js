const url = window.location.href
const recentTracksBtn = document.querySelector('#recent-tracks')
const last7DaysBtn = document.querySelector('#last-7-days')
const last30DaysBtn = document.querySelector('#last-30-days')
const topArtistBtn = document.querySelector('#top-artist')
const topAlbumBtn = document.querySelector('#top-album')
const outputDom = document.querySelector('#showTracks')

// functions
async function callBackend(endpoint) {
    console.log('called last fm!')

    const cleanEndpoint = endpoint.trim()
    console.log(cleanEndpoint)

    // don't need an if else here!
    const response = await fetch(cleanEndpoint)
    const data = await response.json()

    // console.log(data)

    printData(data)

    // fetch endpoint
    // if (cleanEndpoint.includes('recent')) {
    // } else if (cleanEndpoint.includes('7')) {
    //     console.log('seven')
    // } else if (cleanEndpoint.includes('30')) {
    //     console.log('thirty')
    // } else if (cleanEndpoint.includes('artist')) {
    //     console.log('artist endpoint')
    // } else {
    //     console.log('called album endpoint')
    // }
}

function printData(data) {
    // clean html
    outputDom.innerHTML = ''

    try {
        const key = Object.keys(data)[0]

        // IMPORTANT => is better to read key and then print data
        // if key === 'recenttracks' do this
        // if key === 'topartists' do that

        console.log(key)

        // const recentTracks = data[key].track

        // console.log(recentTracks)

        // if (recentTracks === undefined) {
        //     console.log('recent not found')

        //     const topArtist = data[key].artist
        //     console.log(topArtist)
        //     return
        // } else {
        //     printRecentTracks(recentTracks)
        // }
    } catch (error) {
        console.log(error)
    }

    // get recent tracks
    // const recent = data.recenttracks.track
}

function printRecentTracks(recentTracks) {
    // create a new ul
    const newList = document.createElement('ul')
    // loop
    recentTracks.map(item => {
        const listItem = document.createElement('li')
        // log
        // console.log(item)
        const currentSize = item.image[3].size // delete
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
    })
    outputDom.appendChild(newList)
}

// function printListening(data) {
//     const cleanData = data.toptracks.track
//     console.log(cleanData)

//     const newList = document.createElement('ul')
//     cleanData.map(item => {
//         const listItem = document.createElement('li')
//         //
//         console.log(item)

//         const currentSize = item.image[0].size
//         const imageUrl = item.image[0]['#text']
//         const currentArtist = item.artist.name
//         const song = item.name
//         const image = document.createElement('img')
//         image.src = imageUrl
//         image.alt = song
//         image.style.height = '40px'
//         image.style.width = '40px'
//         listItem.innerText = `${song} - ${currentArtist} - ${album}`
//         listItem.appendChild(image)
//         newList.appendChild(listItem)
//     })
//     outputDom.appendChild(newList)
// }

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
