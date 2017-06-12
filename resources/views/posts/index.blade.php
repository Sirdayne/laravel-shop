@extends('layouts.main')

@section('content')
    <div class="navigation-title">Новости</div>

    <section class="news-section">
        <div class="wrap">

            @if (Session::has('message'))
                <div class="lara-success">{{ Session::get('message') }}</div>
            @endif

            @foreach($posts as $post)

                <div class="new">
                        @if(auth()->user())
                        <div class="new-options">
                            <a href="/posts/edit/{{ $post->id }}"><div class="new-edit"></div></a>
                            <a href="/posts/destroy/{{ $post->id }}"><div class="new-delete"></div></a>
                        </div>
                        @endif
                        <div class="new-img"><img src="/images/{{ $post->image }}" alt=""></div>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->description }}</p>
                        
                        <div class="btns-row"><a href="/posts/{{ $post->id }}"><button class="btn-types">Подробнее</button></a></div>
                        <div class="new-date">{{ $post->created_at->format('Y-m-d') }}</div>
                        {{-- {{ $post->created_at->toFormattedDateString() }} --}}
                        {{--<div>{{ $post->user->name }}</div>--}}
                </div>
            @endforeach

            @include('pagination.default', ['paginator' => $posts->appends(Request::all()),])
        </div>
    </section>

@endsection
