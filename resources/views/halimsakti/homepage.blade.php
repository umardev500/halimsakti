@extends('layouts.appHalim')
@section('title', '')
@section('css')
@endsection
@section('logo')
<a href="{{ route('homepage') }}">
    <img class="logo" src="{{ asset('img/logo/halim.png') }}" alt="logo" />
    <img class="logo_m" src="{{ asset('img/logo/logo.png') }}" alt="logo" />
</a>
@endsection
@section('lang')
<div class="lang-item"><a href="{{ route('homepage') }}"
    style="text-decoration: none; color:black;">ID</a>
</div>
<div class="lang-item"><a href="{{ route('homepage_en') }}"
    style="text-decoration: none; color:black;">EN</a>
</div>
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
                                            <h1 class="banner-text">{{ $slider->judul }}</h1>
                                            <p class="banner-subtext">{{ $slider->description_sub }}</p>
                                        </div>
                                        <div class="btn-wrapper"><a class="banner-cta" href="{{ route('company') }}">Baca Selengkapnya</a>
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
                            <h1 class="section-title">Informasi Tentang<br />Halim Sakti</h1>
                            <div class="row">
                                <div class="col-lg-6 left">
                                    <p>PT Halim Sakti Pratama adalah anak perusahaan dari Halim Sakti Group yang mensuplai bahan kimia khusus dan industri di Indonesia sejak tahun 1972. Terletak di Jakarta Barat, Indonesia, perusahaan...<br><a href="{{ route('company') }}">Baca Selengkapnya</a></p><img src="{{ asset('img/icon/homepage/left.jpg') }}" alt="pics" />
                                </div>
                                <div class="col-lg-6 right">
                                    <div class="about-section2_item"><img src="{{ asset('img/icon/homepage/icon1.png') }}" alt="icon1" />
                                        <p><b>Kualitas Produk</b> - Perusahaan mengutamakan kontrol yang ketat terhadap regulasi pengemasan internasional, deskripsi produk, penanganan barang berbahaya secara tepat & aman</p>
                                    </div>
                                    <div class="about-section2_item"><img src="{{ asset('img/icon/homepage/icon2.png') }}" alt="icon1" />
                                        <p><b>Penyimpanan</b> - Perusahaan memiliki gudang modern dengan pemantauan suhu ruangan, kebersihan, dan prosedur penyimpanan yang konstan diterapkan untuk produk khusus atau sensitif untuk menjaga kualitas produk-produk yang kita jual.</p>
                                    </div>
                                    <div class="about-section2_item"><img src="{{ asset('img/icon/homepage/icon3.png') }}" alt="icon1" />
                                        <p><b>Transportasi Pengiriman</b> - Perusahaan memiliki gudang modern dengan pemantauan suhu ruangan, kebersihan, dan prosedur penyimpanan yang konstan diterapkan untuk produk khusus atau sensitif untuk menjaga kualitas produk-produk yang kita jual.</p>
                                    </div>
                                    <div class="about-section2_item"><img src="{{ asset('img/icon/homepage/icon3.png') }}" alt="icon1" />
                                        <p><b>Sumber Daya Manusia</b> - Perusahaan memiliki sumber daya manusia yang kredibel dan berkualitas baik dari tim marketing , tim akuntansi and admin, tim logistik dan operasional, dan tim IT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="why-must">
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-md-6 left">
                                    <h1 class="section-title">Kenapa Harus Memilih<br />Halim Sakti</h1>
                                    <div class="card-slider">
                                        <div class="animate__animated animate__fadeIn">
                                            <p>Pabrik memproduksi Color Masterbatch, Calcium carbonate Masterbatch, AND senyawa, senyawa TPR dan senyawa plastik</p>
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
                                        <div class="right-wrap" style="background:url({{ asset('img/icon/homepage/right.jpg') }}) no-repeat center center / cover"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product">
                        <div class="wrapper">
                            <h1 class="section-title">Produk Lainnya</h1>
                            <div class="product-list">
                                @foreach($product as $p)
                                <a href="{{route('productdetail', $p->product_slug ) }}" style="text-decoration: none">
                                    <div class="product-item" style="background:url('{{ asset('image/product/'. $p->image) }}') no-repeat center center / cover">
                                        <h2>{{ $p->product_nama }}</h2>
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
                                    <div class="photo-wrap" style="background:url({{ asset('img/homepage/what-they.png') }}) no-repeat top center / cover"></div>
                                </div>
                                <div class="col-md-7 right">
                                    <h1 class="section-title">Kesan dan Pesan</h1>
                                    <p class="testi-body">Sangat sedikit organisasi pada zamannya seukuran Halim Sakti Pratama yang masih memiliki nilai-nilai inti yang dimiliki dan dijalankan keluarga seperti yang mereka lakukan ketika mereka didirikan, tetapi Halim Sakti Pratama adalah salah satunya. Visi bisnis Halim Sakti dan cara mereka beroperasi dibangun pada tingkat kualitas yang sesuai dengan nilai bisnis kami, kami beruntung memiliki Halim Sakti Pratama sebagai distributor kami. Itu membuat kami nyaman dan setelah lebih dari 20 tahun bersama, kami masih merasakan hal yang sama dengan mereka. Tim di Halim Sakti Pratama semuanya sangat berpengetahuan, sopan, dan selalu sangat cepat membantu kami saat kami membutuhkannya. Kami berharap dapat memperpanjang hubungan ini dengan Halim Sakti Pratama untuk masa yang akan datang.</p>
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
                            <h1 class="section-title">Berita &amp; Info</h1>
                        </div>
                        <div class="wrapper news-list">
                            <div class="slick-slider slider2 slick-initialized" dir="ltr">
                                <div class="prev-arrow"><img src="{{ asset('img/icon/arrow-left.jpg') }}" alt="prev" /></div>
                                <div class="slick-list" style="padding:0px 30%">
                                    <div class="slick-track" style="width:1000%;left:-200%">
                                        <div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/protein-bar.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">Protein Bar Product Trends and Development</div>
                                                            <div class="title">The global market for snacks according to Mintel Market Data (December,2020) shows an increasing positive trend with a value of 174 billion US dollars in 2019 </div><a class="rm-button" href="/article/protein-bar-product-trends-and-development">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/spray.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">SPRAY FAT MP-3 by Riken Vitamin</div>
                                                            <div class="title">Fried foods today are so common, and it all comes down to the visual, texture, and sensory experience when differentiating quality fried foods. </div><a class="rm-button" href="/article/spray-fat-mp-3-by-riken-vitamin">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="0" class="slick-slide slick-active slick-center slick-current" tabindex="-1" aria-hidden="false" style="outline:none;width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/adk-stab.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">ADK STAB LA-402AF/Si for automotive applications by ADEKA Corporation</div>
                                                            <div class="title">Ketika bahan polimer digunakan di luar ruangan, itu secara oksidatif memburuk oleh sinar ultraviolet, yang menyebabkan penampilan yang buruk dan pengurangan sifat fisik.</div><a class="rm-button" href="/article/adk-stab-la-402afsi-for-automotive-applications-by-adeka-corporation">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/prepared-drinking.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">Prepared-Drinking Challenges and Opportunities Post Pandemic Covid-19</div>
                                                            <div class="title">This sector covers various beverage categories such as Bottled Drinking Water (RTD- bottled and cup), ready-to-serve tea, juice and fruit juice drinks, carbonated drinks</div><a class="rm-button" href="/article/prepared-drinking-challenges-and-opportunities-post-pandemic-covid-19">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/protein-bar.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">Protein Bar Product Trends and Development</div>
                                                            <div class="title">The global market for snacks according to Mintel Market Data (December,2020) shows an increasing positive trend with a value of 174 billion US dollars in 2019 </div><a class="rm-button" href="/article/protein-bar-product-trends-and-development">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/spray.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">SPRAY FAT MP-3 by Riken Vitamin</div>
                                                            <div class="title">Fried foods today are so common, and it all comes down to the visual, texture, and sensory experience when differentiating quality fried foods. </div><a class="rm-button" href="/article/spray-fat-mp-3-by-riken-vitamin">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="4" tabindex="-1" class="slick-slide slick-center slick-cloned" aria-hidden="true" style="width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/adk-stab.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">ADK STAB LA-402AF/Si for automotive applications by ADEKA Corporation</div>
                                                            <div class="title">When the polymer material is used outdoors, it is oxidatively deteriorated by ultraviolet rays, which causes poor appearance and reduction of physical properties.</div><a class="rm-button" href="/article/adk-stab-la-402afsi-for-automotive-applications-by-adeka-corporation">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/prepared-drinking.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">Prepared-Drinking Challenges and Opportunities Post Pandemic Covid-19</div>
                                                            <div class="title">This sector covers various beverage categories such as Bottled Drinking Water (RTD- bottled and cup), ready-to-serve tea, juice and fruit juice drinks, carbonated drinks</div><a class="rm-button" href="/article/prepared-drinking-challenges-and-opportunities-post-pandemic-covid-19">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/protein-bar.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">Protein Bar Product Trends and Development</div>
                                                            <div class="title">The global market for snacks according to Mintel Market Data (December,2020) shows an increasing positive trend with a value of 174 billion US dollars in 2019 </div><a class="rm-button" href="/article/protein-bar-product-trends-and-development">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:10%">
                                            <div>
                                                <div class="news-item" tabindex="-1" style="width:100%;display:inline-block">
                                                    <div class="news-wrap" style="background:url({{ asset('img/news/spray.png') }}) no-repeat center center / cover">
                                                        <div class="news-text">
                                                            <div class="cat">SPRAY FAT MP-3 by Riken Vitamin</div>
                                                            <div class="title">Fried foods today are so common, and it all comes down to the visual, texture, and sensory experience when differentiating quality fried foods. </div><a class="rm-button" href="/article/spray-fat-mp-3-by-riken-vitamin">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="next-arrow"><img src="{{ asset('img/icon/arrow-right.jpg') }}" alt="next" /></div>
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
                                <div class="col-md-6 left"><img src="{{ asset('assets/brosur.png') }}" alt="brosur" /></div>
                                <div class="col-md-6 right">
                                    <div class="form-brosur">
                                        <div class="form-field"><label for="name">Name</label><input type="text" id="name" value="" required="" /></div>
                                        <div class="form-field"><label for="email">Email</label><input type="text" id="email" value="" required="" /></div>
                                        <div class="d-flex justify-content-center align-items-center" style="max-width:400px">
                                            @foreach($ebrochure as $e)
                                        <a href="{{ asset('image/pdfebrochure' . '/' . $e->link) }}" target="_blank" style="    width: 100%;
                                            background: #f2110d;
                                            border: 1px solid #fff;
                                            color: #fff;
                                            text-transform: uppercase;
                                            margin-top: 20px;
                                            padding: 10px;
                                            font-weight: 700;
                                            font-size: 20px;
                                            letter-spacing: 1px; text-decoration: none; position: relative; left: 12px; top: 12px; text-align:center;"><svg style="position: relative; right: 3px; bottom: 2px;" stroke="currentColor" fill="none"
                                            stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>Baca E-Brochure</a>
                                        @endforeach
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contact-us">
                        <div class="wrapper">
                            <h1 class="section-title">Kontak Kami</h1>
                            <div class="row">
                                <div class="col-md-5 left">
                                    <form action="{{ route('contactsave') }}" method="POST" class="form-contact">
                                        @csrf
                                        <div class="form-field"><label for="name">Nama</label><input type="text" name="name" id="name" value="" required="" /></div>
                                        <div class="form-field"><label for="email">Email</label><input type="text" name="email" id="email" value="" required="" /></div>
                                        <div class="form-field"><label for="phone">No Telp</label><input type="text" name="phone" id="phone" value="" required="" /></div>
                                        <div class="form-field"><label for="message">Pesan</label><textarea type="text" name="message" id="message" rows="4" required=""></textarea></div>
                                        <div class="form-button"><button type="submit">Kirim</button></div>
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
