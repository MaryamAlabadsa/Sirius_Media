@extends('landing_page.master')
@section('content')
<section class="single-project-wrapper" style="background-color: white">
    <!-- [4] Project Grid -->
    <section class="project-grid large-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="grid">
                        @foreach ($project->images as $image)
                        <div class="grid-item">
                            <div class="img-wrapper">
                                {{-- {{dd($project->images)}} --}}
                                <a href="{{asset($image->url)}}" class="image-popup">
                                    <img src="{{asset($image->url)}}" alt="" class="img-fluid">
                                    <i class="fa fa-search plus"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="grid-item">
                            <div class="img-wrapper">
                                <a href="http://via.placeholder.com/1920x1080" class="image-popup">
                                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    <i class="fa fa-search plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="img-wrapper">
                                <a href="http://via.placeholder.com/1920x1080" class="image-popup">
                                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    <i class="fa fa-search plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="img-wrapper">
                                <a href="http://via.placeholder.com/1920x1080" class="image-popup">
                                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    <i class="fa fa-search plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="img-wrapper">
                                <a href="http://via.placeholder.com/1920x1080" class="image-popup">
                                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    <i class="fa fa-search plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="img-wrapper">
                                <a href="http://via.placeholder.com/1920x1080" class="image-popup">
                                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    <i class="fa fa-search plus"></i>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-5 description-project-default">
                    <div class="row description-wrapper" data-aos="fade-up" data-aos-delay="100"
                        data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="700">
                        <div class="description-box">
                            <h3 class="section-title">{{$project->title}}</h3>
                            <p class="description"> {{$project->description}}</p>
                            <div class="btn-wrap d-flex">
                                <a href="#" class="button-default-black"><i class="fa fa-link"></i>View website</a>
                            </div>
                        </div>
                        {{-- <div>
                            <ul class="project-information">
                                <li>
                                    <p class="title">Client: </p>
                                    <p class="info-text">Jonathan Doe inc.</p>
                                </li>
                                <li>
                                    <p class="title">Date: </p>
                                    <p class="info-text">2022-04-25</p>
                                </li>
                                <li>
                                    <p class="title">Website: </p>
                                    <p class="info-text"><a href="#">Example.com</a></p>
                                </li>
                                <li>
                                    <p class="title">Categories: </p>
                                    <p class="info-text">Development, Modern, Design</p>
                                </li>
                                <li>
                                    <p class="title">Price: </p>
                                    <p class="info-text">1500$</p>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [5] Navigation Project -->
    {{-- <section class="navigation-project white-section border-bottom-simple border-top-simple">
        <div class="container-fluid" data-aos="fade" data-aos-delay="100" data-aos-anchor-placement="top-bottom"
            data-aos-easing="ease-in-out" data-aos-duration="700">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="nav-link">
                    <a href="#" class="additional-link">
                        <i class="fa fa-angle-left"></i>
                        <span>Previous project</span>
                    </a>
                </div>
                <div class="nav-link main-link">
                    <a href="#">
                        <i class="fa fa-th-large"></i>
                    </a>
                </div>
                <div class="nav-link">
                    <a href="#" class="additional-link">
                        <span>Next project</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
</section>
@endsection