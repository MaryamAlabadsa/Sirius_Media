@extends('landing_page.master')
@section('content')
<!-- [3] Page-Header -->
{{-- <header class="page-header parallax-window bg_img dark_overlay" data-src="http://via.placeholder.com/1920x1080">
    <div class="container breadcrumbs-wrapper">
        <div class="breadcrumbs d-flex flex-column justify-content-center">
            <h1 class="title">Single Post</h1>
            <div>
                <ul class="breadcrumbs-list d-flex">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Single Post</a>
                    </li>
                    <li>
                        <a href="#">Sidebar Layout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}

<!-- [4] Blog Section -->
<section class="white-section blog-section single-post-section">
    <div class="container-fluid blog-layout-sidebar-wrapper">
        <div class="row blog-layout-sidebar">
            <div class="col-xl-9 single-post-wrapper">
                <div class="post-content">
                    {{-- {{dd(app()->getLocale())}} --}}
                    {{-- <h4 class="post-title">{{$blog->title}}</h4> --}}
                    <p class="text-part">
                        {!!$conditions[0]!!} </p>
                    {{-- <div class="post-thumb-wrapper">
                        <img src="{{asset($blog->images->first()->url)}}" alt="" class="img-fluid">
                    </div> --}}
                </div>

            </div>

        </div>
    </div>
</section>
<!-- [5] Footer -->
@endsection