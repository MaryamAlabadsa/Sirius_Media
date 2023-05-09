@extends('master')
@section('content')
    <!-- [4] About Section -->
    @include('about')
    <!-- [5] Digital Services -->
    @include('digital')
    <!-- [6] Icon-Section -->
{{--    @include('creative-about')--}}
    <!-- [7] Counter Section -->
    @include('counter')
    <!-- [8] Blockquote Section -->
    @include('Blockquote')
    <!-- [9] Content Section -->
{{--    @include('content')--}}
    <!-- [10] Recent Projects -->
    @include('recent-projects')
    <!-- [11] Testimonials -->
    @include('testimonials')
    <!-- [12] Recent Posts -->
    @include('blog')
@endsection
