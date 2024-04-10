<section>
    <div class="container max-w-screen-xl px-12  xl:mx-auto py-24 flex flex-col justify-center items-center">


        <div class="max-w-screen-md flex flex-col gap-8  text-center ">
            <x-base.section_heading handwritting="Urok" heading="Zanurz się w Góralskiej Tradycji i Komforcie " />
            <p class="text-fontGray text-xl leading-relaxed">Odkryj urokliwy zakątek Zakopanego, gdzie nowoczesność
                splata się z tradycją. Domek Pod Ubocem, z
                jego autentycznym regionalnym charakterem, zaprasza do przeżycia niezapomnianych chwil w sercu Tatr.
                Otoczony malowniczymi łąkami i lasami, stanowi idealne miejsce na relaks i wypoczynek z dala od
                miejskiego zgiełku, zachowując jednocześnie łatwy dostęp do centrum Zakopanego i największych
                atrakcji turystycznych. Przestronne i wygodne wnętrza, w pełni wyposażony aneks kuchenny oraz
                serdeczność gospodarzy sprawią, że poczujesz się jak w domu. Czy to romantyczny wypad we dwoje, czy
                rodzinna przygoda – Domek Pod Ubocem zapewnia idealne warunki dla każdego, kto pragnie doświadczyć
                prawdziwego ducha gór.</p>

         <x-base.link href="{{route('cottage')}}">Zobacz Nasz Domek</x-base.link>
        </div>

        <div class="grid lg:grid-cols-3 gap-12 mt-16">
            <x-home.about_img src="{{ asset('assets/images/domek_pod_ubocom-1.jpeg') }}"/>
            <x-home.about_img src="{{ asset('assets/images/domek_pod_ubocom-3.jpeg') }}"/>
            <x-home.about_img src="{{ asset('assets/images/domek_pod_ubocom-2.jpeg') }}"/>
            
            
        </div>

    </div>
</section>