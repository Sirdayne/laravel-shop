@extends('layouts.main')

@section('content')

    <div class="navigation-title">Регистрация</div>

    <section class="lara-section">
    <div class="wrap">

    <h3>Введите данные в форму</h3>

    @if (count($errors))
        <div>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>

            @endforeach
        </div>
    @endif

    <form method="POST" action="/register">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Имя">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Пароль">
        <input type="password" name="password_confirmation" placeholder="Подтвердите пароль">

        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>

@endsection