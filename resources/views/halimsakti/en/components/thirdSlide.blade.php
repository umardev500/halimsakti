@section('thirdSlide')
<div class="the-slider">

    @foreach ( $news as $n)
    <div class="my-slider-item">
        <div class="my-slider-inner">
            <img class="my-slider-item-thumb" src="{{ asset('image/news'. '/' . $n->image) }}" alt="">
            <div class="my-slider-info">
                <a href="{{ route('newsdetail_en' , $n->news_nama_eng_slug ) }}" class="my-slider-link">
                    <div class="my-slider-title">{{ $n->news_nama_eng }}</div>
                    <div class="my-slider-desc">{!! $n->description_sub_eng !!}</div>

                    <button class="my-slider-button" >Read More</button>

                </a>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
