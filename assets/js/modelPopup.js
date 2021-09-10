var modalPopup = new bootstrap.Modal(document.getElementById('modal-popup'), {
    keyboard: false
});
if ($(window).width() < 480) {
    modalPopup.show();
}