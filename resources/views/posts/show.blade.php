@extends('layouts.main')

@section('content')

    <div class="navigation-title">
        {{ $post->title }}
    </div>
            
    <section class="new-inner">
        
        <div class="wrap">
           
            <img src="/images/{{ $post->image }}" alt="">
            <div class="new-inner-date">{{ $post->created_at->format('Y-m-d') }}</div>
            
            <p>{{ $post->body }}</p>
            
            <div class="share">
                <div class="share-block">
                    <div class="share-txt">Поделиться:</div>
                    <div class="share-icons">
                       
                        <a href="https://www.vk.com/share.php?url=http://windowfashion.kz/posts/{{ $post->id }}&title={{ $post->title }}&description={{ $post->description }}&image=http://windowfashion.kz/images/{{ $post->image }}" target="_blank">
                            <div class="share-vk"></div>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://windowfashion.kz/posts/{{ $post->id }}&title={{ $post->title }}&description={{ $post->description }}&image=http://windowfashion.kz/images/{{ $post->image }}" target="_blank">
                            <div class="share-fb"></div>
                        </a>
                        <a href="https://www.twitter.com/share?url=http://windowfashion.kz/posts/{{ $post->id }}&title={{ $post->title }}&description={{ $post->description }}&image=http://windowfashion.kz/images/{{ $post->image }}" target="_blank">
                            <div class="share-tw"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            {{--<p>{{ $post->user->name }}</p>--}}

            <div class="new-navigation">

                @if( ! empty($prev) )
                <a href="/posts/{{ $prev }}"><div class="new-prev"><img src="/assets/img/arrow-left.png" alt=""><span class="new-nav">Пред.</span></div></a>
                @else
                <div class="new-stub"></div>
                @endif
                
                <div class="new-all"><a href="/posts"><button class="btn-types">Все новости</button></a></div>

                @if( ! empty($next))
                <a href="/posts/{{ $next }}"><div class="new-next"><img src="/assets/img/arrow-right.png" alt=""><span class="new-nav">След.</span></div></a>
                @else
                <div class="new-stub"></div>
                @endif
                
            </div>
            

            <div class="similar-news">
                <div class="sn-title">ЧИТАЙТЕ ТАКЖЕ</div>
                @foreach($randoms as $random)
                <div class="sn-new">
                    <div class="sn-img"><img src="/images/{{ $random->image }}" alt=""></div>
                    <h4>{{ $random->title }}</h4>
                    
                    <a href="/posts/{{ $random->id }}"><div class="sn-btn"><button class="btn-types-white">Подробнее</button></div></a>
                </div>
                @endforeach
            </div>
            
        </div>
        
    </section>

    <!-- COMMENTS HERE -->
    {{--
    @foreach ($post->comments as $comment)

        <h4>Comment: {{ $comment->body }} </h4>
        <p>Posted: {{ $comment->created_at->diffForHumans()  }}</p>


    @endforeach

    <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}
        <textarea name="body" placeholder="Text"></textarea>
        <button type="submit">Submit</button>
    </form>
    --}}


@endsection
