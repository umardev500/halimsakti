@extends('layouts.appHalimEn')
@section('title', 'Product')
@section('css')
@endsection
@section('logo')
<a href="{{ route('homepage_en') }}">
    <img class="logo" src="{{ asset('img/logo/halim.png') }}" alt="logo" />
    <img class="logo_m" src="{{ asset('img/logo/logo.png') }}" alt="logo" />
</a>
@endsection
@section('script')
@endsection
@section('lang')
<div class="lang-item"><a href="{{ route('wproduct') }}"
    style="text-decoration: none; color:black;">ID</a></div>
<div class="lang-item"><a href="{{ route('wproduct_en') }}"
    style="text-decoration: none; color:black;">EN</a></div>
@endsection
@section('content')
            <div class="content null">
                <div id="product-detail">
                    <div class="wrapper">
                        @foreach($product as $p)
                        <h1 class="section-title">{{ $p->product_nama_eng }}</h1>
                        <div class="img-slides">
                            <div class="slick-slider slider3 slick-initialized">
                                <div class="slick-list">
                                    <div class="slick-track" style="width:100%;left:0%">
                                        <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline:none;width:100%">
                                            <div>
                                                <div tabindex="-1" style="width:100%;display:inline-block">
                                                    <img style="width: 100%;border-bottom: 3px solid red;" src="{{ asset('image/product') . '/' . $p->image }}" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc">
                            {!! $p->description_eng !!}
                        </div>
                        <div class="another-product">
                            <div class="section2-title">Another Product</div>
                            <div class="product-list">
                                @foreach($product_all as $pall)
                                <a href="{{ route('productdetail_en', $pall->product_slug ) }}" style="text-decoration: none">
                                <div class="product-item" style="background:url('{{ asset('image/product' . '/' . $pall->image) }}') no-repeat center center / cover">
                                    <h2>{{ $pall->product_nama }}</h2>
                                </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endsection
