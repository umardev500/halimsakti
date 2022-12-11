@extends('layouts.appHalimEn')
@section('title', 'Product')
@section('css')
<link rel="stylesheet" href="{{ asset('css/halim1.css')}}" data-n-g="" />
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
    <div id="products_page">
        <div id="prd-section2">
            <div class="wrapper">
                <h1 class="product-head">Our Product</h1>
            </div>
            <div class="product-list">
                @foreach($product as $p)
                <div class="product-item">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('image/product/'. $p->image) }}" style="width: 100%;">
                            </div>
                            <div class="col-md-7">
                                <div class="product-item_right">
                                    <div style="width:100%">
                                        <h2 class="product-title">{{ $p->product_nama_eng }}</h2>
                                        <div class="product-excerpt">{{ $p->description_sub_eng }}</div>
                                    </div><a class="rm-button" href="{{route('productdetail_en', $p->product_slug ) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
@endsection
