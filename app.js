

const hamburger = document.querySelector(".hamburger");
const navBar = document.querySelector(".nav-bar");
const links = document.querySelector(".nav-bar li");

hamburger.addEventListener('click',() => {
    navBar.classList.toggle("open");

    
});
