@extends('landing_page.master')
@section('content')
    <!-- [4] About Section -->
    @include('landing_page.about')
    <!-- [5] Digital Services -->
    @include('landing_page.digital')
    <!-- [6] Icon-Section -->
{{--    @include('creative-about')--}}
    <!-- [7] Counter Section -->
    @include('landing_page.counter')
    <!-- [8] Blockquote Section -->
    @include('landing_page.Blockquote')
    <!-- [9] Content Section -->
{{--    @include('content')--}}
    <!-- [10] Recent Projects -->
    @include('landing_page.recent-projects')
    <!-- [11] Testimonials -->
    @include('landing_page.testimonials')
    <!-- [12] Recent Posts -->
    @include('landing_page.blog')
@endsection
