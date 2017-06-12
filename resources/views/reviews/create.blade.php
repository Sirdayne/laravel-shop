@extends('layouts.main')

@section('content')

    <div class="navigation-title">Новый отзыв</div>

    <section class="lara-section">
    <div class="wrap">

    <h3>Введите данные отзыва в форму</h3>
    
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

    <form method="POST" action="/reviews/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Имя и дата">
        <input type="file" name="image">
        <textarea name="body" class="lara-textarea-small" placeholder="Напишите отзыв..."></textarea>
        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection