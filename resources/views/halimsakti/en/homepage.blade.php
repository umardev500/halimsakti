@extends('layouts.appHalimEn')
@section('title', '')
@section('css')
<link rel="stylesheet" href="{{ asset('css/halim1.css')}}" data-n-g="" />
@endsection
@section('logo')
<a href="{{ route('homepage_en') }}">
    <img class="logo" src="{{ asset('img/logo/halim.png') }}" alt="logo" />
    <img class="logo_m" src="{{ asset('img/logo/logo.png') }}" alt="logo" />
</a>
@endsection
@section('lang')
<div class="lang-item"><a href="{{ route('homepage') }}"
    style="text-decoration: none; color:black;">ID</a></div>
<div class="lang-item"><a href="{{ route('homepage_en') }}"
    style="text-decoration: none; color:black;">EN</a></div>
@endsection
@section('content')
<div class="content null">
    <div id="homepage">
        <div id="banner">
            <div class="slider1" style="opacity:1;background-image:url('{{ asset('image/slider' . '/' . $slider->image) }}')"></div>
            <div class="gradient-cover"></div>
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-7 position-static">
                        <div class="banner-wrap">
                            <div class="position-relative">
                                <h1 class="banner-text">{{ $slider->judul_eng }}</h1>
                                <p class="banner-subtext">{{ $slider->description_sub_eng }}</p>
                            </div>
                            <div class="btn-wrapper"><a class="banner-cta" href="{{ route('company_en') }}">Read More</a>
                                <div class="slide-nav">
                                    <div class="nav-item slide-active"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            capital city of Indonesia...<br><a href="/about">Continue Reading</a></p><img
                            src="{{ asset('img/icon/homepage/left.jpg') }}" alt="pics" />
                    </div>
                    <div class="col-lg-6 right">
                        <div class="about-section2_item"><img
                                src="{{ asset('img/icon/homepage/icon1.png') }}"
                                alt="icon1" />
                            <p><b>Quality product</b> - Strict control of international packaging regulation, product
                                description, proper & safe handling of dangerous goods is important. World known brand
                                name is being upheld.</p>
                        </div>
                        <div class="about-section2_item"><img
                                src="{{ asset('img/icon/homepage/icon2.png') }}"
                                alt="icon1" />
                            <p><b>Storage</b> - Modern warehouses with constant monitoring of room temperature,
                                cleanliness and storage procedures are implemented for specialized or sensitive
                                products.</p>
                        </div>
                        <div class="about-section2_item"><img
                                src="{{ asset('img/icon/homepage/icon3.png') }}"
                                alt="icon1" />
                            <p><b>Delivery Transport</b> - network that identifies customers’ delivery requirements and
                                offers an accurate and consistent on-time delivery.</p>
                        </div>
                        <div class="about-section2_item"><img
                                src="{{ asset('img/icon/homepage/icon3.png') }}"
                                alt="icon1" />
                            <p><b>Human Resources</b> - They are companies’ most valuable assets.; Marketing,
                                Accounting/Administration, Logistics & Operations, Technology & Information System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="why-must">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 left">
                        <h1 class="section-title">Why Must Choose<br />Halim Sakti</h1>
                        <div class="card-slider">
                            <div class="animate__animated animate__fadeIn">
                                <p>The factory produces Colour Masteerbatch, Calcium carbonate Masterbatch, ABS
                                    compound, TPR compound and plastic compounds</p>
                            </div>
                            <div class="slide-nav">
                                <div class="nav-item slide-active"></div>
                                <div class="nav-item null"></div>
                                <div class="nav-item null"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <div class="row animate__animated animate__fadeIn animate__faster">
                            <div class="right-wrap"
                                style="background:url({{ asset('img/icon/homepage/right.jpg') }}) no-repeat center center / cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div id="testimonial">
            <div class="wrapper">
                <div class="row animate__animated animate__fadeIn">
                    <div class="col-md-5 left">
                        <div class="photo-wrap"
                            style="background:url({{ asset('img/homepage/what-they.png') }}) no-repeat top center / cover">
                        </div>
                    </div>
                    <div class="col-md-7 right">
                        <h1 class="section-title">What They Said</h1>
                        <p class="testi-body">There are very few organizations his day and age the size of Halim Sakti
                            Pratama that still possess the core family owned and operated values that they did when they
                            were founded, but Halim Sakti Pratama is one of them. Halim Sakti’s vision of the business
                            and how they operate are built at a quality level that matches with our value of the
                            business, we are lucky to have Halim Sakti Pratama as our distributor. It made us
                            comfortable and after more than 20 years together, we still feel the same way with them. The
                            team at Halim Sakti Pratama are all extremely knowledgeable, courteous, and are always very
                            quick to help us when we need them. We hope to extend this relationship with Halim Sakti
                            Pratama for the future.</p>
                        <div class="testi-name">Dirgantara Fasa</div>
                        <p>Country Sales Manager , <br />RIKEVITA (SINGAPORE) PTE LTD</p>
                    </div>
                </div>
                <div class="slide-nav">
                    <div class="nav-item slide-active"></div>
                    <div class="nav-item null"></div>
                    <div class="nav-item null"></div>
                    <div class="nav-item null"></div>
                </div>
            </div>
        </div>
        <div id="news">
            <div class="wrapper">
                <h1 class="section-title">News &amp; Info</h1>
            </div>
            <div class="wrapper news-list">
                <div class="slick-slider slider2 slick-initialized" dir="ltr">
                    <div class="prev-arrow"><img src="{{ asset('img/icon/arrow-left.jpg') }}"
                            alt="prev" /></div>
                    <div class="slick-list" style="padding:0px 30%">
                        <div class="slick-track" style="width:1000%;left:-200%">
                            <div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                                style="width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/protein-bar.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">Protein Bar Product Trends and Development</div>
                                                <div class="title">The global market for snacks according to Mintel
                                                    Market Data (December,2020) shows an increasing positive trend with
                                                    a value of 174 billion US dollars in 2019 </div><a class="rm-button"
                                                    href="/article/protein-bar-product-trends-and-development">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                                style="width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/spray.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">SPRAY FAT MP-3 by Riken Vitamin</div>
                                                <div class="title">Fried foods today are so common, and it all comes
                                                    down to the visual, texture, and sensory experience when
                                                    differentiating quality fried foods. </div><a class="rm-button"
                                                    href="/article/spray-fat-mp-3-by-riken-vitamin">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="0" class="slick-slide slick-active slick-center slick-current"
                                tabindex="-1" aria-hidden="false" style="outline:none;width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/adk-stab.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">ADK STAB LA-402AF/Si for automotive applications by
                                                    ADEKA Corporation</div>
                                                <div class="title">When the polymer material is used outdoors, it is
                                                    oxidatively deteriorated by ultraviolet rays, which causes poor
                                                    appearance and reduction of physical properties.</div><a
                                                    class="rm-button"
                                                    href="/article/adk-stab-la-402afsi-for-automotive-applications-by-adeka-corporation">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true"
                                style="outline:none;width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/prepared-drinking.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">Prepared-Drinking Challenges and Opportunities Post
                                                    Pandemic Covid-19</div>
                                                <div class="title">This sector covers various beverage categories such
                                                    as Bottled Drinking Water (RTD- bottled and cup), ready-to-serve
                                                    tea, juice and fruit juice drinks, carbonated drinks</div><a
                                                    class="rm-button"
                                                    href="/article/prepared-drinking-challenges-and-opportunities-post-pandemic-covid-19">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true"
                                style="outline:none;width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/protein-bar.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">Protein Bar Product Trends and Development</div>
                                                <div class="title">The global market for snacks according to Mintel
                                                    Market Data (December,2020) shows an increasing positive trend with
                                                    a value of 174 billion US dollars in 2019 </div><a class="rm-button"
                                                    href="/article/protein-bar-product-trends-and-development">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true"
                                style="outline:none;width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/spray.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">SPRAY FAT MP-3 by Riken Vitamin</div>
                                                <div class="title">Fried foods today are so common, and it all comes
                                                    down to the visual, texture, and sensory experience when
                                                    differentiating quality fried foods. </div><a class="rm-button"
                                                    href="/article/spray-fat-mp-3-by-riken-vitamin">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="4" tabindex="-1" class="slick-slide slick-center slick-cloned"
                                aria-hidden="true" style="width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/adk-stab.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">ADK STAB LA-402AF/Si for automotive applications by
                                                    ADEKA Corporation</div>
                                                <div class="title">When the polymer material is used outdoors, it is
                                                    oxidatively deteriorated by ultraviolet rays, which causes poor
                                                    appearance and reduction of physical properties.</div><a
                                                    class="rm-button"
                                                    href="/article/adk-stab-la-402afsi-for-automotive-applications-by-adeka-corporation">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                                style="width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/prepared-drinking.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">Prepared-Drinking Challenges and Opportunities Post
                                                    Pandemic Covid-19</div>
                                                <div class="title">This sector covers various beverage categories such
                                                    as Bottled Drinking Water (RTD- bottled and cup), ready-to-serve
                                                    tea, juice and fruit juice drinks, carbonated drinks</div><a
                                                    class="rm-button"
                                                    href="/article/prepared-drinking-challenges-and-opportunities-post-pandemic-covid-19">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                                style="width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/protein-bar.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">Protein Bar Product Trends and Development</div>
                                                <div class="title">The global market for snacks according to Mintel
                                                    Market Data (December,2020) shows an increasing positive trend with
                                                    a value of 174 billion US dollars in 2019 </div><a class="rm-button"
                                                    href="/article/protein-bar-product-trends-and-development">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                                style="width:10%">
                                <div>
                                    <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                        <div class="news-wrap"
                                            style="background:url({{ asset('img/news/spray.png') }}) no-repeat center center / cover">
                                            <div class="news-text">
                                                <div class="cat">SPRAY FAT MP-3 by Riken Vitamin</div>
                                                <div class="title">Fried foods today are so common, and it all comes
                                                    down to the visual, texture, and sensory experience when
                                                    differentiating quality fried foods. </div><a class="rm-button"
                                                    href="/article/spray-fat-mp-3-by-riken-vitamin">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next-arrow"><img src="{{ asset('img/icon/arrow-right.jpg') }}"
                            alt="next" /></div>
                    <ul style="display:block" class="custom-dots">
                        <li class="slick-active"><button>1</button></li>
                        <li class=""><button>2</button></li>
                        <li class=""><button>3</button></li>
                        <li class=""><button>4</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="brochure">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 left"><img src="{{ asset('assets/brosur.png') }}"
                            alt="brosur" /></div>
                    <div class="col-md-6 right">
                        <div class="form-brosur">
                            <form action="{{ route('ebrochuredatasave') }}" method="POST">
                                @csrf
                            <div class="form-field"><label for="name">Name</label><input type="text" name="name" id="name" value=""
                                    required="" /></div>
                            <div class="form-field"><label for="email">Email</label><input type="text" name="email" id="email"
                                    value="" required="" /></div>
                            <div class="d-flex justify-content-center align-items-center" style="max-width:400px">
                                @foreach($ebrochure as $e)
                                        <button><svg style="position: relative; right: 3px; bottom: 2px;" stroke="currentColor" fill="none"
                                        stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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
                            <div class="form-field"><label for="message">Message</label><textarea type="text" name="message" id="message" rows="4" required=""></textarea></div>
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
                                <p><b>Jl. Tomang Raya No. 4 Jakarta 11430, Indonesia</b> <br /><b>Telp  :</b> (6221) 5600400 - 5660708 <br /><b>Fax.  :</b> (6221) 5600390, 5667440, 5637846 <br /><b>e-mail :</b> hsp@halim-sakti.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="address-detail medan box">
                        <div id="address-medan"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0238626165396!2d98.68627761405482!3d3.5819931513398235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131b36d5c9df5%3A0xe9d178ff6c784ad!2sHalim%20Sejahtera%20Cipta%20Mandiri.%20PT%20-%20Toko%20Kimia%20Medan!5e0!3m2!1sid!2sid!4v1664867220245!5m2!1sid!2sid" width="100%" height="320" style="border:0" loading="lazy"></iframe>
                            <div class="info mt-3">
                                <p><b>Jl. Yose Rizal No. 1 EE, Medan 20214, Indonesia</b> <br /><b>Telp  :</b> (62-61) 7345292, 7345293 <br /><b>Fax.  :</b> (62-61) 7345292, 7345293 <br /><b>e-mail :</b> hscm@halim-sakti.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="address-detail surabaya box">
                        <div id="address-surabaya"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5999418697497!2d112.69612441411432!3d-7.286275573633339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc1399feb9ad%3A0x641fc8caf84bd8f4!2sGedung%20Halim%20Sakti%2C%20Putat%20Gede%2C%20Kec.%20Sukomanunggal%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060189!5e0!3m2!1sid!2sid!4v1664867022360!5m2!1sid!2sid" width="100%" height="320" style="border:0" loading="lazy"></iframe>
                            <div class="info mt-3">
                                <p><b>Gedung Halim Sakti, 6th & 7th floor, Jl. HR. Muhammad no. 41, Surabaya – 60189, Indonesia</b> <br /><b>Telp  :</b> (62-31) 7388322, 7388333 <br /><b>Fax.  :</b> (62-31) 7388329, 7388339 <br /><b>e-mail :</b> hscs@halim-sakti.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

