<x-layouts.main>

    @section('title', __('home.title'))
    @section('description', __('home.description'))
    


        @include('pages.chalet.sections.hero')

        <main>
            @include('pages.chalet.sections.features')
            @include('pages.chalet.sections.description')
            @include('pages.chalet.sections.amenities')
            @include('pages.chalet.sections.gallery')
            @include('pages.home.sections.cta')


        </main>


    </x-layouts.main>
