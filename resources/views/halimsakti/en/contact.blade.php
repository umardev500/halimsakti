@extends('layouts.appHalimEn')
@section('title', 'Contact')
@section('css')
<link rel="stylesheet" href="{{ asset('css/halim1.css')}}" data-n-g="" />
@endsection
@section('logo')
<a href="/">
    <img class="logo" src="{{ asset('img/logo/halim.png') }}" alt="logo" />
    <img class="logo_m" src="{{ asset('img/logo/logo.png') }}" alt="logo" />
</a>
@endsection
@section('lang')
<div class="lang-item"><a href="{{ route('contact') }}" style="text-decoration: none; color:black;">ID</a></div>
<div class="lang-item"><a href="{{ route('contact_en') }}" style="text-decoration: none; color:black;">EN</a></div>
@endsection
@section('content')
<div class="content null">
    <div id="homepage">

        <div id="contact-us">
            <div class="wrapper">
                <h1 class="section-title">Contact Us</h1>
                @if(Session::has('success'))

                <div class="alert alert-success fade show" id="success-alert">

                    {{ Session::get('success') }}

                    @php

                    Session::forget('success');

                    @endphp

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                @endif
                <div class="row">
                    <div class="col-md-5 left">
                        <form action="{{ route('contactsaveeng') }}" method="POST" class="form-contact">
                            @csrf
                            <div class="form-field"><label for="name">Name</label><input type="text" name="name" id="name" value="" required="" /></div>
                            <div class="form-field"><label for="email">Email</label><input type="email" name="email" id="email" value="" required="" /></div>
                            <div class="form-field"><label for="phone">Mobile Phone</label><input type="number" name="phone" id="phone" value="" required="" /></div>
                            <div class="form-field"><label for="message">Message</label><textarea type="text" name="messagez" id="message" rows="4" required=""></textarea></div>
                            <div class="form-button"><button type="submit">Submit</button></div>
                        </form>
                    </div>
                    <div class="col-md-7 right">
                        <select name="map" id="map">
                            <option value="jakarta">Jakarta Branch</option>
                            <option value="medan">Medan Branch</option>
                            <option value="surabaya">Surabaya Branch</option>
                        </select>
                        <div class="address-detail jakarta box">
                            <div id="address-jakarta"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.555874538331!2d106.7973903!3d-6.1790569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x532d280267fa3c13!2sPT.%20Halim%20Sakti%20Pratama!5e0!3m2!1sid!2sid!4v1623870988506!5m2!1sid!2sid" width="100%" height="320" style="border:0" loading="lazy"></iframe>
                                <div class="info mt-3">
                                    <p><b>Jl. Tomang Raya No. 4 Jakarta 11430, Indonesia</b> <br /><b>Telp  :</b> (6221)
                                        5600400 - 5660708 <br /><b>Fax.  :</b> (6221) 5600390, 5667440, 5637846
                                        <br /><b>e-mail :</b> hsp@halim-sakti.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="address-detail medan box">
                            <div id="address-medan"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0238626165396!2d98.68627761405482!3d3.5819931513398235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131b36d5c9df5%3A0xe9d178ff6c784ad!2sHalim%20Sejahtera%20Cipta%20Mandiri.%20PT%20-%20Toko%20Kimia%20Medan!5e0!3m2!1sid!2sid!4v1664867220245!5m2!1sid!2sid" width="100%" height="320" style="border:0" loading="lazy"></iframe>
                                <div class="info mt-3">
                                    <p><b>Jl. Yose Rizal No. 1 EE, Medan 20214, Indonesia</b> <br /><b>Telp  :</b>
                                        (62-61) 7345292, 7345293 <br /><b>Fax.  :</b> (62-61) 7345292, 7345293
                                        <br /><b>e-mail :</b> hscm@halim-sakti.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="address-detail surabaya box">
                            <div id="address-surabaya"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5999418697497!2d112.69612441411432!3d-7.286275573633339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc1399feb9ad%3A0x641fc8caf84bd8f4!2sGedung%20Halim%20Sakti%2C%20Putat%20Gede%2C%20Kec.%20Sukomanunggal%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060189!5e0!3m2!1sid!2sid!4v1664867022360!5m2!1sid!2sid" width="100%" height="320" style="border:0" loading="lazy"></iframe>
                                <div class="info mt-3">
                                    <p><b>Gedung Halim Sakti, 6th & 7th floor, Jl. HR. Muhammad no. 41, Surabaya –
                                            60189, Indonesia</b> <br /><b>Telp  :</b> (62-31) 7388322, 7388333
                                        <br /><b>Fax.  :</b> (62-31) 7388329, 7388339 <br /><b>e-mail :</b>
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

<script>
    $(document).ready(function() {
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
@endsection

@section('script')
<script src="{{ asset('js/Swiper/swiper.js') }}"></script>
<script>
    $(document).ready(function() {
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