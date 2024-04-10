import "./bootstrap";

import '@splidejs/splide/css';

import Splide from '@splidejs/splide';

const splide = new Splide( '#testimonials',{
    autoplay:true,
    pagination:false,
    arrows:false,
    type:'loop',
} ).mount();


const footerSpan = document.querySelector('#year')
const currentYear = new Date().getFullYear()

footerSpan.innerHTML=currentYear