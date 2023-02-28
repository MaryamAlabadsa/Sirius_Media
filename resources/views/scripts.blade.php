
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

<script>
    $(document).ready(function() {
        $('img').attr('loading', 'lazy');
    });
    $(function() {
        var isRTL = $('html').attr('dir') === 'rtl'; // check if language is RTL
        var container = $('.image-container');

        if (isRTL) {
            container.addClass('right').removeClass('left'); // align to the right
        } else {
            container.addClass('left').removeClass('right'); // align to the left
        }
    });
    // --------------------------------------------------
    // custom dropdown
    // --------------------------------------------------
    // dropdown = function(e){
    //     var obj = $(e+'.dropdown');
    //     var btn = obj.find('.btn-selector');
    //     var dd = obj.find('ul');
    //     var opt = dd.find('li');
    //
    //     obj.on("mouseenter", function() {
    //         dd.show();
    //     }).on("mouseleave", function() {
    //         dd.hide();
    //     })
    //
    //     opt.on("click", function() {
    //         dd.hide();
    //         var txt = $(this).text();
    //         opt.removeClass("active");
    //         $(this).addClass("active");
    //         btn.text(txt);
    //     });
    // }
    // dropdown('#lang-selector');
    //

</script>

