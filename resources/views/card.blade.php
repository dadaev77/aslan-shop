
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="img/iphone_x_64.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} руб.</p>
            <p>
                <a href="{{ route('basket') }}" class="btn btn-primary"
                   role="button">В корзину</a>
                {{$product->getCategory}}
                @isset($category)
                    {{$category->name}}
                @endisset
                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default"
                   role="button">Подробнее</a>
            </p>
        </div>
    </div>
</div>
{{--<div class="col-sm-6 col-md-4">--}}
{{--    <div class="thumbnail">--}}
{{--        <img src="http://laravel-diplom-1.rdavydov.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">--}}
{{--        <div class="caption">--}}
{{--            <h3>i{{ $product->name }}</h3>--}}
{{--            <p>{{ $product->price }} руб.</p>--}}
{{--            <p>--}}
{{--                <a href="{{ route('basket') }}" class="btn btn-primary"--}}
{{--                   role="button">В корзину</a>--}}
{{--                @isset($category)--}}
{{--                {{$category->name}}--}}
{{--                @endisset--}}

{{--                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default"--}}
{{--                   role="button">Подробнее</a>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
