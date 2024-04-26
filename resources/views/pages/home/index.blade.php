<x-layouts.main>

    @section('title', __('home.title'))
    @section('description', __('home.description'))
  


        @include('pages.home.sections.hero')
        <main>

            @include('pages.home.sections.about')
            @include('pages.home.sections.chalet')
            @include('pages.home.sections.attractions')
            @include('pages.home.sections.testimonials')
            @include('pages.home.sections.cta')
        </main>


    </x-layouts.main>
