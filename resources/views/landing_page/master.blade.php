<!doctype html>
<html lang="zxx">
@include('landing_page.style')
<!--
[Home Page]
[1] Page Loader
[2] Navigation-Menu
[3] Hero-Header
[4] About Section
[5] Digital Services
[6] Counter Section
[7] Team Section
[8] Blockquote Section
[9] Content Section
[10] Recent Projects
[11] Testimonials
[12] Recent Posts
[13] Footer
-->
<body>
<!-- [1] Page Loader -->
{{--@include('page-loader')--}}
<div id="main-wrapper" class="wrapper-hidden z-index-100">
    <!-- [2] Navigation-Menu -->
    @include('landing_page.Navigation-Menu')
    <!-- [3] slider -->
    @include('landing_page.slider')

   @yield('content')
    <!-- [13] Footer -->
    @include('landing_page.footer')
</div>
<!-- js-files -->
<!-- JQuery -->
@include('landing_page.scripts')
</body>
</html>
