<section class="relative w-full flex flex-row-reverse justify-between items-center">



    <div class="flex flex-col justify-center items-center text-center absolute left-0 sm:left-1/2 sm:-translate-x-1/2">
        <a href={{route('home')}} class="text-2xl uppercase text-fontLight font-JazminExtraLight"><img src="{{asset('assets/logo--white.png')}}" alt="logo Domek pod Ubocom" class="w-80"></a>
    </div>

    <div class="flex gap-4 2xl:gap-6 items-center">

        <x-nav.language_switcher />

        <a href="https://www.booking.com/hotel/pl/domek-pod-ubocom-zakopane.pl.html?aid=2276640&label=msn-2KBUWT0uox9ahYMZaFKgeA-80676819451809%3Atikwd-80677010220803%3Aloc-136799%3Aneo%3Amte%3Alp137424%3Adec%3Aqsdomek%20pod%20ubocom&sid=31823d566dc879e2328f6fa25b9216c9&dest_id=-538221;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1714112782;srpvid=e4de2d438550008c;type=total;ucfs=1&#hotelTmpl" target="_blank" class="hidden lg:block border px-12 py-3 text-fontLight duration-300 hover:border-primary-400 hover:text-fontGold">{{__('shared.nav.book')}}</a>

        <x-nav.hamburger />




    </div>

</section>