const humberger = document.querySelector(".humberger");
const navMenu = document.querySelector("nav ul");

humberger.addEventListener("click", () => {
      humberger.classList.toggle("geser");
      navMenu.classList.toggle("geser");
});

document.querySelectorAll(".nav-link").forEach(n => n.
      addEventListener("click", () => {
            humberger.classList.remove("geser");
            navMenu.classList.remove("geser");
      }));