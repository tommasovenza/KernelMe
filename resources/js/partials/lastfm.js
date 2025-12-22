const url = window.location.href
const lastFmButton = document.querySelector('#last-fm')
const outputDom = document.querySelector('#showTracks')

// functions
async function callBackend() {
    console.log('called last fm!')

    // fetch endpoint
    const response = await fetch('/last-fm/top-tracks')
    // await for data
    const data = await response.json()
    const secondResponse = await fetch('/last-fm/recent-tracks')
    const newData = await secondResponse.json()

    // print data
    // printTopTracks(data)
    printRecentTracks(newData)
}

function printRecentTracks(data) {
    console.log(data)
    outputDom.innerHTML = ''
    const recent = data.recenttracks.track

    const newList = document.createElement('ul')
    recent.map(item => {
        const listItem = document.createElement('li')
        //
        console.log(item)

        const currentSize = item.image[0].size
        const imageUrl = item.image[0]['#text']
        const currentArtist = item.artist.name
        const song = item.name
        const text = document.createElement('p')
        const image = document.createElement('img')
        const album = item.album['#text']
        const artist = item.artist['#text']

        // console.log(album)
        // console.log(artist)

        image.src = imageUrl
        image.alt = song
        image.style.height = '40px'
        image.style.width = '40px'
        text.innerText = `${song} - ${artist} - ${album}`
        listItem.classList.add('last-fm-list-style')
        listItem.appendChild(image)
        listItem.appendChild(text)
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
    lastFmButton.addEventListener('click', callBackend)
}
