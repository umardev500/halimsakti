@section('thirdSlide')
<div class="the-slider">

    @foreach ( $news as $n)
    <div class="my-slider-item">
        <div class="my-slider-inner">
            <img class="my-slider-item-thumb" src="{{ asset('image/news'. '/' . $n->image) }}" alt="">
            <div class="my-slider-info">
                <a href="{{ route('newsdetail' , $n->news_nama_slug ) }}" class="my-slider-link">
                    <div class="my-slider-title">{{ $n->news_nama }}</div>
                    <div class="my-slider-desc">{!! $n->description_sub !!}</div>

                    <button class="my-slider-button" >Selengkapnya</button>

                </a>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
