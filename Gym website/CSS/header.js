var loginModal = document.getElementById('loginBox');

window.onclick = function (event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    }
}

var registerModal = document.getElementById('registerBox');

window.onclick = function (event) {
    if (event.target == registerModal) {
        registerModal.style.display = "none";
    }
}