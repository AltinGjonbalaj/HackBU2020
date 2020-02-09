const progBar = document.getElementsByClassName('progress-bar')[0]
setInterval(() => {
    const compStyle = getComputedStyle(progBar)
    const width = parseFloat(compStyle.getPropertyValue ('--width'))
    progBar.style.setProperty('--width', width + .1)
}, 5)
