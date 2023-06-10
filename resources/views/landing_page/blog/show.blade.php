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
                    <h4 class="post-title">{{$blog->title}}</h4>
                    <p class="text-part">
                        {{$blog->description}} </p>
                    <div class="post-thumb-wrapper">
                        <img src="{{asset($blog->images->first()->url)}}" alt="" class="img-fluid">
                    </div>
                    {{-- <p class="text-part">
                        Sed lectus integer <b>Donec</b> euismod lacus luctus magna. Quisque cursus, metus vitae
                        pharetra
                        auctor,
                        sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in
                        faucibus orci luctus et ultrices posuere cubilia curae. <b>Morbi</b> lacinia molestie dui.
                        Praesent
                        blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit
                        amet pede facilisis laoreet. Lacus nunc, viverra nec, blandit vel, egestas et, augue.
                        Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris.
                        Morbi in dui quis est pulvinar ullamcorper.
                    </p>
                    <blockquote class="blockquote-type-1">
                        <p>Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per
                            conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt
                            mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis nulla
                            facilisi.</p>
                    </blockquote>
                    <div class="row two-side-content">
                        <div class="col-lg-6 image-wrapper">
                            <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <h4 class="post-title">Golden rule of modern web design</h4>
                            <p class="text-part">Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem,
                                at
                                interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus
                                et
                                ultrices posuere cubilia Curae.</p>
                            <ul class="list list-type-1">
                                <li>
                                    <p>Nunc feugiat mi a tellus consequat imperdiet</p>
                                </li>
                                <li>
                                    <p>Vestibulum ante ipsum primis in faucibus</p>
                                </li>
                                <li>
                                    <p>Donec lacus nunc, viverra nec, blandit vel</p>
                                </li>
                            </ul>
                            <p class="text-part">
                                Morbi lacinia molestie dui. Praesent
                                blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum.
                                Donec lacus nunc, viverra nec, blandit vel, egestas et, augue.
                                Vestibulum tincidunt malesuada tellus.
                            </p>
                        </div>
                    </div>
                    <h4 class="post-title">Double exposure experiment</h4>
                    <p class="text-part">
                        Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per
                        conubia
                        nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor
                        neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla.
                        Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin
                        quam eriam ultrices. Suspendisse in justo eu magna luctus suscipit.
                    </p>
                    <p class="text-part">
                        Duis sagittis ipsum praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
                        Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim
                        lacinia nunc. Nulla quam. Aenean laoreet. Vestibulum nisi lectus, commodo ac, facilisis ac,
                        ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed
                        pretium blandit orci.
                    </p> --}}
                </div>
                {{-- <div class="description-box d-flex">
                    <div class="tags">
                        <div class="d-flex tags-wrapper">
                            <a href="#" class="tag bg-color-purple">Development</a>
                            <a href="#" class="tag bg-color-pink">Modern</a>
                            <a href="#" class="tag bg-color-green">Lifestyle</a>
                        </div>
                    </div>
                    <div>
                        <div class="social-wrapper d-flex">
                            <a class="social-box facebook-h" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="social-box instagram-h" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="social-box twitter-h" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="social-box linkedin-h" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="social-box google-plus-h" href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="recent-posts-section">
                    <div class="row">
                        <div class="col">
                            <h6 class="recent-posts-title">
                                Recent Posts
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($allBlog as $blog)
                        <div class="col-lg-4">
                            <div class="blog-card-wrapper hover3d-wrapper">
                                <div class="card-content hover3d-child">
                                    <div class="card-blog-header">
                                        <div class="img-wrapper d-flex align-items-center justify-content-center">
                                            <a href="blog-single-post-sidebar-layout.html">
                                                <img src="{{asset($blog->images->first()->url)}}" alt=""
                                                    class="img-fluid img">
                                                {{-- <div class="tag bg-color-purple">Modern</div> --}}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-blog-body">
                                        <h6><a href="#">{{$blog->title}}</a></h6>
                                        <p class="content">{{$blog->short_description}}<a
                                                href="{{route('bloglandingdetails',$blog->id)}}">[...]</a>
                                        </p>
                                        <div class="card-blog-footer d-flex justify-content-between align-items-end">
                                            <p class="date d-flex align-items-end">
                                                <i class="fas fa-calendar-alt"></i>
                                                {{date('Y-m-d', strtotime($blog->completed_time))}}
                                            </p>
                                            <p class="info d-flex align-items-end">
                                                <span><i
                                                        class="fas fa-comment-alt"></i>{{$blog->comments()->count()}}</span>
                                                {{-- <span><i class="fas fa-heart"></i>15</span> --}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <aside class="blog-sidebar" data-aos="fade-left" data-aos-delay="200"
                    data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="800">
                    <div class="sidebar-widget search-widget">
                        <h6 class="sidebar-title">Search</h6>
                        <form class="sidebar-search-form d-flex">
                            <input type="text" placeholder="Input your keywords...">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    {{-- <div class="sidebar-widget tags-widget">
                        <h6 class="sidebar-title">Tags Cloud</h6>
                        <div class="tags-cloud-wrapper d-flex flex-wrap">
                            <a href="#" class="tag">Code</a>
                            <a href="#" class="tag">Modern</a>
                            <a href="#" class="tag">Design</a>
                            <a href="#" class="tag">Tech</a>
                            <a href="#" class="tag">Life</a>
                            <a href="#" class="tag">Business</a>
                            <a href="#" class="tag">Unique</a>
                            <a href="#" class="tag">Smart</a>
                        </div>
                    </div> --}}
                    <div class="sidebar-widget recent-posts-widget">
                        <h6 class="sidebar-title">Recent Posts</h6>
                        <ul class="recent-posts-wrapper">
                            @foreach ($allBlog2 as $blog)
                            <li>
                                <div class="img-wrapper">
                                    <a href="#">
                                        <img src="{{asset($blog->images->first()->url)}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div>
                                    <a href="#">{{$blog->title}}</a>
                                    <p>Posted on {{date('Y-m-d', strtotime($blog->completed_time))}}</p>
                                </div>
                            </li>
                            @endforeach
                            {{-- <li>
                                <div class="img-wrapper">
                                    <a href="#">
                                        <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div>
                                    <a href="#">Tools to build a website</a>
                                    <p>Posted on April 22, 2022</p>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper">
                                    <a href="#">
                                        <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div>
                                    <a href="#">Most creative 404 pages</a>
                                    <p>Posted on April 21, 2022</p>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrapper">
                                    <a href="#">
                                        <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div>
                                    <a href="#">Optimize your website</a>
                                    <p>Posted on April 20, 2022</p>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="sidebar-widget follow-us-widget">
                        <h6 class="sidebar-title">Follow Us</h6>
                        <div class="d-flex justify-content-center">
                            <div class="social-wrapper d-flex">
                                <a class="social-box facebook-h" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="social-box instagram-h" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="social-box twitter-h" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="social-box linkedin-h" href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a class="social-box google-plus-h" href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="sidebar-widget text-widget">
                        <h6 class="sidebar-title">Text Widget</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi cum distinctio
                            dolue doloribus error eum, eveniet expedita lantium.</p>
                    </div>
                    <div class="sidebar-widget categories-widget">
                        <h6 class="sidebar-title">Categories</h6>
                        <ul class="categories-wrapper">
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Social Networks</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Internet Marketing</a></li>
                            <li><a href="#">Design Tutorials</a></li>
                            <li><a href="#">UX Design</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget newsletter-widget">
                        <h6 class="sidebar-title">Newsletter</h6>
                        <form class="newsletter-form-widget d-flex">
                            <input type="text" placeholder="E-mail">
                            <button><i class="far fa-envelope"></i></button>
                        </form>
                    </div>
                    <div class="sidebar-widget archive-widget">
                        <h6 class="sidebar-title">Archive</h6>
                        <ul class="archive-widget">
                            <li>
                                <a href="#">January</a>
                                <span>15</span>
                            </li>
                            <li>
                                <a href="#">February</a>
                                <span>12</span>
                            </li>
                            <li>
                                <a href="#">March</a>
                                <span>17</span>
                            </li>
                            <li>
                                <a href="#">April</a>
                                <span>10</span>
                            </li>
                            <li>
                                <a href="#">May</a>
                                <span>8</span>
                            </li>
                            <li>
                                <a href="#">June</a>
                                <span>15</span>
                            </li>
                            <li>
                                <a href="#">August</a>
                                <span>12</span>
                            </li>
                            <li>
                                <a href="#">September</a>
                                <span>13</span>
                            </li>
                        </ul>
                    </div> --}}
                </aside>
            </div>
        </div>
    </div>
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
                                            <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
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
                                                    <a href="#" class="reply-link"><i class="fa fa-reply"></i>Reply</a>
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

                            @foreach ($blog->comments as $comment)
                            <li class="comment d-flex flex-column">
                                <div class="d-flex">
                                    <div class="author-wrapper">
                                        <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    </div>
                                    <div class="comment-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="author-name">{{$comment->name}}</p>
                                                <p class="date">{{date('Y-m-d', strtotime($blog->created_at))}}</p>
                                            </div>
                                            {{-- <a href="#" class="reply-link"><i class="fa fa-reply"></i>Reply</a>
                                            --}}
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
                        <form action="{{route('store.comment',$blog->id)}}" method="POST" class="comment-form">
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
<!-- [5] Footer -->
@endsection