import "./bootstrap";

const hamburgerBtn = document.querySelector('.hamburger')
const menu = document.querySelector('#menu')

const hamburgerHandler = ()=>{
    hamburgerBtn.classList.toggle('is-active')
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
}

hamburgerBtn.addEventListener('click',hamburgerHandler)

const footerSpan = document.querySelector('#year')
const currentYear = new Date().getFullYear()

footerSpan.innerHTML=currentYear




import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

const swiper = new Swiper('.swiper', {
    loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      modules: [Autoplay],
  });