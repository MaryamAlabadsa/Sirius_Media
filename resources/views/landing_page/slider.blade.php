<?php
    use App\Models\Info;
    $slider = Info::select('json_data')->where('json_key', 'slider')->first()->slider;
?>
<section class="hero-header hero-default color_overlay bg_img">
    <div class="html-video">
        <video autoplay muted loop>

            <source src="{{ $slider[2]??  url('assets/video/basic_video.mp4')}}" type="video/mp4">
        </video>
    </div>
    <div class="container hero-content hero-center d-flex align-items-center">
        <div class="content-default">
            <h1 class="display-3 content-heading bold-heading z-index-100" data-aos="zoom-in" data-aos-delay="900"
                data-aos-easing="ease-in-out" data-aos-duration="700">{{$slider[0]}}
                <span class="highlight">.</span>
            </h1>
            <p class="subtitle z-index-100" data-aos="zoom-in" data-aos-delay="1100" data-aos-easing="ease-in-out"
                data-aos-duration="700">
                {{$slider[1]}}
            </p>
            <div class="social-type-2 d-flex flex-wrap justify-content-center" data-aos="zoom-in" data-aos-delay="1300"
                data-aos-easing="ease-in-out" data-aos-duration="700">
                <a class="social-box facebook-h" href="https://www.facebook.com/siriusmediaco">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="social-box instagram-h" href="https://www.instagram.com/siriusmediaco/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="social-box twitter-h" href="https://twitter.com/SiriusMedia_co">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="social-box facebook-h"
                    href="https://www.behance.net/siriusmediaco?tracking_source=search_users_recommended%7Csirius%20media">
                    <i class="fab fa-behance"></i>
                </a>
                <a class="social-box linkedin-h" href="https://www.linkedin.com/company/siriusmediaco">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a class="social-box twitter-h" href="mailto:info@siriusmediaco.com">
                    <i class="fab fa-envelope"></i>
                </a>
            </div>
            <div class="button-wrapper d-flex justify-content-center" data-aos="zoom-in" style="margin-top: 16px">
                <a href="#" class="button-default-color-2">Start new Projects</a>
            </div>

        </div>
        <div class="angle-down" data-aos="zoom-in" data-aos-delay="1300" data-aos-anchor=".hero-header"
            data-aos-easing="ease-in-out" data-aos-duration="700">
            <p>scroll down</p>
            <i class="fa fa-chevron-down"></i>
        </div>
    </div>
</section>