<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    @foreach($available_locales as $locale_name => $available_locale)
    @if($available_locale === $current_locale)
    <span class="ml-2 mr-2 text-gray-700">{{ $locale_name }}</span>
    @else
    {{-- language/{{ $available_locale }} --}}
    <a class="ml-1 underline ml-2 mr-2" href="{{route('change.language',$available_locale)}}">
        <span>{{ $locale_name }}</span>
    </a>
    @endif
    @endforeach
</div>
{{--<div id="lang-selector" class="dropdown">--}}
    {{-- <a href="#" class="btn-selector">English</a>--}}
    {{-- <ul>--}}
        {{-- <li class="active"><a href="#">English</a></li>--}}
        {{-- <li><a href="#">France</a></li>--}}
        {{-- <li><a href="#">Germany</a></li>--}}
        {{-- <li><a href="#">Spain</a></li>--}}
        {{-- </ul>--}}
    {{--</div>--}}