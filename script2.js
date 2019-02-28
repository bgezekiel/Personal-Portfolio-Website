newFunction();

function newFunction() {
    let mainNav = document.getElementById('js-menu');
    let navBarToggle = document.getElementById('js-navbar-toggle');
    navBarToggle.addEventListener('click', function () {
        console.log("Here")
        mainNav.classList.toggle('active');
    });
}