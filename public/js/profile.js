function addEmail() {
    let box = document.getElementById('addEmail')
    let overlay = document.getElementById('overlay')
    let body = document.getElementById('body')

    box.classList.remove('hidden')
    box.classList.add('flex');
    body.classList.add('overflow-y-hidden')
    overlay.classList.remove('hidden')
}

function cancelAddEmail() {
    let box = document.getElementById('addEmail')
    let overlay = document.getElementById('overlay')
    let body = document.getElementById('body')

    box.classList.add('hidden')
    box.classList.remove('flex');
    body.classList.remove('overflow-y-hidden')
    overlay.classList.add('hidden')
}

function addWhatsapp() {
    let box = document.getElementById('addWhatsapp')
    let overlay = document.getElementById('overlay')
    let body = document.getElementById('body')

    box.classList.remove('hidden')
    box.classList.add('flex');
    body.classList.add('overflow-y-hidden')
    overlay.classList.remove('hidden')
}

function cancelAddWhatsapp() {
    let box = document.getElementById('addWhatsapp')
    let overlay = document.getElementById('overlay')
    let body = document.getElementById('body')

    box.classList.add('hidden')
    box.classList.remove('flex');
    body.classList.remove('overflow-y-hidden')
    overlay.classList.add('hidden')
}