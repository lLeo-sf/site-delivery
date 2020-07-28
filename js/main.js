var buttonClose = document.querySelector('#close');
var buttonOpen = document.querySelector('.slide');

buttonClose.onclick = function close() {
    window.location.href = "index.php";
};

function menu() {
    var toggle = document.getElementById('menuList');

    if (toggle.classList.contains('hidden')) {
        toggle.classList.remove('hidden');
    } else {
        toggle.classList.add('hidden');
    }

}