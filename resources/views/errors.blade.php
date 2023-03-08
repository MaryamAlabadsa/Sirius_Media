@extends('master')
@section('content')
    <!-- [3] 404-Header -->
    <header class="header-404 color_overlay d-flex align-items-center"
            style="background-image: url('http://via.placeholder.com/1920x1080')">
        <div class="container">
            <div class="wrapper-404-alert"
                 data-aos="flip-right"
                 data-aos-delay="700"
                 data-aos-easing="ease-in"
                 data-aos-duration="600">
                <div class="content">
                    <h1 class="display-2">404!</h1>
                    <h3>Page not found</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit periam culpa eaque</p>
                    <form class="search-form-404 d-flex">
                        <input type="text" placeholder="Enter your keywords...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <div class="d-flex justify-content-center">
                        <a href="home-default.html" class="button-back"><i class="fa fa-angle-left"></i>Back to homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
