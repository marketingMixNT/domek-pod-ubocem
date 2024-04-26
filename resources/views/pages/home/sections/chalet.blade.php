<section class="bg-bgSilver">
    <div class="max-w-screen-xl mx-auto py-24 px-6 sm:px-12">

        <x-base.section_heading handwritting="{{__('home.chalet.subtitle')}}" heading="{{__('home.chalet.title')}}" />

        <div class="grid lg:grid-cols-2  bg-bgWhite mt-16 shadow-lg md:opacity-0 image-animation">
            <div
                class="bg-[url('/public/assets/images/domek_pod_ubocom-3.jpeg')] bg-cover bg-center bg-no-repeat h-[600px]">
            </div>

            {{-- TEXT --}}
            <div
                class="flex flex-col justify-center gap-6 lg:gap-4 px-6 sm:px-12 md:px-32 lg:px-12 2xl:px-24  py-12 lg:py-0 ">
                <h2 class="text-4xl text-fontDark uppercase">Domek Pod Ubocom</h2>
                <h3 class="text-2xl text-fontSilver">{{__('home.chalet.subheading')}}</h3>
                <p class="text-lg text-fontGray">{{__('home.chalet.paragraph')}}</p>
                <div class="flex justify-between  items-center">
                    <a href="https://www.booking.com/searchresults.pl.html?aid=2276640&label=msn-2KBUWT0uox9ahYMZaFKgeA-80676819451809%3Atikwd-80677010220803%3Aloc-136799%3Aneo%3Amte%3Alp137424%3Adec%3Aqsdomek%20pod%20ubocom&utm_medium=cpc&utm_campaign=Hotel%20-%20Poland%20-%20Zakopane%20-%20UFI%3A-538221&utm_term=2KBUWT0uox9ahYMZaFKgeA&msclkid=5043a701c8c911e4e28ac12a80369372&utm_source=bing&highlighted_hotels=4929929&redirected=1&city=-538221&hlrd=no_dates&source=hotel&expand_sb=1&keep_landing=1&sid=31823d566dc879e2328f6fa25b9216c9" target="_blank"
                        class="text-2xl text-fontGold hover:text-fontGray duration-300 font-light">{{__('home.chalet.book')}}</a>
                    <a href="{{ route('chalet') }}"
                        class="text-2xl text-fontGray hover:text-fontGold duration-300 font-light">{{__('home.chalet.check')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
