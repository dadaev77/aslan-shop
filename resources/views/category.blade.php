@extends('master')

    <div class="starter-template">
        <h1>
            {{$category->name}}
{{--            @if($category->code == 'mobiles')--}}
{{--                Мобильные телефоны--}}
{{--            @elseif($category->code == 'portable')--}}
{{--                Портативная техника--}}
{{--            @elseif($category->code == 'techniks')--}}
{{--                Бытовая техника--}}
{{--            @endif--}}
        </h1>
        <p>
            В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
        </p>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/img/ix64.jpg" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>iPhone X 64GB</h3>
                        <p>41990 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/1/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_64" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/img/l.jpg" alt="iPhone X 256GB">
                    <div class="caption">
                        <h3>iPhone X 256GB</h3>
                        <p>51990 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/2/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_256" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/img/htc.jpg" alt="HTC One S">
                    <div class="caption">
                        <h3>HTC One S</h3>
                        <p>12490 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/3/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/htc_one_s" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
