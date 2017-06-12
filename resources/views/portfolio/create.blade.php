@extends('layouts.main')

@section('content')

    <div class="navigation-title">Новая картинка в портфолио</div>

    <section class="lara-section">
    <div class="wrap">

    <h3>Введите данные картинки в форму</h3>
    
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

    <form method="POST" action="/portfolio/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <select class="lara-select" name="category" style="display:none">
           		<option value="1">Для кухни</option>
            	<option value="2">Для спальни</option>
            	<option value="3">Для зала</option>
            	<option value="4">Для офиса</option>
            </select>
        <input type="file" name="image">
        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection