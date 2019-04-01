// Set scroll callback
window.onscroll = function() { stickyScroll() };

// Get the navbar and the sticky threshold
var navbar = document.getElementById("navbar");
var stickyThreshold = navbar.offsetTop;

// Make the navbar sticky if scrolled past
function stickyScroll() {
    if (window.pageYOffset >= stickyThreshold) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}