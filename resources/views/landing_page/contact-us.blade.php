@extends('landing_page.master')
@section('content')
    <section class="contact-form-section parallax-window color_overlay dark_overlay_gradient"
             data-src="http://via.placeholder.com/1920x1080" data-speed="0.5">
        <div class="container heading">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2 class="section-title text-center title-divider white-section-title"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-easing="ease-in-out"
                        data-aos-duration="700">Get In Touch <span class="highlight">.</span></h2>
                </div>
            </div>
        </div>
        <div class="container contact-wrapper">
            <div class="row d-flex flex-column"
                 data-aos="fade-up"
                 data-aos-delay="100"
                 data-aos-anchor-placement="top-bottom"
                 data-aos-easing="ease-in-out"
                 data-aos-duration="800">

                <form id="ajax-contact" class="primary-contact-form d-flex flex-column">
                    <div class="input-row">
                        <input class="form-name" type="text" name="name" placeholder="Name*" required>
                        <input class="form-phone" type="text" name="phone" placeholder="Phone">
                    </div>
                    <input class="form-email" type="email" name="email" placeholder="Email*" required>
                    <textarea class="form-message" name="message" placeholder="Your message..."></textarea>
                    <div class="d-flex justify-content-center">
                        <button class="button-submit" type="submit">Send Message</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <section class="follow-us-section large-section gray-section">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2 class="section-title text-center title-divider"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-easing="ease-in-out"
                        data-aos-duration="700">Follow Us <span class="highlight">.</span></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="social-wrapper d-flex"
                     data-aos="flip-down"
                     data-aos-delay="100"
                     data-aos-anchor=".map-section "
                     data-aos-easing="ease-in-out"
                     data-aos-duration="800">
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
    </section>
@endsection
