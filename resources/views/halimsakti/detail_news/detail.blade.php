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
<div class="lang-item"><a href="{{ route('wnews') }}"
    style="text-decoration: none; color:black;">ID</a></div>
<div class="lang-item"><a href="{{ route('wnews_en') }}"
    style="text-decoration: none; color:black;">EN</a></div>
@endsection
@section('content')
            <div class="content null">
                <div id="news-detail">
                    <div class="wrapper">
                        @foreach($news as $n)
                        <h1 class="section-title">{{ $n->news_nama }}</h1>

                        <div class="row">
                            <div class="col-lg-8 left"><img src="{{ asset('image/news'. '/' . $n->image) }}" alt="Prepared-Drinking Challenges and Opportunities Post Pandemic Covid-19" class="img-fluid mb-3" />
                                <div class="news-content">
                                    {!! $n->description !!}
                                </div>
                            </div>
                            <div class="col-lg-4 right">
                                <div class="most-read">
                                    <div class="mr-head">
                                        <h3>Article terkait</h3>
                                    </div>
                                    <div class="most-read-list">
                                    @foreach($newsall as $na)
                                        <div class="most-read-item">
                                            <div class="left">
                                                <a href="{{ route('newsdetail' , $na->news_nama_slug )  }}" style="text-decoration: none;">
                                                    <h2>{{ $na->news_nama }}</h2>
                                                </a>
                                                <a href="{{ route('newsdetail' , $na->news_nama_slug )  }}" style="text-decoration: none;">
                                                    <p>{!! $na->description_sub !!}</p>
                                                </a>
                                            </div>
                                            <div class="right">
                                                <a href="{{ route('newsdetail' , $na->news_nama_slug )  }}" style="text-decoration: none;">
                                                    <div class="mr-thumb" style="background:url({{ asset('image/news'. '/' . $na->image) }}) no-repeat center center / cover"></div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                </div>
                                <div class="dl-right"><img src="/assets/brosur.png" alt="brosur" class="brosur-pic" />
                                    <div class="form-brosur">
                                        <div class="form-field"><label for="name">Name</label><input type="text" id="name" value="" required="" /></div>
                                        <div class="form-field"><label for="email">Email</label><input type="email" id="email" value="" required="" /></div><button><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg> <!-- -->Download E-Brochure</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endsection
