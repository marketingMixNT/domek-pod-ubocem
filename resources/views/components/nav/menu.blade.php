<div id="menu"
    class="menu-close absolute bg-bgWhite  top-0  bottom-0 right-0 left-0  sm:left-[25%] md:left-[50%] xl:left-[60%] 2xl:left-[80%] z-40 flex flex-col justify-evenly items-center">

    <a href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" alt="logo Domku pod Ubocom" class="w-36"></a>

    <ul class="flex flex-col justify-center items-center gap-12">



        <li>
            <a href="{{ route('chalet') }}"
                class="text-4xl  text-fontGold hover:text-fontGray duration-300 font-light uppercase">{{ __('shared.nav.item_1') }}</a>
        </li>
        <li>
            <a href="{{ route('attractions') }}"
                class=" text-4xl  text-fontGold hover:text-fontGray duration-300 font-light uppercase">
                {{ __('shared.nav.item_2') }}</a>
        </li>
        <li>
            <a href="{{ route('contact') }}"
                class=" text-4xl  text-fontGold hover:text-fontGray duration-300 font-light uppercase">
                {{ __('shared.nav.item_3') }}</a>
        </li>

    </ul>

    <div>
        <a href="https://www.facebook.com/p/Domek-Pod-Ubocom-100063291425944/" target="_blank"><img
                src="{{ asset('assets/icons/facebook--dark.svg') }}" alt="logo facebooka Domku pod Ubocom"
                class="w-6 hover:scale-105 duration-300"></a>
            
            
            </div>

</div>
