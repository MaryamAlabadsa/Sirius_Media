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

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="white-section blog-section single-post-section">
        <div class="container-fluid gray-section">
            <div class="container">
                <div class="row">
                    <div class="col comments-col">
                        <div class="post-comments-wrapper gray-section">
                            <h6 class="comments-title">Comments</h6>
                            <ul class="comments-list">
                                {{-- <li class="comment d-flex flex-column">
                                    <div class="d-flex">
                                        <div class="author-wrapper">
                                            <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                        </div>
                                        <div class="comment-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="author-name">Emily Wiliams</p>
                                                    <p class="date">25 March, 2022 at 5:54 pm</p>
                                                </div>
                                                <a href="#" class="reply-link"><i class="fa fa-reply"></i>Reply</a>
                                            </div>
                                            <p class="comment-text">
                                                Vesulum tidunt malesuada tellus. Ut ultrices ultrices enim.
                                                Curabitur sit amet mauris morbi in dui quis est pulvinar ullamcorper.
                                                Sed aliquet risus a tortor integer id quam morbi mi quisque nisl
                                                felis, venenatis tristique.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="comment comment-reply d-flex flex-column">
                                        <div class="d-flex">
                                            <div class="author-wrapper">
                                                <img src="http://via.placeholder.com/1920x1080" alt=""
                                                    class="img-fluid">
                                            </div>
                                            <div class="comment-body">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <p class="author-name">Frank Horrigan</p>
                                                        <p class="date">25 March, 2022 at 6:13 pm</p>
                                                    </div>
                                                    <a href="#" class="reply-link"><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                                <p class="comment-text">
                                                    Sed non quam. In vel mi sit amet augue congue elementum. Morbi in
                                                    ipsum
                                                    sit
                                                    amet pede facilisis laoreet.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="comment comment-reply d-flex flex-column">
                                            <div class="d-flex">
                                                <div class="author-wrapper">
                                                    <img src="http://via.placeholder.com/1920x1080" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="comment-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="author-name">Alex Gray</p>
                                                            <p class="date">25 March, 2022 at 6:48 pm</p>
                                                        </div>
                                                        <a href="#" class="reply-link"><i
                                                                class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p class="comment-text">
                                                        Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien.
                                                        Proin quam.
                                                        Etiam ultrices. Suspendisse in justo eu magna luctus suscipit.
                                                        Sed lectus.
                                                        Integer euismod lacus luctus magna.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}

                                @foreach ($project->comments as $comment)
                                <li class="comment d-flex flex-column">
                                    <div class="d-flex">
                                        <div class="author-wrapper">
                                            <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                        </div>
                                        <div class="comment-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="author-name">{{$comment->name}}</p>
                                                    <p class="date">{{date('Y-m-d', strtotime($comment->created_at))}}
                                                    </p>
                                                </div>
                                                <a href="#" class="reply-link"><i class="fa fa-reply"></i>Reply</a>
                                            </div>
                                            <p class="comment-text">
                                                {{$comment->comment}}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <h6 class="comments-title">Write a comment</h6>
                            <form action="{{route('store.comment.project',$project->id)}}" method="POST"
                                class="comment-form">
                                @csrf
                                <div class="input-row d-flex">
                                    <input type="text" name="name" placeholder="Name">
                                    <input type="email" name="email" placeholder="E-mail">
                                </div>
                                <textarea name="comment" placeholder="Your message..."></textarea>
                                <button type="submit">Send Comment</button>
                            </form>
                        </div>
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