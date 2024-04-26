<section>

    <div class="container max-w-screen-2xl px-6 sm:px-12 xl:mx-auto py-24 flex flex-col justify-center items-center">

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 md:gap-12 xl:gap-6 pb-24">
            <x-cottage.feature_box img="{{ asset('assets/icons/nature.svg') }}" title=" {{__('chalet.features.title')}}">
               {{__('chalet.features.first_desc')}}</x-cottage.feature_box>

            <x-cottage.feature_box img="{{ asset('assets/icons/coffee.svg') }}" title=" {{__('chalet.features.second_title')}}">
                {{__('chalet.features.second_desc')}}</x-cottage.feature_box>

            <x-cottage.feature_box img="{{ asset('assets/icons/localization.svg') }}" title=" {{__('chalet.features.third_title')}}">
                {{__('chalet.features.third_desc')}}</x-cottage.feature_box>

            <x-cottage.feature_box img="{{ asset('assets/icons/mountains.svg') }}" title=" {{__('chalet.features.fourth_title')}}">
                {{__('chalet.features.fourth_desc')}}</x-cottage.feature_box>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 max-w-screen-xl">


            <div class=" relative  flex flex-col justify-center text-center lg:text-left">
                <span class="handwritting text-9xl text-fontSilver"> {{__('chalet.features.subtitle')}}</span>
                <h2 class="-mt-[55px] text-5xl  text-fontDark uppercase leading-tight"> {{__('chalet.features.title')}}</h2>
            </div>

            <x-cottage.feature_image_box img="{{ asset('assets/images/domek_pod_ubocom-1.jpeg') }}" />
            <x-cottage.feature_image_box img="{{ asset('assets/images/domek_pod_ubocom-2.jpeg') }}" />
            <x-cottage.feature_image_box img="{{ asset('assets/images/domek_pod_ubocom-3.jpeg') }}" />



        </div>


    </div>
</section>
