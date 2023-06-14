@extends('landing_page.master')
@section('content')
<!-- [4] Pricing table -->
<section class="pricing-table-type-1 large-section gray-section">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2 class="section-title text-center title-divider" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="700">Pricing
                    Plan <span class="highlight">.</span></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($pricing as $price)
            <div class="col-sm-6 col-lg-3 pricing-table-wrapper">
                <div class="pricing-table" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="700">
                    <div class="pricing-header">
                        <p class="pricing-type">{{$price->name_en}}</p>
                        <h2 class="price"><span>$</span>{{$price->price}}</h2>
                    </div>
                    <ul class="features-list">
                        {{$price->description_en}}
                    </ul>
                    <div class="btn-wrapper d-flex">
                        {{-- <form action=""></form> --}}
                        <a href="{{route('cart.store',$price->id)}}">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-sm-6 col-lg-3 pricing-table-wrapper">
                <div class="pricing-table" data-aos="fade-up" data-aos-delay="200"
                    data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="700">
                    <div class="pricing-header">
                        <p class="pricing-type">Silver</p>
                        <h2 class="price"><span>$</span>39</h2>
                    </div>
                    <ul class="features-list">
                        <li>
                            <p>Free Setup</p>
                        </li>
                        <li>
                            <p>Powerful Customization</p>
                        </li>
                        <li>
                            <p>Unlimited Items</p>
                        </li>
                        <li>
                            <p>24/7 Support</p>
                        </li>
                    </ul>
                    <div class="btn-wrapper d-flex">
                        <a href="{{route('payment.create')}}">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 pricing-table-wrapper active-card">
                <div class="pricing-table" data-aos="fade-up" data-aos-delay="300"
                    data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="700">
                    <div class="pricing-header">
                        <div class="best-value">Best Value</div>
                        <p class="pricing-type">Gold</p>
                        <h2 class="price"><span>$</span>49</h2>
                    </div>
                    <ul class="features-list">
                        <li>
                            <p>Free Setup</p>
                        </li>
                        <li>
                            <p>Powerful Customization</p>
                        </li>
                        <li>
                            <p>Unlimited Items</p>
                        </li>
                        <li>
                            <p>24/7 Support</p>
                        </li>
                    </ul>
                    <div class="btn-wrapper d-flex">
                        <a href="{{route('payment.create')}}">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 pricing-table-wrapper">
                <div class="pricing-table" data-aos="fade-up" data-aos-delay="400"
                    data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out" data-aos-duration="700">
                    <div class="pricing-header">
                        <p class="pricing-type">Platium</p>
                        <h2 class="price"><span>$</span>99</h2>
                    </div>
                    <ul class="features-list">
                        <li>
                            <p>Free Setup</p>
                        </li>
                        <li>
                            <p>Powerful Customization</p>
                        </li>
                        <li>
                            <p>Unlimited Items</p>
                        </li>
                        <li>
                            <p>24/7 Support</p>
                        </li>
                    </ul>
                    <div class="btn-wrapper d-flex">
                        <a href="{{route('payment.create')}}">Sign up</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- [5] Call to action -->
<section class="call-to-action-type-1 white-section bg-attachment-fixed small-section bg_img border-top-simple"
    style="background-image: url('assets/img/assets/axiom-pattern.png')">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="title">
                    We'd love to hear about your project
                </h2>
                <p class="message">
                    Eum ea dolorum ceteros mea ullum errem oportere eu, usu ei epicuri omittam satatus, ne mei
                    doctus appetere. Pro

                </p>
                <div class="button-wrapper d-flex justify-content-center">
                    <a href="#" class="button-default-color-2">Start new Projects</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection