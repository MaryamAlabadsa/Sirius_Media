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
                                <div class="col tabs-header d-flex justify-content-center">
                                    <div class="tab-trigger-wrapper">
                                        <div class="tab-trigger active" data-tab=".tab-body-0">
                                            <i class="fa fa-th"></i>
                                            <h6>Planning</h6>
                                        </div>
                                    </div>
                                    <div class="tab-trigger-wrapper">
                                        <div class="tab-trigger" data-tab=".tab-body-1">
                                            <i class="fa fa-tint"></i>
                                            <h6>Design</h6>
                                        </div>
                                    </div>
                                    <div class="tab-trigger-wrapper">
                                        <div class="tab-trigger" data-tab=".tab-body-8">
                                            <i class="fa fa-terminal"></i>
                                            <h6>UI/UX</h6>
                                        </div>
                                    </div>
                                    <div class="tab-trigger-wrapper">
                                        <div class="tab-trigger" data-tab=".tab-body-9">
                                            <i class="fa fa-chart-pie"></i>
                                            <h6>Marketing</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            




                            {{--                            <div class="row">--}}
{{--                                <div class="col tabs-header d-flex justify-content-center">--}}
{{--                                    <div class="tab-trigger-wrapper">--}}
{{--                                        <div class="tab-trigger active" data-tab=".tab-body-6">--}}
{{--                                            <i class="fa fa-th"></i>--}}
{{--                                            <h6>Planning</h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-trigger-wrapper">--}}
{{--                                        <div class="tab-trigger active" data-tab=".tab-body-6">--}}
{{--                                            <i class="fa fa-th"></i>--}}
{{--                                            <h6>Planning</h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-trigger-wrapper">--}}
{{--                                        <div class="tab-trigger" data-tab=".tab-body-7">--}}
{{--                                            <i class="fa fa-tint"></i>--}}
{{--                                            <h6>Design</h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-trigger-wrapper">--}}
{{--                                        <div class="tab-trigger" data-tab=".tab-body-7">--}}
{{--                                            <i class="fa fa-tint"></i>--}}
{{--                                            <h6>Design</h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-trigger-wrapper">--}}
{{--                                        <div class="tab-trigger" data-tab=".tab-body-8">--}}
{{--                                            <i class="fa fa-terminal"></i>--}}
{{--                                            <h6>UI/UX</h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-trigger-wrapper">--}}
{{--                                        <div class="tab-trigger" data-tab=".tab-body-9">--}}
{{--                                            <i class="fa fa-chart-pie"></i>--}}
{{--                                            <h6>Marketing</h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <button id="show-more-btn">Show More</button>--}}
{{--                                    <button id="show-less-btn" style="display: none">Show Less</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}







                            {{--                            <div class="row">--}}
{{--                                <div class="col tabs-header d-flex justify-content-center">--}}
{{--                                    @foreach($services as $service)--}}
{{--                                        <div class="tab-trigger-wrapper">--}}
{{--                                            @if($service->id===1)--}}
{{--                                                <div class="tab-trigger active" data-tab=".tab-body-{{$service->id}}">--}}
{{--                                                    @else--}}
{{--                                                        <div class="tab-trigger " data-tab=".tab-body-{{$service->id}}">--}}
{{--                                                            @endif--}}
{{--                                                            <i class="fa fa-th"></i>--}}
{{--                                                            <h6>{{$service->title_lang}}</h6>--}}
{{--                                                        </div>--}}
{{--                                                        @endforeach--}}
{{--                                                </div>--}}
{{--                                        </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="tabs-body-wrapper">
                                @foreach($services as $service)
                                    @if($service->id===1)
                                        <div class="tab-body{{$service->id}} active-body">
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
