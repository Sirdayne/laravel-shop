@extends('layouts.main')

@section('content')

    <div class="navigation-title">Редактирование отзыва</div>

    <section class="lara-section">
    <div class="wrap">

    <h3>Обновите данные отзыва в форме</h3>
    
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

    <form method="POST" action="/reviews/update" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $review->id }}">
        <input type="text" name="title" placeholder="Заголовок" value="{{ $review->title }}">
        <input type="file" name="image">
        <textarea name="body" class="lara-textarea" class="lara-textarea-small" placeholder="Напишите новость...">{{ $review->body }}</textarea>
        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection