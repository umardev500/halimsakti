<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="1Ffg34AdnX06FCI-mluFDoykhNNUzkabSQmel-qN5AE" />
    <link rel="icon" type="image/png" href="{{ asset('img/logo/logo.png') }}">
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="next-head-count" content="2" />
    <title>@yield('title' ?? 'PT. Halim Sakti Pratama')</title>
    <link rel="stylesheet" href="{{ asset('css/halim1.css')}}" data-n-g="" />
    <link rel="stylesheet" href="{{ asset('css/halim2.css')}}" data-n-g="" />
    <link rel="stylesheet" href="{{ asset('css/halim3costome.css')}}" data-n-g="" />
    <link rel="stylesheet" href="{{ asset('css/my-custom.css')}}" data-n-g="" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css')}}" />

    @yield('css')
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            text-decoration: none;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>

<body>
    {{-- <a href="https://api.whatsapp.com/send?phone=62215600400&text=Halim%20Sakti%20Pratama%20Kontak%20Kami"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a> --}}
    <div id="__next">
        <div id="layout">
            <header>
                <div class="wrapper my-header">
                    @yield('logo')
                    <nav class="my-nav">
                        <div class="burger-menu">
                            <div>
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <ul class="menu">
                            <li><a href="{{ route('company_en') }}" style="font-family: roboto, 'sans-serif'">Company</a></li>
                            <li><a href="{{ route('wproduct_en') }}" style="font-family: roboto, 'sans-serif'">Product</a></li>
                            <li><a href="{{ route('wnews_en') }}" style="font-family: roboto, 'sans-serif'">News</a>
                            </li>
                            <li><a href="{{ route('contact_en') }}" style="font-family: roboto, 'sans-serif'">Contact</a></li>
                        </ul>



                        <form class="my-form-search" action="#">
                            <div class="my-btn-search">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="search-icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z">

                                    </path>
                                </svg>
                            </div>
                            <div class="my-search-view">
                                <div class="my-search-input-wrapper">
                                    <div class="my-search-icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <input type="text" name="cari" class="my-search-input">
                                </div>
                                <div class="my-search-suggestion">
                                </div>
                            </div>
                        </form>





                        <div class="switch-lang-btn">
                            <div class="switch-btn"><img src="{{ asset('img/logo/language.png') }}" alt="lang" /><i class="fa fa-angle-down"></i></div>
                            <div class="list-lang">
                                @yield('lang')
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            @yield('content')
            <footer>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="footer-1">
                                <h3>Product</h3>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="footer-links">
                                            <li><a href="/product/pvc-additives">PVC Additives</a></li>
                                            <li><a href="/product/plywood-glue-and-adhesive">Plywood Glue &amp;
                                                    Adhesive</a></li>
                                            <li><a href="/product/electroplating-chemical-product">Electroplating
                                                    Chemical Product</a></li>
                                            <li><a href="/product/metal">Metal</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="footer-links">
                                            <li><a href="/product/paint-ink-chemical-product">Paint / Ink Chemical
                                                    Product</a></li>
                                            <li><a href="/product/ceramic-raw-material">Caramic Raw Material</a></li>
                                            <li><a href="/product/food-ingredient-products">Food Ingredient Products</a>
                                            </li>
                                            <li><a href="/product/feed-additive-products">Feed Additive Products</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="footer-links">
                                            <li><a href="/product/plastic-resin-compound-and-engineering-plastic">Plastic
                                                    Resin / Compound And Engineering Plastic</a></li>
                                            <li><a href="/product/other-general-chemical-products">Other General
                                                    Chemical Products</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="footer-2">
                                <h3>News</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="footer-links">
                                            <li><a href="{{ route('wnews_en') }}">Food</a></li>
                                            <li><a href="{{ route('wnews_en') }}">Non Food</a></li>
                                            <li><a href="{{ route('wnews_en') }}">Event</a></li>
                                            <li><a href="{{ route('wnews_en') }}">General</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-3">
                                <div class="row">
                                    <div class="col-lg-12"><img src="{{ asset('assets/logo-footer.png')}}" alt="logo" class="logo-footer" />
                                        <div class="sosmed"><a href="http://google.com" target="_blank" rel="noopener noreferrer"><img src="{{ asset('assets/ig-icon.png')}}" alt="" /></a><a href="http://google.com" target="_blank" rel="noopener noreferrer"><img src="/assets/li-icon.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="my-overlay"></div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" type="text/javascript">
    </script>
    <script>
        $('.burger-menu').on('click', function(e) {

            $(this).parent()
                .toggleClass('menu-open')

        });
    </script>

    <script type="text/javascript" src="{{ asset('js/my-search.js') }}"></script>
    <script nomodule="" src="{{ asset('static/chunks/polyfills-05d6b25b3c33d28a7267.js')}}"></script>
    <script src="{{ asset('static/chunks/main-746c1dc1a4ae6f308596.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/webpack-53baef32d09f7a38e32d.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/framework.cdfd3938acfcf0b7d74b.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/29df8aa4.7b37a38a8911fc5fb44b.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/commons.9e094002575a935111ed.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/pages/_app-fa5c5eb4df40579f4c77.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/1a48c3c1.e0938c0929d6e8b9498d.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/b64f6ab7.06fb5d88b07f2cd92b8d.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/29107295.dda7d09f41a8b3facf20.js')}}" async=""></script>
    <script src="{{ asset('static/chunks/75447db9cbe8f7c6e21d4a62f9c3255061bc3fa5.c423d562ef33141691b6.js')}}" async="">
    </script>
    <script src="{{ asset('static/chunks/c59b47b88a0bada765fd0efc29de47ead8db980a.6e6a4e9ad0918a97f225.js')}}" async="">
    </script>
    <script src="{{ asset('static/chunks/81c4ce50b723f646b96f6500f434461f8ef7e2a5.c130d5b80f46d4b22c5e.js')}}" async="">
    </script>
    <script src="{{ asset('static/chunks/pages/index-50d48e1aaefa4b946364.js')}}" async=""></script>
    <script src="{{ asset('static/fZQ5m5YoTC_PPiSQ5fJJs/_buildManifest.js')}}" async=""></script>
    <script src="{{ asset('static/fZQ5m5YoTC_PPiSQ5fJJs/_ssgManifest.js')}}" async=""></script>

    @yield('script')
</body>

</html>
