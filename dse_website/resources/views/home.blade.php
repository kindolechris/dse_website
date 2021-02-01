@extends('layouts.app')
@section('content')
    @include('layouts.navbar-header')
    <div data-spy="scroll" data-target="#navbar" data-offset="0">
    <header>
        <div class="flex w-full h-100 sm:h-100 md:h-100 bg" style="background-image: url('{{asset('/image/dse_stock.jpg')}}'); height: 64vh;">
                <a href="#routes" class="rounded-full absolute bottom-0 right-0 m-4 cursor-pointer shadow-lg bg-dark hover:bg-white text-white h-12 w-12 text-center items-center hover:shadow-md">
                    <svg class="mx-auto h-full fill-current text-white flex justify-center items-center" width="14pt" height="14pt" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 407.437 407.437" style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve">
<polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
</svg>
                </a>
            <div class="caption">
                <span class="border">DAR ES SALAAM STOCK EXCHANGE</span>
                <br>
                <br>
                <br>
                <span class="border">Creating opportunities</span>
{{--                <h2 class="text-white border">Dar es salaam stock exchange</h2>--}}
{{--                <h6 class="text-white text-center border">Creating opportunities</h6>--}}
            </div>
            <div id="banner">
                <a href="/">
                    <div id="target"></div>
                    <img id="product" src="{{asset('image/kiganjani.png')}}"/>
                    <div id="badge">New!</div>
                    <div id="sale">
                        <span id="sale-text italic">Easy and fast</span><br/>
                        <a class="text-xl" href="https://play.google.com/store/apps/details?id=com.maduhu.dseapp" target="_blank"><span id="button">Get it now</span></a>
                    </div>
                </a>
            </div>
        </div>
    </header>

        <div class="container">
            <div class="mt-4 flex justify-center">
                <h4 class="text-white">Latest news</h4>
            </div>
            <div class="flex mt-2 justify-center ">
                <div class="border-2 border-dark h-1 bg-dark rounded-full w-25">
                </div>
            </div>
        </div>
            <div class="container py-3 mt-4">
                <div class="carousel slide multi-item-carousel" id="theCarousel">
                    <div class="carousel-inner row w-100 mx-auto">
                        <div class="carousel-item active col-md-4 cursor-pointer" type="button">
                            <div class="bg-dark border-2 border-dark shadow-sm pt-4 rounded-md" style="height: 24rem">
                                        <p class="flex justify-center text-center">
                                            <svg class="h-16 w-16 text-colorPrimay"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />  <line x1="8" y1="8" x2="12" y2="8" />  <line x1="8" y1="12" x2="12" y2="12" />  <line x1="8" y1="16" x2="12" y2="16" /></svg>
                                        </p>
                            <div class="" style="position: absolute; bottom: 0;">
                                <p class="text-center text-white font-semibold">Hisa kiganjani</p>
                                <p class="text-center text-white pr-4 pl-4">Sasa waweza wekeza hisa kupitia simu yako ya mkononi</p>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4 cursor-pointer" type="button">
                            <div class="bg-dark border-2 border-dark shadow-sm pt-4 rounded-md" style="height: 24rem">
                                <p class="flex justify-center text-center">
                                    <svg class="h-16 w-16 text-colorPrimay"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />  <line x1="8" y1="8" x2="12" y2="8" />  <line x1="8" y1="12" x2="12" y2="12" />  <line x1="8" y1="16" x2="12" y2="16" /></svg>
                                </p>
                                <div class="" style="position: absolute; bottom: 0;">
                                    <p class="text-center text-white font-semibold">Hisa kiganjani</p>
                                    <p class="text-center text-white pr-4 pl-4">Sasa waweza wekeza hisa kupitia simu yako ya mkononi</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  col-md-4 cursor-pointer" type="button">
                            <div class="bg-dark border-2 border-dark shadow-sm pt-4 rounded-md" style="height: 24rem">
                                <p class="flex justify-center text-center">
                                    <svg class="h-16 w-16 text-colorPrimay"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />  <line x1="8" y1="8" x2="12" y2="8" />  <line x1="8" y1="12" x2="12" y2="12" />  <line x1="8" y1="16" x2="12" y2="16" /></svg>
                                </p>
                                <div class="" style="position: absolute; bottom: 0;">
                                    <p class="text-center text-white font-semibold">Hisa kiganjani</p>
                                    <p class="text-center text-white pr-4 pl-4">Sasa waweza wekeza hisa kupitia simu yako ya mkononi</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4 cursor-pointer" type="button">
                            <div class="bg-dark border-2 border-dark shadow-sm pt-4 rounded-md" style="height: 24rem">
                                <p class="flex justify-center text-center">
                                    <svg class="h-16 w-16 text-colorPrimay"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />  <line x1="8" y1="8" x2="12" y2="8" />  <line x1="8" y1="12" x2="12" y2="12" />  <line x1="8" y1="16" x2="12" y2="16" /></svg>
                                </p>
                                <div class="" style="position: absolute; bottom: 0;">
                                    <p class="text-center text-white font-semibold">Hisa kiganjani</p>
                                    <p class="text-center text-white pr-4 pl-4">Sasa waweza wekeza hisa kupitia simu yako ya mkononi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#theCarousel" role="button" data-slide="prev">
                        <!-- INSERT MY OWN PREV ICON USING FONT AWESOME  -->
                        <div class="rounded-full bg-white text-white hover:bg-white h-12 w-12 text-center items-center hover:shadow-md">
                            <svg class="mx-auto fill-current text-dark h-full flex justify-center items-center"  width="12" height="12"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"/></svg>
                            <span class="sr-only">Previous</span>
                        </div>
                    </a>

                    <a class="carousel-control-next  w-auto" href="#theCarousel" role="button" data-slide="next" style="margin-left: 250px">
                        <!-- INSERT MY OWN NEXT ICON USING FONT AWESOME  -->
                        <div class="rounded-full bg-white hover:bg-white h-12 w-12 text-center items-center hover:shadow-md">
                            <svg class="mx-auto h-full fill-current text-dark flex justify-center items-center" width="12" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"/></svg>
                            <span class="sr-only">Next</span>
                        </div>
                    </a>
                </div>
            </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="">
                <div class="spinner-grow text-info" role="status">
                    <span class="sr-only text-white">Loading...</span>
                </div>
            </div>
        </div>
            <hr class="my-5">
        <!-- footer -->
        <footer class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-column">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <span class="footer-title">Media center</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Product 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Plans & Prices</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Frequently asked questions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 footer-column">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <span class="footer-title">Company</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Governance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Rules and regulations</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 footer-column">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <span class="footer-title">Contact & Support</span>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link"><i class="fas fa-phone"></i>Tel +255 22 2123983</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-whatsapp"></i><span class="ml-2">0747536696</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-fax"></i>Fax +255 22 213384</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Email info@dse.co.tz</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-star"></i>Give feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-4 box">
        <span class="copyright quick-links">Copyright &copy; Dar es salaam stock exchange <script>document.write(new Date().getFullYear())</script>
        </span>
                    </div>
                    <div class="col-md-4 box">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 box">
                        <ul class="list-inline quick-links">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
    </div>
@endsection
<script>
    $(function () {
        $("#carousel-multiple").on("slide.bs.carousel", function (e) {
            var itemsPerSlide = parseInt($(this).attr('data-maximum-items-per-slide')),
                totalItems = $(".carousel-item", this).length,
                reserve = 1,//do not change
                $itemsContainer = $(".carousel-inner", this),
                it = (itemsPerSlide + reserve) - (totalItems - e.to);

            if (it > 0) {
                for (var i = 0; i < it; i++) {
                    $(".carousel-item", this)
                        .eq(e.direction == "left" ? i : 0)
                        // append slides to the end/beginning
                        .appendTo($itemsContainer);
                }
            }
        });
    });

</script>

