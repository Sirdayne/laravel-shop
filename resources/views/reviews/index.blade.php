@extends('layouts.main')

@section('content')
    <div class="navigation-title">Отзывы наших клиентов</div>

    <section class="news-section">

        <div class="wrap">

            @if (Session::has('message'))
                <div class="lara-success">{{ Session::get('message') }}</div>
            @endif

            <div class="jal-row">
                @foreach($reviews as $review)

                    <div class="jal-part review-part"> 
                        @if(auth()->user())
                        <div class="new-options">
                            <a href="/reviews/edit/{{ $review->id }}"><div class="new-edit"></div></a>
                            <a href="/reviews/destroy/{{ $review->id }}"><div class="new-delete"></div></a>
                        </div>
                        @endif

                        <div class="jal-img review-img">
                            <img src="/images/{{ $review->image }}" alt="">
                        </div>
                        <div class="jal-text">
                            <h1>{{ $review->title }}</h1>
                            <p> {{ $review->body }} </p>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection