{{--<section class="digital-services">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6 col-12 content light-gray-section">--}}
{{--                <div class="content-wrapper">--}}
{{--                    <h3 class="section-title">Digital Services</h3>--}}
{{--                    <p class="subtitle">We are delivering beautiful digital products for you</p>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6 col-lg-12 col-xl-6">--}}
{{--                            <div class="d-flex service-item-type-2">--}}
{{--                                <div class="icon-wrapper d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="fa fa-wrench"></i>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="title-service">Web Development</h6>--}}
{{--                                    <p class="service-text">Lorem ipsum dolor sit amet, cotetur in iste adicing--}}
{{--                                        elite minim</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-lg-12 col-xl-6">--}}
{{--                            <div class="d-flex service-item-type-2">--}}
{{--                                <div class="icon-wrapper d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="fa fa-paint-brush"></i>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="title-service">Pixel Perfect Design</h6>--}}
{{--                                    <p class="service-text">Lorem ipsum dolor sit amet, cotetur in iste adicing--}}
{{--                                        elite minim</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-lg-12 col-xl-6">--}}
{{--                            <div class="d-flex service-item-type-2">--}}
{{--                                <div class="icon-wrapper d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="fa fa-bookmark"></i>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="title-service">Branding</h6>--}}
{{--                                    <p class="service-text">Lorem ipsum dolor sit amet, cotetur in iste adicing--}}
{{--                                        elite minim</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-lg-12 col-xl-6">--}}
{{--                            <div class="d-flex service-item-type-2">--}}
{{--                                <div class="icon-wrapper d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="fa fa-cog"></i>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="title-service">App Development</h6>--}}
{{--                                    <p class="service-text">Lorem ipsum dolor sit amet, cotetur in iste adicing--}}
{{--                                        elite minim</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 image parallax-window"--}}
{{--                 data-src="http://via.placeholder.com/1920x1080">--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 image bg_img parallax-window last-image"--}}
{{--                 data-src="http://via.placeholder.com/1920x1080">--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 content-about light-gray-section">--}}
{{--                <div class="content-wrapper">--}}
{{--                    <h3 class="section-title">Who we are</h3>--}}
{{--                    <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio--}}
{{--                        praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum--}}
{{--                        imperdiet duis sagittis ipsum sed augue semper porta. Purto inani viderer pro ex. Omittam--}}
{{--                        fastidii vivendum sed ad, brute alterum lorem ipsum dolor sit amet, cotetur in iste adicing--}}
{{--                        elite minim--}}
{{--                    </p>--}}
{{--                    <div class="btn-wrapper d-flex">--}}
{{--                        <a href="#" class="button-default-white">Explore</a>--}}
{{--                        <a href="#" class="button-default-color">Meet our Team</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="tabs-section-type-2 tabs-creative large-section gray-section bg-attachment-fixed bg_img"
         style="background-image: url('https://jk-studio-dev.com/templates/lester/assets/img/assets/cubes.png')">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2 class="section-title text-center title-divider"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-anchor-placement="top-bottom"
                    data-aos-easing="ease-in-out"
                    data-aos-duration="700">
                    {{ __('Main Services') }}
                    <span class="highlight">.</span></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img-wrapper"
                 style="float: right"
                 data-aos="fade-right"
                 data-aos-delay="100"
                 data-aos-anchor-placement="top-bottom"
                 data-aos-easing="ease-in-out"
                 data-aos-duration="600">
                <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 content-side"
                 style="float: left"
                 data-aos="fade-left"
                 data-aos-delay="200"
                 data-aos-anchor-placement="top-bottom"
                 data-aos-easing="ease-in-out"
                 data-aos-duration="600">
                <div class="tabs-section-type-2">
                    <div class="container">
                        <div class="tabs-wrapper">
                            <div class="row">
                                @foreach($services as $service)
                                    <div class="col tabs-header d-flex justify-content-center">
                                        <div class="tab-trigger-wrapper">
                                            @if($service->id===1)
                                                <div class="tab-trigger active" data-tab=".tab-body-{{$service->id}}">
                                                    @else
                                                        <div class="tab-trigger " data-tab=".tab-body-{{$service->id}}">
                                                            @endif
                                                            <i class="fa fa-th"></i>

                                                            <h6>{{$service->title_lang}}</h6>
                                                        </div>
                                                </div>
                                                @endforeach
                                        </div>
                                    </div>
                                    <div class="tabs-body-wrapper">
                                        @foreach($services as $service)
                                            @if($service->id===1)
                                                <div class="tab-body {{$service->id}} active-body">
                                                    @else
                                                        <div class="tab-body {{$service->id}} ">
                                                            @endif

                                                            <div class="row">
                                                                <p class="description">{{$service->decription_lang}}</p>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
