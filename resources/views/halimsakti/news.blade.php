@extends('layouts.appHalim')
@section('title', 'News')
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
<div class="lang-item"><a href="{{ route('wnews') }}" style="text-decoration: none; color:black;">ID</a></div>
<div class="lang-item"><a href="{{ route('wnews_en') }}" style="text-decoration: none; color:black;">EN</a></div>
@endsection
@section('content')
<div class="content null">
    <div id="news-page">
        <div class="wrapper">
            <h1 class="head-title">Berita &amp; Informasi </h1>
            <div class="news-feature">
                <a href="{{ route('newsdetail' , $news1->news_nama_slug ) }}" class="div1 featured"
                    style="background:url({{ asset('image/news'. '/' . $news1->image) }}) no-repeat center center / cover; text-decoration: none;">

                    <h2>{{ $news1->news_nama }}</h2>

                    <p>{!! $news1->description_sub !!}</p>
                </a>
                @foreach($news2 as $n2)
                <a href="{{ route('newsdetail' , $n2->news_nama_slug ) }}" class="div2 featured"
                    style="background:url({{ asset('image/news'. '/' . $n2->image) }}) no-repeat center center / contain; text-decoration: none;">
                    <h2>{{ $n2->news_nama }}</h2>
                    <p>{!! $n2->description_sub !!}</p>
                </a>
                @endforeach
                @foreach($news3 as $n3)
                <a href="{{ route('newsdetail' , $n3->news_nama_slug )  }}" class="div3 featured" style="background:url({{ asset('image/news'. '/' . $n3->image) }}) no-repeat center center / contain; text-decoration: none;">
                    <h2>{{ $n3->news_nama }}</h2>
                    <p>{!! $n3->description_sub !!}</p>
                </a>
                @endforeach
            </div>
            <div class="news-section3">
                <div class="most-read">
                    <div class="mr-head">
                        <h3>Rekomendasi</h3>
                    </div>
                    <div class="most-read-list">
                        @foreach($news as $n)
                        <div class="most-read-item">
                            <div class="left">
                                <a href="{{ route('newsdetail' , $n->news_nama_slug ) }}">
                                    <h2>{{ $n->news_nama }}</h2>
                                    <p>{!! $n->description_sub !!}</p>
                                </a>
                            </div>
                            <div class="right">
                                <a href="{{ route('newsdetail' , $n->news_nama_slug ) }}">
                                <img style="width: 100%" src="{{ asset("image/news/" . $n->image) }}">
                                </a>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
                <div class="dl-right">
                    <div class="dl-wrapper"><img src="{{ asset('assets/brosur.png')}}" alt="brosur" class="brosur-pic" />
                        <form action="{{ route('ebrochuredatasave') }}" method="POST">
                            @csrf
                            <div class="form-brosur">
                                <div class="form-field"><label for="name">Nama</label><input type="text" name="name"
                                        id="name" value="" required /></div>
                                <div class="form-field"><label for="email">Email</label><input type="email" name="email"
                                        id="email" value="" required /></div>
                                @foreach($ebrochure as $e)
                                <button><svg style="position: relative; right: 3px; bottom: 2px;" stroke="currentColor"
                                        fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                        stroke-linejoin="round" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>Baca E-Brochure</button>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
