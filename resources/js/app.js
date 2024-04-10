import "./bootstrap";

const hamburgerBtn = document.querySelector('.hamburger')

const hamburgerHandler = ()=>{
    hamburgerBtn.classList.toggle('is-active')
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