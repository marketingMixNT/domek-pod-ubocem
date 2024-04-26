<nav id="mobile-bottom-nav" class="bottom-nav_container fixed -bottom-16 left-0 right-0  grid lg:hidden grid-cols-4 z-30 transition-all duration-300">

    <x-mobile_buttons_item
        href="https://www.booking.com/hotel/pl/domek-pod-ubocom-zakopane.pl.html?aid=2276640&label=msn-2KBUWT0uox9ahYMZaFKgeA-80676819451809%3Atikwd-80677010220803%3Aloc-136799%3Aneo%3Amte%3Alp137424%3Adec%3Aqsdomek%20pod%20ubocom&sid=31823d566dc879e2328f6fa25b9216c9&dest_id=-538221;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1714115891;srpvid=325533561e6f0143;type=total;ucfs=1&#hotelTmpl"
        target="_blank"
        image="{{asset('assets/icons/mobile-buttons/click.svg')}}">
       Zarezerwuj</x-mobile_buttons_item>
    <x-mobile_buttons_item
        href="{{route('chalet')}}"
        target="_blank"
        image="{{asset('assets/icons/mobile-buttons/house.svg')}}">
        <span>Domek</span></x-mobile_buttons_item>
    <x-mobile_buttons_item
        href="https://maps.app.goo.gl/82kG8n6et9SBbEpb7"
        target="_blank"
        image="{{asset('assets/icons/mobile-buttons/pin.svg')}}">
        <span>Lokalizacja</span></x-mobile_buttons_item>
    <x-mobile_buttons_item
        href="tel:+48606970787"
        target="_blank"
        image="{{asset('assets/icons/mobile-buttons/phone.svg')}}">
        <span>Kontakt</span></x-mobile_buttons_item>

</nav>