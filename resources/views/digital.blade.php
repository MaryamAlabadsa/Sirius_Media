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
                            <div class="card-container-maryam">
                                <div id="show-less-btn" class="swiper-button-prev-testimonials"><i
                                        class="fa fa-angle-left"></i></div>
                                @foreach($services as $service)

                                    <div class="card_maryam">
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

                                            <div id="show-more-btn" class="swiper-button-prev-testimonials"><i
                                                    class="fa fa-angle-right"></i></div>
                                    </div>

                                    <div class="tabs-body-wrapper">
                                        @foreach($services as $service)
                                            @if($service->id===1)
                                                <div class="tab-body-{{$service->id}} active-body">
                                                    @else
                                                        <div class="tab-body-{{$service->id}} ">
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
