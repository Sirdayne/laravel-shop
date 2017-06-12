@extends('layouts.main')

@section('content')

    @if(auth()->user())
        <div class="navigation-title">Успешно!</div>

        <section class="lara-section">
        <div class="wrap">
            <h3>Вы уже авторизованы</h3>
        </div>
        </section>
    @else

        <div class="navigation-title">Авторизация</div>

        <section class="lara-section">
        <div class="wrap">

        <h3>Введите почту и пароль</h3>

        @if (count($errors))
            <div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>

                @endforeach
            </div>
        @endif

        <form method="POST" action="/login">
            {{ csrf_field() }}
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Пароль">

            <button type="submit" class="lara-btn">Отправить</button>
        </form>

        </div>
        </section>

    @endif


@endsection