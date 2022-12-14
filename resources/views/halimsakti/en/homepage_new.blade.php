@include('halimsakti.en.components.firstSlide')
@include('halimsakti.en.components.secondSlide')
@include('halimsakti.en.components.thirdSlide')
@extends('layouts.appHalimEn')
@section('title', 'PT. Halim Sakti Pratama')
@section('css')
<link href="{{ asset('css/Swiper/swiper.css') }}" rel="stylesheet">
<style>
    .mySwiper {
        height: 600px;
    }

    .imgSlider {
        width: 100%;
        height: 830px;
    }

    .gradient-cover {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #fff;
        background: -moz-linear-gradient(7deg, #fff 15%, hsla(0, 0%, 100%, 0) 70%);
        background: linear-gradient(83deg, #fff 15%, hsla(0, 0%, 100%, 0) 70%);
    }

    .position-relativez {
        position: relative !important;
        bottom: 850px;
    }
</style>
@endsection
@section('logo')
<a href="{{ route('homepage_en') }}">
    <img class="logo" src="{{ asset('img/logo/halim.png') }}" alt="logo" />
    <img class="logo_m" src="{{ asset('img/logo/logo.png') }}" alt="logo" />
</a>
@endsection
@section('lang')
<div class="lang-item"><a href="{{ route('homepage') }}" style="text-decoration: none; color:black;">ID</a></div>
<div class="lang-item"><a href="{{ route('homepage_en') }}" style="text-decoration: none; color:black;">EN</a></div>
@endsection
@section('content')
<div class="content null">
    <div id="homepage">
        <div id="banner">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($slider as $s)
                    <div class="swiper-slide">
                        <div class="gradient-cover"></div>
                        <img src="{{ asset('image/slider' . '/' . $s->image) }}" class="imgSlider perfect-img">
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-lg-7 position-static">
                                    <div class="banner-wrap">
                                        <div class="position-relative">
                                            <h1 class="banner-text">{{ $s->judul_eng  }}</h1>
                                            <p class="banner-subtext">{{ $s->description_sub_eng }}</p>
                                        </div>
                                        <div class="btn-wrapper"><a class="banner-cta" href="{{ route('company_en') }}">Read More</a>
                                            <div class="slide-nav">
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="about">
            <div class="wrapper">
                <h1 class="section-title">Information About<br />Halim Sakti</h1>
                <div class="row">
                    <div class="col-lg-6 left">
                        <p>PT Halim Sakti Pratama is a subsidiary of Halim Sakti Group supplying specialty and
                            industrial chemicals in Indonesia since 1972. Located in Western part of Jakarta, the
                            capital city of Indonesia...<br><a href="/about">Continue Reading</a></p><img src="{{ asset('img/icon/homepage/left.jpg') }}" alt="pics" />
                    </div>
                    <div class="col-lg-6 right">
                        <div class="about-section2_item"><img src="{{ asset('img/icon/homepage/icon1.png') }}" alt="icon1" />
                            <p><b>Quality product</b> - Strict control of international packaging regulation, product
                                description, proper & safe handling of dangerous goods is important. World known brand
                                name is being upheld.</p>
                        </div>
                        <div class="about-section2_item"><img src="{{ asset('img/icon/homepage/icon2.png') }}" alt="icon1" />
                            <p><b>Storage</b> - Modern warehouses with constant monitoring of room temperature,
                                cleanliness and storage procedures are implemented for specialized or sensitive
                                products.</p>
                        </div>
                        <div class="about-section2_item"><img src="{{ asset('img/icon/homepage/icon3.png') }}" alt="icon1" />
                            <p><b>Delivery Transport</b> - network that identifies customers??? delivery requirements and
                                offers an accurate and consistent on-time delivery.</p>
                        </div>
                        <div class="about-section2_item"><img src="{{ asset('img/icon/homepage/icon3.png') }}" alt="icon1" />
                            <p><b>Human Resources</b> - They are companies??? most valuable assets.; Marketing,
                                Accounting/Administration, Logistics & Operations, Technology & Information System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('firstSlide')
        <!--<div id="why-must">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 left">
                        <h1 class="section-title">Why Must Chooses<br />Halim Sakti</h1>
                        <div class="card-slider">
                            <div class="card-slider-item">
                                <div>

                                    <p>The factory produces Colour Masteerbatch, Calcium carbonate Masterbatch, ABS
                                        compound, TPR compound and plastic compounds</p>
                                </div>
                            </div>
                            <div class="card-slider-item">
                                <div>
                                    <p>Second</p>
                                </div>
                            </div>
                            <div class="card-slider-item">
                                <div>
                                    <p>Third</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <div class="row card-slider-right">
                            <div class="right-wrap" style="background:url({{ asset('img/icon/homepage/right.jpg') }}) no-repeat center center / cover">
                            </div>
                            <div class="right-wrap" style="background:url({{ asset('img/icon/homepage/left.jpg') }}) no-repeat center center / cover">
                            </div>
                            <div class="right-wrap" style="background:url({{ asset('img/icon/homepage/left.jpg') }}) no-repeat center center / cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>-->

        <div id="product">
            <div class="wrapper">
                <h1 class="section-title">Our Product</h1>
                <div class="product-list">
                    @foreach($product as $p)
                    <a href="{{route('productdetail_en', $p->product_slug ) }}" style="text-decoration: none">
                        <div class="product-item" style="background:url('{{ asset('image/product/'. $p->image) }}') no-repeat center center / cover">
                            <h2>{{ $p->product_nama_eng }}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        @yield('secondSlide')

        <div id="news">
            <div class="wrapper">
                <h1 class="section-title">News &amp; Info</h1>
            </div>
            <div class="wrapper news-list my-slider-wrapper">
                <!-- slider -->
                <div class="prev-arrow my-slider-navigation-btn"></div>
                <div class="next-arrow my-slider-navigation-btn"></div>

                @yield('thirdSlide')
                <!-- end slider -->
            </div>
        </div>
        <div id="brochure">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 left"><img src="{{ asset('assets/brosur.png') }}" alt="brosur" /></div>
                    <div class="col-md-6 right">
                        <div class="form-brosur">
                            <form action="{{ route('ebrochuredatasave') }}" method="POST">
                                @csrf
                                <div class="form-field"><label for="name">Name</label><input type="text" name="name" id="name" value="" required="" /></div>
                                <div class="form-field"><label for="email">Email</label><input type="text" name="email" id="email" value="" required="" /></div>
                                <div class="d-flex justify-content-center align-items-center" style="max-width:400px">
                                    @foreach($ebrochure as $e)
                                    <button><svg style="position: relative; right: 3px; bottom: 2px;" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>Download E-Brochure</button>
                                    @endforeach
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact-us">
            <div class="wrapper">
                <h1 class="section-title">Contact Us</h1>
                <div class="row">
                    <div class="col-md-5 left">
                        <form action="{{ route('contactsaveeng') }}" method="POST" class="form-contact">
                            @csrf
                            <div class="form-field"><label for="name">Name</label><input type="text" name="name" id="name" value="" required="" /></div>
                            <div class="form-field"><label for="email">Email</label><input type="text" name="email" id="email" value="" required="" /></div>
                            <div class="form-field"><label for="phone">Mobile Phone</label><input type="text" name="phone" id="phone" value="" required="" /></div>
                            <div class="form-field"><label for="message">Message</label><textarea type="text" name="messagez" id="message" rows="4" required=""></textarea></div>
                            <div class="form-button"><button type="submit">Submit</button></div>
                        </form>
                    </div>
                    <div class="col-md-7 right"><select name="map" id="map">
                            <option value="jakarta">Jakarta Branch</option>
                            <option value="medan">Medan Branch</option>
                            <option value="surabaya">Surabaya Branch</option>
                        </select>
                        <div class="address-detail jakarta box">
                            <div id="address-jakarta"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.555874538331!2d106.7973903!3d-6.1790569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x532d280267fa3c13!2sPT.%20Halim%20Sakti%20Pratama!5e0!3m2!1sid!2sid!4v1623870988506!5m2!1sid!2sid" width="100%" height="320" style="border:0" loading="lazy"></iframe>
                                <div class="info mt-3">
                                    <p><b>Jl. Tomang Raya No. 4 Jakarta 11430, Indonesia</b> <br /><b>Telp??????:</b> (6221)
                                        5600400 - 5660708 <br /><b>Fax.??????:</b> (6221) 5600390, 5667440, 5637846
                                        <br /><b>e-mail???:</b> hsp@halim-sakti.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="address-detail medan box">
                            <div id="address-medan"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0238626165396!2d98.68627761405482!3d3.5819931513398235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131b36d5c9df5%3A0xe9d178ff6c784ad!2sHalim%20Sejahtera%20Cipta%20Mandiri.%20PT%20-%20Toko%20Kimia%20Medan!5e0!3m2!1sid!2sid!4v1664867220245!5m2!1sid!2sid" width="100%" height="320" style="border:0" loading="lazy"></iframe>
                                <div class="info mt-3">
                                    <p><b>Jl. Yose Rizal No. 1 EE, Medan 20214, Indonesia</b> <br /><b>Telp??????:</b>
                                        (62-61) 7345292, 7345293 <br /><b>Fax.??????:</b> (62-61) 7345292, 7345293
                                        <br /><b>e-mail???:</b> hscm@halim-sakti.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="address-detail surabaya box">
                            <div id="address-surabaya"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5999418697497!2d112.69612441411432!3d-7.286275573633339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc1399feb9ad%3A0x641fc8caf84bd8f4!2sGedung%20Halim%20Sakti%2C%20Putat%20Gede%2C%20Kec.%20Sukomanunggal%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060189!5e0!3m2!1sid!2sid!4v1664867022360!5m2!1sid!2sid" width="100%" height="320" style="border:0" loading="lazy"></iframe>
                                <div class="info mt-3">
                                    <p><b>Gedung Halim Sakti, 6th & 7th floor, Jl. HR. Muhammad no. 41, Surabaya ???
                                            60189, Indonesia</b> <br /><b>Telp??????:</b> (62-31) 7388322, 7388333
                                        <br /><b>Fax.??????:</b> (62-31) 7388329, 7388339 <br /><b>e-mail???:</b>
                                        hscs@halim-sakti.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/slick-1.8.1/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/Swiper/swiper.js') }}"></script>
<script src="{{ asset('js/my-custom.js') }}"></script>
<script src="{{ asset('js/slider-timer.js') }}"></script>
<script>
    $(document).ready(function() {
        // New and Info slider
        $('.the-slider').slick({
            autoplay: true,
            centerMode: true,
            centerPadding: '300px',
            slidesToShow: 1,
            dots: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    centerPadding: '30px',
                    slidesToShow: 1
                }
            }, ]
        })

        // Testimonial slider
        $('.slider-fade').slick({
            dots: true,
            infinite: true,
            speed: 600,
            pauseOnHover: false,
            pauseOnFocus: false,
            fade: true,
            cssEase: 'linear',
        });



        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
</script>
@endsection