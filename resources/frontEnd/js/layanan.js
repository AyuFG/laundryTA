document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.overlay').addEventListener('click', () => {
        dismissModal()
    })

    document.getElementById('close-modal').addEventListener('click', () => {
        dismissModal()
    })

    document.getElementById('desc-toggle').addEventListener('click', () => {
        presentModal('modal1')
    })

    document.getElementById('button-modal-quote-2').addEventListener('click', () => {
        presentModal('modal-quote-2')
    })
})

function presentModal(id) {
    const modal = document.getElementById(id)
    const overlay = document.querySelector('.overlay')

    modal.classList.remove('hidden')
    overlay.classList.remove('hidden')

    modal.scrollTop = 0
}

function dismissModal() {
    document.querySelectorAll('.modal').forEach((modal) => {
        modal.classList.add('hidden')
    })
    document.querySelector('.overlay').classList.add('hidden')
}
