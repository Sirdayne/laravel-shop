@extends('layouts.main')

@section('content')

    <div class="navigation-title">Административная панель</div>

    <section class="lara-section">
    <div class="wrap">

        <a href="/posts/create"><div class="lara-admin">Добавить новость</div></a>
        <a href="/posts/"><div class="lara-admin">Изменить новости</div></a>
        <a href="/portfolio/create"><div class="lara-admin">Добавить картинку в портфолио</div></a>
        <a href="/portfolio/"><div class="lara-admin">Удалить картинки в портфолио</div></a>
        <a href="/reviews/create"><div class="lara-admin">Добавить отзыв</div></a>
        <a href="/reviews/"><div class="lara-admin">Удалить отзывы</div></a>

    </div>
    </section>


@endsection