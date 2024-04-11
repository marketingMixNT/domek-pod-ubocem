<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Domek Pod Ubocem w Zakopanem - Blisko Natury i Centrum')
    @section('description',
        'Odkryj Regionalny Domek Pod Ubocem: komfortowy wypoczynek w Zakopanem, w otoczeniu łąk i
        lasów, blisko Krupówek i atrakcji turystycznych. Idealny dla rodzin i grup.')


        @include('pages.cottage.sections.hero')

        <main>
            @include('pages.cottage.sections.features')
            @include('pages.cottage.sections.description')
            @include('pages.cottage.sections.amenities')
            @include('pages.cottage.sections.gallery')
            @include('pages.home.sections.cta')


        </main>


    </x-layouts.main>
