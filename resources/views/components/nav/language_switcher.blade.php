

<ul class="hidden xl:flex flex-row gap-4 text-fontLight ">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="hover:text-fontGold duration-300 uppercase">
                {{ $properties['slug'] }}
            </a>
        </li>
    @endforeach
</ul>