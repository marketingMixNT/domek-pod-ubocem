import Swiper from "swiper";
import { Autoplay } from "swiper/modules";
import "swiper/css";

const swiper = new Swiper(".gallery", {
    loop: true,
    slidesPerView: 1,
    breakpoints: {
        800:{
            slidesPerView: 2,
        },
        1280:{
            slidesPerView: 3,
        },
        1500: {
            slidesPerView: 4,
        },
    },
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    modules: [Autoplay],
});
