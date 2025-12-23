const url = window.location.href
const recentTracksBtn = document.querySelector('#recent-tracks')
const last7DaysBtn = document.querySelector('#last-7-days')
const last30DaysBtn = document.querySelector('#last-30-days')
const outputDom = document.querySelector('#showTracks')

// functions
async function callBackend(endpoint) {
    console.log('called last fm!')

    const cleanEndpoint = endpoint.trim()
    console.log(cleanEndpoint)

    // fetch endpoint
    if (cleanEndpoint.includes('recent')) {
        const response = await fetch(cleanEndpoint)
        const data = await response.json()
        printRecentTracks(data)
    } else if (cleanEndpoint.includes('7')) {
        console.log('seven')
    } else {
        console.log('thirty')
    }

    // OLD
    // const response = await fetch('/last-fm/top-tracks')
    // // await for data
    // const secondResponse = await fetch()
    // const newData = await secondResponse.json()

    // print data
    // printTopTracks(data)
}

function printRecentTracks(data) {
    console.log(data)
    // clean html
    outputDom.innerHTML = ''
    // get recent tracks
    const recent = data.recenttracks.track
    // create a new ul
    const newList = document.createElement('ul')
    // loop
    recent.map(item => {
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

function printListening(data) {
    const cleanData = data.toptracks.track
    console.log(cleanData)

    const newList = document.createElement('ul')
    cleanData.map(item => {
        const listItem = document.createElement('li')
        //
        console.log(item)

        const currentSize = item.image[0].size
        const imageUrl = item.image[0]['#text']
        const currentArtist = item.artist.name
        const song = item.name
        const image = document.createElement('img')
        image.src = imageUrl
        image.alt = song
        image.style.height = '40px'
        image.style.width = '40px'
        listItem.innerText = `${song} - ${currentArtist} - ${album}`
        listItem.appendChild(image)
        newList.appendChild(listItem)
    })
    outputDom.appendChild(newList)
}

if (url.includes('listens')) {
    // listeners
    recentTracksBtn.addEventListener('click', () => {
        callBackend('/last-fm/recent-tracks')
    })
    last7DaysBtn.addEventListener('click', () => callBackend('last-7-days'))
    last30DaysBtn.addEventListener('click', () => callBackend('last-30-days'))
}
