@extends('master')
@section('content')
    <div class="starter-template">
        <h1>iPhone X 64GB</h1>
        <h2>{{$product}}</h2>

        <p>Цена: <b>41990 руб.</b></p>
        <img src="/img/ix64.jpg" width="300" height="300">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>
        <a class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/1/add">Добавить в корзину</a>

    </div>
@endsection
