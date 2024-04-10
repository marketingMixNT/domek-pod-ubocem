import "./bootstrap";

// import '@splidejs/splide/css';

// import Splide from '@splidejs/splide';

// const splide = new Splide( '#testimonials',{
//     autoplay:true,
//     pagination:false,
//     arrows:false,
//     type:'loop',
// } ).mount();

const hamburgerBtn = document.querySelector('.hamburger')

const hamburgerHandler = ()=>{
    hamburgerBtn.classList.toggle('is-active')
}

hamburgerBtn.addEventListener('click',hamburgerHandler)

const footerSpan = document.querySelector('#year')
const currentYear = new Date().getFullYear()

footerSpan.innerHTML=currentYear