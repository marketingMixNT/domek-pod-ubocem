<section>
    <div class="container max-w-screen-xl px-6 sm:px-12  xl:mx-auto py-24 flex flex-col justify-center items-center">

        
        <div class="max-w-screen-md flex flex-col gap-8  text-center ">
            <x-base.section_heading handwritting="{{__('home.about.subtitle')}}" heading="{{__('home.about.title')}}" />
            <p class="text-fontGray text-xl leading-relaxed">{{__('home.about.paragraph')}}</p>

         <x-base.link href="{{route('chalet')}}">{{__('home.about.check_our_chalet')}}</x-base.link>
        </div>

        <div class="grid lg:grid-cols-3 gap-12 mt-16 md:opacity-0 image-animation">
            <x-home.about_img src="{{ asset('assets/images/domek_pod_ubocom-1.jpeg') }}"/>
            <x-home.about_img src="{{ asset('assets/images/domek_pod_ubocom-3.jpeg') }}"/>
            <x-home.about_img src="{{ asset('assets/images/domek_pod_ubocom-2.jpeg') }}"/>
            
            
        </div>

    </div>
</section>