<!doctype html>
<html lang="zxx">
@include('landing_page.style')

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
