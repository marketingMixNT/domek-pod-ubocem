<section class="bg-bgSilver">
    <div class="max-w-screen-xl mx-auto py-24 px-6 sm:px-12">

        <x-base.section_heading handwritting="Relaks" heading="Góralski Komfort w Sercu Zakopanego" />

        <div class="grid lg:grid-cols-2  bg-bgWhite mt-16 shadow-lg">
            <div class="bg-[url('/public/assets/images/domek_pod_ubocom-3.jpeg')] bg-cover bg-center bg-no-repeat h-[600px]">
            </div>

            {{-- TEXT --}}
            <div class="flex flex-col justify-center gap-6 lg:gap-4 px-6 sm:px-12 md:px-32 lg:px-12 2xl:px-24  py-12 lg:py-0 ">
                <h2 class="text-4xl text-fontDark uppercase">Domek Pod Ubocem</h2>
                <h3 class="text-2xl text-fontSilver">Tutaj górski spokój spotyka się z domowym ciepłem</h3>
                <p class="text-lg text-fontGray">Regionalny Domek Pod Ubocem oferuje dwa przytulne pokoje dwuosobowe, salon z funkcjonalnym narożnikiem, dużą łazienkę z nowoczesnym wyposażeniem oraz dodatkową toaletę na piętrze. Aneks kuchenny jest w pełni wyposażony, zapewniając komfort przygotowania posiłków. Jego wyjątkowa lokalizacja zapewnia zarówno ciszę i spokój, jak i łatwy dostęp do centrum Zakopanego i atrakcji turystycznych.</p>
                <div class="flex justify-between  items-center">
                    <a href=""  class="text-2xl text-fontGold hover:text-fontGray duration-300 font-light">Zarezerwuj</a>
                    <a href="{{route('cottage')}}"  class="text-2xl text-fontGray hover:text-fontGold duration-300 font-light">Zobacz</a>
                </div>
            </div>
        </div>
    </div>
</section>
