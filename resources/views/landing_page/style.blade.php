<head>

    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#f3b01b"/>
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#f3b01b"/>
    <meta name=msapplication-TileColor content=#FFFFFF>
    <meta name=msapplication-TileImage content=favicon.ico>
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent"/>
    <title> {{ __('title') }}</title>

    <!-- css-files -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/logo.png')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
{{--    <style>--}}
{{--        .card-container-maryam {--}}
{{--            display: flex;--}}
{{--            flex-wrap: nowrap;--}}
{{--            overflow-x: auto;--}}
{{--            width: 100%;--}}
{{--            /*height: 70px;*/--}}
{{--            /* set a fixed height for the container */--}}
{{--        }--}}

{{--        .card_maryam {--}}
{{--            flex: 0 0 auto;--}}
{{--            width: 120px;--}}
{{--            /* set a fixed width for each card */--}}
{{--            /*height: 70px;*/--}}
{{--            /* set a fixed height for each card */--}}
{{--            margin-right: 10px;--}}
{{--            /*background-color: #ddd;*/--}}
{{--            display: none;--}}
{{--            text-align: center;--}}
{{--            /* hide all cards by default */--}}
{{--        }--}}

{{--        .card_maryam:nth-child(-n+5) {--}}
{{--            display: block;--}}
{{--        }--}}

{{--        #show-more-btn {--}}
{{--            margin-left: auto;--}}
{{--        }--}}


{{--        .card-container-maryam .tab-trigger {--}}
{{--            font-weight: 600;--}}
{{--            text-align: center;--}}
{{--            padding: 15px 20px;--}}
{{--            cursor: pointer;--}}
{{--            font-size: 14px;--}}
{{--            position: relative;--}}
{{--            bottom: -1px;--}}
{{--            margin-right: 15px;--}}
{{--            -webkit-transition: all .3s ease-in-out;--}}
{{--            transition: all .3s ease-in-out;--}}
{{--            background-color: var(--gray-section);--}}
{{--            border: 1px solid var(--default-border);--}}
{{--            border-top-left-radius: 5px;--}}
{{--            border-top-right-radius: 5px--}}
{{--        }--}}

{{--        @media (max-width: 1199px) {--}}
{{--            .card_maryam .tab-trigger {--}}
{{--                font-size: 13px;--}}
{{--                padding: 10px 15px--}}
{{--            }--}}
{{--        }--}}

{{--        @media (max-width: 991px) {--}}
{{--            .card_maryam .tab-trigger {--}}
{{--                margin-bottom: 10px;--}}
{{--                margin-right: 5px;--}}
{{--                margin-left: 5px;--}}
{{--                border-radius: 5px--}}
{{--            }--}}
{{--        }--}}

{{--        @media (max-width: 767px) {--}}
{{--            .card_maryam .tab-trigger {--}}
{{--                font-size: 12px--}}
{{--            }--}}
{{--        }--}}

{{--        @media (max-width: 575px) {--}}
{{--            .card_maryam .tab-trigger {--}}
{{--                margin-right: 0;--}}
{{--                margin-left: 0--}}
{{--            }--}}
{{--        }--}}

{{--        .card_maryam .active {--}}
{{--            color: var(--primary-color);--}}
{{--            border-bottom: 1px solid transparent--}}
{{--        }--}}

{{--        @media (max-width: 991px) {--}}
{{--            .card_maryam .active {--}}
{{--                border-bottom: 1px solid var(--default-border);--}}
{{--                color: #fff;--}}
{{--                background-color: var(--primary-color)--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
</head>
