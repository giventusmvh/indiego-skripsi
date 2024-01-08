import "./bootstrap";
import "flowbite";
import "./app.css";
var nav = document.getElementById("navbar");

window.addEventListener("scroll", function () {
    if (this.window.pageYOffset > 5) {
        nav.classList.add("bg-black");
    } else {
        nav.classList.remove("bg-black");
    }
});
