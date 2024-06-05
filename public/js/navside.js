function openSidebar() {
    let sidebar = document.getElementById('sidebar')
    let overlay = document.getElementById('overlay')

    sidebar.classList.remove('hidden')
    overlay.classList.remove('hidden')
}

function closeSidebar()
{
    let sidebar = document.getElementById('sidebar')
    let overlay = document.getElementById('overlay')

    sidebar.classList.add('hidden')
    overlay.classList.add('hidden')
}