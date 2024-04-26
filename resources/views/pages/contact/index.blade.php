<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Skontaktuj się z nami - Domek Pod Ubocom w Zakopanem')
    @section('description',
        'Masz pytania dotyczące Domku Pod Ubocom? Skontaktuj się z nami, aby dowiedzieć się więcej o
        ofercie i dostępności. Zapewniamy kompleksową obsługę i szybką odpowiedź na wszystkie zapytania.')


        @include('pages.contact.sections.hero')

        <main>
            <section>

                <div
                    class="container max-w-screen-lg px-6 sm:px-12 xl:mx-auto py-24 ">

<div class="flex flex-col md:flex-row gap-16 md:gap-0">

    @include('pages.contact.sections.info')
    @include('pages.contact.sections.form')
</div>
                </div>
            </section>



            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.6321001572132!2d19.967919577025647!3d49.30231197139569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715f3ed31ee99eb%3A0x13b878763128c16e!2sDomek%20Pod%20Ubocom!5e0!3m2!1spl!2spl!4v1712831184707!5m2!1spl!2spl"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
        </main>


    </x-layouts.main>
