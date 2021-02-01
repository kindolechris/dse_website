<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DSE') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.toast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>

        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */

            /* Full height */
            height: 100%;
            opacity: 0.65;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
        }

        #banner {
            position: absolute;
            top: 100%;
            left: 0;
            transform: translate(-5%, -98%);
        }

        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 6px;
        }

        a {
            color: #6c757d;
        }

        a:hover {
            color: #02a2dc;
            text-decoration: none;
        }

        ::selection {
            background: #02a2dc;
            text-shadow: none;
        }

        footer {
            padding: 2rem 0;
            background-color: #212529;
        }

        .footer-column:not(:first-child) {
            padding-top: 2rem;
        }
        @media (min-width: 768px) {
            .footer-column:not(:first-child) {
                padding-top: 0rem;
            }
        }

        .footer-column {
            text-align: center;
        }
        .footer-column .nav-item .nav-link {
            padding: 0.1rem 0;
        }
        .footer-column .nav-item span.nav-link {
            color: #6c757d;
        }
        .footer-column .nav-item span.footer-title {
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
        }
        .footer-column .nav-item .fas {
            margin-right: 0.5rem;
        }
        .footer-column ul {
            display: inline-block;
        }
        @media (min-width: 768px) {
            .footer-column ul {
                text-align: left;
            }
        }

        ul.social-buttons {
            margin-bottom: 0;
        }

        ul.social-buttons li a:active,
        ul.social-buttons li a:focus,
        ul.social-buttons li a:hover {
            background-color: #02a2dc;
        }

        ul.social-buttons li a {
            font-size: 20px;
            line-height: 40px;
            display: block;
            width: 40px;
            height: 40px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            color: #fff;
            border-radius: 100%;
            outline: 0;
            background-color: #1a1d20;
        }

        footer .quick-links {
            font-size: 90%;
            line-height: 40px;
            margin-bottom: 0;
            text-transform: none;
            font-family: Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .copyright {
            color: white;
        }

        .fa-ellipsis-h {
            color: white;
            padding: 2rem 0;
        }

        .play-badge {
            border-radius: 0;
            box-shadow: 0 1px 1px rgba(0,0,0,.07);
            width: 130px;
            border: 1px solid rgba(40,40,40,.19);
        }


        .vline {
            border-left: 4px solid #dedede;
            height: 300px;
        }
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered-seat {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @media (min-width: 768px) {
            .multi-item-carousel .carousel-inner .carousel-item {
                margin-right: inherit;
            }
            .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item,
            .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item + .carousel-item {
                display: block;
            }
            .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                -webkit-transition: none;
                transition: none;
            }
            .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.33333333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            .multi-item-carousel .carousel-inner .carousel-item-next,
            .multi-item-carousel .carousel-inner .carousel-item-prev {
                position: relative;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .multi-item-carousel .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            .multi-item-carousel .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item,
            .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
            .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }
            .multi-item-carousel .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item,
            .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
            .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                display: block;
                visibility: visible;
            }
        }
        .btn:focus,.btn:active {
            outline: none !important;
            box-shadow: none;
        }

        .tag_remove:focus,.tag_remove:active {
            outline: none !important;
            box-shadow: none;
        }

        .fa, .fab, .fal, .far, .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 2 !important;
        }

        #banner {
            height: 24rem;
            width: 24rem;
            background: #161719;
            overflow: hidden;
            border: solid 1px rgba(0, 0, 0, 0.2);
        }
        #banner a {
            height: 100%;
            width: 100%;
            display: block;
            position: relative;
            overflow: hidden;
            animation: 1s fadein ease-in-out;
            animation-fill-mode: forwards;
        }
        #target {
            background: url(http://base.webdesignforyou.net/banner/target.png) center center no-repeat;
            background-size: 100% auto;
            margin: 0 auto;
            position: absolute;
            width: 500px;
            height: 500px;
            margin-top: -100px;
            margin-left: -100px;
            animation: 20s roty infinite linear;
        }
        #product {
            margin: 30px auto 0 auto;
            display: block;
            z-index: 10;
            width: 150px;
            position: relative;
            opacity: 0;
            animation: 1s growin ease-in-out 1s;
            animation-fill-mode: forwards;
        }
        #button {
            color: #fff;
            padding: 8px 15px 8px 15px;
            font-weight: 700;
            font-size: 18px;
            background: #3ba7d1;
            display: inline-block;
            margin: 10px 0 0 0;
            border-bottom: 2px solid rgba(0, 0, 0, 0.15);
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            opacity: 0;
            animation: 1s fadein ease-in-out 2s;
            animation-fill-mode: forwards;
        }
        #sale {
            text-align: center;
            position: absolute;
            bottom: 20px;
            width: 100%;
            z-index: 10;
        }
        #sale-text {
            color: #fff;
            font-size: 26px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            opacity: 0;
            animation: 1s fadein ease-in-out 1.5s;
            animation-fill-mode: forwards;
        }
        #badge {
            box-sizing: border-box;
            color: #fff;
            padding: 10px 0 0 0;
            font-weight: 800;
            font-family: 'Roboto Slab';
            font-size: 16px;
            text-align: center;
            width: 70px;
            height: 70px;
            background: #ff9400;
            border: solid 2px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            display: inline-block;
            border-radius: 50%;
            transform: rotate(345deg);
            animation: 1s fadein ease-in-out;
            -webkit-transition-delay: 6s;
            transition-delay: 6s;
            position: absolute;
            opacity: 0;
            transform: rotate(0deg);
            top: 0px;
            right: 0px;
            z-index: 10;
            animation: 1s rollin ease-in-out 2.5s;
            animation-fill-mode: forwards;
        }
        @keyframes fadein {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes roty {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        @keyframes rollin {
            0% {
                opacity: 0;
                transform: rotate(0deg);
                top: 0px;
                right: 0px;
            }
            100% {
                opacity: 1;
                transform: rotate(345deg);
                top: 40px;
                right: 40px;
            }
        }
        @keyframes growin {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

    </style>
</head>
<body style="background-color: #212529;">
<div>
    <main class="">
        @yield('content')
    </main>
</div>
</body>
<script>
    window.onload = function() {
        Gifffer();
    }
    $(document).ready(function() {
        //show_toast('')

        {{--show_toast('')--}}
        $('.multi-item-carousel').on('slide.bs.carousel', function (e) {
            let $e = $(e.relatedTarget),
                itemsPerSlide = 3,
                totalItems = $('.carousel-item', this).length,
                $itemsContainer = $('.carousel-inner', this),
                it = itemsPerSlide - (totalItems - $e.index());
            if (it > 0) {
                for (var i = 0; i < it; i++) {
                    $('.carousel-item', this).eq(e.direction == "left" ? i : 0).
                        // append slides to the end/beginning
                        appendTo($itemsContainer);
                }
            }
        });
        $("#nav ul li a[href^='#']").on('click', function(e) {

            // prevent default anchor click behavior
            e.preventDefault();

            // animate
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top
            }, 300, function(){

                // when done, add hash to url
                // (default click behaviour)
                window.location.hash = this.hash;
            });

        });
    });
    function show_toast(message) {
        $.toast({
            // custom message text
            text: message,

            // custom toast title
            heading: '',

            // show/hide transition effects.
            // fade, slide or plain.
            showHideTransition: 'fade',

            // show a close icon
            allowToastClose: true,

            // auto hide after a timeout
            hideAfter: 10000,

            // loader
            loader: true,
            loaderBg: '#9EC600',

            // stack length
            stack: 5,

            // bottom-left, bottom-right, bottom-center,
            // top-left,top-right
            // top-center, mid-center
            // or an object representing the left, right, top, bottom values
            position: 'bottom-left',

            // background color
            bgColor: '#444',

            // custom text color
            textColor: '#eee',

            // custom text align
            textAlign: 'left',

            // custom icon
            icon: false,

            // callback functions.
            beforeShow: function () {},
            afterShown: function () {},
            beforeHide: function () {},
            afterHidden: function () {},
            onClick: function () {}
        })
    }

</script>
</html>
