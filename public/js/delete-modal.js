const openModal = (title, id) => {
    const maxLength = 25;
    const truncatedTitle = title.length > maxLength ? title.substring(0, maxLength) + '...' : title;

    document.getElementById('modal-title').textContent = truncatedTitle;
    document.getElementById('confirmDelete').action = "/news/delete/"+ id;
    document.getElementById('modal').classList.remove('hidden');
}


const closeModal = () => {
    document.getElementById('modal').classList.add('hidden');
}
