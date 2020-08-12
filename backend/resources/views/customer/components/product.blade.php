<div class="box-product">
    <div class="box-content-product">
        @if ($product->tag_id !== null)
            <div class="status">
                <p>{{ $product->tag->name }}</p>
            </div>
        @endif
        @if ($product->mainProductImage())
            <img src="{{ asset('uploads/products/original/' . $product->mainProductImage()->file) }}" alt="Modelo">
        @else
            <img src="{{ asset('img/slider.jpg') }}" alt="Modelo">
        @endif
        <div class="content-product">
            <p>{{$product->name}}</p>
            <strong>R${{convertMoneyUsaToBrazil($product->productal_price)}}</strong>
            <strike>R${{convertMoneyUsaToBrazil($product->price)}}</strike>
            <small>6x de R${{convertMoneyUsaToBrazil($product->promotional_price / 6)}} sem
                juros</small>
        </div>
    </div>
</div>
