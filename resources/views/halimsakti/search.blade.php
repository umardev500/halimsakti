@extends('layouts.appHalim')
@section('title', 'Product')
@section('css')
@endsection
@section('script')
@endsection
@section('logo')
<a href="{{ route('homepage') }}">
    <img class="logo" src="{{ asset('img/logo/halim.png') }}" alt="logo" />
    <img class="logo_m" src="{{ asset('img/logo/logo.png') }}" alt="logo" />
</a>
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
                <h1 class="product-head">Produk Lainnya</h1>
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
                                        <h2 class="product-title">{{ $p->product_nama }}</h2>
                                        <div class="product-excerpt">{{ $p->description_sub }}</div>
                                    </div><a class="rm-button" href="{{route('productdetail', $p->product_slug ) }}">Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
