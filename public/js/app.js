document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.navbar ul');
    const buttons = document.querySelectorAll('.btn');

    const w_currentURL = window.location.pathname;
    const currentURL = "http://127.0.0.1:8000"+w_currentURL;


    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            if (navLinks) {
                navLinks.classList.toggle('show');
            }
        });
    }

    buttons.forEach(button => {
        const link = button.querySelector('a');

        if (link && link.getAttribute('href') === currentURL) {
            buttons.forEach(btn => btn.classList.remove('toggle'));
            button.classList.add('toggle');
        }

        button.addEventListener('click', function () {
            buttons.forEach(btn => btn.classList.remove('toggle'));
            button.classList.add('toggle');
        });
    });

});
