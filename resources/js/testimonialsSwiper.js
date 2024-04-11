import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

const swiper = new Swiper('.testimonials', {
    
    loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      modules: [Autoplay],
  });