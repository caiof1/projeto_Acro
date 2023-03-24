const observer = new IntersectionObserver(entries => {
    Array.from(entries).forEach( entry => {
        if(entry.intersectionRatio >= 1) {
            entry.target.classList.add('entry-off')
        }
    })
}, {
    threshold: [0, .5, 1]
})

Array.from(document.querySelectorAll('.entry')).forEach( element => {
    observer.observe(element)
})