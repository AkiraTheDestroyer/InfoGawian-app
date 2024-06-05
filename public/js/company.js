function createCompany() {
    let box = document.getElementById('createCompany')
    let overlay = document.getElementById('overlay')
    let body = document.getElementById('body')

    box.classList.remove('hidden')
    box.classList.add('flex');
    body.classList.add('overflow-y-hidden')
    overlay.classList.remove('hidden')
}

function cancelCreateCompany() {
    let box = document.getElementById('createCompany')
    let overlay = document.getElementById('overlay')
    let body = document.getElementById('body')

    box.classList.add('hidden')
    box.classList.remove('flex');
    body.classList.remove('overflow-y-hidden')
    overlay.classList.add('hidden')
}

function editCompany() {
    let box = document.getElementById('editCompany')
    let overlay = document.getElementById('overlay')
    let body = document.getElementById('body')

    box.classList.remove('hidden')
    box.classList.add('flex');
    body.classList.add('overflow-y-hidden')
    overlay.classList.remove('hidden')
}

function cancelEditCompany() {
    let box = document.getElementById('editCompany')
    let overlay = document.getElementById('overlay')
    let body = document.getElementById('body')

    box.classList.add('hidden')
    box.classList.remove('flex');
    body.classList.remove('overflow-y-hidden')
    overlay.classList.add('hidden')
}