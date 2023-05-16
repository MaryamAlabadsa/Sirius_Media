<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<!-- AOS -->
<script src="{{ asset('assets/js/aos.min.js')}}"></script>
<!-- Parallax -->
<script src="{{ asset('assets/js/parallax.min.js')}}"></script>
<!-- Progress Bars -->
<script src="{{ asset('assets/js/progressbar.min.js')}}"></script>
<!-- Magnific -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Three -->
<script src="{{ asset('assets/js/three.min.js')}}"></script>
<!-- Projector -->
<script src="{{ asset('assets/js/projector.min.js')}}"></script>
<!-- Renderer -->
<script src="{{ asset('assets/js/canvas-renderer.min.js')}}"></script>
<!-- ImageLoaded -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Anime -->
<script src="{{ asset('assets/js/anime.min.js')}}"></script>
<!-- Isotope -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!-- TweenLite -->
<script src="{{ asset('assets/js/TweenMax.min.js')}}"></script>
<!-- Hover3D -->
<script src="{{ asset('assets/js/jquery.hover3d.min.js')}}"></script>
<!-- EasePack -->
<script src="{{ asset('assets/js/EasePack.min.js')}}"></script>
<!-- Particles -->
<script src="{{ asset('assets/js/particles.min.js')}}"></script>
<!-- JSColor -->
<script src="{{ asset('assets/js/jscolor.min.js')}}"></script>
<!-- YoutubeBackground -->
<script src="{{ asset('assets/js/jquery.youtubebackground.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
<!-- Swiper -->
<script src="{{ asset('assets/js/swiper.min.js')}}"></script>
<!-- Main JS-file -->
<script src="{{ asset('assets/js/main.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>

<script>
    $(document).ready(function () {
        $('img').attr('loading', 'lazy');

        $('.tab-trigger').click(function () {
            $('.tab-trigger').removeClass('active');
            var img = $(this).find('.service-content').attr('data-img');
            $('#service-img').attr('src', img);
            $('#service-description').text($(this).find('.service-content').text());

            $('#service-img').addClass('fade-up');
            $('#service-description').addClass('fade-up');
            // remove animation after 2 second
            setTimeout(function () {
                $('#service-img').removeClass('fade-up');
                $('#service-description').removeClass('fade-up');
            }, 1000);
        });
    });
    $(function () {
        var isRTL = $('html').attr('dir') === 'rtl'; // check if language is RTL
        var container = $('.image-container');

        if (isRTL) {
            container.addClass('right').removeClass('left'); // align to the right
        } else {
            container.addClass('left').removeClass('right'); // align to the left
        }

       let first_service_slide = $('[data-swiper-slide-index="0"] .tab-trigger');
       first_service_slide.click();
       first_service_slide.addClass('active');
       let img = first_service_slide.find('.service-content').attr('data-img');
       $('#service-img').attr('src', img);
    });

</script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // 3 slides per view
        slidesPerView: 3,
    }); 
</script>

{{--<script>--}}
{{--    const showMoreBtn = document.getElementById("show-more-btn");--}}
{{--    const showLessBtn = document.getElementById("show-less-btn");--}}
{{--    const cards = document.querySelectorAll(".card_maryam");--}}

{{--    let currentCardIndex = 4;--}}

{{--    showMoreBtn.addEventListener("click", () => {--}}
{{--        // hide the first shown card--}}
{{--        cards[currentCardIndex - 4].style.display = "none";--}}

{{--        // show the next hidden card--}}
{{--        cards[currentCardIndex].style.display = "block";--}}

{{--        // increment the current card index--}}
{{--        currentCardIndex++;--}}

{{--        // disable the button if all cards are shown--}}
{{--        if (currentCardIndex >= cards.length) {--}}
{{--            showMoreBtn.disabled = true;--}}
{{--        }--}}

{{--        // enable the "Show Less" button--}}
{{--        showLessBtn.disabled = false;--}}
{{--    });--}}

{{--    showLessBtn.addEventListener("click", () => {--}}
{{--        // hide the last shown card--}}
{{--        cards[currentCardIndex - 3].style.display = "none";--}}

{{--        // show the first hidden card--}}
{{--        cards[currentCardIndex - 5].style.display = "block";--}}

{{--        // decrement the current card index--}}
{{--        currentCardIndex--;--}}

{{--        // disable the button if the first two cards are shown--}}
{{--        if (currentCardIndex == 4) {--}}
{{--            showLessBtn.disabled = true;--}}
{{--        }--}}

{{--        // enable the "Show More" button--}}
{{--        showMoreBtn.disabled = false;--}}
{{--    });--}}
{{--</script>--}}

