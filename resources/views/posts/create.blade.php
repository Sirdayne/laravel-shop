@extends('layouts.main')

@section('content')

    <div class="navigation-title">Новая новость</div>

    <section class="lara-section">
    <div class="wrap">

    <h3>Введите данные новости в форму</h3>
    
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

    <form method="POST" action="/posts/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Заголовок">
        <input type="file" name="image">
        <textarea name="description" class="lara-textarea-small" placeholder="Краткое описание"></textarea>
        <textarea name="body" class="lara-textarea" placeholder="Напишите новость..."></textarea>
        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection