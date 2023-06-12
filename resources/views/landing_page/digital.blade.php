<section class="tabs-section-type-2 tabs-creative large-section gray-section bg-attachment-fixed bg_img">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2 class="section-title text-center title-divider" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="700">
                    {{ __('Main Services') }}
                    <span class="highlight">.</span>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img-wrapper" style="float: right" data-aos="fade-right" data-aos-delay="100"
                data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="600">
                <img src="" id="service-img" alt="" class="img-fluid b-r5">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200" data-aos-anchor-placement="top-bottom"
                data-aos-easing="ease-in-out" data-aos-duration="600">
                <div class="tabs-section-type-2">
                    <div class="tabs-wrapper">
                        <div class="tabs-header">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    @foreach ($services as $service)
                                    <div class="swiper-slide">
                                        <div class="tab-trigger-wrapper">
                                            <div class="tab-trigger" data-tab="tab-{{$service->id}}">
                                                <i class="fa fa-{{$service->icon}}"></i>
                                                <h6>{{!is_rtl() ? $service->title : $service->title_ar}}</h6>
                                                <span class="service-content hidden"
                                                    data-img="{{asset($service->image)}}">
                                                    {{!is_rtl() ? $service->description : $service->description_ar}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-control d-flex align-items-center">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>


                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>

                        <div class="tabs-body-wrapper">
                            <p class="service-description" id="service-description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>