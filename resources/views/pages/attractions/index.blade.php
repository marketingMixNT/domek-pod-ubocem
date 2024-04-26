<x-layouts.main>

    @section('title', __('attractions.title'))
    @section('description', __('attractions.description'))



    @include('pages.attractions.sections.hero')

    <main>

        <section>

            <div
                class="container max-w-screen-2xl px-6 sm:px-12 xl:mx-auto py-24 flex flex-col justify-center items-center gap-32">
{{--krupowki--}}
                <div id="krupówki" class="grid lg:grid-cols-2 gap-12 lg:gap-8 max-w-screen-xl">


                    <div class=" relative  flex flex-col gap-6 justify-center text-center lg:text-left">
                        <h2 class="handwritting text-7xl text-fontGold">{{__('attractions.krupowki.title')}}</h2>
                        <p class=" text-fontGray">{{__('attractions.krupowki.paragraph_first')}}</p>
                        <p class=" text-fontGray">{{__('attractions.krupowki.paragraph_first')}}</p>
                    </div>

                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/krupowki-3.jpeg') }}" />
                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/krupowki-1.jpeg') }}" />
                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/krupowki-2.jpeg') }}" />



                </div>
                {{--gubalowka--}}
                <div id="gubałówka" class="grid lg:grid-cols-2 gap-12 lg:gap-8 max-w-screen-xl">


                    <div class=" relative  flex flex-col gap-6 justify-center text-center lg:text-left">
                        <h2 class="handwritting text-7xl text-fontGold">{{__('attractions.gubalowka.title')}}</h2>
                        <p class=" text-fontGray">{{__('attractions.gubalowka.paragraph_first')}}</p>
                        <p class=" text-fontGray">{{__('attractions.gubalowka.paragraph_second')}}</p>
                    </div>

                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/gubalowka-3.jpeg') }}" />
                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/gubalowka-2.jpeg') }}" />
                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/gubalowka-1.jpeg') }}" />



                </div>
                {{--morskie-oko--}}
                <div id="morskie-oko" class="grid lg:grid-cols-2 gap-12 lg:gap-8 max-w-screen-xl">


                    <div class=" relative  flex flex-col gap-6 justify-center text-center lg:text-left">
                        <h2 class="handwritting text-7xl text-fontGold">{{__('attractions.morskie.title')}}</h2>
                        <p class=" text-fontGray">{{__('attractions.morskie.paragraph_first')}}</p>
                        <p class=" text-fontGray">{{__('attractions.morskie.paragraph_second')}}</p>
                    </div>

                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/morskie-2.jpeg') }}" />
                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/morskie-1.jpeg') }}" />
                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/morskie-3.jpeg') }}" />



                </div>
                {{--kasprowy-wierch--}}
                <div id="kasprowy-wierch" class="grid lg:grid-cols-2 gap-12 lg:gap-8 max-w-screen-xl">


                    <div class=" relative  flex flex-col gap-6 justify-center text-center lg:text-left">
                        <h2 class="handwritting text-7xl text-fontGold">{{__('attractions.kasprowy.title')}}</h2>

                        <p class=" text-fontGray">{{__('attractions.kasprowy.paragraph_first')}}</p>
                        <p class=" text-fontGray">{{__('attractions.kasprowy.paragraph_second')}}</p>
                    </div>

                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/kasprowy-1.jpeg') }}" />
                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/kasprowy-2.jpeg') }}" />
                    <x-cottage.feature_image_box img="{{ asset('assets/images/attractions/kasprowy-3.jpeg') }}" />



                </div>
            </div>
        </section>
        @include('pages.home.sections.cta')
    </main>


</x-layouts.main>
