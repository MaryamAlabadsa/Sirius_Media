<?php
    use App\Models\Blog;
    $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
?>
<footer>
    <div class="container-fluid footer-inner">
        <div class="footer-top">
            <div class="container footer-top-inner">
                <p class="info-text">Creative HTML5 Portfolio Template</p>
                <a href="index.html">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/logo.png')}}" alt="Logo" class="img-fluid">
                    </div>
                </a>
                <div class="social-networks">
                    <p class="title">Social Networks: </p>
                    <ul class="social-list">
                        <li>
                            <a href="https://www.facebook.com/siriusmediaco">
                                <i class="fab fa-facebook-f" style="color: #3B5999;"></i>
                            </a>
                        </li>
                        <li>
                            <a href=https://twitter.com/SiriusMedia_co">
                                <i class="fab fa-twitter" style="color: #1DA1F2;"></i>
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://www.behance.net/siriusmediaco?tracking_source=search_users_recommended%7Csirius%20media">
                                <i class="fab fa-behance" style="color: #053EFF;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/siriusmediaco/">
                                <i class="fab fa-instagram" style="color: #EA4C89;"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-body">
            <div class="container">
                <div class="footer-sidebar">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sidebar-widget text-widget">
                                <h6 class="sidebar-title">About Us</h6>
                                <p>Lorem ipsum dolor sit amet, contetur pising elit. Ab acus ariam erntur codi ctus
                                    dolous est, fugiat ipsum mostias natus</p>
                                <h6 class="sidebar-title">Subscribe newsletter</h6>
                                <form class="newsletter-form-widget">
                                    <input type="email" placeholder="Email*" required>
                                    <button type="submit"><i class="fa fa-envelope"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar-widget latest-posts-widget">
                                <h6 class="sidebar-title">Latest Blog Posts</h6>
                                <ul class="post-list">

                                    @foreach ($blogs as $blog)
                                    <li class="post">
                                        <a href="{{route('bloglandingdetails',$blog->id)}}">
                                            <div class="img-wrapper">
                                                <img src="{{asset($blog->images->first()->url)}}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </a>
                                        <div class="post-body">
                                            <h6 class="post-title"><a
                                                    href="{{route('bloglandingdetails',$blog->id)}}">{{$blog->title}}</a>
                                            </h6>
                                            <div class="description-box">
                                                <p class="date">{{date('Y-m-d', strtotime($blog->created_at))}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    {{-- <li class="post">
                                        <a href="#">
                                            <div class="img-wrapper">
                                                <img src="http://via.placeholder.com/1920x1080" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </a>
                                        <div class="post-body">
                                            <h6 class="post-title"><a href="#">Guide to UX prototyping</a></h6>
                                            <div class="description-box">
                                                <p class="date">26 April 2022 | by <a href="#">Sara Smith</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="post">
                                        <a href="#">
                                            <div class="img-wrapper">
                                                <img src="http://via.placeholder.com/1920x1080" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </a>
                                        <div class="post-body">
                                            <h6 class="post-title"><a href="#">Social Media Today</a></h6>
                                            <div class="description-box">
                                                <p class="date">27 April 2022 | by <a href="#">Frank Doe</a></p>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar-widget contact-info-widget">
                                <h6 class="sidebar-title">Contact Info</h6>
                                <p class="description">Integer euismod lacus luctus magna. Quisque cursus, metus
                                    vitae pharetra auctor, sem massa
                                    mattis sem, at interdum magna augue eget diam.</p>
                                <ul class="contact-info">
                                    {{-- <li><i class="fa fa-map-marker"></i>--}}
                                        {{-- <p>123 North West, Florida, USA</p>
                                    </li>--}}
                                    <li><i class="fa fa-envelope"></i><a
                                            href="mailto:info@siriusmediaco.com">info@siriusmediaco.com</a></li>
                                    <li><i class="fa fa-phone"></i><a
                                            href="https://wa.me/00970598246821">00970598246821</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrapper">
                    <p class="copyright"><i class="fa fa-copyright"></i>2023 sirius media. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>