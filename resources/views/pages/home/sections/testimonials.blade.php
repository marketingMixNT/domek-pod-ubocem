<section>
    <div class="max-w-screen-xl mx-auto py-24 px-6 sm:px-12">

        <x-base.section_heading handwritting="{{__('home.testimonials.subtitle')}}" heading="{{__('home.testimonials.title')}}" />

<!-- Slider main container -->
<div class="swiper testimonials">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper mt-24">
      <!-- Slides -->
      <x-home.testimonial_card name="Paulina" source="booking.com">{{__('home.testimonials.first')}}</x-home.testimonial_card>


    <x-home.testimonial_card name="Magdalena" source="google">{{__('home.testimonials.second')}}</x-home.testimonial_card>
    <x-home.testimonial_card name="Hanna" source="booking.com">{{__('home.testimonials.third')}}</x-home.testimonial_card>
    <x-home.testimonial_card name="Dawid" source="google">{{__('home.testimonials.fourth')}}</x-home.testimonial_card>
    <x-home.testimonial_card name="Michał" source="booking.com">{{__('home.testimonials.fifth')}}</x-home.testimonial_card>
    <x-home.testimonial_card name="Jola" source="google">{{__('home.testimonials.sixth')}}</x-home.testimonial_card>
    </div>
    
    
  </div>
    </div>
</section>
