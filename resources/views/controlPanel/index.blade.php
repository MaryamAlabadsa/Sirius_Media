<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="assets/"
    data-template="vertical-menu-template-free">
<head>
    @include('controlPanel.style')
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        @include('controlPanel.Menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('controlPanel.navbar')


            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                @yield('content')
                <!-- / Content -->

                <!-- Footer -->
                @include('controlPanel.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
@include('controlPanel.script')
{{--@yield('script')--}}
{{--@section('script')--}}

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    document.querySelector('form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission
        // Show SweetAlert confirmation dialog
        swal({
            title: "Are you sure?",
            text: "Do you want to save the changes?",
            icon: "warning",
            buttons: ["Cancel", "Save"],
            dangerMode: true,
        }).then((confirmed) => {
            if (confirmed) {
                // User confirmed, show progress bar alert
                swal({
                    title: "Saving Changes",
                    text: "Please wait...",
                    icon: "info",
                    buttons: false,
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                    timer: 2000 // Adjust the duration as needed
                });

                // Proceed with form submission after a delay (for demonstration purposes)
                setTimeout(() => {
                    this.submit(); // Submit the form
                }, 2000); // Adjust the delay as needed
            } else {
                // User canceled, do nothing
            }
        });
    });
</script>
{{--@endsection--}}
</body>
</html>
