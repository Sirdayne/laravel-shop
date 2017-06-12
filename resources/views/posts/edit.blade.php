@extends('layouts.main')

@section('content')

    <div class="navigation-title">Редактирование новости</div>

    <section class="lara-section">
    <div class="wrap">

    <h3>Обновите данные новости в форме</h3>
    
    @if(isset($success))
        <div class="lara-success"> {{$success}} </div>
    @endif

    @if (count($errors))
    <div>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>

        @endforeach
    </div>
    @endif

    <form method="POST" action="/posts/update" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $post->id }}">
        <input type="text" name="title" placeholder="Заголовок" value="{{ $post->title }}">
        <input type="file" name="image">
        <textarea name="description" class="lara-textarea-small" placeholder="Краткое описание">{{ $post->description }}</textarea>
        <textarea name="body" class="lara-textarea" placeholder="Напишите новость...">{{ $post->body }}</textarea>
        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection