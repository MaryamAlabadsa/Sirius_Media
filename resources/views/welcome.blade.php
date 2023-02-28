<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        @include('partials/language_switcher')
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            {{ __('Welcome to our website, :Name', ['name' => 'amanda']) }}
        </div>
    </div>
</div>
<script>
    // --------------------------------------------------
    // custom dropdown
    // --------------------------------------------------
    dropdown = function(e){
        var obj = $(e+'.dropdown');
        var btn = obj.find('.btn-selector');
        var dd = obj.find('ul');
        var opt = dd.find('li');

        obj.on("mouseenter", function() {
            dd.show();
        }).on("mouseleave", function() {
            dd.hide();
        })

        opt.on("click", function() {
            dd.hide();
            var txt = $(this).text();
            opt.removeClass("active");
            $(this).addClass("active");
            btn.text(txt);
        });
    }
    dropdown('#lang-selector');

</script>
</body>
