$(window).on('load', function () {
    var preloaderFadeOutTime = 500;
    function hidePreloader() {
        var preloader = $('.spinner-wrapper');
        setTimeout(function () {
            preloader.fadeOut(preloaderFadeOutTime);
        }, 500);
    }
    hidePreloader();
});



nav()
window.addEventListener("scroll", nav);
function nav() {
    const nav = document.getElementById("navbar");
    var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
    if (scrollPosition > 80) {
        nav.classList.add("mycollapse");
    } else {
        nav.classList.remove("mycollapse")
    }
}

window.addEventListener("scroll", () => {
    var reveals = document.querySelectorAll(".reveal");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 250;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
});