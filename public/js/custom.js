document.addEventListener("DOMContentLoaded", function () {

const megaItems = document.querySelectorAll(".has-mega");
const menuToggle = document.getElementById("menuToggle");
const navMenu = document.querySelector(".nav-menu");

// Mega toggle
megaItems.forEach(item => {
    const title = item.querySelector(".menu-title");

    title.addEventListener("click", function (e) {
        e.stopPropagation();

        megaItems.forEach(i => {
            if (i !== item) i.classList.remove("active");
        });

        item.classList.toggle("active");
    });
});

// Close on outside click
document.addEventListener("click", function () {
    megaItems.forEach(item => item.classList.remove("active"));
});

// Mobile toggle
menuToggle.addEventListener("click", function () {
    navMenu.classList.toggle("active");
});

});
