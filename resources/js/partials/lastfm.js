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
}

function printListening(data) {
    const cleanData = data.toptracks.track
    console.log(cleanData)

    const newList = document.createElement('ul')
    cleanData.map(item => {
        const listItem = document.createElement('li')
        //
        // console.log(item)

        const currentSize = item.image[0].size
        const imageUrl = item.image[0]['#text']
        const currentArtist = item.artist.name
        const song = item.name
        const image = document.createElement('img')
        image.src = imageUrl
        image.alt = song
        image.style.height = '40px'
        image.style.width = '40px'
        listItem.innerText = `${song} - ${currentArtist} - ${currentSize}`
        listItem.appendChild(image)
        newList.appendChild(listItem)
    })
    outputDom.appendChild(newList)
}

if (url.includes('last')) {
    lastFmButton.addEventListener('click', callBackend)
}
