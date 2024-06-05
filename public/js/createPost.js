function createPost() {
    let box = document.getElementById('createPost')
    let overlay = document.getElementById('overlay')
    let container = document.getElementById('container')

    box.classList.remove('hidden')
    box.classList.add('flex');
    container.classList.add('overflow-y-hidden')
    overlay.classList.remove('hidden')
}

function cancelCreatePost() {
    let box = document.getElementById('createPost')
    let overlay = document.getElementById('overlay')
    let container = document.getElementById('container')

    box.classList.add('hidden')
    box.classList.remove('flex');
    container.classList.remove('overflow-y-hidden')
    overlay.classList.add('hidden')
}