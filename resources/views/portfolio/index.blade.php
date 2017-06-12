@extends('layouts.main')

@section('content')

     <section class="portfolio-section">
       <div class="wrap">
        
        <!--
        <div class="portfolio-filters">
            <div class="portfolio-filter pf-active">ВСЕ</div>
            <div class="portfolio-filter">ДЛЯ КУХНИ</div>
            <div class="portfolio-filter">ДЛЯ СПАЛЬНИ</div>
            <div class="portfolio-filter">ДЛЯ ЗАЛА</div>
            <div class="portfolio-filter">ДЛЯ ОФИСА</div>
        </div>
        -->
        
        {{--
        <div class="portfolio-part">
            @foreach($photos as $photo)
                <div class="portfolio-photo portfolio-photo-{{ $photo->category }} pf-active">
                    <a class="portfolio-image-link" href="/images/{{ $photo->image }}" data-lightbox="portfolio-set-{{ $photo->category }}" data-title="Описание фото">
                        <img class="portfolio-image" src="/images/{{ $photo->image }}" alt=""/>
                    </a>
                    @if(auth()->user())
                            <div class="new-options">
                                <a href="/portfolio/destroy/{{ $photo->id }}"><div class="new-delete"></div></a>
                            </div>
                    @endif
                </div>
            @endforeach
        </div>
        --}}

        <div class="portfolio-part">
            @foreach($photos as $photo)
            <a class="portfolio-image-link" href="/images/{{ $photo->image }}" data-lightbox="portfolio-set-0" data-title="">
                <div class="gallery-box" style="background: url(/images/{{ $photo->image }}) center center no-repeat; background-size: cover">
                </div>
            </a>

            @if(auth()->user())
                <div class="portfolio-delete">
                    <div class="new-options">
                        <a href="/portfolio/destroy/{{ $photo->id }}"><div class="new-delete"></div></a>
                    </div>
                </div>
            @endif
                
            @endforeach
        </div>

       {{--
        <div class="portfolio-part">
                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg1.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg1.png) center center no-repeat; background-size: cover"></div>
                </a>

                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg2.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg2.png) center center no-repeat; background-size: cover"></div>
                </a>

                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg3.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg3.png) center center no-repeat; background-size: cover"></div>
                </a>

                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg4.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg4.png) center center no-repeat; background-size: cover"></div>
                </a>

                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg5.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg5.png) center center no-repeat; background-size: cover"></div>
                </a>

                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg6.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg6.png) center center no-repeat; background-size: cover"></div>
                </a>

                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg7.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg7.png) center center no-repeat; background-size: cover"></div>
                </a>
    
                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg8.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg8.png) center center no-repeat; background-size: cover"></div>
                </a>
                
                 <a class="portfolio-image-link" href="/assets/img/portfolio/pimg15.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg15.png) center center no-repeat; background-size: cover"></div>
                </a>
                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg16.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg16.png) center center no-repeat; background-size: cover"></div>
                </a>

                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg9.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg9.png) center center no-repeat; background-size: cover"></div>
                </a>
         
                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg10.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg10.png) center center no-repeat; background-size: cover"></div>
                </a>

                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg12.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg12.png) center center no-repeat; background-size: cover"></div>
                </a>
    
                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg13.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg13.png) center center no-repeat; background-size: cover"></div>
                </a>
           
                
                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg14.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg14.png) center center no-repeat; background-size: cover"></div>
                </a>
     
                <a class="portfolio-image-link" href="/assets/img/portfolio/pimg1.png" data-lightbox="portfolio-set-0" data-title="">
                    <div class="gallery-box" style="background: url(/assets/img/portfolio/pimg1.png) center center no-repeat; background-size: cover"></div>
                </a>
        </div>
        --}}
       
  </section>
@endsection