// Set scroll callback
window.onscroll = function() { stickyScroll() };

// Get the navbar, content, and the sticky threshold
var navbar = document.getElementById("navbar");
var content = document.getElementById("content");
var stickyThreshold = navbar.offsetTop;

// Sticky scroll callback
function stickyScroll() {
    if (window.pageYOffset >= stickyThreshold) {
        navbar.classList.add("sticky");
        content.classList.add("sticky-content");
    } else {
        navbar.classList.remove("sticky");
        content.classList.remove("sticky-content");
    }
}