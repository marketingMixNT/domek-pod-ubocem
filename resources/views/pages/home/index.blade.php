<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Domek Pod Ubocem w Zakopanem - Blisko Natury i Centrum')
    @section('description',
        'Odkryj Regionalny Domek Pod Ubocem: komfortowy wypoczynek w Zakopanem, w otoczeniu łąk i
        lasów, blisko Krupówek i atrakcji turystycznych. Idealny dla rodzin i grup.')


       @include('pages.home.sections.about')
       @include('pages.home.sections.cottage')


    </x-layouts.main>
