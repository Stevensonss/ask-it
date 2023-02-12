const toggle = document.querySelector('.toggle');
const header = document.querySelector('header');

toggle.addEventListener("click", function() {
    header.classList.toggle("menu-toggle");
    toggle.classList.toggle('toggle-active')
})