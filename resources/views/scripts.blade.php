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
    $(document).ready(function () {
        $('img').attr('loading', 'lazy');
    });
    $(function () {
        var isRTL = $('html').attr('dir') === 'rtl'; // check if language is RTL
        var container = $('.image-container');

        if (isRTL) {
            container.addClass('right').removeClass('left'); // align to the right
        } else {
            container.addClass('left').removeClass('right'); // align to the left
        }
    });

</script>

<script>
    const showMoreBtn = document.getElementById("show-more-btn");
    const showLessBtn = document.getElementById("show-less-btn");
    const tabTriggers = document.querySelectorAll(".tab-trigger");
    const tabsHeader = document.querySelector(".tabs-header");

    let currentTabIndex = 3;
    let numTabsToShow = 3;

    showMoreBtn.addEventListener("click", () => {
        // show the next tab
        tabTriggers[currentTabIndex].style.display = "inline-block";

        // increment the current tab index
        currentTabIndex++;

        // enable the "Show Less" button
        showLessBtn.disabled = false;

        // disable the "Show More" button if all tabs are shown
        if (currentTabIndex >= tabTriggers.length) {
            showMoreBtn.disabled = true;
        }

        // hide the first tab if the maximum number of tabs to show is reached
        if (currentTabIndex - numTabsToShow >= 0) {
            tabTriggers[currentTabIndex - numTabsToShow].style.display = "none";
        }
    });

    showLessBtn.addEventListener("click", () => {
        // hide the last tab
        tabTriggers[currentTabIndex - 1].style.display = "none";

        // decrement the current tab index
        currentTabIndex--;

        // enable the "Show More" button
        showMoreBtn.disabled = false;

        // disable the "Show Less" button if all tabs are hidden
        if (currentTabIndex == numTabsToShow) {
            showLessBtn.disabled = true;
        }

        // show the first hidden tab if applicable
        if (currentTabIndex - numTabsToShow >= 0) {
            tabTriggers[currentTabIndex - numTabsToShow].style.display = "inline-block";
        }
    });

    // hide all tabs except the first few
    for (let i = numTabsToShow; i < tabTriggers.length; i++) {
        tabTriggers[i].style.display = "none";
    }

    // adjust the width of the tab trigger wrappers to fit in the same row
    const tabTriggerWrappers = document.querySelectorAll(".tab-trigger-wrapper");
    const totalWidth = tabsHeader.clientWidth - (showMoreBtn.clientWidth + showLessBtn.clientWidth);
    const wrapperWidth = totalWidth / numTabsToShow;

    tabTriggerWrappers.forEach(wrapper => {
        wrapper.style.width = `${wrapperWidth}px`;
    });

</script>

