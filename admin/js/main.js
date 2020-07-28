function toggle() {
    var menu = document.querySelector('#toggle');

    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.classList.add('toggle');
    } else {
        menu.classList.remove('toggle');
        menu.classList.add('hidden');
    }

    if (menu.classList.contains('toggle')) {
        var content = document.querySelector('.content');
        content.appendChild(menu);
    }

}