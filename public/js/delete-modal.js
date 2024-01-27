const deleteNews = (newsId) => {
    var confirm = document.getElementById('confirmDelete');
    confirm.action = "/news/delete/" + newsId;
    $("#modal").removeClass("hidden");
    document.body.style.overflow = 'hidden';
}

const closeModal = () => {
    $("#modal").addClass("hidden");
    document.body.style.overflow = 'auto';
}
