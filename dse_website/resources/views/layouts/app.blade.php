<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DSE') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>

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
    $(document).ready(function() {

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
</script>
</html>