{{-- <script id="__NEXT_DATA__" type="application/json">
    {
        "props": {
            "pageProps": {
                "homeData": {
                    "id": 1,
                    "created_at": "2021-01-06T17:10:54.629Z",
                    "updated_at": "2022-06-23T04:01:31.005Z",
                    "whymustlist": [{
                        "id": 1,
                        "text": {
                            "id": 1,
                            "en_": "The factory produces Colour Masteerbatch, Calcium carbonate Masterbatch, ABS compound, TPR compound and plastic compounds",
                            "id_": "Pabrik memproduksi Color Masterbatch, Calcium carbonate Masterbatch, AND senyawa, senyawa TPR dan senyawa plastik"
                        },
                        "order": 1,
                        "image": {
                            "id": 72,
                            "name": "why-choose-halim-sakti1.jpg",
                            "alternativeText": "",
                            "caption": "",
                            "width": 1366,
                            "height": 911,
                            "formats": {
                                "large": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052531/large_why_choose_halim_sakti1_e5e9229403.jpg",
                                    "hash": "large_why_choose_halim_sakti1_e5e9229403",
                                    "mime": "image/jpeg",
                                    "name": "large_why-choose-halim-sakti1.jpg",
                                    "path": null,
                                    "size": 78.06,
                                    "width": 1000,
                                    "height": 667,
                                    "provider_metadata": {
                                        "public_id": "large_why_choose_halim_sakti1_e5e9229403",
                                        "resource_type": "image"
                                    }
                                },
                                "small": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052532/small_why_choose_halim_sakti1_e5e9229403.jpg",
                                    "hash": "small_why_choose_halim_sakti1_e5e9229403",
                                    "mime": "image/jpeg",
                                    "name": "small_why-choose-halim-sakti1.jpg",
                                    "path": null,
                                    "size": 27.55,
                                    "width": 500,
                                    "height": 333,
                                    "provider_metadata": {
                                        "public_id": "small_why_choose_halim_sakti1_e5e9229403",
                                        "resource_type": "image"
                                    }
                                },
                                "medium": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052531/medium_why_choose_halim_sakti1_e5e9229403.jpg",
                                    "hash": "medium_why_choose_halim_sakti1_e5e9229403",
                                    "mime": "image/jpeg",
                                    "name": "medium_why-choose-halim-sakti1.jpg",
                                    "path": null,
                                    "size": 50.72,
                                    "width": 750,
                                    "height": 500,
                                    "provider_metadata": {
                                        "public_id": "medium_why_choose_halim_sakti1_e5e9229403",
                                        "resource_type": "image"
                                    }
                                },
                                "thumbnail": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052530/thumbnail_why_choose_halim_sakti1_e5e9229403.jpg",
                                    "hash": "thumbnail_why_choose_halim_sakti1_e5e9229403",
                                    "mime": "image/jpeg",
                                    "name": "thumbnail_why-choose-halim-sakti1.jpg",
                                    "path": null,
                                    "size": 8.66,
                                    "width": 234,
                                    "height": 156,
                                    "provider_metadata": {
                                        "public_id": "thumbnail_why_choose_halim_sakti1_e5e9229403",
                                        "resource_type": "image"
                                    }
                                }
                            },
                            "hash": "why_choose_halim_sakti1_e5e9229403",
                            "ext": ".jpg",
                            "mime": "image/jpeg",
                            "size": 125.93,
                            "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052529/why_choose_halim_sakti1_e5e9229403.jpg",
                            "previewUrl": null,
                            "provider": "cloudinary",
                            "provider_metadata": {
                                "public_id": "why_choose_halim_sakti1_e5e9229403",
                                "resource_type": "image"
                            },
                            "created_at": "2021-05-26T18:08:52.396Z",
                            "updated_at": "2021-05-26T18:29:26.459Z"
                        }
                    }, {
                        "id": 3,
                        "text": {
                            "id": 2,
                            "en_": "The factory produces Colour Masteerbatch, Calcium carbonate Masterbatch, ABS compound, TPR compound and plastic compounds\n\n",
                            "id_": "Pabrik memproduksi Color Masterbatch, Calcium carbonate Masterbatch, AND senyawa, senyawa TPR dan senyawa plastik"
                        },
                        "order": 2,
                        "image": {
                            "id": 74,
                            "name": "why-choose-halim-sakti2.jpg",
                            "alternativeText": "",
                            "caption": "",
                            "width": 1366,
                            "height": 1024,
                            "formats": {
                                "large": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622053726/large_why_choose_halim_sakti2_17898288ce.jpg",
                                    "hash": "large_why_choose_halim_sakti2_17898288ce",
                                    "mime": "image/jpeg",
                                    "name": "large_why-choose-halim-sakti2.jpg",
                                    "path": null,
                                    "size": 215.7,
                                    "width": 1000,
                                    "height": 750,
                                    "provider_metadata": {
                                        "public_id": "large_why_choose_halim_sakti2_17898288ce",
                                        "resource_type": "image"
                                    }
                                },
                                "small": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622053727/small_why_choose_halim_sakti2_17898288ce.jpg",
                                    "hash": "small_why_choose_halim_sakti2_17898288ce",
                                    "mime": "image/jpeg",
                                    "name": "small_why-choose-halim-sakti2.jpg",
                                    "path": null,
                                    "size": 61.17,
                                    "width": 500,
                                    "height": 375,
                                    "provider_metadata": {
                                        "public_id": "small_why_choose_halim_sakti2_17898288ce",
                                        "resource_type": "image"
                                    }
                                },
                                "medium": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622053727/medium_why_choose_halim_sakti2_17898288ce.jpg",
                                    "hash": "medium_why_choose_halim_sakti2_17898288ce",
                                    "mime": "image/jpeg",
                                    "name": "medium_why-choose-halim-sakti2.jpg",
                                    "path": null,
                                    "size": 130.41,
                                    "width": 750,
                                    "height": 562,
                                    "provider_metadata": {
                                        "public_id": "medium_why_choose_halim_sakti2_17898288ce",
                                        "resource_type": "image"
                                    }
                                },
                                "thumbnail": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622053725/thumbnail_why_choose_halim_sakti2_17898288ce.jpg",
                                    "hash": "thumbnail_why_choose_halim_sakti2_17898288ce",
                                    "mime": "image/jpeg",
                                    "name": "thumbnail_why-choose-halim-sakti2.jpg",
                                    "path": null,
                                    "size": 11.73,
                                    "width": 208,
                                    "height": 156,
                                    "provider_metadata": {
                                        "public_id": "thumbnail_why_choose_halim_sakti2_17898288ce",
                                        "resource_type": "image"
                                    }
                                }
                            },
                            "hash": "why_choose_halim_sakti2_17898288ce",
                            "ext": ".jpg",
                            "mime": "image/jpeg",
                            "size": 315.53,
                            "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622053724/why_choose_halim_sakti2_17898288ce.jpg",
                            "previewUrl": null,
                            "provider": "cloudinary",
                            "provider_metadata": {
                                "public_id": "why_choose_halim_sakti2_17898288ce",
                                "resource_type": "image"
                            },
                            "created_at": "2021-05-26T18:28:48.117Z",
                            "updated_at": "2021-05-26T18:28:48.148Z"
                        }
                    }, {
                        "id": 4,
                        "text": {
                            "id": 27,
                            "en_": "The factory produces Colour Masteerbatch, Calcium carbonate Masterbatch, ABS compound, TPR compound and plastic compounds",
                            "id_": "Pabrik memproduksi Color Masterbatch, Calcium carbonate Masterbatch, AND senyawa, senyawa TPR dan senyawa plastik"
                        },
                        "order": 3,
                        "image": {
                            "id": 73,
                            "name": "why-choose-halim-sakti3.jpg",
                            "alternativeText": "",
                            "caption": "",
                            "width": 1366,
                            "height": 911,
                            "formats": {
                                "large": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052532/large_why_choose_halim_sakti3_31b505a417.jpg",
                                    "hash": "large_why_choose_halim_sakti3_31b505a417",
                                    "mime": "image/jpeg",
                                    "name": "large_why-choose-halim-sakti3.jpg",
                                    "path": null,
                                    "size": 171.21,
                                    "width": 1000,
                                    "height": 667,
                                    "provider_metadata": {
                                        "public_id": "large_why_choose_halim_sakti3_31b505a417",
                                        "resource_type": "image"
                                    }
                                },
                                "small": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052534/small_why_choose_halim_sakti3_31b505a417.jpg",
                                    "hash": "small_why_choose_halim_sakti3_31b505a417",
                                    "mime": "image/jpeg",
                                    "name": "small_why-choose-halim-sakti3.jpg",
                                    "path": null,
                                    "size": 50.77,
                                    "width": 500,
                                    "height": 333,
                                    "provider_metadata": {
                                        "public_id": "small_why_choose_halim_sakti3_31b505a417",
                                        "resource_type": "image"
                                    }
                                },
                                "medium": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052533/medium_why_choose_halim_sakti3_31b505a417.jpg",
                                    "hash": "medium_why_choose_halim_sakti3_31b505a417",
                                    "mime": "image/jpeg",
                                    "name": "medium_why-choose-halim-sakti3.jpg",
                                    "path": null,
                                    "size": 105.02,
                                    "width": 750,
                                    "height": 500,
                                    "provider_metadata": {
                                        "public_id": "medium_why_choose_halim_sakti3_31b505a417",
                                        "resource_type": "image"
                                    }
                                },
                                "thumbnail": {
                                    "ext": ".jpg",
                                    "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052531/thumbnail_why_choose_halim_sakti3_31b505a417.jpg",
                                    "hash": "thumbnail_why_choose_halim_sakti3_31b505a417",
                                    "mime": "image/jpeg",
                                    "name": "thumbnail_why-choose-halim-sakti3.jpg",
                                    "path": null,
                                    "size": 13.37,
                                    "width": 234,
                                    "height": 156,
                                    "provider_metadata": {
                                        "public_id": "thumbnail_why_choose_halim_sakti3_31b505a417",
                                        "resource_type": "image"
                                    }
                                }
                            },
                            "hash": "why_choose_halim_sakti3_31b505a417",
                            "ext": ".jpg",
                            "mime": "image/jpeg",
                            "size": 239.99,
                            "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622052530/why_choose_halim_sakti3_31b505a417.jpg",
                            "previewUrl": null,
                            "provider": "cloudinary",
                            "provider_metadata": {
                                "public_id": "why_choose_halim_sakti3_31b505a417",
                                "resource_type": "image"
                            },
                            "created_at": "2021-05-26T18:08:54.763Z",
                            "updated_at": "2021-05-26T18:08:54.967Z"
                        }
                    }]
                },
                "aboutData": {
                    "id": 1,
                    "about_content": {
                        "id": 1,
                        "en_": "\u003cp style=\"text-align:justify;\"\u003ePT Halim Sakti Pratama is a subsidiary of Halim Sakti Group supplying specialty and industrial chemicals in Indonesia since 1972. Located in Western part of Jakarta, the capital city of Indonesia, this company was established in 1972 by late Mr Jusuf Halim under the name P.D Halim (Sole trading company) and in 1976 was reorganized and registered as a private limited company under the name PT Halim Sakti.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003eAs the company's business and market activities grew, the 2nd trading office named PT Halim Sarana Cahaya Semesta was set up in Surabaya to serve the eastern part of Java Activities. This was followed by the 3rd trading office set up in Medan named PT Halim Sejahtera Cipta Mandiri to serve business activities in Northern Sumatra and the surrounding region.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003eBesides trading activities, Halim Sakti group have also embarked into manufacturing and established the first plant in Surabaya producing food ingredients such as cake emulsifiers, baking powder, jelly powder and Phosphate compound. Under the banner of renowned Japanese organization Mitsubishi Kagaku Food Corporation, our product Ryoto Ester SP is also exported throughout Asia and Middle East.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003eThe next manufacturing project is a joint venture with Korean and Japanese partners. Through this unique and rare partnership as some have commented, a Plastic compounding plant was established as the pioneer within the industry in Indonesia in 1989.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003eThe factory produces Colour Masterbatch, Calcium Carbonate Masterbatch, ABS compound, TPR compound and other plastic compounds. The products are not only well known domestically but also exported to several countries including Japan and Asia.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003eHaving a growing volume of import and export activities, we established a forwarding agent company that is responsible for smooth transportation and cargo clearance through priority channels from the port where only a limited number of organizations have this access.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003eIn 1997, PT Halim Sakti was restructured and became the holding company of the group. PT Halim Sakti Pratama was formed to take over the business activities of PT Halim Sakti in Jakarta \u0026amp; surrounding areas.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003eIn an ever changing business environment, we see that customers and suppliers expectations are growing more diverse and complex. As a result, we as an organization also took steps of transformation by adopting the ISO 9001 Quality Management System with the purpose of creating efficiency, strong market presence and quality services.\u003c/p\u003e\u003cdiv class=\"raw-html-embed\"\u003e\u003cdiv class=\"row\"\u003e\n  \u003cdiv class=\"col-md-6\"\u003e\n    \u003ch1\u003eVision\u003c/h1\u003e\n    \u003cp\u003eTo be an organization that is able to supply both industrial and specialty chemicals with excellent quality, timely delivery and competitive pricing.\u003c/p\u003e\n  \u003c/div\u003e\n  \u003cdiv class=\"col-md-6\"\u003e\n    \u003ch1\u003eMission\u003c/h1\u003e\n    \u003cp\u003eTo be an organization that is recognized for good corporate governance through human resource development, places great importance in the quality of its products and is socially responsible to our stakeholders.\u003c/p\u003e\n  \u003c/div\u003e\n\u003c/div\u003e\u003c/div\u003e\u003ch2\u003eHistory\u003c/h2\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1624207012/HISTORY_6adcf978d8.jpg\"\u003e\u003c/figure\u003e\u003ch2\u003e\u0026nbsp;\u003c/h2\u003e\u003ch2\u003eCorporate Values\u003c/h2\u003e\u003cp style=\"text-align:justify;\"\u003eThe management is always careful that growth and expansion does not supersede responsibility and accountability. Halim Sakti business policy is focused on keeping long term relationships and commitments that are beneficial for customers, suppliers and trading partners. The group is committed and guided by its quality policy in all aspects, be it logistics, administration or other operations.\u003c/p\u003e",
                        "id_": "\u003cp\u003ePT Halim Sakti Pratama adalah anak perusahaan dari Halim Sakti Group yang mensuplai bahan kimia khusus dan industri di Indonesia sejak tahun 1972. Terletak di Jakarta Barat, Indonesia, perusahaan ini didirikan pada tahun 1972 oleh almarhum Bapak Jusuf Halim dengan nama PD Halim dan pada tahun 1976 dibentuki dan terdaftar sebagai perseroan terbatas swasta dengan nama PT Halim Sakti.\u0026nbsp;\u003c/p\u003e\u003cp\u003eSeiring dengan bertumbuhnya bisnis dan aktivitas pasar perusahaan, kantor perdagangan yang ke 2 didirkan di Surabaya dengan nama PT Halim Sarana Cahaya Semesta untuk melayani aktivitas di daerah Jawa timur. Kemudian, diikuti oleh kantor perdagangan ke 3 yang didirikan di Medan dengan nama PT Halim Sejahtera Cipta Mandiri untuk melayani kegiatan bisnis di daerah Sumatera Utara dan sekitarnya.\u0026nbsp;\u003c/p\u003e\u003cp\u003eSelain kegiatan perdagangan, Halim Sakti Group juga telah melebarkan sayap dengan memulai manufaktur dan mendirikan pabrik pertama di Surabaya yang memproduksi bahan makanan seperti pengemulsi kue (cake emulsifier), soda kue (baking powder), bubuk jeli (jelly powder), dan senyawa fosfat. Di bawah organisasi Jepang terkenal Mitsubishi Kagaku Food Corporation, produk kami Ryoto Ester SP juga diekspor ke seluruh Asia dan Timur Tengah.\u0026nbsp;\u003c/p\u003e\u003cp\u003eProyek manufaktur berikutnya adalah melalui kerja sama dengan mitra Korea dan Jepang. Melalui kemitraan yang unik dan langka ini, pabrik peracikan plastik didirikan sebagai pelopor dalam industri di Indonesia pada tahun 1989.\u0026nbsp;\u003c/p\u003e\u003cp\u003ePabrik peracikan plastik ini memproduksi Color Masterbatch, Calcium Carbonate Masterbatch, senyawa ABS, senyawa TPR, dan senyawa plastik lainnya. Produknya tidak hanya terkenal di dalam negeri tetapi juga diekspor ke beberapa negara termasuk Jepang dan Asia.\u0026nbsp;\u003c/p\u003e\u003cp\u003eSeiring dengan meningkatnya kegiatan impor dan ekspor, PT. Halim Sakti mendirikan perusahaan agen ekspedisi yang bertanggung jawab atas kelancaran transportasi dan izin kargo melalui jalur prioritas dari pelabuhan di mana hanya sejumlah organisasi yang memiliki akses ini.\u0026nbsp;\u003c/p\u003e\u003cp\u003ePada tahun 1997, PT Halim Sakti direstrukturisasi dan menjadi perusahaan induk grup, dan PT Halim Sakti Pratama dibentuk untuk mengambil alih kegiatan bisnis PT Halim Sakti untuk wilayah Jakarta dan sekitarnya.\u0026nbsp;\u003c/p\u003e\u003cp\u003eDengan lingkungan bisnis yang terus berubah, perusahaan melihat bahwa harapan pelanggan dan pemasok tumbuh semakin beragam dan kompleks, sehingga kami sebagai organisasi pun mengambil langkah transformasi dengan mengadopsi Sistem Manajemen Mutu ISO 9001 dengan tujuan untuk menciptakan efisiensi, keberadaan pasar yang kuat, dan menciptakan layanan yang berkualitas.\u0026nbsp;\u003c/p\u003e\u003cdiv class=\"raw-html-embed\"\u003e\u003cdiv class=\"row\"\u003e\n  \u003cdiv class=\"col-md-6\"\u003e\n    \u003ch1\u003eVisi\u003c/h1\u003e\n    \u003cp\u003eMenjadi organisasi yang mampu mensuplai bahan kimia industri dan khusus dengan kualitas yang baik, pengiriman tepat waktu, dan harga yang kompetitif.\u003c/p\u003e\n  \u003c/div\u003e\n  \u003cdiv class=\"col-md-6\"\u003e\n    \u003ch1\u003eMisi\u003c/h1\u003e\n    \u003cp\u003eMenjadi organisasi yang memiliki tata kelola perusahaan yang baik melalui pengembangan sumber daya manusia, mementingkan kualitas produknya, dan bertanggung jawab secara sosial kepada pemangku kepentingan perusahaan.\u003c/p\u003e\n  \u003c/div\u003e\n\u003c/div\u003e\u003c/div\u003e\u003ch2\u003eSejarah\u003c/h2\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1624210786/HISTORY_ID_07c15b5055.jpg\"\u003e\u003c/figure\u003e\u003ch2\u003eNilai-nilai perusahaan\u003c/h2\u003e\u003cp\u003eManajemen selalu berhati-hati agar pertumbuhan dan ekspansi tidak menggantikan tanggung jawab dan akuntabilitas. Kebijakan bisnis Halim Sakti difokuskan pada menjaga hubungan dan komitmen jangka panjang yang bermanfaat bagi pelanggan, pemasok dan mitra dagang. Grup ini berkomitmen dan dipandu oleh kebijakan kualitasnya di semua aspek, baik logistik, administrasi, atau operasi lainnya.\u003c/p\u003e"
                    },
                    "created_at": "2021-01-04T09:07:12.837Z",
                    "updated_at": "2021-10-05T11:58:31.787Z",
                    "title": {
                        "id": 86,
                        "en_": "Information About\u003cbr /\u003eHalim Sakti",
                        "id_": "Informasi Tentang\u003cbr /\u003eHalim Sakti"
                    },
                    "list": [{
                        "id": 1,
                        "text": {
                            "id": 87,
                            "en_": "\u003cb\u003eQuality product\u003c/b\u003e - Strict control of international packaging regulation, product description, proper \u0026 safe handling of dangerous goods is important. World known brand name is being upheld.",
                            "id_": "\u003cb\u003eKualitas Produk\u003c/b\u003e - Perusahaan mengutamakan kontrol yang ketat terhadap regulasi pengemasan internasional, deskripsi produk, penanganan barang berbahaya secara tepat \u0026 aman"
                        },
                        "icon": {
                            "id": 77,
                            "name": "icon1.png",
                            "alternativeText": "",
                            "caption": "",
                            "width": 85,
                            "height": 85,
                            "formats": null,
                            "hash": "icon1_36928dcdd1",
                            "ext": ".png",
                            "mime": "image/png",
                            "size": 2.97,
                            "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1623848994/icon1_36928dcdd1.png",
                            "previewUrl": null,
                            "provider": "cloudinary",
                            "provider_metadata": {
                                "public_id": "icon1_36928dcdd1",
                                "resource_type": "image"
                            },
                            "created_at": "2021-06-16T13:09:54.475Z",
                            "updated_at": "2021-06-16T13:09:54.513Z"
                        }
                    }, {
                        "id": 2,
                        "text": {
                            "id": 88,
                            "en_": "\u003cb\u003eStorage\u003c/b\u003e - Modern warehouses with constant monitoring of room temperature, cleanliness and storage procedures are implemented for specialized or sensitive products.",
                            "id_": "\u003cb\u003ePenyimpanan\u003c/b\u003e - Perusahaan memiliki gudang modern dengan pemantauan suhu ruangan, kebersihan, dan prosedur penyimpanan yang konstan diterapkan untuk produk khusus atau sensitif untuk menjaga kualitas produk-produk yang kita jual."
                        },
                        "icon": {
                            "id": 80,
                            "name": "icon2.png",
                            "alternativeText": "",
                            "caption": "",
                            "width": 85,
                            "height": 85,
                            "formats": null,
                            "hash": "icon2_68d1ec3d19",
                            "ext": ".png",
                            "mime": "image/png",
                            "size": 2.25,
                            "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1623848994/icon2_68d1ec3d19.png",
                            "previewUrl": null,
                            "provider": "cloudinary",
                            "provider_metadata": {
                                "public_id": "icon2_68d1ec3d19",
                                "resource_type": "image"
                            },
                            "created_at": "2021-06-16T13:09:54.744Z",
                            "updated_at": "2021-06-16T13:09:54.765Z"
                        }
                    }, {
                        "id": 3,
                        "text": {
                            "id": 89,
                            "en_": "\u003cb\u003eDelivery Transport\u003c/b\u003e - network that identifies customers’ delivery requirements and offers an accurate and consistent on-time delivery.",
                            "id_": "\u003cb\u003ePenyimpanan\u003c/b\u003e - Perusahaan memiliki gudang modern dengan pemantauan suhu ruangan, kebersihan, dan prosedur penyimpanan yang konstan diterapkan untuk produk khusus atau sensitif untuk menjaga kualitas produk-produk yang kita jual."
                        },
                        "icon": {
                            "id": 79,
                            "name": "icon3.png",
                            "alternativeText": "",
                            "caption": "",
                            "width": 85,
                            "height": 85,
                            "formats": null,
                            "hash": "icon3_eb97d9566e",
                            "ext": ".png",
                            "mime": "image/png",
                            "size": 1.78,
                            "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1623848994/icon3_eb97d9566e.png",
                            "previewUrl": null,
                            "provider": "cloudinary",
                            "provider_metadata": {
                                "public_id": "icon3_eb97d9566e",
                                "resource_type": "image"
                            },
                            "created_at": "2021-06-16T13:09:54.568Z",
                            "updated_at": "2021-06-16T13:09:54.585Z"
                        }
                    }, {
                        "id": 4,
                        "text": {
                            "id": 101,
                            "en_": "\u003cb\u003eHuman Resources\u003c/b\u003e - They are companies’ most valuable assets.; Marketing,  Accounting/Administration, Logistics \u0026 Operations, Technology \u0026 Information System",
                            "id_": "\u003cb\u003eSumber Daya Manusia\u003c/b\u003e - Perusahaan memiliki sumber daya manusia yang kredibel dan berkualitas baik dari tim marketing , tim akuntansi and admin, tim logistik dan operasional, dan tim IT"
                        },
                        "icon": {
                            "id": 78,
                            "name": "icon4.png",
                            "alternativeText": "",
                            "caption": "",
                            "width": 85,
                            "height": 85,
                            "formats": null,
                            "hash": "icon4_0c26d41a92",
                            "ext": ".png",
                            "mime": "image/png",
                            "size": 2.25,
                            "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1623848994/icon4_0c26d41a92.png",
                            "previewUrl": null,
                            "provider": "cloudinary",
                            "provider_metadata": {
                                "public_id": "icon4_0c26d41a92",
                                "resource_type": "image"
                            },
                            "created_at": "2021-06-16T13:09:54.494Z",
                            "updated_at": "2021-06-16T13:09:54.523Z"
                        }
                    }]
                },
                "banners": [{
                    "id": 2,
                    "text": {
                        "id": 6,
                        "en_": "Suplying Speciality and Industrial Chemicals",
                        "id_": "Memasok Bahan Kimia Khusus dan Industri"
                    },
                    "subtext": {
                        "id": 7,
                        "en_": "great importance in the quality of its products and is socially responsible to our stakeholder",
                        "id_": "sangat mementingkan kualitas produknya dan bertanggung jawab secara sosial kepada pemangku kepentingan kami"
                    },
                    "link": "/about",
                    "order": 2,
                    "created_at": "2020-12-30T05:23:07.155Z",
                    "updated_at": "2022-05-31T09:40:18.960Z",
                    "image": {
                        "id": 76,
                        "name": "banner-utama3.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 1920,
                        "height": 1036,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622055713/large_banner_utama3_ebc9527163.jpg",
                                "hash": "large_banner_utama3_ebc9527163",
                                "mime": "image/jpeg",
                                "name": "large_banner-utama3.jpg",
                                "path": null,
                                "size": 93.55,
                                "width": 1000,
                                "height": 540,
                                "provider_metadata": {
                                    "public_id": "large_banner_utama3_ebc9527163",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622055715/small_banner_utama3_ebc9527163.jpg",
                                "hash": "small_banner_utama3_ebc9527163",
                                "mime": "image/jpeg",
                                "name": "small_banner-utama3.jpg",
                                "path": null,
                                "size": 27.92,
                                "width": 500,
                                "height": 270,
                                "provider_metadata": {
                                    "public_id": "small_banner_utama3_ebc9527163",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622055714/medium_banner_utama3_ebc9527163.jpg",
                                "hash": "medium_banner_utama3_ebc9527163",
                                "mime": "image/jpeg",
                                "name": "medium_banner-utama3.jpg",
                                "path": null,
                                "size": 56.25,
                                "width": 750,
                                "height": 405,
                                "provider_metadata": {
                                    "public_id": "medium_banner_utama3_ebc9527163",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622055712/thumbnail_banner_utama3_ebc9527163.jpg",
                                "hash": "thumbnail_banner_utama3_ebc9527163",
                                "mime": "image/jpeg",
                                "name": "thumbnail_banner-utama3.jpg",
                                "path": null,
                                "size": 7.86,
                                "width": 245,
                                "height": 132,
                                "provider_metadata": {
                                    "public_id": "thumbnail_banner_utama3_ebc9527163",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "banner_utama3_ebc9527163",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 212.22,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1622055711/banner_utama3_ebc9527163.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "banner_utama3_ebc9527163",
                            "resource_type": "image"
                        },
                        "created_at": "2021-05-26T19:01:55.575Z",
                        "updated_at": "2021-05-26T19:01:55.590Z"
                    }
                }],
                "products": [{
                    "id": 1,
                    "name": {
                        "id": 29,
                        "en_": "PVC Additives",
                        "id_": "PVC Additives"
                    },
                    "created_at": "2020-12-30T05:28:30.539Z",
                    "updated_at": "2021-09-02T21:33:18.659Z",
                    "slug": "pvc-additives",
                    "descriptions": {
                        "id": 11,
                        "en_": "\u003cp\u003eWe have more than 40 years experience in supplying various kind of PVC stabilizers, plasticizers, lubricants and other PVC additives such as calcium carbonate, optical brightening agent ( OB-1 ), chlorinated polyethylene, impact modifiers, processing aid, anti oxidant, anti UV, titanium dioxide, anti fogging, etc for many kind of application such as pipe, fitting, profile, sheet, imitation leather, and various kind of compound (cable, shoes, sandals, etc).\u003c/p\u003e\u003cp\u003e\u003cstrong\u003ea. Liquid Stabilizer\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eBarium Zinc Stabilizer\u003c/li\u003e\u003cli\u003eBarium Zinc Kicker\u003c/li\u003e\u003cli\u003eCadmium Barium Zinc\u003c/li\u003e\u003cli\u003eCell Control Agent for PVC Foam\u003c/li\u003e\u003cli\u003eCalcium Zinc (Ca/Zn) Stabilizer\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003eb. Non-Liquid Stabilizers (Powder/Flake Forms)\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eCalcium Stearate, Barium Stearate, Zinc Stearate, Lead Stearate, Magnesium Stearate, Cadmium Stearate\u003c/li\u003e\u003cli\u003eDibasic Lead Sulphate ( DBL )\u003c/li\u003e\u003cli\u003eTribasic Lead Stearate ( T3/TS )\u003c/li\u003e\u003cli\u003eBarium Zinc\u003c/li\u003e\u003cli\u003eCadmium Barium Lead\u003c/li\u003e\u003cli\u003eOne Pack Stabilizers : Lead Based, Ca/Zn Based\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003ec. Plasticizers\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eEpoxy Soybean Oil (ESBO/ESO)\u003c/li\u003e\u003cli\u003eEFAME ( Epoxy Fatty Acid Methyl Ester )\u003c/li\u003e\u003cli\u003eDioctyl Phtalate ( DOP )\u003c/li\u003e\u003cli\u003eDioctyl Adipate ( DOA )\u003c/li\u003e\u003cli\u003eTrioctyl Trimellitate ( TOTM )\u003c/li\u003e\u003cli\u003ePolymeric Plasticizers ( ADK PN series )\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003ed. Lubricants\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eButyl Stearate\u003c/li\u003e\u003cli\u003ePolyethylene Wax ( PE Wax )\u003c/li\u003e\u003cli\u003eGliseryl Mono Stearate ( GMS / Rikemal )\u003c/li\u003e\u003cli\u003eFatty Acid Esters ( Rikester )\u003c/li\u003e\u003cli\u003eKalcohol (Coco Alcohol)\u003c/li\u003e\u003cli\u003eStearic Acid\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003ee. Other PVC Additives\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eCalcium Carbonate\u003c/li\u003e\u003cli\u003eOptical Brightening Agents ( OB-1 )\u003c/li\u003e\u003cli\u003eUV Absorbers\u003c/li\u003e\u003cli\u003eChlorinated Polyethylene (CPE 135 A)\u003c/li\u003e\u003cli\u003eImpact Modifiers (Metablen C)\u003c/li\u003e\u003cli\u003eProcessing Aid (Metablen P)\u003c/li\u003e\u003cli\u003ePVC Paste Resin\u003c/li\u003e\u003cli\u003eColour Pigments\u003c/li\u003e\u003cli\u003eAnti Oxidant\u003c/li\u003e\u003cli\u003eAnti UV\u003c/li\u003e\u003cli\u003eAnti Fogging\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003eKami memiliki pengalaman lebih dari 40 tahun dalam mensuplai berbagai jenis stabilisator PVC, plasticizer, pelumas dan aditif PVC lainnya seperti kalsium karbonat, zat pencerah optik (OB-1), polietilen terklorinasi, pengubah benturan, alat bantu pemrosesan, anti oksidan, anti UV , titanium dioksida, anti fogging, dll untuk berbagai macam aplikasi seperti pipa, fitting, profile, sheet, kulit imitasi, dan berbagai jenis kompon (kabel, sepatu, sendal, dll).\u003c/p\u003e\u003cp\u003e\u003cstrong\u003ea. Liquid Stabilizer\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eBarium Zinc Stabilizer\u003c/li\u003e\u003cli\u003eBarium Zinc Kicker\u003c/li\u003e\u003cli\u003eCadmium Barium Zinc\u003c/li\u003e\u003cli\u003eCell Control Agent for PVC Foam\u003c/li\u003e\u003cli\u003eCalcium Zinc (Ca/Zn) Stabilizer\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003eb. Non-Liquid Stabilizers (Powder/Flake Forms)\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eCalcium Stearate, Barium Stearate, Zinc Stearate, Lead Stearate, Magnesium Stearate, Cadmium Stearate\u003c/li\u003e\u003cli\u003eDibasic Lead Sulphate ( DBL )\u003c/li\u003e\u003cli\u003eTribasic Lead Stearate ( T3/TS )\u003c/li\u003e\u003cli\u003eBarium Zinc\u003c/li\u003e\u003cli\u003eCadmium Barium Lead\u003c/li\u003e\u003cli\u003eOne Pack Stabilizers : Lead Based, Ca/Zn Based\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003ec. Plasticizers\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eEpoxy Soybean Oil (ESBO/ESO)\u003c/li\u003e\u003cli\u003eEFAME ( Epoxy Fatty Acid Methyl Ester )\u003c/li\u003e\u003cli\u003eDioctyl Phtalate ( DOP )\u003c/li\u003e\u003cli\u003eDioctyl Adipate ( DOA )\u003c/li\u003e\u003cli\u003eTrioctyl Trimellitate ( TOTM )\u003c/li\u003e\u003cli\u003ePolymeric Plasticizers ( ADK PN series )\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003ed. Lubricants\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eButyl Stearate\u003c/li\u003e\u003cli\u003ePolyethylene Wax ( PE Wax )\u003c/li\u003e\u003cli\u003eGliseryl Mono Stearate ( GMS / Rikemal )\u003c/li\u003e\u003cli\u003eFatty Acid Esters ( Rikester )\u003c/li\u003e\u003cli\u003eKalcohol (Coco Alcohol)\u003c/li\u003e\u003cli\u003eStearic Acid\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003ee. Other PVC Additives\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eCalcium Carbonate\u003c/li\u003e\u003cli\u003eOptical Brightening Agents ( OB-1 )\u003c/li\u003e\u003cli\u003eUV Absorbers\u003c/li\u003e\u003cli\u003eChlorinated Polyethylene (CPE 135 A)\u003c/li\u003e\u003cli\u003eImpact Modifiers (Metablen C)\u003c/li\u003e\u003cli\u003eProcessing Aid (Metablen P)\u003c/li\u003e\u003cli\u003ePVC Paste Resin\u003c/li\u003e\u003cli\u003eColour Pigments\u003c/li\u003e\u003cli\u003eAnti Oxidant\u003c/li\u003e\u003cli\u003eAnti UV\u003c/li\u003e\u003cli\u003eAnti Fogging\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 38,
                        "en_": "We have more than 40 years experience in supplying various kind of PVC stabilizers, plasticizers, lubricants and other PVC additives for many kind of application such as pipe, fitting, profile, sheet, imitation leather, and various kind of compound (cable, shoes, sandals, etc).",
                        "id_": "Kami memiliki pengalaman lebih dari 40 tahun dalam mensuplai berbagai jenis stabilisator PVC, plasticizer, pelumas dan aditif PVC lainnya untuk berbagai macam aplikasi seperti pipa, fitting, profile, sheet, kulit imitasi, dan berbagai jenis kompon (kabel, sepatu, sendal, dll)."
                    },
                    "product": [{
                        "id": 80,
                        "name": {
                            "id": 110,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        },
                        "list": [{
                            "id": 114,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 115,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 116,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }]
                    }, {
                        "id": 81,
                        "name": {
                            "id": 111,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        },
                        "list": [{
                            "id": 117,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 118,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 119,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }]
                    }, {
                        "id": 82,
                        "name": {
                            "id": 112,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        },
                        "list": [{
                            "id": 120,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 121,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 122,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 123,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }]
                    }, {
                        "id": 83,
                        "name": {
                            "id": 113,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        },
                        "list": [{
                            "id": 124,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 125,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 126,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 127,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }]
                    }],
                    "images": [{
                        "id": 112,
                        "name": "shutterstock_553109083-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 5616,
                        "height": 3744,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/large_shutterstock_553109083_min_d4c139501e.jpg",
                                "hash": "large_shutterstock_553109083_min_d4c139501e",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_553109083-min.jpg",
                                "path": null,
                                "size": 52.12,
                                "width": 1000,
                                "height": 667,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_553109083_min_d4c139501e",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667519/small_shutterstock_553109083_min_d4c139501e.jpg",
                                "hash": "small_shutterstock_553109083_min_d4c139501e",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_553109083-min.jpg",
                                "path": null,
                                "size": 19.74,
                                "width": 500,
                                "height": 333,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_553109083_min_d4c139501e",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/medium_shutterstock_553109083_min_d4c139501e.jpg",
                                "hash": "medium_shutterstock_553109083_min_d4c139501e",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_553109083-min.jpg",
                                "path": null,
                                "size": 34.95,
                                "width": 750,
                                "height": 500,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_553109083_min_d4c139501e",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667517/thumbnail_shutterstock_553109083_min_d4c139501e.jpg",
                                "hash": "thumbnail_shutterstock_553109083_min_d4c139501e",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_553109083-min.jpg",
                                "path": null,
                                "size": 6.88,
                                "width": 234,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_553109083_min_d4c139501e",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_553109083_min_d4c139501e",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 702.14,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667516/shutterstock_553109083_min_d4c139501e.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_553109083_min_d4c139501e",
                            "resource_type": "image"
                        },
                        "created_at": "2021-08-22T21:25:19.838Z",
                        "updated_at": "2021-08-22T21:25:19.856Z"
                    }]
                }, {
                    "id": 34,
                    "name": {
                        "id": 38,
                        "en_": "Plywood Glue and Adhesive",
                        "id_": "Plywood Glue and Adhesive"
                    },
                    "created_at": "2021-01-07T10:38:24.090Z",
                    "updated_at": "2021-09-02T21:34:10.752Z",
                    "slug": "plywood-glue-and-adhesive",
                    "descriptions": {
                        "id": 12,
                        "en_": "\u003cp\u003eAs a well established company, we have tremendous experiences to supply plywood glue and adhesives industries, and we are also known as a leading partner for its consistency in providing high quality of raw materials and additives to domestic plywood glue and adhesives manufacturers.\u003c/p\u003e\u003cul\u003e\u003cli\u003eHexamine\u003c/li\u003e\u003cli\u003eMagnesium Oxide\u003c/li\u003e\u003cli\u003eCornstarch\u003c/li\u003e\u003cli\u003eCitric Acid\u003c/li\u003e\u003cli\u003eDisodium Phosphate ( DSP )\u003c/li\u003e\u003cli\u003eMonosodium Phosphate ( MSP )\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003eSebagai perusahaan yang mapan, kami memiliki pengalaman luar biasa dalam memasok lem kayu lapis dan industri perekat, dan kami juga dikenal sebagai mitra yang baik karena konsisten dalam menyediakan bahan baku dan aditif berkualitas tinggi untuk produsen lem dan perekat kayu lapis dalam negeri.\u003c/p\u003e\u003cul\u003e\u003cli\u003eHexamine\u003c/li\u003e\u003cli\u003eMagnesium Oxide\u003c/li\u003e\u003cli\u003eCornstarch\u003c/li\u003e\u003cli\u003eCitric Acid\u003c/li\u003e\u003cli\u003eDisodium Phosphate ( DSP )\u003c/li\u003e\u003cli\u003eMonosodium Phosphate ( MSP )\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 37,
                        "en_": "With tremendous experience in supplying for plywood glue and adhesive industries, we have been known as a leading partner for our consistency in providing high quality of raw materials and additives to domestic plywood glue and adhesives manufacturers.",
                        "id_": "Dengan pengalaman yang luas dalam memasok lem kayu lapis dan industri perekat, kami dikenal sebagai mitra yang baik karena konsisten dalam menyediakan bahan baku dan aditif berkualitas tinggi untuk produsen lem dan perekat kayu lapis dalam negeri."
                    },
                    "product": [{
                        "id": 37,
                        "name": {
                            "id": 30,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        },
                        "list": [{
                            "id": 32,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 33,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 34,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }]
                    }, {
                        "id": 38,
                        "name": {
                            "id": 31,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        },
                        "list": [{
                            "id": 35,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 36,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }, {
                            "id": 37,
                            "en_": "Lorem Ipsum",
                            "id_": "Lorem Ipsum"
                        }]
                    }],
                    "images": [{
                        "id": 116,
                        "name": "shutterstock_1403299976-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 2662,
                        "height": 1814,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667700/large_shutterstock_1403299976_min_a778649b14.jpg",
                                "hash": "large_shutterstock_1403299976_min_a778649b14",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_1403299976-min.jpg",
                                "path": null,
                                "size": 133.31,
                                "width": 1000,
                                "height": 681,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_1403299976_min_a778649b14",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667701/small_shutterstock_1403299976_min_a778649b14.jpg",
                                "hash": "small_shutterstock_1403299976_min_a778649b14",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_1403299976-min.jpg",
                                "path": null,
                                "size": 34.39,
                                "width": 500,
                                "height": 341,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_1403299976_min_a778649b14",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667701/medium_shutterstock_1403299976_min_a778649b14.jpg",
                                "hash": "medium_shutterstock_1403299976_min_a778649b14",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_1403299976-min.jpg",
                                "path": null,
                                "size": 77.14,
                                "width": 750,
                                "height": 511,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_1403299976_min_a778649b14",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667700/thumbnail_shutterstock_1403299976_min_a778649b14.jpg",
                                "hash": "thumbnail_shutterstock_1403299976_min_a778649b14",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_1403299976-min.jpg",
                                "path": null,
                                "size": 7.88,
                                "width": 229,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_1403299976_min_a778649b14",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_1403299976_min_a778649b14",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 740.51,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667699/shutterstock_1403299976_min_a778649b14.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_1403299976_min_a778649b14",
                            "resource_type": "image"
                        },
                        "created_at": "2021-08-22T21:25:30.269Z",
                        "updated_at": "2021-08-22T21:28:21.720Z"
                    }]
                }, {
                    "id": 44,
                    "name": {
                        "id": 129,
                        "en_": "Electroplating Chemical Product",
                        "id_": "Electroplating Chemical Product"
                    },
                    "created_at": "2021-04-21T07:46:11.664Z",
                    "updated_at": "2022-07-14T04:17:43.668Z",
                    "slug": "electroplating-chemical-product",
                    "descriptions": {
                        "id": 14,
                        "en_": "\u003cp\u003eElectroplating is the process of coating a metal with the tin layer of another metal by electrolysis to improve the metal corrosion resistance. The metals commonly used in plating process are copper, nickel, gold, silver, chrome, zinc and tin. Electroplating process also known as electrodeposition and electroplated coating. We represent well known producers of electroplating chemicals like Yuken, Meltex, Ishihara, Kanigen and Geomet.\u003c/p\u003e\u003cul\u003e\u003cli\u003eChromic Acid\u003c/li\u003e\u003cli\u003eCopper Sulphate\u003c/li\u003e\u003cli\u003eElumin O\u003c/li\u003e\u003cli\u003eNickel Chloride\u003c/li\u003e\u003cli\u003eNickel Sulphate\u003c/li\u003e\u003cli\u003eNikkasan Lacquer\u003c/li\u003e\u003cli\u003eNitric Acid\u003c/li\u003e\u003cli\u003eSodium Hypophosphite\u003c/li\u003e\u003cli\u003eStannous Chloride\u003c/li\u003e\u003cli\u003eStannous Sulphate\u003c/li\u003e\u003cli\u003eCopper Pyrophosphate\u003c/li\u003e\u003cli\u003ePotassium Pyrophosphate\u003c/li\u003e\u003cli\u003eStannous Pyrophosphate\u003c/li\u003e\u003cli\u003ePre-Treatment ( Pakuna ) : Acid - Degreasing - Electro Cleaning Agents\u003c/li\u003e\u003cli\u003eAcid Zinc Brighteners ( Metasu )\u003c/li\u003e\u003cli\u003eAlkaline Zinc Brighteners ( Metasu )\u003c/li\u003e\u003cli\u003eZinc Passivation ( Metasu ) : Black 3+, Silver 3+\u003c/li\u003e\u003cli\u003eAbrasive Barrel Media ( Tipton )\u003c/li\u003e\u003cli\u003eBarrel Compound ( Tipton )\u003c/li\u003e\u003cli\u003eShot Blasting ( Tipton )\u003c/li\u003e\u003cli\u003eGeomet Coating\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003eElektroplating adalah proses pelapisan logam dengan lapisan timah dari logam lain dengan cara elektrolisis untuk meningkatkan ketahanan logam terhadap korosi. Logam yang biasa digunakan dalam proses pelapisan adalah tembaga, nikel, emas, perak, krom, seng dan timah. Proses elektroplating juga dikenal sebagai elektrodeposisi dan lapisan dilapisi. Kami mewakili produsen bahan kimia pelapisan listrik terkenal seperti Yuken, Meltex, Ishihara, Kanigen dan Geomet.\u003c/p\u003e\u003cul\u003e\u003cli\u003eChromic Acid\u003c/li\u003e\u003cli\u003eCopper Sulphate\u003c/li\u003e\u003cli\u003eElumin O\u003c/li\u003e\u003cli\u003eNickel Chloride\u003c/li\u003e\u003cli\u003eNickel Sulphate\u003c/li\u003e\u003cli\u003eNikkasan Lacquer\u003c/li\u003e\u003cli\u003eNitric Acid\u003c/li\u003e\u003cli\u003eSodium Hypophosphite\u003c/li\u003e\u003cli\u003eStannous Chloride\u003c/li\u003e\u003cli\u003eStannous Sulphate\u003c/li\u003e\u003cli\u003eCopper Pyrophosphate\u003c/li\u003e\u003cli\u003ePotassium Pyrophosphate\u003c/li\u003e\u003cli\u003eStannous Pyrophosphate\u003c/li\u003e\u003cli\u003ePre-Treatment ( Pakuna ) : Acid - Degreasing - Electro Cleaning Agents\u003c/li\u003e\u003cli\u003eAcid Zinc Brighteners ( Metasu )\u003c/li\u003e\u003cli\u003eAlkaline Zinc Brighteners ( Metasu )\u003c/li\u003e\u003cli\u003eZinc Passivation ( Metasu ) : Black 3+, Silver 3+\u003c/li\u003e\u003cli\u003eAbrasive Barrel Media ( Tipton )\u003c/li\u003e\u003cli\u003eBarrel Compound ( Tipton )\u003c/li\u003e\u003cli\u003eShot Blasting ( Tipton )\u003c/li\u003e\u003cli\u003eGeomet Coating\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 31,
                        "en_": "We have a wide variety of metals used in electroplating process, also known as electrodeposition and electroplated coating, such as copper, nickel, gold, silver, chrome, zinc and tin. We represent well known producers of electroplating chemicals like Yuken, Meltex, Ishihara, Kanigen and Geomet.",
                        "id_": "Kami dapat menyediakan berbagai logam yang biasa digunakan dalam proses elektroplating, yang juga dikenal sebagai elektrodeposisi dan lapisan dilapisi, seperti tembaga, nikel, emas, perak, krom, seng dan timah. Kami mewakili produsen bahan kimia pelapisan listrik terkenal seperti Yuken, Meltex, Ishihara, Kanigen dan Geomet."
                    },
                    "product": [],
                    "images": [{
                        "id": 120,
                        "name": "shutterstock_1591360486-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 4608,
                        "height": 3456,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1638687175/large_shutterstock_1591360486_min_498d116e2a.jpg",
                                "hash": "large_shutterstock_1591360486_min_498d116e2a",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_1591360486-min.jpg",
                                "path": null,
                                "size": 129.92,
                                "width": 1000,
                                "height": 750,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_1591360486_min_498d116e2a",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1638687175/small_shutterstock_1591360486_min_498d116e2a.jpg",
                                "hash": "small_shutterstock_1591360486_min_498d116e2a",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_1591360486-min.jpg",
                                "path": null,
                                "size": 42.78,
                                "width": 500,
                                "height": 375,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_1591360486_min_498d116e2a",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1638687175/medium_shutterstock_1591360486_min_498d116e2a.jpg",
                                "hash": "medium_shutterstock_1591360486_min_498d116e2a",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_1591360486-min.jpg",
                                "path": null,
                                "size": 83.59,
                                "width": 750,
                                "height": 563,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_1591360486_min_498d116e2a",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1638687174/thumbnail_shutterstock_1591360486_min_498d116e2a.jpg",
                                "hash": "thumbnail_shutterstock_1591360486_min_498d116e2a",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_1591360486-min.jpg",
                                "path": null,
                                "size": 10.47,
                                "width": 208,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_1591360486_min_498d116e2a",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_1591360486_min_498d116e2a",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 1115.93,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1638687174/shutterstock_1591360486_min_498d116e2a.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_1591360486_min_498d116e2a",
                            "resource_type": "image"
                        },
                        "created_at": "2021-12-05T06:52:56.121Z",
                        "updated_at": "2021-12-05T06:52:56.139Z"
                    }]
                }, {
                    "id": 45,
                    "name": {
                        "id": 130,
                        "en_": "Metal",
                        "id_": "Metal"
                    },
                    "created_at": "2021-04-21T08:22:24.651Z",
                    "updated_at": "2022-06-23T08:37:44.875Z",
                    "slug": "metal",
                    "descriptions": {
                        "id": 15,
                        "en_": "\u003cp\u003eAs we know, there are many metals commonly used in plating and galvanizing process, we supply some of those metals such as Lead Ingot, Zinc Alloy Ezda 3 and Zinc Anode SHG as a distributor of Nyrstar, a well known producer in the world. Lead Ingot is soft metal in the group Non Ferrous Metal with the character malleable, ductable metal, and commonly used to improve corrosion resistance. Main application is in industrial power and power storage such as underwater power and communication cables, vehicle batteries as well as operating energy power supplies and also used in solder wire industries. Zinc Alloy Ezda 3 is an alloying combination Zinc metal and Alluminium metal ( ZnAl-4% ) with a good mechanic characteristic, castability and dimension stability. Main application is in industrial diecasting such as die casting for automotive parts, electronic parts, garments and jewelery. Zinc Metal is the metal in the group Non Ferrous Metal with the large application. Zinc metal major application for Oxide industry, alloying industry, galvanizing and electroplated coating. Zinc Anode SHG ( Special High Grade ) mainly used in galvanizing steel to prevent rusting, in zinc diecasting alloys and copper alloys ( brass ). Zinc is also essential to promote growth of many kind of organism, both plant and animals. Zinc also extend the life of other material such as steel ( by hot dipping or electrogalvanizing ), rubber and plastic ( as an aging inhibitor ) and wood ( as a paint ).\u003c/p\u003e\u003cul\u003e\u003cli\u003eLead Ingot\u003c/li\u003e\u003cli\u003eNickel Plate\u003c/li\u003e\u003cli\u003eNickel Square\u003c/li\u003e\u003cli\u003eZinc Alloy EZDA 3\u003c/li\u003e\u003cli\u003eZinc Anode SHG\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003eSeperti yang kita ketahui, banyak logam yang biasa digunakan dalam proses pelapisan dan galvanisasi, kami mensuplai beberapa logam tersebut seperti Lead Ingot, Zinc Alloy Ezda 3 dan Zinc Anode SHG sebagai distributor dari Nyrstar, salah satu produsen ternama di dunia. Lead Ingot adalah logam lunak yang termasuk dalam golongan Non Ferrous Metal dengan karakter mudah dibentuk, dapat ductable, dan biasa digunakan untuk meningkatkan ketahanan terhadap korosi. Aplikasi utama dalam tenaga industri dan penyimpanan daya seperti kabel listrik dan komunikasi bawah air, baterai kendaraan serta pasokan listrik energi operasi dan juga digunakan dalam industri kawat solder. Zinc Alloy Ezda 3 merupakan paduan paduan logam Zinc dan logam Alluminium (ZnAl-4%) dengan karakteristik mekanik, castability, dan stabilitas dimensi yang baik. Aplikasi utama dalam diecasting industri seperti die casting untuk suku cadang otomotif, komponen elektronik, garmen dan perhiasan. Zinc Metal adalah logam dalam golongan Non Ferrous Metal dengan aplikasi besar. Aplikasi utama logam seng untuk industri Oksida, industri paduan, lapisan galvanisasi dan dilapisi. Zinc Anode SHG (Special High Grade) terutama digunakan dalam baja galvanis untuk mencegah karat, pada paduan seng diecasting dan paduan tembaga (kuningan). Seng juga penting untuk mendorong pertumbuhan berbagai jenis organisme, baik tumbuhan maupun hewan. Seng juga memperpanjang umur material lain seperti baja (dengan hot dipping atau electrogalvanizing), karet dan plastik (sebagai penghambat penuaan) dan kayu (sebagai cat).\u003c/p\u003e\u003cul\u003e\u003cli\u003eLead Ingot\u003c/li\u003e\u003cli\u003eNickel Plate\u003c/li\u003e\u003cli\u003eNickel Square\u003c/li\u003e\u003cli\u003eZinc Alloy EZDA 3\u003c/li\u003e\u003cli\u003eZinc Anode SHG\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 33,
                        "en_": "We are experienced in supplying metal raw materials that are used in the coating and galvanization processes such as Lead Ingot which is widely used in the cable industry, vehicle battery and soldering wire, Zinc Alloy Ezda 3 which is widely used for the automotive, also electronics to jewelry industries and Zinc anode SHG (Special High Grade) which play an important role in the steel industry. We are currently appointed as distributor of Nyrstar (one of the world's leading manufacturers) for the Indonesian market.",
                        "id_": "Kami berpengalaman dalam mensuplai bahan baku logam yang biasa digunakan dalam proses pelapisan dan galvanisasi seperti Lead Ingot yang banyak digunakan di industry kabel, baterai kendaraan dan kawat solde, Zinc Alloy Ezda 3 yang banyak digunakan untuk industry otomotif, elektronik hingga perhiasan serta Zinc anode SHG (Spesial High Grade) yang berperan penting dalam industry baja. Saat ini kami ditunjuk sebagai distributor dari Nyrstar (salah satu produsesn ternama di dunia) untuk pasar Indonesia"
                    },
                    "product": [],
                    "images": [{
                        "id": 110,
                        "name": "shutterstock_1203853255-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 4500,
                        "height": 3000,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/large_shutterstock_1203853255_min_bc02e67146.jpg",
                                "hash": "large_shutterstock_1203853255_min_bc02e67146",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_1203853255-min.jpg",
                                "path": null,
                                "size": 94.44,
                                "width": 1000,
                                "height": 667,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_1203853255_min_bc02e67146",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/small_shutterstock_1203853255_min_bc02e67146.jpg",
                                "hash": "small_shutterstock_1203853255_min_bc02e67146",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_1203853255-min.jpg",
                                "path": null,
                                "size": 28.29,
                                "width": 500,
                                "height": 333,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_1203853255_min_bc02e67146",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/medium_shutterstock_1203853255_min_bc02e67146.jpg",
                                "hash": "medium_shutterstock_1203853255_min_bc02e67146",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_1203853255-min.jpg",
                                "path": null,
                                "size": 58.19,
                                "width": 750,
                                "height": 500,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_1203853255_min_bc02e67146",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667517/thumbnail_shutterstock_1203853255_min_bc02e67146.jpg",
                                "hash": "thumbnail_shutterstock_1203853255_min_bc02e67146",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_1203853255-min.jpg",
                                "path": null,
                                "size": 7.67,
                                "width": 234,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_1203853255_min_bc02e67146",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_1203853255_min_bc02e67146",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 1045.36,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667516/shutterstock_1203853255_min_bc02e67146.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_1203853255_min_bc02e67146",
                            "resource_type": "image"
                        },
                        "created_at": "2021-08-22T21:25:19.553Z",
                        "updated_at": "2021-08-22T21:25:19.594Z"
                    }]
                }, {
                    "id": 46,
                    "name": {
                        "id": 131,
                        "en_": "Paint / Ink Chemical Product",
                        "id_": "Paint / Ink Chemical Product"
                    },
                    "created_at": "2021-04-21T08:24:31.418Z",
                    "updated_at": "2021-09-02T21:36:40.205Z",
                    "slug": "paint-ink-chemical-product",
                    "descriptions": {
                        "id": 16,
                        "en_": "\u003cp\u003eAssorted colors of organic and inorganic pigments, carbon black for coloring your coating and plastic application, resins for ink applications, functional fillers and nano calcium carbonate for ink and paint, oxidized bitumen, etc..\u003c/p\u003e\u003cp\u003ea. Ink and Paint Chemical\u003c/p\u003e\u003cul\u003e\u003cli\u003eAntiblocking Agent (Minbloc)\u003c/li\u003e\u003cli\u003eBlown Asphalt\u003c/li\u003e\u003cli\u003eBarium Sulfate (precipitated)\u003c/li\u003e\u003cli\u003eCalcium Carbonate (Activated Collodial)\u003c/li\u003e\u003cli\u003eCalcium Carbonate Light\u003c/li\u003e\u003cli\u003eCalcined Kaolin (Britex)\u003c/li\u003e\u003cli\u003eCLiQ Coating Additive (Wetting, antifoaming, Dispersing agent, thixotropic, etc.,)\u003c/li\u003e\u003cli\u003eCopolymer of PVC, PVAC and PVA (Solbin Series)\u003c/li\u003e\u003cli\u003eEVA Copolymer\u003c/li\u003e\u003cli\u003eChlorinated Polypropylene Resin\u003c/li\u003e\u003cli\u003eGlass beads (for road marking paint)\u003c/li\u003e\u003cli\u003eHydrogenated Hydrocarbon Resin\u003c/li\u003e\u003cli\u003eHydrocarbon Resin(C5, C9)\u003c/li\u003e\u003cli\u003ePolyvinyl Butyral resin (S Lec Series)\u003c/li\u003e\u003cli\u003ePotassium Aluminum Silicate (Minex)\u003c/li\u003e\u003cli\u003eCopolymer of PVC-VAC (CP Series)\u003c/li\u003e\u003cli\u003ePetroleum Resin C9\u003c/li\u003e\u003cli\u003ePolyamide Resin\u003c/li\u003e\u003cli\u003eSilica Sand\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eb. Pigments\u003c/p\u003e\u003cul\u003e\u003cli\u003eAluminum Paste\u003c/li\u003e\u003cli\u003ePearlescent Pigment\u003c/li\u003e\u003cli\u003eSpecialty Carbon Black (powder and beads type)\u003c/li\u003e\u003cli\u003eChrome Yellow Deep\u003c/li\u003e\u003cli\u003eChrome Yellow Lemon\u003c/li\u003e\u003cli\u003eChrome Yellow Medium\u003c/li\u003e\u003cli\u003eIron Oxide (Red, Yellow, Green)\u003c/li\u003e\u003cli\u003eMolybdate Orange\u003c/li\u003e\u003cli\u003eTitanium Dioxide Anatase\u003c/li\u003e\u003cli\u003eTitanium Dioxide Rutile (Various Grade)\u003c/li\u003e\u003cli\u003eOrganic Pigment ex China\u003cul\u003e\u003cli\u003eRed 2\u003c/li\u003e\u003cli\u003eRed 48:2\u003c/li\u003e\u003cli\u003eRed 49:1\u003c/li\u003e\u003cli\u003eRed 53:1\u003c/li\u003e\u003cli\u003eRed 63:1\u003c/li\u003e\u003cli\u003eRed 57:1\u003c/li\u003e\u003cli\u003eRed 112\u003c/li\u003e\u003cli\u003eRed 122\u003c/li\u003e\u003cli\u003eRed 254\u003c/li\u003e\u003cli\u003eYellow 1\u003c/li\u003e\u003cli\u003eYellow 12\u003c/li\u003e\u003cli\u003eYellow 13\u003c/li\u003e\u003cli\u003eYellow 14\u003c/li\u003e\u003cli\u003eYellow 74\u003c/li\u003e\u003cli\u003eYellow 83\u003c/li\u003e\u003cli\u003eOrange 13\u003c/li\u003e\u003cli\u003eOrange 34\u003c/li\u003e\u003cli\u003eBlue 15:0\u003c/li\u003e\u003cli\u003eBlue 15:1\u003c/li\u003e\u003cli\u003eBlue 15:3\u003c/li\u003e\u003cli\u003eMilori Blue\u003c/li\u003e\u003cli\u003eGreen 7\u003c/li\u003e\u003cli\u003eViolet 3\u003c/li\u003e\u003cli\u003eViolet 23\u003c/li\u003e\u003cli\u003eUltramarine Blue\u003c/li\u003e\u003cli\u003eSolvent Dyes\u003c/li\u003e\u003c/ul\u003e\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003eBerbagai macam warna pigmen organik dan anorganik, hitam karbon untuk pewarnaan lapisan dan aplikasi plastik, resin untuk aplikasi tinta, pengisi fungsional dan nano kalsium karbonat untuk tinta dan cat, aspal teroksidasi, dll.\u003c/p\u003e\u003cp\u003ea. Ink and Paint Chemical\u003c/p\u003e\u003cul\u003e\u003cli\u003eAntiblocking Agent (Minbloc)\u003c/li\u003e\u003cli\u003eBlown Asphalt\u003c/li\u003e\u003cli\u003eBarium Sulfate (precipitated)\u003c/li\u003e\u003cli\u003eCalcium Carbonate (Activated Collodial)\u003c/li\u003e\u003cli\u003eCalcium Carbonate Light\u003c/li\u003e\u003cli\u003eCalcined Kaolin (Britex)\u003c/li\u003e\u003cli\u003eCLiQ Coating Additive (Wetting, antifoaming, Dispersing agent, thixotropic, etc.,)\u003c/li\u003e\u003cli\u003eCopolymer of PVC, PVAC and PVA (Solbin Series)\u003c/li\u003e\u003cli\u003eEVA Copolymer\u003c/li\u003e\u003cli\u003eChlorinated Polypropylene Resin\u003c/li\u003e\u003cli\u003eGlass beads (for road marking paint)\u003c/li\u003e\u003cli\u003eHydrogenated Hydrocarbon Resin\u003c/li\u003e\u003cli\u003eHydrocarbon Resin(C5, C9)\u003c/li\u003e\u003cli\u003ePolyvinyl Butyral resin (S Lec Series)\u003c/li\u003e\u003cli\u003ePotassium Aluminum Silicate (Minex)\u003c/li\u003e\u003cli\u003eCopolymer of PVC-VAC (CP Series)\u003c/li\u003e\u003cli\u003ePetroleum Resin C9\u003c/li\u003e\u003cli\u003ePolyamide Resin\u003c/li\u003e\u003cli\u003eSilica Sand\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eb. Pigments\u003c/p\u003e\u003cul\u003e\u003cli\u003eAluminum Paste\u003c/li\u003e\u003cli\u003ePearlescent Pigment\u003c/li\u003e\u003cli\u003eSpecialty Carbon Black (powder and beads type)\u003c/li\u003e\u003cli\u003eChrome Yellow Deep\u003c/li\u003e\u003cli\u003eChrome Yellow Lemon\u003c/li\u003e\u003cli\u003eChrome Yellow Medium\u003c/li\u003e\u003cli\u003eIron Oxide (Red, Yellow, Green)\u003c/li\u003e\u003cli\u003eMolybdate Orange\u003c/li\u003e\u003cli\u003eTitanium Dioxide Anatase\u003c/li\u003e\u003cli\u003eTitanium Dioxide Rutile (Various Grade)\u003c/li\u003e\u003cli\u003eOrganic Pigment ex China\u003cul\u003e\u003cli\u003eRed 2\u003c/li\u003e\u003cli\u003eRed 48:2\u003c/li\u003e\u003cli\u003eRed 49:1\u003c/li\u003e\u003cli\u003eRed 53:1\u003c/li\u003e\u003cli\u003eRed 63:1\u003c/li\u003e\u003cli\u003eRed 57:1\u003c/li\u003e\u003cli\u003eRed 112\u003c/li\u003e\u003cli\u003eRed 122\u003c/li\u003e\u003cli\u003eRed 254\u003c/li\u003e\u003cli\u003eYellow 1\u003c/li\u003e\u003cli\u003eYellow 12\u003c/li\u003e\u003cli\u003eYellow 13\u003c/li\u003e\u003cli\u003eYellow 14\u003c/li\u003e\u003cli\u003eYellow 74\u003c/li\u003e\u003cli\u003eYellow 83\u003c/li\u003e\u003cli\u003eOrange 13\u003c/li\u003e\u003cli\u003eOrange 34\u003c/li\u003e\u003cli\u003eBlue 15:0\u003c/li\u003e\u003cli\u003eBlue 15:1\u003c/li\u003e\u003cli\u003eBlue 15:3\u003c/li\u003e\u003cli\u003eMilori Blue\u003c/li\u003e\u003cli\u003eGreen 7\u003c/li\u003e\u003cli\u003eViolet 3\u003c/li\u003e\u003cli\u003eViolet 23\u003c/li\u003e\u003cli\u003eUltramarine Blue\u003c/li\u003e\u003cli\u003eSolvent Dyes\u003c/li\u003e\u003c/ul\u003e\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 35,
                        "en_": "We Provide assorted colors of organic and inorganic pigments, carbon black for coloring your coating and plastic application, resins for ink applications, functional fillers and nano calcium carbonate for ink and paint, oxidized bitumen, etc.",
                        "id_": "Kami menghadirkan berbagai macam warna pigmen organik dan anorganik, hitam karbon untuk pewarnaan lapisan dan aplikasi plastik, resin untuk aplikasi tinta, pengisi fungsional dan nano kalsium karbonat untuk tinta dan cat, aspal teroksidasi, dll."
                    },
                    "product": [],
                    "images": [{
                        "id": 111,
                        "name": "shutterstock_34304782-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 4752,
                        "height": 3168,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/large_shutterstock_34304782_min_686527eded.jpg",
                                "hash": "large_shutterstock_34304782_min_686527eded",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_34304782-min.jpg",
                                "path": null,
                                "size": 53.07,
                                "width": 1000,
                                "height": 667,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_34304782_min_686527eded",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/small_shutterstock_34304782_min_686527eded.jpg",
                                "hash": "small_shutterstock_34304782_min_686527eded",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_34304782-min.jpg",
                                "path": null,
                                "size": 18.43,
                                "width": 500,
                                "height": 333,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_34304782_min_686527eded",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/medium_shutterstock_34304782_min_686527eded.jpg",
                                "hash": "medium_shutterstock_34304782_min_686527eded",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_34304782-min.jpg",
                                "path": null,
                                "size": 34.54,
                                "width": 750,
                                "height": 500,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_34304782_min_686527eded",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667517/thumbnail_shutterstock_34304782_min_686527eded.jpg",
                                "hash": "thumbnail_shutterstock_34304782_min_686527eded",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_34304782-min.jpg",
                                "path": null,
                                "size": 6.23,
                                "width": 234,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_34304782_min_686527eded",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_34304782_min_686527eded",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 659.43,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667516/shutterstock_34304782_min_686527eded.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_34304782_min_686527eded",
                            "resource_type": "image"
                        },
                        "created_at": "2021-08-22T21:25:19.563Z",
                        "updated_at": "2021-08-22T21:25:19.596Z"
                    }]
                }, {
                    "id": 47,
                    "name": {
                        "id": 132,
                        "en_": "Ceramic Raw Material",
                        "id_": "Ceramic Raw Material"
                    },
                    "created_at": "2021-04-21T08:26:43.797Z",
                    "updated_at": "2022-06-23T08:29:51.797Z",
                    "slug": "ceramic-raw-material",
                    "descriptions": {
                        "id": 17,
                        "en_": "\u003cp\u003eVarious grades of aluminum oxide, feldspar, barium carbonate for your ceramic products ATH, etc.\u003c/p\u003e\u003cp\u003ea. Chemical For Ceramic\u003c/p\u003e\u003cul\u003e\u003cli\u003eAluminum Hydroxide (ATH)\u003c/li\u003e\u003cli\u003eAluminum Oxide\u003c/li\u003e\u003cli\u003eBarium Carbonate\u003c/li\u003e\u003cli\u003eBarium Sulphate\u003c/li\u003e\u003cli\u003eChromium Oxide (Chrome Oxide Green)\u003c/li\u003e\u003cli\u003eMagnesium Oxide\u003c/li\u003e\u003cli\u003ePotassium Feldspar\u003c/li\u003e\u003cli\u003eSodium CMC\u003c/li\u003e\u003cli\u003eSodium Feldspar\u003c/li\u003e\u003cli\u003eSodium Tripolyphosphate\u003c/li\u003e\u003cli\u003eNephelyne Syenite\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003eBerbagai tingkatan aluminium oksida, feldspar, barium karbonat untuk produk keramik ATH Anda, dll.\u003c/p\u003e\u003cp\u003ea. Chemical For Ceramic\u003c/p\u003e\u003cul\u003e\u003cli\u003eAluminum Hydroxide (ATH)\u003c/li\u003e\u003cli\u003eAluminum Oxide\u003c/li\u003e\u003cli\u003eBarium Carbonate\u003c/li\u003e\u003cli\u003eBarium Sulphate\u003c/li\u003e\u003cli\u003eChromium Oxide (Chrome Oxide Green)\u003c/li\u003e\u003cli\u003eMagnesium Oxide\u003c/li\u003e\u003cli\u003ePotassium Feldspar\u003c/li\u003e\u003cli\u003eSodium CMC\u003c/li\u003e\u003cli\u003eSodium Feldspar\u003c/li\u003e\u003cli\u003eSodium Tripolyphosphate\u003c/li\u003e\u003cli\u003eNephelyne Syenite\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 30,
                        "en_": "We commit to support the ceramic industry in Indonesia in providing high quality raw materials such as various grades of aluminum oxide, feldspar, barium carbonate for ATH ceramic products, etc.",
                        "id_": "Kami berkomitmen untuk mendukung industri keramik di Indonesia untuk menyediakan bahan baku berkualitas seperti berbagai tingkatan aluminium oksida, feldspar, barium karbonat untuk produk keramik ATH Anda, dll."
                    },
                    "product": [],
                    "images": [{
                        "id": 115,
                        "name": "shutterstock_1093402559-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 6000,
                        "height": 4000,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667523/large_shutterstock_1093402559_min_e1222aa29c.jpg",
                                "hash": "large_shutterstock_1093402559_min_e1222aa29c",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_1093402559-min.jpg",
                                "path": null,
                                "size": 114.77,
                                "width": 1000,
                                "height": 667,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_1093402559_min_e1222aa29c",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667523/small_shutterstock_1093402559_min_e1222aa29c.jpg",
                                "hash": "small_shutterstock_1093402559_min_e1222aa29c",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_1093402559-min.jpg",
                                "path": null,
                                "size": 34.32,
                                "width": 500,
                                "height": 333,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_1093402559_min_e1222aa29c",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667523/medium_shutterstock_1093402559_min_e1222aa29c.jpg",
                                "hash": "medium_shutterstock_1093402559_min_e1222aa29c",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_1093402559-min.jpg",
                                "path": null,
                                "size": 67.79,
                                "width": 750,
                                "height": 500,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_1093402559_min_e1222aa29c",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667522/thumbnail_shutterstock_1093402559_min_e1222aa29c.jpg",
                                "hash": "thumbnail_shutterstock_1093402559_min_e1222aa29c",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_1093402559-min.jpg",
                                "path": null,
                                "size": 9.7,
                                "width": 234,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_1093402559_min_e1222aa29c",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_1093402559_min_e1222aa29c",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 2475.52,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667521/shutterstock_1093402559_min_e1222aa29c.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_1093402559_min_e1222aa29c",
                            "resource_type": "image"
                        },
                        "created_at": "2021-08-22T21:25:23.924Z",
                        "updated_at": "2021-08-22T21:25:23.936Z"
                    }]
                }, {
                    "id": 48,
                    "name": {
                        "id": 133,
                        "en_": "Food Ingredient Products ",
                        "id_": "Food Ingredient Products "
                    },
                    "created_at": "2021-04-21T08:31:31.860Z",
                    "updated_at": "2021-09-02T21:38:05.470Z",
                    "slug": "food-ingredient-products",
                    "descriptions": {
                        "id": 18,
                        "en_": "\u003cp\u003eWe also expand our business of high quality animal feed additives to support the livestock industry in Indonesia. The products we supply include additional nutrition for livestock and special nutrition for poultry farming, cattle farming and fishing industries such as ponds\u003c/p\u003e\u003cp\u003ea. Acidulant and Buffering Agent\u003c/p\u003e\u003cul\u003e\u003cli\u003eAcetic Acid\u003c/li\u003e\u003cli\u003eCitric Acid Anhydrous\u003c/li\u003e\u003cli\u003eCitric Acid Monohydrate\u003c/li\u003e\u003cli\u003eDL Malic Acid\u003c/li\u003e\u003cli\u003eGlucono Delta Lactone\u003c/li\u003e\u003cli\u003ePhosphoric Acid\u003c/li\u003e\u003cli\u003ePotassium Citrate\u003c/li\u003e\u003cli\u003eSodium Citrate\u003c/li\u003e\u003cli\u003eTartaric Acid\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eb. Anti Oxidant\u003c/p\u003e\u003cul\u003e\u003cli\u003eBHA\u003c/li\u003e\u003cli\u003eBHT\u003c/li\u003e\u003cli\u003eVitamin A\u003c/li\u003e\u003cli\u003eVitamin C\u003c/li\u003e\u003cli\u003eVitamin E (Oil)\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ec. Baking Ingredients\u003c/p\u003e\u003cul\u003e\u003cli\u003eAmmonium Bicarbonate\u003c/li\u003e\u003cli\u003eBaking enzymes\u003c/li\u003e\u003cli\u003eBaking Powder\u003c/li\u003e\u003cli\u003eBread Softener (Rimulsoft Super)\u003c/li\u003e\u003cli\u003eCake Emulsifier (Ryoto Ester SP)\u003c/li\u003e\u003cli\u003eCalcium Propionate\u003c/li\u003e\u003cli\u003eBread Improver\u003c/li\u003e\u003cli\u003eCornstarch\u003c/li\u003e\u003cli\u003eGlucono Delta Lactone\u003c/li\u003e\u003cli\u003eSodium Acid Pyrophosphate\u003c/li\u003e\u003cli\u003eSodium Bicarbonate\u003c/li\u003e\u003cli\u003eSodium Metabisulphite Food Grade\u003c/li\u003e\u003cli\u003eSodium Propionate\u003c/li\u003e\u003cli\u003eVitamin C\u003c/li\u003e\u003cli\u003eBakery Yeast\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ed. Emulsifier\u003c/p\u003e\u003cul\u003e\u003cli\u003eDistilled monoglyceride (Glyceril Mono Stearate)\u003c/li\u003e\u003cli\u003eLecithin (Powder \u0026amp; Liquid Form)\u003c/li\u003e\u003cli\u003eNoodle Emulsifier\u003c/li\u003e\u003cli\u003ePropylene Glycol Ester\u003c/li\u003e\u003cli\u003ePolyglycerol Ester\u003c/li\u003e\u003cli\u003eSugar Ester\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ee. Enzyme\u003c/p\u003e\u003cul\u003e\u003cli\u003eAmylase\u003c/li\u003e\u003cli\u003eAmyloglucosidase\u003c/li\u003e\u003cli\u003eCatalase\u003c/li\u003e\u003cli\u003eComplex Enzyme\u003c/li\u003e\u003cli\u003eDeaminase\u003c/li\u003e\u003cli\u003eGlucanase\u003c/li\u003e\u003cli\u003eIsomerase\u003c/li\u003e\u003cli\u003eLipase\u003c/li\u003e\u003cli\u003eNuclease\u003c/li\u003e\u003cli\u003ePectinase\u003c/li\u003e\u003cli\u003eProtease\u003c/li\u003e\u003cli\u003eTransglutaminase\u003c/li\u003e\u003cli\u003eXylanase\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ef. Food Colors \u0026amp; Flavors\u003c/p\u003e\u003cp\u003e\u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; Synthetic Food Color:\u003c/p\u003e\u003cul\u003e\u003cli\u003eBrilliant Blue\u003c/li\u003e\u003cli\u003eCarmoisine\u003c/li\u003e\u003cli\u003eChocolate Brown\u003c/li\u003e\u003cli\u003eOpaque White\u003c/li\u003e\u003cli\u003ePonceau 4R\u003c/li\u003e\u003cli\u003eSunset Yellow\u003c/li\u003e\u003cli\u003eTartrazine\u003c/li\u003e\u003cli\u003eTitanium Dioxide\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; Natural Food Color:\u003c/p\u003e\u003cul\u003e\u003cli\u003eAnnato Extracts\u003c/li\u003e\u003cli\u003eBeet Red\u003c/li\u003e\u003cli\u003eBeta Carotene\u003c/li\u003e\u003cli\u003eCaramel\u003c/li\u003e\u003cli\u003eCarmine Chocineal\u003c/li\u003e\u003cli\u003eChlorophyll\u003c/li\u003e\u003cli\u003eMarygold\u003c/li\u003e\u003cli\u003ePaprika\u003c/li\u003e\u003cli\u003eTurmeric\u003c/li\u003e\u003cli\u003eVegetable Carbon Black\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp;Flavors:\u003c/p\u003e\u003cul\u003e\u003cli\u003eCocoa Powder Series\u003c/li\u003e\u003cli\u003eSavory Flavor Series\u003c/li\u003e\u003cli\u003eSweet Flavor Series\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eg. Amino Acid\u003c/p\u003e\u003cul\u003e\u003cli\u003eDL-Methionine\u003c/li\u003e\u003cli\u003eGlycine\u003c/li\u003e\u003cli\u003eL-Carnitine\u003c/li\u003e\u003cli\u003eL-Lysine\u003c/li\u003e\u003cli\u003eTaurine\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eh. Food Phosphate\u003c/p\u003e\u003cul\u003e\u003cli\u003eDicalcium Phosphate (DCP)\u003c/li\u003e\u003cli\u003eDisodium Phosphate Anhydrous (DSP)\u003c/li\u003e\u003cli\u003eMonosodium Phosphate (MSP)\u003c/li\u003e\u003cli\u003ePhosphate Compound (Halpos)\u003c/li\u003e\u003cli\u003eSodium Acid Pyrophosphate (SAPP)\u003c/li\u003e\u003cli\u003eSodium Hexametaphosphate (SHMP)\u003c/li\u003e\u003cli\u003eSodium Tripolyphosphate (STPP)\u003c/li\u003e\u003cli\u003eTetrasodium Pyrophosphate (TSPP)\u003c/li\u003e\u003cli\u003eTrisodium Phosphate Anhydrous (TSP)\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ei. Blended Phosphate\u003c/p\u003e\u003cul\u003e\u003cli\u003eCorino Series: Cheese Product\u003c/li\u003e\u003cli\u003eGusto Series: Meat Product\u003c/li\u003e\u003cli\u003ePearl Series: Seafood\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ej. Food Preservative\u003c/p\u003e\u003cul\u003e\u003cli\u003eCalcium Propionate\u003c/li\u003e\u003cli\u003eOxygen Absorber (Ageless)\u003c/li\u003e\u003cli\u003ePotassium Sorbate\u003c/li\u003e\u003cli\u003eSodium Benzoate\u003c/li\u003e\u003cli\u003eSodium Metabisulphite\u003c/li\u003e\u003cli\u003eSodium Propionate\u003c/li\u003e\u003cli\u003eSodium Acetate\u003c/li\u003e\u003cli\u003eSodium Diacetate\u003c/li\u003e\u003cli\u003eSorbic Acid\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ek. Natural Thickener And Stabilizer\u003c/p\u003e\u003cul\u003e\u003cli\u003eCarrageenan\u003c/li\u003e\u003cli\u003eCorn Starch\u003c/li\u003e\u003cli\u003eGellan Gum\u003c/li\u003e\u003cli\u003eGuar Gum (Edicol)\u003c/li\u003e\u003cli\u003eHydroxy Propyl Methyl Cellulose (HPMC)\u003c/li\u003e\u003cli\u003eInulin\u003c/li\u003e\u003cli\u003eJelly Powder\u003c/li\u003e\u003cli\u003eKonjac Gum\u003c/li\u003e\u003cli\u003eLocust Bean Gum\u003c/li\u003e\u003cli\u003eMethyl Cellulose (MC)\u003c/li\u003e\u003cli\u003eModified Starch\u003c/li\u003e\u003cli\u003ePectin\u003c/li\u003e\u003cli\u003ePropylene Glycol Alginate\u003c/li\u003e\u003cli\u003eSodium Alginate\u003c/li\u003e\u003cli\u003eSodium CMC\u003c/li\u003e\u003cli\u003eTara Gum\u003c/li\u003e\u003cli\u003eT-Fibre\u003c/li\u003e\u003cli\u003eXanthan Gum\u003c/li\u003e\u003c/ul\u003e\u003cp\u003el. Noodle Ingredient\u003c/p\u003e\u003cul\u003e\u003cli\u003eNoodle Emulsifier (Friendy M)\u003c/li\u003e\u003cli\u003ePotassium Carbonate\u003c/li\u003e\u003cli\u003eSoda Ash Food Grade\u003c/li\u003e\u003cli\u003eVitamin A\u003c/li\u003e\u003c/ul\u003e\u003cp\u003em. Sweetener\u003c/p\u003e\u003cul\u003e\u003cli\u003eAcesulfame-K\u003c/li\u003e\u003cli\u003eAspartame\u003c/li\u003e\u003cli\u003eDextrose Powder\u003c/li\u003e\u003cli\u003eErythritol\u003c/li\u003e\u003cli\u003eFructose\u003c/li\u003e\u003cli\u003eMaltitol\u003c/li\u003e\u003cli\u003eMaltodextrin\u003c/li\u003e\u003cli\u003eMannitol\u003c/li\u003e\u003cli\u003eSorbitol\u003c/li\u003e\u003cli\u003eStevia\u003c/li\u003e\u003cli\u003eSucralose\u003c/li\u003e\u003cli\u003eXylitol\u003c/li\u003e\u003c/ul\u003e\u003cp\u003en. Flavor Enhancer\u003c/p\u003e\u003cul\u003e\u003cli\u003eHydrolyzed Vegetable Protein\u003c/li\u003e\u003cli\u003eMonosodium Glutamate\u003c/li\u003e\u003cli\u003eYeast Extract\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eo. Natural Extract\u003c/p\u003e\u003cul\u003e\u003cli\u003eFruit Extract\u003c/li\u003e\u003cli\u003ePlant Extract\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ep. Sterilant\u003c/p\u003e\u003cul\u003e\u003cli\u003eHydrogen Peroxide\u003c/li\u003e\u003cli\u003ePeracetic Acid\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eq. Other Food Additives\u003c/p\u003e\u003cul\u003e\u003cli\u003eBrewing Yeast\u003c/li\u003e\u003cli\u003eCalcium Carbonate\u003c/li\u003e\u003cli\u003eCalcium Chloride\u003c/li\u003e\u003cli\u003eCloudifying Agent\u003c/li\u003e\u003cli\u003eInositol\u003c/li\u003e\u003cli\u003eIsolated Soy Protein\u003c/li\u003e\u003cli\u003eMatcha Powder\u003c/li\u003e\u003cli\u003ePotassium Chloride\u003c/li\u003e\u003cli\u003ePropylene Glycol\u003c/li\u003e\u003cli\u003eSoya Peptide\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003eKami juga mengembangkan bisnis imbuhan pakan ternak yang berkualitas untuk mendukung industri peternakan di Indonesia. Produk yang kami sediakan meliputi nutrisi tambahan untuk ternak dan nutrisi spesial untuk peternakan unggas, peternakan sapi dan industri perikanan seperti tambak\u0026nbsp;\u003c/p\u003e\u003cp\u003ea. Acidulant and Buffering Agent\u003c/p\u003e\u003cul\u003e\u003cli\u003eAcetic Acid\u003c/li\u003e\u003cli\u003eCitric Acid Anhydrous\u003c/li\u003e\u003cli\u003eCitric Acid Monohydrate\u003c/li\u003e\u003cli\u003eDL Malic Acid\u003c/li\u003e\u003cli\u003eGlucono Delta Lactone\u003c/li\u003e\u003cli\u003ePhosphoric Acid\u003c/li\u003e\u003cli\u003ePotassium Citrate\u003c/li\u003e\u003cli\u003eSodium Citrate\u003c/li\u003e\u003cli\u003eTartaric Acid\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eb. Anti Oxidant\u003c/p\u003e\u003cul\u003e\u003cli\u003eBHA\u003c/li\u003e\u003cli\u003eBHT\u003c/li\u003e\u003cli\u003eVitamin A\u003c/li\u003e\u003cli\u003eVitamin C\u003c/li\u003e\u003cli\u003eVitamin E (Oil)\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ec. Baking Ingredients\u003c/p\u003e\u003cul\u003e\u003cli\u003eAmmonium Bicarbonate\u003c/li\u003e\u003cli\u003eBaking enzymes\u003c/li\u003e\u003cli\u003eBaking Powder\u003c/li\u003e\u003cli\u003eBread Softener (Rimulsoft Super)\u003c/li\u003e\u003cli\u003eCake Emulsifier (Ryoto Ester SP)\u003c/li\u003e\u003cli\u003eCalcium Propionate\u003c/li\u003e\u003cli\u003eBread Improver\u003c/li\u003e\u003cli\u003eCornstarch\u003c/li\u003e\u003cli\u003eGlucono Delta Lactone\u003c/li\u003e\u003cli\u003eSodium Acid Pyrophosphate\u003c/li\u003e\u003cli\u003eSodium Bicarbonate\u003c/li\u003e\u003cli\u003eSodium Metabisulphite Food Grade\u003c/li\u003e\u003cli\u003eSodium Propionate\u003c/li\u003e\u003cli\u003eVitamin C\u003c/li\u003e\u003cli\u003eBakery Yeast\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ed. Emulsifier\u003c/p\u003e\u003cul\u003e\u003cli\u003eDistilled monoglyceride (Glyceril Mono Stearate)\u003c/li\u003e\u003cli\u003eLecithin (Powder \u0026amp; Liquid Form)\u003c/li\u003e\u003cli\u003eNoodle Emulsifier\u003c/li\u003e\u003cli\u003ePropylene Glycol Ester\u003c/li\u003e\u003cli\u003ePolyglycerol Ester\u003c/li\u003e\u003cli\u003eSugar Ester\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ee. Enzyme\u003c/p\u003e\u003cul\u003e\u003cli\u003eAmylase\u003c/li\u003e\u003cli\u003eAmyloglucosidase\u003c/li\u003e\u003cli\u003eCatalase\u003c/li\u003e\u003cli\u003eComplex Enzyme\u003c/li\u003e\u003cli\u003eDeaminase\u003c/li\u003e\u003cli\u003eGlucanase\u003c/li\u003e\u003cli\u003eIsomerase\u003c/li\u003e\u003cli\u003eLipase\u003c/li\u003e\u003cli\u003eNuclease\u003c/li\u003e\u003cli\u003ePectinase\u003c/li\u003e\u003cli\u003eProtease\u003c/li\u003e\u003cli\u003eTransglutaminase\u003c/li\u003e\u003cli\u003eXylanase\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ef. Food Colors \u0026amp; Flavors\u003c/p\u003e\u003cp\u003e\u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; Synthetic Food Color:\u003c/p\u003e\u003cul\u003e\u003cli\u003eBrilliant Blue\u003c/li\u003e\u003cli\u003eCarmoisine\u003c/li\u003e\u003cli\u003eChocolate Brown\u003c/li\u003e\u003cli\u003eOpaque White\u003c/li\u003e\u003cli\u003ePonceau 4R\u003c/li\u003e\u003cli\u003eSunset Yellow\u003c/li\u003e\u003cli\u003eTartrazine\u003c/li\u003e\u003cli\u003eTitanium Dioxide\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; Natural Food Color:\u003c/p\u003e\u003cul\u003e\u003cli\u003eAnnato Extracts\u003c/li\u003e\u003cli\u003eBeet Red\u003c/li\u003e\u003cli\u003eBeta Carotene\u003c/li\u003e\u003cli\u003eCaramel\u003c/li\u003e\u003cli\u003eCarmine Chocineal\u003c/li\u003e\u003cli\u003eChlorophyll\u003c/li\u003e\u003cli\u003eMarygold\u003c/li\u003e\u003cli\u003ePaprika\u003c/li\u003e\u003cli\u003eTurmeric\u003c/li\u003e\u003cli\u003eVegetable Carbon Black\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp;Flavors:\u003c/p\u003e\u003cul\u003e\u003cli\u003eCocoa Powder Series\u003c/li\u003e\u003cli\u003eSavory Flavor Series\u003c/li\u003e\u003cli\u003eSweet Flavor Series\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eg. Amino Acid\u003c/p\u003e\u003cul\u003e\u003cli\u003eDL-Methionine\u003c/li\u003e\u003cli\u003eGlycine\u003c/li\u003e\u003cli\u003eL-Carnitine\u003c/li\u003e\u003cli\u003eL-Lysine\u003c/li\u003e\u003cli\u003eTaurine\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eh. Food Phosphate\u003c/p\u003e\u003cul\u003e\u003cli\u003eDicalcium Phosphate (DCP)\u003c/li\u003e\u003cli\u003eDisodium Phosphate Anhydrous (DSP)\u003c/li\u003e\u003cli\u003eMonosodium Phosphate (MSP)\u003c/li\u003e\u003cli\u003ePhosphate Compound (Halpos)\u003c/li\u003e\u003cli\u003eSodium Acid Pyrophosphate (SAPP)\u003c/li\u003e\u003cli\u003eSodium Hexametaphosphate (SHMP)\u003c/li\u003e\u003cli\u003eSodium Tripolyphosphate (STPP)\u003c/li\u003e\u003cli\u003eTetrasodium Pyrophosphate (TSPP)\u003c/li\u003e\u003cli\u003eTrisodium Phosphate Anhydrous (TSP)\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ei. Blended Phosphate\u003c/p\u003e\u003cul\u003e\u003cli\u003eCorino Series: Cheese Product\u003c/li\u003e\u003cli\u003eGusto Series: Meat Product\u003c/li\u003e\u003cli\u003ePearl Series: Seafood\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ej. Food Preservative\u003c/p\u003e\u003cul\u003e\u003cli\u003eCalcium Propionate\u003c/li\u003e\u003cli\u003eOxygen Absorber (Ageless)\u003c/li\u003e\u003cli\u003ePotassium Sorbate\u003c/li\u003e\u003cli\u003eSodium Benzoate\u003c/li\u003e\u003cli\u003eSodium Metabisulphite\u003c/li\u003e\u003cli\u003eSodium Propionate\u003c/li\u003e\u003cli\u003eSodium Acetate\u003c/li\u003e\u003cli\u003eSodium Diacetate\u003c/li\u003e\u003cli\u003eSorbic Acid\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ek. Natural Thickener And Stabilizer\u003c/p\u003e\u003cul\u003e\u003cli\u003eCarrageenan\u003c/li\u003e\u003cli\u003eCorn Starch\u003c/li\u003e\u003cli\u003eGellan Gum\u003c/li\u003e\u003cli\u003eGuar Gum (Edicol)\u003c/li\u003e\u003cli\u003eHydroxy Propyl Methyl Cellulose (HPMC)\u003c/li\u003e\u003cli\u003eInulin\u003c/li\u003e\u003cli\u003eJelly Powder\u003c/li\u003e\u003cli\u003eKonjac Gum\u003c/li\u003e\u003cli\u003eLocust Bean Gum\u003c/li\u003e\u003cli\u003eMethyl Cellulose (MC)\u003c/li\u003e\u003cli\u003eModified Starch\u003c/li\u003e\u003cli\u003ePectin\u003c/li\u003e\u003cli\u003ePropylene Glycol Alginate\u003c/li\u003e\u003cli\u003eSodium Alginate\u003c/li\u003e\u003cli\u003eSodium CMC\u003c/li\u003e\u003cli\u003eTara Gum\u003c/li\u003e\u003cli\u003eT-Fibre\u003c/li\u003e\u003cli\u003eXanthan Gum\u003c/li\u003e\u003c/ul\u003e\u003cp\u003el. Noodle Ingredient\u003c/p\u003e\u003cul\u003e\u003cli\u003eNoodle Emulsifier (Friendy M)\u003c/li\u003e\u003cli\u003ePotassium Carbonate\u003c/li\u003e\u003cli\u003eSoda Ash Food Grade\u003c/li\u003e\u003cli\u003eVitamin A\u003c/li\u003e\u003c/ul\u003e\u003cp\u003em. Sweetener\u003c/p\u003e\u003cul\u003e\u003cli\u003eAcesulfame-K\u003c/li\u003e\u003cli\u003eAspartame\u003c/li\u003e\u003cli\u003eDextrose Powder\u003c/li\u003e\u003cli\u003eErythritol\u003c/li\u003e\u003cli\u003eFructose\u003c/li\u003e\u003cli\u003eMaltitol\u003c/li\u003e\u003cli\u003eMaltodextrin\u003c/li\u003e\u003cli\u003eMannitol\u003c/li\u003e\u003cli\u003eSorbitol\u003c/li\u003e\u003cli\u003eStevia\u003c/li\u003e\u003cli\u003eSucralose\u003c/li\u003e\u003cli\u003eXylitol\u003c/li\u003e\u003c/ul\u003e\u003cp\u003en. Flavor Enhancer\u003c/p\u003e\u003cul\u003e\u003cli\u003eHydrolyzed Vegetable Protein\u003c/li\u003e\u003cli\u003eMonosodium Glutamate\u003c/li\u003e\u003cli\u003eYeast Extract\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eo. Natural Extract\u003c/p\u003e\u003cul\u003e\u003cli\u003eFruit Extract\u003c/li\u003e\u003cli\u003ePlant Extract\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ep. Sterilant\u003c/p\u003e\u003cul\u003e\u003cli\u003eHydrogen Peroxide\u003c/li\u003e\u003cli\u003ePeracetic Acid\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eq. Other Food Additives\u003c/p\u003e\u003cul\u003e\u003cli\u003eBrewing Yeast\u003c/li\u003e\u003cli\u003eCalcium Carbonate\u003c/li\u003e\u003cli\u003eCalcium Chloride\u003c/li\u003e\u003cli\u003eCloudifying Agent\u003c/li\u003e\u003cli\u003eInositol\u003c/li\u003e\u003cli\u003eIsolated Soy Protein\u003c/li\u003e\u003cli\u003eMatcha Powder\u003c/li\u003e\u003cli\u003ePotassium Chloride\u003c/li\u003e\u003cli\u003ePropylene Glycol\u003c/li\u003e\u003cli\u003eSoya Peptide\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 29,
                        "en_": "We provide high quality and diverse food ingredients to be a solution for the food industry in Indonesia. The products we present start from acidity regulators, preservatives, sweeteners, flavors, emulsifiers, stabilizers, and others.",
                        "id_": "Portofolio bahan pangan yang berkualitas dan beragam kami hadirkan untuk menjadi solusi industri makanan yang ada di Indonesia. Produk yang kami hadirkan mulai dari pengatur keasaman, pengawet, pemanis, perisa, pengemulsi, penstabil dan lainnya."
                    },
                    "product": [],
                    "images": [{
                        "id": 114,
                        "name": "shutterstock_712043761-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 5654,
                        "height": 3769,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667522/large_shutterstock_712043761_min_741ad71ceb.jpg",
                                "hash": "large_shutterstock_712043761_min_741ad71ceb",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_712043761-min.jpg",
                                "path": null,
                                "size": 94.55,
                                "width": 1000,
                                "height": 667,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_712043761_min_741ad71ceb",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667522/small_shutterstock_712043761_min_741ad71ceb.jpg",
                                "hash": "small_shutterstock_712043761_min_741ad71ceb",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_712043761-min.jpg",
                                "path": null,
                                "size": 26.58,
                                "width": 500,
                                "height": 333,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_712043761_min_741ad71ceb",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667522/medium_shutterstock_712043761_min_741ad71ceb.jpg",
                                "hash": "medium_shutterstock_712043761_min_741ad71ceb",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_712043761-min.jpg",
                                "path": null,
                                "size": 56.72,
                                "width": 750,
                                "height": 500,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_712043761_min_741ad71ceb",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667521/thumbnail_shutterstock_712043761_min_741ad71ceb.jpg",
                                "hash": "thumbnail_shutterstock_712043761_min_741ad71ceb",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_712043761-min.jpg",
                                "path": null,
                                "size": 7.11,
                                "width": 234,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_712043761_min_741ad71ceb",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_712043761_min_741ad71ceb",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 1904.77,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667521/shutterstock_712043761_min_741ad71ceb.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_712043761_min_741ad71ceb",
                            "resource_type": "image"
                        },
                        "created_at": "2021-08-22T21:25:23.199Z",
                        "updated_at": "2021-08-22T21:25:23.216Z"
                    }]
                }, {
                    "id": 49,
                    "name": {
                        "id": 134,
                        "en_": "Feed Additive Products",
                        "id_": "Feed Additive Products"
                    },
                    "created_at": "2021-04-21T08:33:39.228Z",
                    "updated_at": "2021-09-02T21:38:38.333Z",
                    "slug": "feed-additive-products",
                    "descriptions": {
                        "id": 19,
                        "en_": "\u003cp\u003eWe provide high quality and diverse food ingredients to be a solution for the food industry in Indonesia. The products we present start from acidity regulators, preservatives, sweeteners, flavors, emulsifiers, stabilizers, and others.\u003c/p\u003e\u003cp\u003ea. Antibiotic\u003c/p\u003e\u003cul\u003e\u003cli\u003eAmoxyciline\u003c/li\u003e\u003cli\u003eCiprofloxacine\u003c/li\u003e\u003cli\u003eChlortetracyclin HCl\u003c/li\u003e\u003cli\u003eDiclazuril\u003c/li\u003e\u003cli\u003eDoxycycline HCl\u003c/li\u003e\u003cli\u003eEnrofloxacine\u003c/li\u003e\u003cli\u003eErythromycin Thiocyanate\u003c/li\u003e\u003cli\u003eNeomycin Sulphate\u003c/li\u003e\u003cli\u003eNorfloxacine\u003c/li\u003e\u003cli\u003eOlaquindox\u003c/li\u003e\u003cli\u003eOxytetracycline\u003c/li\u003e\u003cli\u003eSulphadiazine Sodium\u003c/li\u003e\u003cli\u003eTylosin Tartrate\u003c/li\u003e\u003cli\u003eTrimethoprim\u003c/li\u003e\u003cli\u003eZinc Bacitracin\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eb. Anthelmentic\u003c/p\u003e\u003cul\u003e\u003cli\u003eAlbendazole\u003c/li\u003e\u003cli\u003eLevamisole\u003c/li\u003e\u003cli\u003eNiclosamide\u003c/li\u003e\u003cli\u003ePiperazine Citrate\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ec. Mineral\u003c/p\u003e\u003cul\u003e\u003cli\u003eCobalt Sulphate\u003c/li\u003e\u003cli\u003eCopper Sulphate\u003c/li\u003e\u003cli\u003eDicalcium Phosphate 18%\u003c/li\u003e\u003cli\u003eFerrous Sulphate\u003c/li\u003e\u003cli\u003eMagnesium Oxide / Sulphate\u003c/li\u003e\u003cli\u003eManganese Oxide / Sulphate\u003c/li\u003e\u003cli\u003eMonodicalcium Phosphate 21%\u003c/li\u003e\u003cli\u003eMonocalcium Phosphate 22%\u003c/li\u003e\u003cli\u003eZinc Oxide / Sulphate White Seal\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ed. Sanitary Materials\u003c/p\u003e\u003cul\u003e\u003cli\u003eBenzalkonium Chloride 50 %\u003c/li\u003e\u003cli\u003eBenzalkonium Chloride 80 %\u003c/li\u003e\u003cli\u003eCalcium Hypochlorite 70 %\u003c/li\u003e\u003cli\u003ePotassium Permanganate (PK)\u003c/li\u003e\u003cli\u003eTrichloro Isocyanuric Acid (TCCA) 90%\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ee. Vitamin\u003c/p\u003e\u003cul\u003e\u003cli\u003eBiotin\u003c/li\u003e\u003cli\u003eCholine Chloride\u003c/li\u003e\u003cli\u003eD-Calcium Panthothenate\u003c/li\u003e\u003cli\u003eFolic Acid\u003c/li\u003e\u003cli\u003eVitamin A\u003c/li\u003e\u003cli\u003eVitamin B1 Mono\u003c/li\u003e\u003cli\u003eVitamin B2\u003c/li\u003e\u003cli\u003eVitamin B3 (Nicotinic / Nicotinamide)\u003c/li\u003e\u003cli\u003eVitamin B6\u003c/li\u003e\u003cli\u003eVitamin C\u003c/li\u003e\u003cli\u003eVitamin D3\u003c/li\u003e\u003cli\u003eVitamin E50\u003c/li\u003e\u003cli\u003eVitamin K3\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ef. Amino Acid\u0026nbsp;\u003c/p\u003e\u003cul\u003e\u003cli\u003eL-Threonin\u003c/li\u003e\u003cli\u003eL-Lysine\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eg. Others\u003c/p\u003e\u003cul\u003e\u003cli\u003eActive Dry Yeast\u003c/li\u003e\u003cli\u003eAnticaking\u003c/li\u003e\u003cli\u003eAntimold\u003c/li\u003e\u003cli\u003eCyromazine\u003c/li\u003e\u003cli\u003eFiller\u003c/li\u003e\u003cli\u003eFeed Colour\u003c/li\u003e\u003cli\u003ePellet Binder\u003c/li\u003e\u003cli\u003eCalcium Propionate\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003ePortofolio bahan pangan yang berkualitas dan beragam kami hadirkan untuk menjadi solusi industri makanan yang ada di Indonesia. Produk yang kami hadirkan mulai dari pengatur keasaman, pengawet, pemanis, perisa, pengemulsi, penstabil dan lainnya.\u003c/p\u003e\u003cp\u003ea. Antibiotic\u003c/p\u003e\u003cul\u003e\u003cli\u003eAmoxyciline\u003c/li\u003e\u003cli\u003eCiprofloxacine\u003c/li\u003e\u003cli\u003eChlortetracyclin HCl\u003c/li\u003e\u003cli\u003eDiclazuril\u003c/li\u003e\u003cli\u003eDoxycycline HCl\u003c/li\u003e\u003cli\u003eEnrofloxacine\u003c/li\u003e\u003cli\u003eErythromycin Thiocyanate\u003c/li\u003e\u003cli\u003eNeomycin Sulphate\u003c/li\u003e\u003cli\u003eNorfloxacine\u003c/li\u003e\u003cli\u003eOlaquindox\u003c/li\u003e\u003cli\u003eOxytetracycline\u003c/li\u003e\u003cli\u003eSulphadiazine Sodium\u003c/li\u003e\u003cli\u003eTylosin Tartrate\u003c/li\u003e\u003cli\u003eTrimethoprim\u003c/li\u003e\u003cli\u003eZinc Bacitracin\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eb. Anthelmentic\u003c/p\u003e\u003cul\u003e\u003cli\u003eAlbendazole\u003c/li\u003e\u003cli\u003eLevamisole\u003c/li\u003e\u003cli\u003eNiclosamide\u003c/li\u003e\u003cli\u003ePiperazine Citrate\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ec. Mineral\u003c/p\u003e\u003cul\u003e\u003cli\u003eCobalt Sulphate\u003c/li\u003e\u003cli\u003eCopper Sulphate\u003c/li\u003e\u003cli\u003eDicalcium Phosphate 18%\u003c/li\u003e\u003cli\u003eFerrous Sulphate\u003c/li\u003e\u003cli\u003eMagnesium Oxide / Sulphate\u003c/li\u003e\u003cli\u003eManganese Oxide / Sulphate\u003c/li\u003e\u003cli\u003eMonodicalcium Phosphate 21%\u003c/li\u003e\u003cli\u003eMonocalcium Phosphate 22%\u003c/li\u003e\u003cli\u003eZinc Oxide / Sulphate White Seal\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ed. Sanitary Materials\u003c/p\u003e\u003cul\u003e\u003cli\u003eBenzalkonium Chloride 50 %\u003c/li\u003e\u003cli\u003eBenzalkonium Chloride 80 %\u003c/li\u003e\u003cli\u003eCalcium Hypochlorite 70 %\u003c/li\u003e\u003cli\u003ePotassium Permanganate (PK)\u003c/li\u003e\u003cli\u003eTrichloro Isocyanuric Acid (TCCA) 90%\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ee. Vitamin\u003c/p\u003e\u003cul\u003e\u003cli\u003eBiotin\u003c/li\u003e\u003cli\u003eCholine Chloride\u003c/li\u003e\u003cli\u003eD-Calcium Panthothenate\u003c/li\u003e\u003cli\u003eFolic Acid\u003c/li\u003e\u003cli\u003eVitamin A\u003c/li\u003e\u003cli\u003eVitamin B1 Mono\u003c/li\u003e\u003cli\u003eVitamin B2\u003c/li\u003e\u003cli\u003eVitamin B3 (Nicotinic / Nicotinamide)\u003c/li\u003e\u003cli\u003eVitamin B6\u003c/li\u003e\u003cli\u003eVitamin C\u003c/li\u003e\u003cli\u003eVitamin D3\u003c/li\u003e\u003cli\u003eVitamin E50\u003c/li\u003e\u003cli\u003eVitamin K3\u003c/li\u003e\u003c/ul\u003e\u003cp\u003ef. Amino Acid\u0026nbsp;\u003c/p\u003e\u003cul\u003e\u003cli\u003eL-Threonin\u003c/li\u003e\u003cli\u003eL-Lysine\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eg. Others\u003c/p\u003e\u003cul\u003e\u003cli\u003eActive Dry Yeast\u003c/li\u003e\u003cli\u003eAnticaking\u003c/li\u003e\u003cli\u003eAntimold\u003c/li\u003e\u003cli\u003eCyromazine\u003c/li\u003e\u003cli\u003eFiller\u003c/li\u003e\u003cli\u003eFeed Colour\u003c/li\u003e\u003cli\u003ePellet Binder\u003c/li\u003e\u003cli\u003eCalcium Propionate\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 32,
                        "en_": "We also expand our business of high quality animal feed additives to support the livestock industry in Indonesia. The products we supply include additional nutrition for livestock and special nutrition for poultry farming, cattle farming and fishing industries such as ponds",
                        "id_": "Kami juga mengembangkan bisnis imbuhan pakan ternak yang berkualitas untuk mendukung industri peternakan di Indonesia. Produk yang kami sediakan meliputi nutrisi tambahan untuk ternak dan nutrisi spesial untuk peternakan unggas, peternakan sapi dan industri perikanan seperti tambak  "
                    },
                    "product": [],
                    "images": [{
                        "id": 117,
                        "name": "shutterstock_1494908330-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 8904,
                        "height": 6200,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667539/large_shutterstock_1494908330_min_576fd4fdc5.jpg",
                                "hash": "large_shutterstock_1494908330_min_576fd4fdc5",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_1494908330-min.jpg",
                                "path": null,
                                "size": 95.02,
                                "width": 1000,
                                "height": 696,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_1494908330_min_576fd4fdc5",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667539/small_shutterstock_1494908330_min_576fd4fdc5.jpg",
                                "hash": "small_shutterstock_1494908330_min_576fd4fdc5",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_1494908330-min.jpg",
                                "path": null,
                                "size": 29.82,
                                "width": 500,
                                "height": 348,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_1494908330_min_576fd4fdc5",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667539/medium_shutterstock_1494908330_min_576fd4fdc5.jpg",
                                "hash": "medium_shutterstock_1494908330_min_576fd4fdc5",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_1494908330-min.jpg",
                                "path": null,
                                "size": 59,
                                "width": 750,
                                "height": 522,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_1494908330_min_576fd4fdc5",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667538/thumbnail_shutterstock_1494908330_min_576fd4fdc5.jpg",
                                "hash": "thumbnail_shutterstock_1494908330_min_576fd4fdc5",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_1494908330-min.jpg",
                                "path": null,
                                "size": 7.56,
                                "width": 224,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_1494908330_min_576fd4fdc5",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_1494908330_min_576fd4fdc5",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 2490.72,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667536/shutterstock_1494908330_min_576fd4fdc5.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_1494908330_min_576fd4fdc5",
                            "resource_type": "image"
                        },
                        "created_at": "2021-08-22T21:25:40.099Z",
                        "updated_at": "2021-08-22T21:25:40.118Z"
                    }]
                }, {
                    "id": 50,
                    "name": {
                        "id": 135,
                        "en_": "Plastic Resin / Compound and Engineering Plastic",
                        "id_": "Plastic Resin / Compound and Engineering Plastic"
                    },
                    "created_at": "2021-04-21T08:38:07.597Z",
                    "updated_at": "2021-09-02T21:39:19.347Z",
                    "slug": "plastic-resin-compound-and-engineering-plastic",
                    "descriptions": {
                        "id": 20,
                        "en_": "\u003cp\u003eThe first and Pioneer in the Plastic Compounds and masterbatches industry in Indonesia. Selling plastic Resin as ABS, SAN, Polycarbonate, SBS, TPE, TPR, Nylon and plastics additives.\u003c/p\u003e\u003cul\u003e\u003cli\u003eCalcium Carbonate and Talc Masterbatch\u003c/li\u003e\u003cli\u003eColor Masterbatch\u003c/li\u003e\u003cli\u003eBlack and White Masterbatch\u003c/li\u003e\u003cli\u003eFunctional Masterbatch (Anti static masterbatch, etc)\u003c/li\u003e\u003cli\u003eColor Compound (polylefin, polystyrene, engineering plastic)\u003c/li\u003e\u003cli\u003eImpact Modifier (polyolefin, polystyrene)\u003c/li\u003e\u003cli\u003eThermoplastic Rubber (TPR)\u003c/li\u003e\u003cli\u003eThermoplastic Elastomer (TPE)\u003c/li\u003e\u003cli\u003eEva foam compound\u003c/li\u003e\u003cli\u003eABS Resin\u003c/li\u003e\u003cli\u003eAS Resin (SAN)\u003c/li\u003e\u003cli\u003ePolycarbonate (PC)\u003c/li\u003e\u003cli\u003eNylon 6/66\u003c/li\u003e\u003cli\u003ePolybutylene Terephthala (PBT)\u003c/li\u003e\u003cli\u003ePolyacetal (POM)\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003ePertama dan Pelopor dalam industri Senyawa Plastik dan masterbatch di Indonesia. Menjual Resin plastik seperti ABS, SAN, Polycarbonate, SBS, TPE, TPR, Nylon dan aditif plastik.\u003c/p\u003e\u003cul\u003e\u003cli\u003eCalcium Carbonate and Talc Masterbatch\u003c/li\u003e\u003cli\u003eColor Masterbatch\u003c/li\u003e\u003cli\u003eBlack and White Masterbatch\u003c/li\u003e\u003cli\u003eFunctional Masterbatch (Anti static masterbatch, etc)\u003c/li\u003e\u003cli\u003eColor Compound (polylefin, polystyrene, engineering plastic)\u003c/li\u003e\u003cli\u003eImpact Modifier (polyolefin, polystyrene)\u003c/li\u003e\u003cli\u003eThermoplastic Rubber (TPR)\u003c/li\u003e\u003cli\u003eThermoplastic Elastomer (TPE)\u003c/li\u003e\u003cli\u003eEva foam compound\u003c/li\u003e\u003cli\u003eABS Resin\u003c/li\u003e\u003cli\u003eAS Resin (SAN)\u003c/li\u003e\u003cli\u003ePolycarbonate (PC)\u003c/li\u003e\u003cli\u003eNylon 6/66\u003c/li\u003e\u003cli\u003ePolybutylene Terephthala (PBT)\u003c/li\u003e\u003cli\u003ePolyacetal (POM)\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 36,
                        "en_": "The first and Pioneer in the Plastic Compounds and masterbatches industry in Indonesia.\nSelling plastic Resin such as ABS, SAN, Polycarbonate, SBS, TPE, TPR, Nylon and plastics additives.\n",
                        "id_": "Pertama dan Pelopor dalam industri Senyawa Plastik dan masterbatch di Indonesia.\nMenjual Resin plastik seperti ABS, SAN, Polycarbonate, SBS, TPE, TPR, Nylon dan aditif plastik.\n"
                    },
                    "product": [],
                    "images": [{
                        "id": 113,
                        "name": "shutterstock_1069199438-min.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 5184,
                        "height": 3456,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667518/large_shutterstock_1069199438_min_a77ee0ab29.jpg",
                                "hash": "large_shutterstock_1069199438_min_a77ee0ab29",
                                "mime": "image/jpeg",
                                "name": "large_shutterstock_1069199438-min.jpg",
                                "path": null,
                                "size": 73.81,
                                "width": 1000,
                                "height": 667,
                                "provider_metadata": {
                                    "public_id": "large_shutterstock_1069199438_min_a77ee0ab29",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667519/small_shutterstock_1069199438_min_a77ee0ab29.jpg",
                                "hash": "small_shutterstock_1069199438_min_a77ee0ab29",
                                "mime": "image/jpeg",
                                "name": "small_shutterstock_1069199438-min.jpg",
                                "path": null,
                                "size": 23.86,
                                "width": 500,
                                "height": 333,
                                "provider_metadata": {
                                    "public_id": "small_shutterstock_1069199438_min_a77ee0ab29",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667519/medium_shutterstock_1069199438_min_a77ee0ab29.jpg",
                                "hash": "medium_shutterstock_1069199438_min_a77ee0ab29",
                                "mime": "image/jpeg",
                                "name": "medium_shutterstock_1069199438-min.jpg",
                                "path": null,
                                "size": 46.87,
                                "width": 750,
                                "height": 500,
                                "provider_metadata": {
                                    "public_id": "medium_shutterstock_1069199438_min_a77ee0ab29",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667517/thumbnail_shutterstock_1069199438_min_a77ee0ab29.jpg",
                                "hash": "thumbnail_shutterstock_1069199438_min_a77ee0ab29",
                                "mime": "image/jpeg",
                                "name": "thumbnail_shutterstock_1069199438-min.jpg",
                                "path": null,
                                "size": 7.02,
                                "width": 234,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_shutterstock_1069199438_min_a77ee0ab29",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "shutterstock_1069199438_min_a77ee0ab29",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 1194.73,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1629667516/shutterstock_1069199438_min_a77ee0ab29.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "shutterstock_1069199438_min_a77ee0ab29",
                            "resource_type": "image"
                        },
                        "created_at": "2021-08-22T21:25:20.633Z",
                        "updated_at": "2021-08-22T21:25:20.651Z"
                    }]
                }, {
                    "id": 51,
                    "name": {
                        "id": 136,
                        "en_": "Other General Chemical Products",
                        "id_": "Other General Chemical Products"
                    },
                    "created_at": "2021-04-21T08:40:14.231Z",
                    "updated_at": "2021-09-02T21:40:04.911Z",
                    "slug": "other-general-chemical-products",
                    "descriptions": {
                        "id": 21,
                        "en_": "\u003cp\u003eVarious kind chemical materias for general purpose\u003c/p\u003e\u003cul\u003e\u003cli\u003eAcetic Acid\u003c/li\u003e\u003cli\u003eAmmonium Chloride\u003c/li\u003e\u003cli\u003eAmmonia Liquid\u003c/li\u003e\u003cli\u003eCalcium Carbonate\u003c/li\u003e\u003cli\u003eCalcium Choride\u003c/li\u003e\u003cli\u003eCalcium Hypochlorite 65 % \u0026amp; 70 %\u003c/li\u003e\u003cli\u003eCaustic Soda\u003c/li\u003e\u003cli\u003eCopper Sulphate\u003c/li\u003e\u003cli\u003eDisodium Phosphate\u003c/li\u003e\u003cli\u003eFerric Chloride\u003c/li\u003e\u003cli\u003eFerulic Acid\u003c/li\u003e\u003cli\u003eMagnesium Carbonate\u003c/li\u003e\u003cli\u003eMalachite Green\u003c/li\u003e\u003cli\u003eMetanyl Yellow\u003c/li\u003e\u003cli\u003eNitric Acid\u003c/li\u003e\u003cli\u003eParaffin Wax\u003c/li\u003e\u003cli\u003ePhosporic Acid TG \u0026amp; FG\u003c/li\u003e\u003cli\u003ePotassium Carbonate\u003c/li\u003e\u003cli\u003ePotassium Chloride\u003c/li\u003e\u003cli\u003ePotassium Hydroxide (Caustic Potash)\u003c/li\u003e\u003cli\u003ePotassium Permanganate\u003c/li\u003e\u003cli\u003eSodium CMC Technical Grade\u003c/li\u003e\u003cli\u003eSodium Dihcloro Iso Cyanuric Acid 60 % (SDIC)\u003c/li\u003e\u003cli\u003eSodium Hexametaphosphate TG\u003c/li\u003e\u003cli\u003eSodium Metabisulphite\u003c/li\u003e\u003cli\u003eSodium Tripolyphosphate TG\u003c/li\u003e\u003cli\u003eTalcum Powder (30)\u003c/li\u003e\u003cli\u003eTalcum Powder (mesh 800, 1000, 1250)\u003c/li\u003e\u003cli\u003eTitanium Dioxide Anatase\u003c/li\u003e\u003cli\u003eTitanium Dioxide Rutile (Various Grade)\u003c/li\u003e\u003cli\u003eTrichloro Iso Cyanuric Acid 90 %\u003c/li\u003e\u003cli\u003eTrisodium Phosphate Anhydrous\u003c/li\u003e\u003cli\u003eUltramarine Blue\u003c/li\u003e\u003cli\u003eZinc Oxide\u003c/li\u003e\u003cli\u003eVarious Kind of Industrial Enzyme\u003c/li\u003e\u003c/ul\u003e",
                        "id_": "\u003cp\u003eBerbagai macam bahan kimia untuk keperluan umum\u003c/p\u003e\u003cul\u003e\u003cli\u003eAcetic Acid\u003c/li\u003e\u003cli\u003eAmmonium Chloride\u003c/li\u003e\u003cli\u003eAmmonia Liquid\u003c/li\u003e\u003cli\u003eCalcium Carbonate\u003c/li\u003e\u003cli\u003eCalcium Choride\u003c/li\u003e\u003cli\u003eCalcium Hypochlorite 65 % \u0026amp; 70 %\u003c/li\u003e\u003cli\u003eCaustic Soda\u003c/li\u003e\u003cli\u003eCopper Sulphate\u003c/li\u003e\u003cli\u003eDisodium Phosphate\u003c/li\u003e\u003cli\u003eFerric Chloride\u003c/li\u003e\u003cli\u003eFerulic Acid\u003c/li\u003e\u003cli\u003eMagnesium Carbonate\u003c/li\u003e\u003cli\u003eMalachite Green\u003c/li\u003e\u003cli\u003eMetanyl Yellow\u003c/li\u003e\u003cli\u003eNitric Acid\u003c/li\u003e\u003cli\u003eParaffin Wax\u003c/li\u003e\u003cli\u003ePhosporic Acid TG \u0026amp; FG\u003c/li\u003e\u003cli\u003ePotassium Carbonate\u003c/li\u003e\u003cli\u003ePotassium Chloride\u003c/li\u003e\u003cli\u003ePotassium Hydroxide (Caustic Potash)\u003c/li\u003e\u003cli\u003ePotassium Permanganate\u003c/li\u003e\u003cli\u003eSodium CMC Technical Grade\u003c/li\u003e\u003cli\u003eSodium Dihcloro Iso Cyanuric Acid 60 % (SDIC)\u003c/li\u003e\u003cli\u003eSodium Hexametaphosphate TG\u003c/li\u003e\u003cli\u003eSodium Metabisulphite\u003c/li\u003e\u003cli\u003eSodium Tripolyphosphate TG\u003c/li\u003e\u003cli\u003eTalcum Powder (30)\u003c/li\u003e\u003cli\u003eTalcum Powder (mesh 800, 1000, 1250)\u003c/li\u003e\u003cli\u003eTitanium Dioxide Anatase\u003c/li\u003e\u003cli\u003eTitanium Dioxide Rutile (Various Grade)\u003c/li\u003e\u003cli\u003eTrichloro Iso Cyanuric Acid 90 %\u003c/li\u003e\u003cli\u003eTrisodium Phosphate Anhydrous\u003c/li\u003e\u003cli\u003eUltramarine Blue\u003c/li\u003e\u003cli\u003eZinc Oxide\u003c/li\u003e\u003cli\u003eVarious Kind of Industrial Enzyme\u003c/li\u003e\u003c/ul\u003e"
                    },
                    "excerpt": {
                        "id": 34,
                        "en_": "In addition to chemicals specialized for specific industries, we also provide various general chemical products that can be used by various industries. With our extensive collection of products, we provide chemicals for a wide range of applications from dyes and water treatment to food and feed additives.",
                        "id_": "Selain bahan kimia yang spesifik digunakan di industri tertentu, kami juga menyediakan berbagai produk kimia umum yang dapat digunakan oleh berbagai industri. Dengan koleksi produk kami yang luas, kami dapat menyediakan bahan kimia untuk berbagai aplikasi mulai dari pewarna dan pengolah air hingga aditif makanan dan pakan."
                    },
                    "product": [],
                    "images": [{
                        "id": 68,
                        "name": "product5.jpg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 1366,
                        "height": 911,
                        "formats": {
                            "large": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618993090/large_product5_08c7d3068e.jpg",
                                "hash": "large_product5_08c7d3068e",
                                "mime": "image/jpeg",
                                "name": "large_product5.jpg",
                                "path": null,
                                "size": 91.41,
                                "width": 1000,
                                "height": 667,
                                "provider_metadata": {
                                    "public_id": "large_product5_08c7d3068e",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618993091/small_product5_08c7d3068e.jpg",
                                "hash": "small_product5_08c7d3068e",
                                "mime": "image/jpeg",
                                "name": "small_product5.jpg",
                                "path": null,
                                "size": 33.63,
                                "width": 500,
                                "height": 333,
                                "provider_metadata": {
                                    "public_id": "small_product5_08c7d3068e",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618993091/medium_product5_08c7d3068e.jpg",
                                "hash": "medium_product5_08c7d3068e",
                                "mime": "image/jpeg",
                                "name": "medium_product5.jpg",
                                "path": null,
                                "size": 60.61,
                                "width": 750,
                                "height": 500,
                                "provider_metadata": {
                                    "public_id": "medium_product5_08c7d3068e",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618993089/thumbnail_product5_08c7d3068e.jpg",
                                "hash": "thumbnail_product5_08c7d3068e",
                                "mime": "image/jpeg",
                                "name": "thumbnail_product5.jpg",
                                "path": null,
                                "size": 11.42,
                                "width": 234,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_product5_08c7d3068e",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "product5_08c7d3068e",
                        "ext": ".jpg",
                        "mime": "image/jpeg",
                        "size": 86.04,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618993089/product5_08c7d3068e.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "product5_08c7d3068e",
                            "resource_type": "image"
                        },
                        "created_at": "2021-04-21T08:18:11.561Z",
                        "updated_at": "2021-04-21T08:18:11.580Z"
                    }]
                }],
                "testi": [{
                    "id": 1,
                    "name": "Dirgantara Fasa",
                    "created_at": "2021-04-18T23:22:24.589Z",
                    "updated_at": "2021-05-26T10:43:16.104Z",
                    "company": "RIKEVITA (SINGAPORE) PTE LTD",
                    "position": "Country Sales Manager ",
                    "testimonial": {
                        "id": 23,
                        "en_": "There are very few organizations his day and age the size of Halim Sakti Pratama that still possess the core family owned and operated values that they did when they were founded, but Halim Sakti Pratama is one of them. Halim Sakti’s vision of the business and how they operate are built at a quality level that matches with our value of the business, we are lucky to have Halim Sakti Pratama as our distributor. It made us comfortable and after more than 20 years together, we still feel the same way with them. The team at Halim Sakti Pratama are all extremely knowledgeable, courteous, and are always very quick to help us when we need them. We hope to extend this relationship with Halim Sakti Pratama for the future.",
                        "id_": "Sangat sedikit organisasi seusianya dengan Halim Sakti Pratama yang masih memiliki dan menjalankan nilai-nilai inti seperti saat perusahaan pada saat didirikan, namun Halim Sakti Pratama adalah salah satunya. Visi Halim Sakti tentang bisnis dan cara operasinya dibangun pada tingkat kualitas yang sesuai dengan nilai bisnis kami, kami beruntung memiliki Halim Sakti Pratama sebagai distributor kami. Itu membuat kami nyaman dan setelah lebih dari 20 tahun bersama, kami masih merasakan hal yang sama dengan mereka. Tim di Halim Sakti Pratama semuanya sangat berpengetahuan, sopan, dan selalu cepat membantu kami saat kami membutuhkannya. Kami berharap dapat memperpanjang hubungan ini dengan Halim Sakti Pratama di masa depan."
                    },
                    "photo": {
                        "id": 60,
                        "name": "Principal Dirgantara Fasa.png",
                        "alternativeText": "",
                        "caption": "",
                        "width": 251,
                        "height": 253,
                        "formats": {
                            "thumbnail": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773990/thumbnail_Principal_Dirgantara_Fasa_bb889c8892.png",
                                "hash": "thumbnail_Principal_Dirgantara_Fasa_bb889c8892",
                                "mime": "image/png",
                                "name": "thumbnail_Principal Dirgantara Fasa.png",
                                "path": null,
                                "size": 55.33,
                                "width": 155,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_Principal_Dirgantara_Fasa_bb889c8892",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "Principal_Dirgantara_Fasa_bb889c8892",
                        "ext": ".png",
                        "mime": "image/png",
                        "size": 126.21,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773988/Principal_Dirgantara_Fasa_bb889c8892.png",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "Principal_Dirgantara_Fasa_bb889c8892",
                            "resource_type": "image"
                        },
                        "created_at": "2021-04-18T19:26:31.561Z",
                        "updated_at": "2021-04-18T19:26:31.603Z"
                    }
                }, {
                    "id": 2,
                    "name": "Sulistyo Wibowo",
                    "created_at": "2021-04-18T23:41:22.418Z",
                    "updated_at": "2021-05-26T10:15:47.524Z",
                    "company": "PT. Politama Prima Abadi",
                    "position": "Purchasing Department",
                    "testimonial": {
                        "id": 24,
                        "en_": "Halim Sakti is our main supplier in providing our colour masterbatch needs, excellent and stable quality is the reason why we form a longlasting relationship. Quick respond and on-time delivery gives us additional value. ",
                        "id_": "Halim Sakti merupakan supplier utama kami dalam hal menyediakan kebutuhan masterbatch colour, qualitas barang yang bagus dan stabil adalah alasan kami tetap menjalin kerjasama yang sudah lama ini,  respon yang cepat dan pengiriman yang tepat waktu merupakan nilai lebih bagi kami."
                    },
                    "photo": {
                        "id": 61,
                        "name": "Customer Sulistyo Wibowo.jpeg",
                        "alternativeText": "",
                        "caption": "",
                        "width": 1072,
                        "height": 752,
                        "formats": {
                            "large": {
                                "ext": ".jpeg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773990/large_Customer_Sulistyo_Wibowo_eb47cc39e6.jpg",
                                "hash": "large_Customer_Sulistyo_Wibowo_eb47cc39e6",
                                "mime": "image/jpeg",
                                "name": "large_Customer Sulistyo Wibowo.jpeg",
                                "path": null,
                                "size": 73.99,
                                "width": 1000,
                                "height": 701,
                                "provider_metadata": {
                                    "public_id": "large_Customer_Sulistyo_Wibowo_eb47cc39e6",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".jpeg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773992/small_Customer_Sulistyo_Wibowo_eb47cc39e6.jpg",
                                "hash": "small_Customer_Sulistyo_Wibowo_eb47cc39e6",
                                "mime": "image/jpeg",
                                "name": "small_Customer Sulistyo Wibowo.jpeg",
                                "path": null,
                                "size": 28.64,
                                "width": 500,
                                "height": 351,
                                "provider_metadata": {
                                    "public_id": "small_Customer_Sulistyo_Wibowo_eb47cc39e6",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".jpeg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773991/medium_Customer_Sulistyo_Wibowo_eb47cc39e6.jpg",
                                "hash": "medium_Customer_Sulistyo_Wibowo_eb47cc39e6",
                                "mime": "image/jpeg",
                                "name": "medium_Customer Sulistyo Wibowo.jpeg",
                                "path": null,
                                "size": 50.17,
                                "width": 750,
                                "height": 526,
                                "provider_metadata": {
                                    "public_id": "medium_Customer_Sulistyo_Wibowo_eb47cc39e6",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".jpeg",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773989/thumbnail_Customer_Sulistyo_Wibowo_eb47cc39e6.jpg",
                                "hash": "thumbnail_Customer_Sulistyo_Wibowo_eb47cc39e6",
                                "mime": "image/jpeg",
                                "name": "thumbnail_Customer Sulistyo Wibowo.jpeg",
                                "path": null,
                                "size": 8.83,
                                "width": 222,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_Customer_Sulistyo_Wibowo_eb47cc39e6",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "Customer_Sulistyo_Wibowo_eb47cc39e6",
                        "ext": ".jpeg",
                        "mime": "image/jpeg",
                        "size": 73.57,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773988/Customer_Sulistyo_Wibowo_eb47cc39e6.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "Customer_Sulistyo_Wibowo_eb47cc39e6",
                            "resource_type": "image"
                        },
                        "created_at": "2021-04-18T19:26:33.384Z",
                        "updated_at": "2021-04-18T19:26:33.405Z"
                    }
                }, {
                    "id": 3,
                    "name": "Dahniel Margouw",
                    "created_at": "2021-04-18T23:44:50.115Z",
                    "updated_at": "2021-05-26T10:45:00.581Z",
                    "company": "Cargill Cocoa and Chocolate",
                    "position": "Sales Manager",
                    "testimonial": {
                        "id": 25,
                        "en_": "We have already built a strong relationship with Halim Sakti, work hand in hand with the commercial and technical team to grow Indonesia market. I am assured that this partnership will be a successful one for all parties.",
                        "id_": "Kami telah membangun hubungan yang kuat dengan Halim Sakti, bekerja sama dengan tim komersial dan teknis untuk mengembangkan pasar di Indonesia. Saya yakin kemitraan dan hubungan kerja sama ini akan sukses untuk semua pihak."
                    },
                    "photo": {
                        "id": 59,
                        "name": "Principal Dahniel.png",
                        "alternativeText": "",
                        "caption": "",
                        "width": 213,
                        "height": 304,
                        "formats": {
                            "thumbnail": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773989/thumbnail_Principal_Dahniel_87dac64489.png",
                                "hash": "thumbnail_Principal_Dahniel_87dac64489",
                                "mime": "image/png",
                                "name": "thumbnail_Principal Dahniel.png",
                                "path": null,
                                "size": 44.67,
                                "width": 109,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_Principal_Dahniel_87dac64489",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "Principal_Dahniel_87dac64489",
                        "ext": ".png",
                        "mime": "image/png",
                        "size": 152.11,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773988/Principal_Dahniel_87dac64489.png",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "Principal_Dahniel_87dac64489",
                            "resource_type": "image"
                        },
                        "created_at": "2021-04-18T19:26:31.319Z",
                        "updated_at": "2021-04-18T19:26:31.375Z"
                    }
                }, {
                    "id": 4,
                    "name": "Albert Setiadi",
                    "created_at": "2021-04-18T23:46:06.176Z",
                    "updated_at": "2021-05-26T10:16:14.960Z",
                    "company": "PT Nutrifood Indonesia",
                    "position": "Procurement Manager",
                    "testimonial": {
                        "id": 26,
                        "en_": "Halim Sakti is our longtime business partner that have always given additional value  in providing things needed by our company. Excellent communication and collaboration to achieve win-win solution easily. ",
                        "id_": "Halim Sakti merupakan suatu partner bisnis kami yang sudah lama dan selalu memberikan nilai tambah dalam mendatangkan barang barang yang dibutuhkan perusahaan kami. Komunikasi yang sangat baik dan juga kolaborasi untuk mencapai win win solution dapat tercapai dengan mudah."
                    },
                    "photo": {
                        "id": 62,
                        "name": "Customer Albert.JPG",
                        "alternativeText": "",
                        "caption": "",
                        "width": 1280,
                        "height": 960,
                        "formats": {
                            "large": {
                                "ext": ".JPG",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773991/large_Customer_Albert_02b0bd6f2b.jpg",
                                "hash": "large_Customer_Albert_02b0bd6f2b",
                                "mime": "image/jpeg",
                                "name": "large_Customer Albert.JPG",
                                "path": null,
                                "size": 132.73,
                                "width": 1000,
                                "height": 750,
                                "provider_metadata": {
                                    "public_id": "large_Customer_Albert_02b0bd6f2b",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".JPG",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773993/small_Customer_Albert_02b0bd6f2b.jpg",
                                "hash": "small_Customer_Albert_02b0bd6f2b",
                                "mime": "image/jpeg",
                                "name": "small_Customer Albert.JPG",
                                "path": null,
                                "size": 46.68,
                                "width": 500,
                                "height": 375,
                                "provider_metadata": {
                                    "public_id": "small_Customer_Albert_02b0bd6f2b",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".JPG",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773992/medium_Customer_Albert_02b0bd6f2b.jpg",
                                "hash": "medium_Customer_Albert_02b0bd6f2b",
                                "mime": "image/jpeg",
                                "name": "medium_Customer Albert.JPG",
                                "path": null,
                                "size": 87.58,
                                "width": 750,
                                "height": 563,
                                "provider_metadata": {
                                    "public_id": "medium_Customer_Albert_02b0bd6f2b",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".JPG",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773990/thumbnail_Customer_Albert_02b0bd6f2b.jpg",
                                "hash": "thumbnail_Customer_Albert_02b0bd6f2b",
                                "mime": "image/jpeg",
                                "name": "thumbnail_Customer Albert.JPG",
                                "path": null,
                                "size": 10.85,
                                "width": 208,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_Customer_Albert_02b0bd6f2b",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "Customer_Albert_02b0bd6f2b",
                        "ext": ".JPG",
                        "mime": "image/jpeg",
                        "size": 178.58,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618773988/Customer_Albert_02b0bd6f2b.jpg",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "Customer_Albert_02b0bd6f2b",
                            "resource_type": "image"
                        },
                        "created_at": "2021-04-18T19:26:33.614Z",
                        "updated_at": "2021-04-18T19:26:33.641Z"
                    }
                }],
                "articles": [{
                    "id": 16,
                    "title": {
                        "id": 137,
                        "en_": "ADK STAB LA-402AF/Si for automotive applications by ADEKA Corporation",
                        "id_": "ADK STAB LA-402AF/Si for automotive applications by ADEKA Corporation"
                    },
                    "content": {
                        "id": 22,
                        "en_": "\u003cp\u003eWhen the polymer material is used outdoors, it is oxidatively deteriorated by ultraviolet rays, which causes poor appearance and reduction of physical properties. Photo-oxidation deterioration of the polymer material can be suppressed by adding a small amount of light stabilizer such as ultraviolet absorption (UVA) or hindered amine-based light stabilizer (HALS).\u003c/p\u003e\u003cp\u003eAutomotive materials are required to retain their appearance and physical characteristics for a long term, and HALS is commonly used to provide the necessary light stability. ADK STAB LA-402AF/Si is a HALS which shows significant long term weatherability for PP articles such as automotive application. The gloss and color stability of PP with ADK STAB LA-402AF are maintained for a longer period than with market reference such as LA77Y* (Graph 1 and 2).\u003c/p\u003e\u003cp\u003e*Decanedioic acid, bis(2,2,6,6-tetramethyl-4-piperidinyl) ester\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409051/bp_33d13f8916.png?488941.2000000179\"\u003e\u003c/figure\u003e\u003cp style=\"text-align:justify;\"\u003eIn addition, it is particularly suitable for automotive interior applications made of thermoplastic elastomers such as TPV, showing excellent performance with respect to NOx discoloration and fogging resistance, which are both considered essential for these applications. (Graph 3).\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409248/bp2_ff5a8a4a76.png\"\u003e\u003c/figure\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409291/bp3_c19c150043.png\"\u003e\u003c/figure\u003e\u003cp style=\"text-align:justify;\"\u003eADK STAB LA-402AF showed better blooming-out resistance compared to LA-77Y and equal to formulation w/o HALS(Graph 4). In addition, ADK STAB LA-402AF shows excellent fogging behavior in formulations of automotive application submitted to a DIN 75201 testing procedure. This is due to its high compatibility with PP/TPE polymers.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003e\u0026nbsp;\u003c/p\u003e\u003cfigure class=\"image image-style-align-left\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1626410209/bp5_ae1e6acd52.png\"\u003e\u003c/figure\u003e",
                        "id_": "\u003cp\u003eWhen the polymer material is used outdoors, it is oxidatively deteriorated by ultraviolet rays, which causes poor appearance and reduction of physical properties. Photo-oxidation deterioration of the polymer material can be suppressed by adding a small amount of light stabilizer such as ultraviolet absorption (UVA) or hindered amine-based light stabilizer (HALS).\u003c/p\u003e\u003cp\u003eAutomotive materials are required to retain their appearance and physical characteristics for a long term, and HALS is commonly used to provide the necessary light stability. ADK STAB LA-402AF/Si is a HALS which shows significant long term weatherability for PP articles such as automotive application. The gloss and color stability of PP with ADK STAB LA-402AF are maintained for a longer period than with market reference such as LA77Y* (Graph 1 and 2).\u003c/p\u003e\u003cp\u003e*Decanedioic acid, bis(2,2,6,6-tetramethyl-4-piperidinyl) ester\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409051/bp_33d13f8916.png?488941.2000000179\"\u003e\u003c/figure\u003e\u003cp style=\"text-align:justify;\"\u003eIn addition, it is particularly suitable for automotive interior applications made of thermoplastic elastomers such as TPV, showing excellent performance with respect to NOx discoloration and fogging resistance, which are both considered essential for these applications. (Graph 3).\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409248/bp2_ff5a8a4a76.png\"\u003e\u003c/figure\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409291/bp3_c19c150043.png\"\u003e\u003c/figure\u003e\u003cp style=\"text-align:justify;\"\u003eADK STAB LA-402AF showed better blooming-out resistance compared to LA-77Y and equal to formulation w/o HALS(Graph 4). In addition, ADK STAB LA-402AF shows excellent fogging behavior in formulations of automotive application submitted to a DIN 75201 testing procedure. This is due to its high compatibility with PP/TPE polymers.\u003c/p\u003e\u003cp style=\"text-align:justify;\"\u003e\u0026nbsp;\u003c/p\u003e\u003cfigure class=\"image image-style-align-left\"\u003e\u003cimg src=\"https://res.cloudinary.com/dfqcv08gp/image/upload/v1626410209/bp5_ae1e6acd52.png\"\u003e\u003c/figure\u003e"
                    },
                    "excerpt": {
                        "id": 28,
                        "en_": "When the polymer material is used outdoors, it is oxidatively deteriorated by ultraviolet rays, which causes poor appearance and reduction of physical properties.",
                        "id_": "When the polymer material is used outdoors, it is oxidatively deteriorated by ultraviolet rays, which causes poor appearance and reduction of physical properties."
                    },
                    "views": "1159",
                    "published_at": "2021-07-16T04:39:25.661Z",
                    "created_at": "2021-07-16T04:38:47.505Z",
                    "updated_at": "2022-07-28T08:56:21.312Z",
                    "slug": "adk-stab-la-402afsi-for-automotive-applications-by-adeka-corporation",
                    "article_category": null,
                    "cover": {
                        "id": 97,
                        "name": "bp.PNG",
                        "alternativeText": "",
                        "caption": "",
                        "width": 1000,
                        "height": 655,
                        "formats": {
                            "small": {
                                "ext": ".PNG",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409051/small_bp_33d13f8916.png",
                                "hash": "small_bp_33d13f8916",
                                "mime": "image/png",
                                "name": "small_bp.PNG",
                                "path": null,
                                "size": 55.13,
                                "width": 500,
                                "height": 328,
                                "provider_metadata": {
                                    "public_id": "small_bp_33d13f8916",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".PNG",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409051/medium_bp_33d13f8916.png",
                                "hash": "medium_bp_33d13f8916",
                                "mime": "image/png",
                                "name": "medium_bp.PNG",
                                "path": null,
                                "size": 97.74,
                                "width": 750,
                                "height": 491,
                                "provider_metadata": {
                                    "public_id": "medium_bp_33d13f8916",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".PNG",
                                "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409050/thumbnail_bp_33d13f8916.png",
                                "hash": "thumbnail_bp_33d13f8916",
                                "mime": "image/png",
                                "name": "thumbnail_bp.PNG",
                                "path": null,
                                "size": 21.05,
                                "width": 238,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_bp_33d13f8916",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "bp_33d13f8916",
                        "ext": ".PNG",
                        "mime": "image/png",
                        "size": 107.76,
                        "url": "https://res.cloudinary.com/dfqcv08gp/image/upload/v1626409050/bp_33d13f8916.png",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "bp_33d13f8916",
                            "resource_type": "image"
                        },
                        "created_at": "2021-07-16T04:17:32.125Z",
                        "updated_at": "2021-07-16T04:17:32.147Z"
                    },
                    "article_categories": [{
                        "id": 1,
                        "category": "Food",
                        "article": 2,
                        "created_at": "2020-12-30T04:59:45.142Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "food"
                    }, {
                        "id": 2,
                        "category": "Non-food",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:06.564Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "non-food"
                    }, {
                        "id": 3,
                        "category": "Event",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:42.727Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "event"
                    }, {
                        "id": 4,
                        "category": "General",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:59.103Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "general"
                    }]
                }, {
                    "id": 15,
                    "title": {
                        "id": 104,
                        "en_": "Prepared-Drinking Challenges and Opportunities Post Pandemic Covid-19",
                        "id_": "Industri Minuman Siap Saji : Tantangan dan Kesempatan Pasca Pandemi Covid-19"
                    },
                    "content": {
                        "id": 9,
                        "en_": "\u003cp\u003eThis sector covers various beverage categories such as Bottled Drinking Water (RTD- bottled and cup), ready-to-serve tea, juice and fruit juice drinks, carbonated drinks, coffee drinks, beverages sport and isotonic as well as milk-based drinks, and all of this is solely to answer the diverse needs of Indonesian consumers, both in terms of beverage product preferences, product needs, habits and of course the ability to shop for ready-to-drink beverage products. These categories are quite dynamic in the future because consumer preferences and abilities will continue to evolve.\u003c/p\u003e\u003cp\u003eOne thing that can be proud of is that ready-to-eat beverage products produced in Indonesia have relatively become the host in their own country. It can be seen how the beverage products offered by domestic producers, whether local brands or foreign producers that issue local variant products, are available in various minimarkets, supermarkets, hypermarkets as well as in stalls and grocery stores.\u003c/p\u003e\u003cp\u003eIt can be said that the ready-to-serve beverage industry has a fairly democratic character where business actors from various backgrounds and abilities can compete in order to gain market or consumer acceptance. Data from the Central Statistics Agency (BPS) in 2015 stated that there were more than 47000 small and micro-scale business actors in the beverage industry sector. Meanwhile, medium and large companies are in the range of 300 companies.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eChallenges of the Beverage\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eIndustry The ready-to-serve beverage industry relies heavily on the existence of hotels, restaurants, catering, and community gathering activities, as potential markets for its products. \u0026nbsp;The Covid-19 pandemic has hit the ready-to-serve beverage industry suddenly since March 2020, so that the foundations of the ready-to-drink industry are in ruins. In general, there are two major impacts felt by the ready-to-serve beverage industry due to the Covid-19 pandemic. First is the marketing channel (market channel) of ready-to-serve beverage products and the second is the product category and ready-to-drink product portfolio.\u003c/p\u003e\u003cp\u003eHistorically, traditional channels or public sales such as stalls and grocery stores have always dominated the marketing channels for ready-to-serve beverage products in Indonesia. This is because the existence of stalls and grocery stores is very massive and spread out, so it is natural that the sales contribution of ready-to-drink products through this channel can reach 60-70 percent of the total sales volume.\u003c/p\u003e\u003cp\u003eThe sales growth of ready-to-serve beverage products through modern market channels such as minimarkets, convenience stores, supermarkets, hypermarkets, and others has indeed grown quite rapidly in recent years. Based on Nielsen's data for 2019, sales growth of ready-to-serve drinks in the modern market reached approximately 6%, while growth in traditional channels was negative at around 2-3%.\u003c/p\u003e\u003cp\u003eHowever, the Covid-19 pandemic changed the existing order. With restrictions on human movement and concerns about health and issues hygiene, consumers are turning away. Channels of commercial trade (e-commerce), which previously has not been play a big role, this time a lot of the choice of consumers to for shop needs their daily also needs food and drink ready.\u003c/p\u003e\u003cp\u003eEven though in the early of days the pandemic, modern channels such as minimarkets experienced a decline in sales, but over time, consumers started shopping again at minimarkets, mainly due to the proximity to the location of residence and the level of trust that was applied as well as the health protocol in the minimarket. The biggest challenge is traditional canals such as grocery stores, which have experienced a significant decline in turnover.\u003c/p\u003e\u003cp\u003eReduced foot traffic and concerns about implementing the Health protocol are big issues for stalls and grocery stores. It is not surprising that there are several initiatives carried out by fast moving consumer goods (FCMG) and / or ready-to-drink beverage businesses aimed at supporting grocery stores to be able to implement good health protocols and of course with the hope that these grocery stores can again experience growth.\u003c/p\u003e\u003cp\u003eThe impact of the Covid-19 pandemic is not only felt in the side of community activities that have decreased significantly, but also how people or consumers shop both in terms of what they buy and also why they shop for these products. With more time spent at home, consumers of ready-to-drink beverage products also experience changes in patterns consumption.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eOpportunity for the Industry Beverage\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eReady-to-serve drinks are in not principle a primary product, so that when consumers are faced with a condition where they have to choose, ready-to-serve beverage products can easily be abandoned and replaced with other beverage products. This was seen in the early days of the pandemic when ready-to-serve single serve beverage products decreased. While on the other hand, ready-to-serve beverage products with multi serve packaging are encouraged by sales in the hope that they can be consumed together by the family while having activities at home. This is an example of the ways in which ready-to-eat beverage industry entrepreneurs ensure that the products offered are still relevant to changing consumer consumption patterns.\u003c/p\u003e\u003cp\u003eAnother thing that can be observed in relation to changes in consumption patterns is the category of ready-to-drink products selected by consumers. In general, all categories of ready-to-serve beverage products experienced a significant contraction in sales during this pandemic. But the level of contraction per category has a difference.\u003c/p\u003e\u003cp\u003eConsumer concern related to the issue of body resistance to fight the potential spread of COVID-19 has more or less affected consumption patterns of ready-to-drink beverage products. Products that are believed to have functional benefits to maintain and increase body endurance are now an option and it can also be seen how strong communication is made by manufacturers to show these functional benefits.\u003c/p\u003e\u003cp\u003eAlthough the ready-to-serve beverage industry experienced a very significant impact due to this pandemic, on the other hand, it can be seen that the resilience or resistance of the beverage industry business actors to get out of the existing conditions. Sharing efforts and creativity are taken to ensure the industry continues to operate and can grow back soon. On the other hand, the main lesson is how these changes in consumption patterns and consumer preferences have an impact in the medium and long term, even after the Covid-19 pandemic ends.\u003c/p\u003e\u003cp\u003eIt is believed that the option of remote working patterns will continue to exist and could become part of new work patterns in the future. Likewise, activities that are generally mass-gathering in the near future may not take place. This means that producers must be able to get closer to the product to consumers, not only in a distributional manner but also from the \"reason to purchase\" side.\u003c/p\u003e\u003cp\u003eAt times like this, the support of all parties, including the government, is expected to be able to help the ready-to-serve beverage industry rise from difficult conditions and even grow back. Support is mainly related to two aspects that are not all under the control of business actors, namely how to maintain consumer purchasing power and how to reduce the burden on the industry in terms mass of certainty of raw material supply and costs. Like a playing strategy, a strong \"defense\" in this case maintains consumer purchasing power and reduces the burden on producers will provide an opportunity for \"offense\" to advance and seize opportunities to rise and grow. This is the synergy that is expected to be realized so that the ready-to-serve beverage industry can continue to host in its own country. Rise up and live the fast-food industry in Indonesia.\u003c/p\u003e\u003cp\u003eSource : FOODREVIEW INDONESIA Vol XVI No. 2\u003c/p\u003e",
                        "id_": "\u003cp\u003eSektor ini mencakup berbagai kategori minuman seperti Air Minum Dalam Kemasan (AMDK – kemasan botol dan cup), the siap saji, minuman jus dan sari buah, minuman berkarbonasi, minuman kopi, minuman sport dan isotonik serta juga minuman berbasis susu, dan semua ini semata-mata guna menjawab kebutuhan konsumen Indonesia yang memang beragam, baik dari sisi preferensi produk minuman, kebutuhan produk, kebiasaan dan juga tentunya kemampuan untuk berbelanja produk minuman siap saji. Kategori-kategori tersebut sifatnya cukup dinamis ke depannya karena preferensi dan kemampuan konsumen akan terus berkembang.\u003c/p\u003e\u003cp\u003eSatu hal yang dapat dibanggakan adalah produk-produk minuman siap saji yang diproduksi di Indonesia relative sudah menjadi tuan rumah di negeri sendiri. Terlihat bagaimana produk-produk minuman yang ditawarkan oleh produsen dalam negeri, apakah merek lokal ataupun produsen asing yang mengeluarkan produk varian lokal, tersedia di berbagai minimarket, supermarket, hypermarket serta di warung-warung dan toko-toko kelontong.\u003c/p\u003e\u003cp\u003eDapat dikatakan industry minuman siap saji mempunyai karakter yang cukup demokratis dimana pelaku usaha dari berbagai latar belakang dan kemampuan dapat bersaing guna meraih penerimaan pasar atau konsumen. Data Badan Pusat Statistik (BPS) tahun 2015 menyebutkan bahwa terdapat lebih dari 47000 pelaku usaha skala kecil dan mikro di sektor industri minuman. Sedangkan perusahaan menengah dan besar berada di kisaran 300 perusahaan.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eTantangan Industri Minuman\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eIndustri minuman siap saji sangat mengandalkan keberadaan hotel, restoran, catering, serta kegiatan-kegiatan berkumpulnya masyarakat, sebagai pasarpotensial bagi produk-produknya. Pandemi Covid-19 menghantam industri minuman siap saji secara tiba-tiba sejak Maret 2020, sehingga pondasi industri minuman siap saji menjadi porak-poranda. Secara umum ada dua dampak besar yang dirasakan oleh industri minuman siap saji akibat pandemic Covid-19. Pertama adalah kanal pemasaran (market channel) produk minuman siap saji dan kedua adalah kategori produk dan portfolio produk minuman siap saji.\u003c/p\u003e\u003cp\u003eSecara historis, kanal tradisional atau penjualan umum seperti warung-warung maupun toko-toko kelontong selalu mendominasi kanal pemasaran produk minuman siap saji di Indonesia. Hal ini karena memang keberadaan warung-warung serta toko-toko kelontong sangat massif dan tersebar sehingga wajar kontribusi penjualan produk minuman siap saji melalui kanal ini bisa mencapai 60%-70% dari seluruh volume penjualan.\u003c/p\u003e\u003cp\u003ePertumbuhan penjualan produk minuman siap saji melalui kanal pasar modern seperti minimarket, convenience stores, supermarket, hypermarket, dan lainnya memang cukup pesat di beberapa tahun terakhir. Berdasarkan data Nielsen tahun 2019, pertumbuhan penjualan minuman siap saji di pasar modern mencapai kurang lebih 6%, sementara pertumbuhan di kanal tradisional malah negative di kisaran 2-3%.\u003c/p\u003e\u003cp\u003eNamun pandemic Covid-19 merubah tatanan yang ada. Dengan adanya pembatasan pergerakan manusia serta adanya kekhawatiran tentang isu Kesehatan dan hygiene, konsumen menjadi beralih. Kanal perdagangan niaga (e-commerce) yang sebelumnya belum terlalu berperan, saat ini banyak menjadi pilihan konsumen untuk berbelanja kebutuhan sehari-hari juga kebutuhan makanan dan minuman siap saji.\u003c/p\u003e\u003cp\u003eWalaupun di awal-awal masa pandemic, kanal modern seperti minimarket sempat turut mengalami penurunan penjualan, namun dengan berjalannya waktu, konsumen mulai Kembali belanja di minimarket, terutama didorong kedekatan dengan lokasi tinggal dan tingkat kepercayaan yang diterapkan serta protocol Kesehatan di minimarket tersebut. Tantangan terbesar adalah pada kanal tradisional seperti warung-warung dan toko-toko kelontong yang mengalami penurunan omset secara signifikan.\u003c/p\u003e\u003cp\u003eBerkurangnya foot traffic dan adanya kekhawatiran terhadap penerapan protokol kesehatan menjadi isu yang besar bagi warung-warung dan toko-toko kelontong. Tidak heran terlihat beberapa inisiatif yang dilakukan pelaku usaha fast moving consumer goods (FCMG) dan/atau minuman siap saji yang bertujuan mendukung toko-toko kelontong untuk bisa menerapkan protocol Kesehatan yang baik dan tentunya dengan harapan toko-toko kelontong tersebut dapat Kembali mengalami pertumbuhan.\u003c/p\u003e\u003cp\u003eDampak pandemic Covid-19 tidak hanya terasa dalam sisi aktivitas masyarakat yang sangat menurun, tetapi juga bagaimana masyarakat atau konsumen berbelanja baik dari sisi apa yang dibeli dan juga kenapa berbelanja produk-produk tersebut. Dengan semakin banyaknya waktu yang dihabiskan di rumah, konsumen produk minuman siap saji juga mengalami perubahan pola konsumsi.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eKesempatan Industri Minuman\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eMinuman siap saji secara prinsip bukan merupakan produk primer, sehingga pada saat konsumen dihadapkan dengan kondisi dimana mereka harus memilih, produk minuman siap saji dapat dengan mudah ditinggalkan dan digantikan dengan produk minuman lainnya. Ini terkihat di masa-masa awal pandemic saat produk minuman siap saji single serve (sekali konsumsi) mengalami penurunan. Sementara sebaliknya produk minuman siap saji dengan kemasan multi serve didorong penjualannya dengan harapan dapat dikonsumsi secara Bersama-sama oleh keluarga dalam kondisi harus beraktivitas di rumah. Hal tersebut adalah contoh cara yang dilakukan oleh pelaku usaha industry minuman siap saji guna memastikan bahwa produk yang ditawarkan \u0026nbsp;masih relevan dengan pola konsumsi konsumen yang berubah.\u003c/p\u003e\u003cp\u003eHal lain yang dapat dicermati terkait dengan perubahan pola konsumsi adalah kategori produk minuman siap saji yang dipilih oleh konsumen. Secara umum semua kategori produk minuman siap saji mengalami kontraksi penjualan yang cukup signifikan dalam masa pandemi ini. Namun tentunya level kontraksi per kategori mempunyai perbedaan.\u003c/p\u003e\u003cp\u003eKepedulian konsumen terkait dengan isu ketahanan tubuh untuk melawan potensi penyebaran COVID-19 sedikit banyak juga memengaruhi pola konsumsi produk minuman siap saji. Produk-produk yang dipercaya memiliki manfaat fungsional menjaga dan meningkatkan ketahanan tubuh saat ini menjadi pilihan dan terlihat pula bagaimana komunikasi yang kencang dilakukan oleh produsen untuk menampilkan manfaat fungsional tersebut.\u003c/p\u003e\u003cp\u003eWalaupun industri minuman siap saji mengalami dampak yang sangat signifikan diakibatkan pandemik ini, namun di sisi lain dapat terlihat resiliensi atau ketahanan dari para pelaku usaha industri minuman untuk keluar dari kondisi yang ada. Berbagi upaya dan kreativitas diambil guna memastikan industry tetap beroperasi dan segera bisa tumbuh Kembali. Di lain pihak pembelajaran yang utama adalah bagaimana perubahan pola konsumsi dan preferensi konsumen ini berdampak di jangka memengah dan Panjang, bahkan setelah pandemic Covid-19 ini berakhir.\u003c/p\u003e\u003cp\u003eDiyakini bahwa opsi pola kerja secara remote akan terus ada dan bisa menjadi bagian dari pola kerja yang baru di masa depan. Demkian pula kegiatan kegiatan yang sifatnya mengumpulkan massa secara secara besar dalam waktu dekat mungkin belum akan terjadi. Artinya, produsen harus bisa untuk lebih mendekatkan produk ke konsumen tidak saja secara distribusi tetapi juga dari sisi “reason to purcahase”.\u003c/p\u003e\u003cp\u003eDi saat seperti inilah dukungan semua pihak, termasuk pemerintah sangat diharapkan agar dapat membantu industry minuman siap saji bangkit dari kondisi yang sulit dan bahkan tumbuh kembali. Dukungan terutama terkait dengan dua aspek yang tidak semuanya dalam kontrol pelaku usaha yaitu bagaimana menjaga daya beli konsumen dan bagaimana mengurangi beban bagi industri, misal dari sisi kepastian pasokan bahan baku dan juga biaya. Ibarat strategi bermain, “defense” yang kuat dalam hal ini menjaga daya beli konsumen dan mengurangi beban produsen akan memberikan kesempatan bagi “offense” untuk dapat maju dan merebut peluang untuk bangkit dan tumbuh. Inilah sinergi yang diharapkan dapat direalisasikan agar industry minuman siap saji dapat terus menjadi tuan rumah di negeri sendiri. Bangkit dan jayalah industri minuman siap saji Indonesia.\u003c/p\u003e\u003cp\u003e\u0026nbsp;Source : FOODREVIEW INDONESIA Vol XVI No. 2\u003c/p\u003e"
                    },
                    "excerpt": {
                        "id": 22,
                        "en_": "This sector covers various beverage categories such as Bottled Drinking Water (RTD- bottled and cup), ready-to-serve tea, juice and fruit juice drinks, carbonated drinks",
                        "id_": "Sektor ini mencakup berbagai kategori minuman seperti Air Minum Dalam Kemasan (AMDK – kemasan botol dan cup), the siap saji, minuman jus dan sari buah, minuman berkarbonasi, "
                    },
                    "views": "866",
                    "published_at": "2021-04-18T09:48:45.503Z",
                    "created_at": "2021-04-18T09:48:43.030Z",
                    "updated_at": "2022-07-28T06:28:23.321Z",
                    "slug": "prepared-drinking-challenges-and-opportunities-post-pandemic-covid-19",
                    "article_category": null,
                    "cover": {
                        "id": 58,
                        "name": "minuman siap saji.png",
                        "alternativeText": "",
                        "caption": "",
                        "width": 669,
                        "height": 446,
                        "formats": {
                            "small": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618738387/small_minuman_siap_saji_9c720d62d6.png",
                                "hash": "small_minuman_siap_saji_9c720d62d6",
                                "mime": "image/png",
                                "name": "small_minuman siap saji.png",
                                "path": null,
                                "size": 277.63,
                                "width": 500,
                                "height": 333,
                                "provider_metadata": {
                                    "public_id": "small_minuman_siap_saji_9c720d62d6",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618738387/thumbnail_minuman_siap_saji_9c720d62d6.png",
                                "hash": "thumbnail_minuman_siap_saji_9c720d62d6",
                                "mime": "image/png",
                                "name": "thumbnail_minuman siap saji.png",
                                "path": null,
                                "size": 72.17,
                                "width": 234,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_minuman_siap_saji_9c720d62d6",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "minuman_siap_saji_9c720d62d6",
                        "ext": ".png",
                        "mime": "image/png",
                        "size": 438.41,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618738386/minuman_siap_saji_9c720d62d6.png",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "minuman_siap_saji_9c720d62d6",
                            "resource_type": "image"
                        },
                        "created_at": "2021-04-18T09:33:07.783Z",
                        "updated_at": "2021-04-18T09:33:07.795Z"
                    },
                    "article_categories": [{
                        "id": 1,
                        "category": "Food",
                        "article": 2,
                        "created_at": "2020-12-30T04:59:45.142Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "food"
                    }, {
                        "id": 2,
                        "category": "Non-food",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:06.564Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "non-food"
                    }, {
                        "id": 3,
                        "category": "Event",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:42.727Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "event"
                    }, {
                        "id": 4,
                        "category": "General",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:59.103Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "general"
                    }]
                }, {
                    "id": 14,
                    "title": {
                        "id": 103,
                        "en_": "Protein Bar Product Trends and Development ",
                        "id_": "Tren \u0026 Perkembangan Produk Bar Protein"
                    },
                    "content": {
                        "id": 8,
                        "en_": "\u003cp\u003eThe global market for snacks according to Mintel Market Data (December,2020) shows an increasing positive trend with a value of 174 billion US dollars in 2019 and has an average annual growth rate (CAGR) of 3,9% until 2023. At the volume level, China occupies the first rank of sales of snack food products, followed by the United States, India, Japan and Mexico.\u003c/p\u003e\u003cp\u003eThe consumption of snacks is currently experiencing a shift from its initial nature as a snack. Now flexible snack products can be enjoyed at any time. Expectations for snacks have also changed where as many as 54% of global consumers say snacks can support their nutritional needs. \"Not surprisingly seeing this change, awareness of a healthier life is also driving 51% of global consumers to swap their consumption of 'traditional' snacks like chocolate and confectionery for snacks that are high in protein or low in sugar,\" explained Senior Director, Product Strategic Management Glanbia Nutritional, Brad Meyers in Live Webcast-Raise the bar: Rise of high-protein bars in Asia held by Buhler and Glanbia Nutritional on January 21, 2021.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003ePerceptions of Health and protein\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eA survey conducted by Health Focus International (May, 2019), shows that consumers around the world are more concerned with reducing or staying away from products with artificial sweeteners, reducing sugar consumption, and increasing or increasing consumption. Fiber, whole grains, and protein in their current diet. The desire to consume high protein products has also continued to increase during the period 2005-2019.\u003c/p\u003e\u003cp\u003eAs many as 41% of consumers want protein content in their consumption patterns. Protein is an important component because of its very broad benefits in various aspects. Protein contributes benefits to various physical aspects such as bone health, supports hair, skin and nail health. In other aspects such as mental aspects, protein is also useful to help supply nutrition to the brain and energy for mental.\u003c/p\u003e\u003cp\u003e\"With a myriad of benefits, 70% of respondents to a survey said that if snacks have a category with more protein added, they will immediately categorize the product as healthier,\" added Meyers. Specifically, protein bar snacks are also experiencing rapid growth compared to other types of bars. \"Currently, bars are the preferred form of snack food because of their characteristics which have a stable shelf life, are flexible for consumption and snacks with high protein content,\" continued Meyers.\u003c/p\u003e\u003cp\u003eProtein bars grew by 37% of total bar products in the United States market. The level of protein content in bar products in America is divided into three segmentation categories, namely at levels less than 10%, 10-19%, and more than 20%. Bar products have the fastest growth with a content of more than 10%.\u003c/p\u003e\u003cp\u003eIn Asia Pacific, consumption of high-protein bars is no less attractive than the United States. Nearly 1/3 of the snacks released in the Asia Pacific region last year had characteristics with high protein / additive claims. Mintel's data also show that apart from add / high protein, another claim that Asia Pacific consumers are passionate about is vegan, with added / high fiber, low / reduced sugar, as well as functional claims for digestive health.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eProtein bar product formulation considerations\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eDesigning a high protein bar product formulation is both challenging and considerate. Research Manager, Asia Pacific Glanbia Nutritional, He Xiayou, on the same occasion said that to create a good bar, it is necessary to create a good bar, a balance is needed in all related aspects. These aspects are the taste which includes the level of hardness, cut ease, mouthfeel, moisture, crunchiness, flavour to the type of bar product.\u003c/p\u003e\u003cp\u003eAnother aspect is nutrition which includes components of protein, fat, syrup, fiber, coatings, to vitamins and minerals. Do not forget, the next aspect is the shelf life which includes the browning process to water activities. \"The most important and basic is knowing consumer preferences for the desired bar product. After that, it is only formulated with a balanced level, so that a final product is obtained that fulfil all the desired aspects, \"said Xiayou. Each ingredient or ingredient used will have its own properties, including protein, therefore understanding material knowledge is also very important because it affects the profile of the final product to be produced\u003cbr\u003e\u0026nbsp;\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dg30frxxf/image/upload/v1618736874/bar_protein_2_5d5a3c8534.png\"\u003e\u003c/figure\u003e\u003cp\u003eSource : FoodReview Indonesia Vol XVI\u003c/p\u003e",
                        "id_": "\u003cp\u003ePasar global untuk makanan \u0026nbsp;ringan (snack) menurut Data Pasar Mintel (Desember,2020) menunjukkan tren positif yang meningkat dengan nilai 174 miliar dollar AS pada 2019 serta memiliki tingkat pertumbuhan tahunan rata-rata (CAGR) sebesar 3,9% hingga 2023 mendatang. Di tingkat volume, Tiongkok menduduki tingkat pertama penjualan produk makanan ringan yang disusul dengan Amerika Serikat, India, Jepang, dan Meksiko.\u003c/p\u003e\u003cp\u003eKonsumsi makanan ringan saat ini juga mengalami pergeseran dari fitrah awalnya sebagai makanan selingan. Kini produk makanan ringan menjadi fleksibel dapat dinikmati kapan pun. Ekspektasi terhadap makanan ringan juga mengalami perubahan dimana sebanyak 54% konsumen global mengatakan makanan ringan dapat membantu kebutuhan gizi yang diperlukan. “Tidak mengejutkan melihat perubahan ini, kesadaran akan hidup yang lebih sehat juga mendorong 51% konsumen global menukar konsumsi makanan ringan ‘tradisional’ mereka seperti cokelat dan konfeksionari dengan makanan ringan yang memiliki kandungan tinggi protein atau rendah gula,” jelas Senior Director, Product Strategic Management Glanbia Nutritionals, Brad Meyers dalam Live Webcast-Raise the bar : Rise of high-protein bars in Asia yang diselenggarakan oleh Buhler dan Glanbia Nutritionals pada 21 Januari 2021 lalu.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003ePersepsi Kesehatan dan Protein\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eSebuah survei yang dilakukan oleh Health Focus International (Mei, 2019), menunjukkan bahwa konsumen (pembeli produk) di seluruh dunia lebih mementingkan proses pengurangan atau menjauhi produk-produk dengan penggunaan pemanis buatan, mengurangi konsumsi gula, dan menambah atau memperbanyak konsumsi serat, biji-bijian utuh, serta protein dalam pola konsumsi mereka saat ini. Keinginan untuk mengkonsumsi produk tinggi protein ini juga terus meningkat selama periode tahun 2005-2019.\u003c/p\u003e\u003cp\u003eSebanyak 41% konsumen menginginkan ada kandungan protein dalam pola konsumsi mereka. Protein menjadi komponen yang penting karena manfaatnya yang sangat luas pada berbagai aspek. Protein menyumbang manfaat pada berbagai aspek fisik seperti Kesehatan tulang, mendukung kesehatan rambut, kulit dan kuku. Di aspek lain seperti aspek mental, protein juga bermanfaat untuk membantu menyuplai gizi pada otak dan energi untuk mental.\u003c/p\u003e\u003cp\u003e“Dengan segudang manfaat tersebut, 70% responden pada suatu survey mengatakan bahwa jika makanan ringan memiliki kategori dengan penambahan protein lebih banyak, maka mereka akan segera mengategorikan produk terseut sebagai produk yang lebih menyehatkan,” tambah Meyers. Secara spesifik, makanan ringan berupa bar protein juga mengalami pertumbuhan yang cepat dibandingkan dengan jenis bar lainnya. “Saat ini, bar merupakan bentuk makanan ringan yang sangat dipilih karena karakteristiknya yang memiliki masa simpan stabil, fleksibel untuk dikonsumsi serta makanan ringan dengan kandungan tinggi protein,” lanjut Meyers.\u003c/p\u003e\u003cp\u003eBar protein tumbuh sebesar 37% dari total produk bar di pasar Amerika Serikat. Tingkat kandungan protein pada produk bar di Amerika terbagi menjadi tiga kategori segmentasi yakni di tingkat kurang dari 10%, 10-19%, serta lebih dari 20%. Pertumbuhan paling cepat dimiliki oleh produk bar dengan kandungan lebih dari 10%.\u003c/p\u003e\u003cp\u003eDi Asia Pasifik, konsumsi bar tinggi protein ini juga tidak kalah menariknya dengan Amerika Serikat. Hampir 1/3 dari makanan ringan yang dirilis di wilayah Asia Pasifik tahun lalu, memiliki karakteristik dengan klaim penambahan/tinggi protein. Data Mintel juga menunjukkan bahwa selain penambahan/tinggi protein, klaim lain yang diminati oleh konsumen Asia Pasifik adalah vegan, dengan penambahan/tinggi serat, rendah/pengurangan gula, serta klaim fungsional untuk Kesehatan pencernaan.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003ePertimbangan Formulasi Produk Bar Protein\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eMerancang formulasi produk bar tinggi protein merupakan pekerjaan yang menantang sekaligus penuh dengan pertimbangan. Research Manager, Asia Pasific Glanbia Nutritionals, He Xiayou dalam kesempatan yang sama menuturkan bahwa untuk membuat sebuah bar yang baik diperlukan keseimbangan di seluruh aspek terkait. Aspek tersebut adalah cita rasa yang meliputi tingkat kekerasan, kemudahan dipotong, mouthfeel, kelembapan, kerenyahan, flavor hingga tipe produk bar.\u003c/p\u003e\u003cp\u003eAspek lainnya yakni zat gizi di mana termasuk komponen protein, lemak, sirup, serat, pelapis, hingga vitamin dan mineral. Tidak lupa, aspek berikutnya yakni masa simpan yang meliputi proses pencokelatan hingga aktivitas air. “Paling penting dan mendasar adalah mengetahui preferensi konsumen terhadap produk bar yang diinginkan. Setelah itu, baru diformulasikan dengan tingkat keseimbangan, sesuai sehingga didapatkan produk akhir yang memenuhi seluruh aspek yang diinginkan,” tutur Xiayou.\u003c/p\u003e\u003cp\u003eSetiap bahan atau ingridien yang dipakai akan memiliki sifatnya masing-masing, pun termasuk protein, untuk itu pemahaman akan pengetahuan bahan juga sangat penting karena mempengaruhi profil dari produk akhir yang akan diproduksi.\u0026nbsp;\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dg30frxxf/image/upload/v1618736874/bar_protein_2_5d5a3c8534.png\"\u003e\u003c/figure\u003e\u003cp\u003eSource : FoodReview Indonesia Vol XVI\u003c/p\u003e"
                    },
                    "excerpt": {
                        "id": 21,
                        "en_": "The global market for snacks according to Mintel Market Data (December,2020) shows an increasing positive trend with a value of 174 billion US dollars in 2019 ",
                        "id_": "Pasar global untuk makanan  ringan (snack) menurut Data Pasar Mintel (Desember,2020) menunjukkan tren positif yang meningkat dengan nilai 174 miliar dollar AS pada 2019"
                    },
                    "views": "545",
                    "published_at": "2021-04-18T09:27:09.036Z",
                    "created_at": "2021-04-18T09:11:39.201Z",
                    "updated_at": "2022-07-28T06:28:23.372Z",
                    "slug": "protein-bar-product-trends-and-development",
                    "article_category": null,
                    "cover": {
                        "id": 57,
                        "name": "bar protein.png",
                        "alternativeText": "",
                        "caption": "",
                        "width": 715,
                        "height": 532,
                        "formats": {
                            "small": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618737085/small_bar_protein_e071ec08fe.png",
                                "hash": "small_bar_protein_e071ec08fe",
                                "mime": "image/png",
                                "name": "small_bar protein.png",
                                "path": null,
                                "size": 197.07,
                                "width": 500,
                                "height": 372,
                                "provider_metadata": {
                                    "public_id": "small_bar_protein_e071ec08fe",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618737085/thumbnail_bar_protein_e071ec08fe.png",
                                "hash": "thumbnail_bar_protein_e071ec08fe",
                                "mime": "image/png",
                                "name": "thumbnail_bar protein.png",
                                "path": null,
                                "size": 43.23,
                                "width": 210,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_bar_protein_e071ec08fe",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "bar_protein_e071ec08fe",
                        "ext": ".png",
                        "mime": "image/png",
                        "size": 347.97,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618737084/bar_protein_e071ec08fe.png",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "bar_protein_e071ec08fe",
                            "resource_type": "image"
                        },
                        "created_at": "2021-04-18T09:11:26.174Z",
                        "updated_at": "2021-04-18T09:11:26.211Z"
                    },
                    "article_categories": [{
                        "id": 1,
                        "category": "Food",
                        "article": 2,
                        "created_at": "2020-12-30T04:59:45.142Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "food"
                    }, {
                        "id": 2,
                        "category": "Non-food",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:06.564Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "non-food"
                    }, {
                        "id": 3,
                        "category": "Event",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:42.727Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "event"
                    }, {
                        "id": 4,
                        "category": "General",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:59.103Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "general"
                    }]
                }, {
                    "id": 13,
                    "title": {
                        "id": 102,
                        "en_": "SPRAY FAT MP-3 by Riken Vitamin",
                        "id_": "SPRAY FAT MP-3 by Riken Vitamin"
                    },
                    "content": {
                        "id": 7,
                        "en_": "\u003cp\u003eFried foods today are so common, and it all comes down to the visual, texture, and sensory experience when differentiating quality fried foods.\u003c/p\u003e\u003cp\u003eThe concept of covering a basic food product with some sort of coating before cooking has been around for a long period of Time. A quality coating plays an important role in maximising product yields, while delivering flavour as well as textural and visual differences.\u003c/p\u003e\u003cp\u003eConsumers are more demanding than ever, so getting to market with the perfect coating system that provides the right texture, appearance and eating quality at the right price is key. Consumers need for convenience and the rise in high quality food service products push those demands further.\u003c/p\u003e\u003cp\u003eCoatings provide a variety of new flavors, texture, appearance, and mouthfeel to foods that might be good on their own, but with the addition of a little something extra, become great. A well-chosen breading, batter, or coating can add just the right touch to make a food novel, memorable, and enticing enough to become a favorite “turn to” for consumers\u003cbr\u003eAs well as improving texture and taste, the use of deep‐fried coatings improves appearance and shelf‐life.\u003c/p\u003e\u003cp\u003eThe loss of crispness is typically due to adsorption of moisture from the atmosphere or water mass transfer from the internal components\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eRiken Vitamin’s Spratfat MP-3 will help you overcome the challenges in deep fried products:\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eControl moisture through the frying process to achieve the perfect texture\u003c/li\u003e\u003cli\u003eCreate an improved crispness for longer time\u003c/li\u003e\u003c/ul\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dg30frxxf/image/upload/v1618654542/spray_fat_mp_3_e66c205799.png\"\u003e\u003c/figure\u003e\u003cp\u003e\u003cstrong\u003eTexture Analysis of Batter Bits\u003c/strong\u003e\u003c/p\u003e\u003cp\u003eWhen you break a batter bit by a texture analyser, having a higher peak \u0026amp; bigger drop explains the nice crunchy texture.\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dg30frxxf/image/upload/v1618654607/texture_analysis_34d09157e0.png\"\u003e\u003c/figure\u003e\u003cp\u003eExplanation of the graph:\u003c/p\u003e\u003cul\u003e\u003cli\u003eMP-3 initial: High peak and big drop\u003c/li\u003e\u003cli\u003eMP-3 5h: Peak height lowered, but still having a big drop\u003c/li\u003e\u003cli\u003eBlank initial: Medium height peak and medium drop\u003c/li\u003e\u003cli\u003eBlank 5h: Peak height lowered, and there is no drop\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eIf there is no or not enough drop, the texture is soggy or chewy.\u0026nbsp;\u003cbr\u003e\u0026nbsp;\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dg30frxxf/image/upload/v1618654715/spray_fat_mp_3_2_71e793fff7.png\"\u003e\u003c/figure\u003e",
                        "id_": "\u003cp\u003eMakanan yang digoreng saat ini sangat umum di masyarakat. Kualitas makanan yang digoreng bergantung pada visual, tekstur, dan sensori. Penurunan kerenyahan pada produk makanan yang digoreng dapat terjadi karena penyerapan uap air dari lingkungan atau perpindahan air dari produk ke coating produk tersebut.\u003c/p\u003e\u003cp\u003ePrinsip pemberian coating sebelum proses pemasakan sudah ada sejak lama. Proses coating memiliki peran penting dalam memaksimalkan yield produk, serta mempengaruhi pelepasan rasa (flavor), tekstur dan penampilan visual. Coating yang berkualitas dapat membuat rasa, tekstur, penampilan, serta mouthfeel pada makanan menjadi lebih baik. Pemilihan adonan, breading, ataupun coating yang tepat dapat membuat makanan yang unik, menggugah selera dan akan selalu menjadi favorit konsumen serta memiliki masa penyimpanan (shelf life) produk yang lebih baik.\u003c/p\u003e\u003cp\u003eSaat ini, tingkat permintaan konsumen terhadap makanan yang digoreng meningkat dibandingkan dengan sebelumnya. Untuk dapat masuk ke market coating, diperlukan sebuah produk dengan sistem coating yang dapat menyediakan tekstur dan penampilan yang baik. Dilihat dari trend yang sudah ada, permintaan konsumen untuk makanan praktis dan produk food service yang digoreng namun berkualitas akan semakin meningkat.\u003c/p\u003e\u003cp\u003e\u003cstrong\u003eRiken Vitamin's Spray Fat MP-3 akan membantu Anda mengatasi tantangan dalam produk yang digoreng :\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eMengkontrol kelembapan saat proses penggorengan untuk mendapatkan tekstur yang sempurna\u003c/li\u003e\u003cli\u003eMempertahankan kerenyahan untuk waktu yang lebih lama\u003c/li\u003e\u003c/ul\u003e\u003cp\u003e\u003cstrong\u003eRiken Vitamin's Spray Fat MP-3 :\u003c/strong\u003e\u003c/p\u003e\u003cul\u003e\u003cli\u003eLemak dengan titik leleh tinggi berbentuk bubuk halus\u003c/li\u003e\u003cli\u003eMeningkatkan kerenyahan dan firmness \u0026nbsp;dari batter coating\u003c/li\u003e\u003cli\u003eMempertahankan tekstur agar seperti tekstur baru digoreng\u003c/li\u003e\u003c/ul\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dg30frxxf/image/upload/v1618654542/spray_fat_mp_3_e66c205799.png\"\u003e\u003c/figure\u003e\u003cp\u003e\u003cstrong\u003eAnalisa Tekstur dari Batter menggunakan Texture Analyzer :\u003c/strong\u003e\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dg30frxxf/image/upload/v1618654607/texture_analysis_34d09157e0.png\"\u003e\u003c/figure\u003e\u003cp\u003eSaat dilakukan analisa batter menggunakan texture analyzer, dapat dilihat produk yang memiliki puncak yang lebih tinggi dan drop yang lebih besar menunjukkan tekstur renyah yang enak.\u003cbr\u003ePenjelasan grafik:\u003c/p\u003e\u003cul\u003e\u003cli\u003eMP-3 awal : Puncak yang tinggi dan penurunan yang besar\u003c/li\u003e\u003cli\u003eMP-3 5h : Puncak agak sedikit menurun tetapi masih mengalami penurunan yang cukup besar\u003c/li\u003e\u003cli\u003eBlanko awal : Puncak cukup tinggi dan penurunan sedang\u003c/li\u003e\u003cli\u003eBlanko 5h : Puncak menurun dan tidak ada penurunan\u003c/li\u003e\u003c/ul\u003e\u003cp\u003eJika tidak terjadi \u0026nbsp;penurunan / penurun yang terjadi kecil dapat disimpulkan tekstur batter lembek atau kenyal.\u003c/p\u003e\u003cfigure class=\"image\"\u003e\u003cimg src=\"https://res.cloudinary.com/dg30frxxf/image/upload/v1618654715/spray_fat_mp_3_2_71e793fff7.png\"\u003e\u003c/figure\u003e\u003cp\u003e\u003cbr\u003e\u0026nbsp;\u003c/p\u003e"
                    },
                    "excerpt": {
                        "id": 20,
                        "en_": "Fried foods today are so common, and it all comes down to the visual, texture, and sensory experience when differentiating quality fried foods. ",
                        "id_": "Makanan yang digoreng saat ini sangat umum di masyarakat. Kualitas makanan yang digoreng bergantung pada visual, tekstur, dan sensori."
                    },
                    "views": "457",
                    "published_at": "2021-04-17T10:35:31.249Z",
                    "created_at": "2021-04-17T10:27:11.196Z",
                    "updated_at": "2022-07-28T06:23:00.342Z",
                    "slug": "spray-fat-mp-3-by-riken-vitamin",
                    "article_category": null,
                    "cover": {
                        "id": 53,
                        "name": "spray-fat-mp-3.png",
                        "alternativeText": "",
                        "caption": "",
                        "width": 1180,
                        "height": 781,
                        "formats": {
                            "large": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618654544/large_spray_fat_mp_3_e66c205799.png",
                                "hash": "large_spray_fat_mp_3_e66c205799",
                                "mime": "image/png",
                                "name": "large_spray-fat-mp-3.png",
                                "path": null,
                                "size": 228.84,
                                "width": 1000,
                                "height": 662,
                                "provider_metadata": {
                                    "public_id": "large_spray_fat_mp_3_e66c205799",
                                    "resource_type": "image"
                                }
                            },
                            "small": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618654545/small_spray_fat_mp_3_e66c205799.png",
                                "hash": "small_spray_fat_mp_3_e66c205799",
                                "mime": "image/png",
                                "name": "small_spray-fat-mp-3.png",
                                "path": null,
                                "size": 92.07,
                                "width": 500,
                                "height": 331,
                                "provider_metadata": {
                                    "public_id": "small_spray_fat_mp_3_e66c205799",
                                    "resource_type": "image"
                                }
                            },
                            "medium": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618654545/medium_spray_fat_mp_3_e66c205799.png",
                                "hash": "medium_spray_fat_mp_3_e66c205799",
                                "mime": "image/png",
                                "name": "medium_spray-fat-mp-3.png",
                                "path": null,
                                "size": 157.85,
                                "width": 750,
                                "height": 496,
                                "provider_metadata": {
                                    "public_id": "medium_spray_fat_mp_3_e66c205799",
                                    "resource_type": "image"
                                }
                            },
                            "thumbnail": {
                                "ext": ".png",
                                "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618654543/thumbnail_spray_fat_mp_3_e66c205799.png",
                                "hash": "thumbnail_spray_fat_mp_3_e66c205799",
                                "mime": "image/png",
                                "name": "thumbnail_spray-fat-mp-3.png",
                                "path": null,
                                "size": 29.07,
                                "width": 236,
                                "height": 156,
                                "provider_metadata": {
                                    "public_id": "thumbnail_spray_fat_mp_3_e66c205799",
                                    "resource_type": "image"
                                }
                            }
                        },
                        "hash": "spray_fat_mp_3_e66c205799",
                        "ext": ".png",
                        "mime": "image/png",
                        "size": 58.79,
                        "url": "https://res.cloudinary.com/dg30frxxf/image/upload/v1618654542/spray_fat_mp_3_e66c205799.png",
                        "previewUrl": null,
                        "provider": "cloudinary",
                        "provider_metadata": {
                            "public_id": "spray_fat_mp_3_e66c205799",
                            "resource_type": "image"
                        },
                        "created_at": "2021-04-17T10:15:45.869Z",
                        "updated_at": "2021-04-17T10:15:45.900Z"
                    },
                    "article_categories": [{
                        "id": 1,
                        "category": "Food",
                        "article": 2,
                        "created_at": "2020-12-30T04:59:45.142Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "food"
                    }, {
                        "id": 2,
                        "category": "Non-food",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:06.564Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "non-food"
                    }, {
                        "id": 3,
                        "category": "Event",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:42.727Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "event"
                    }, {
                        "id": 4,
                        "category": "General",
                        "article": 2,
                        "created_at": "2020-12-30T05:03:59.103Z",
                        "updated_at": "2021-01-20T12:51:33.113Z",
                        "slug": "general"
                    }]
                }],
                "__lang": "en",
                "__namespaces": {
                    "common": {
                        "aboutSectionTitle": "Information About\u003cbr /\u003eHalim Sakti",
                        "readMore": "Continue Reading",
                        "whyMustSectionTitle": "Why Must Choose\u003cbr /\u003eHalim Sakti",
                        "productSectionTitle": "Our Product",
                        "anotherProductSectionTitle": "Another Product",
                        "testiSectionTitle": "What They Said",
                        "newsSectionTitle": "News \u0026 Info",
                        "relatedArticleTitle": "Related Article",
                        "downloadBrochure": "Download E-Brochure",
                        "contactSectionTitle": "Contact Us",
                        "formSection": {
                            "name": "Name",
                            "email": "Email",
                            "phone": "Mobile Phone",
                            "message": "Message"
                        },
                        "menu": {
                            "company": "Company",
                            "product": "Product",
                            "news": "News",
                            "contact": "Contact"
                        },
                        "branch": {
                            "jakarta": "Jakarta Branch",
                            "medan": "Medan Branch",
                            "surabaya": "Surabaya Branch"
                        }
                    }
                }
            },
            "__N_SSG": true
        },
        "page": "/",
        "query": {},
        "buildId": "fZQ5m5YoTC_PPiSQ5fJJs",
        "runtimeConfig": {},
        "nextExport": false,
        "isFallback": false,
        "gsp": true,
        "locale": "en",
        "locales": ["en", "id"],
        "defaultLocale": "en"
    }
</script> --}}


@endsection

@section('script')
<script>
    $(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
@endsection
