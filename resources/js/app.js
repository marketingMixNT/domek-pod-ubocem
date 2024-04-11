import "./bootstrap";
import "./observer";
import "./testimonialsSwiper";
import "./gallerySwiper";

import GLightbox from "glightbox";
import "glightbox/dist/css/glightbox.min.css";
const lightbox = GLightbox({ loop: true });

const hamburgerBtn = document.querySelector(".hamburger");
const menu = document.querySelector("#menu");

const hamburgerHandler = () => {
    hamburgerBtn.classList.toggle("is-active");
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
};

hamburgerBtn.addEventListener("click", hamburgerHandler);

const footerSpan = document.querySelector("#year");
const currentYear = new Date().getFullYear();

footerSpan.innerHTML = currentYear;
