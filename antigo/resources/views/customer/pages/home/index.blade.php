@extends('customer.templates.default')
@section('content')
<section class="banner">

</section>
<section class="alert">
    <div class="row-flex">
        <div class="content-flex">
            <h3>Frete Grátis</h3>
            <h5>Para compras acima de R$250,00</h5>
        </div>
    </div>
</section>
<section class="p-section">
    <div class="row">
        <div class="col">
            <h3 class="block-title">Promoções</h3>
        </div>
    </div>
    <div class="box-carousel">
        <div class="box-carousel-items">
            @foreach($promotions as $promotion)
            <div class="box-product" data-url="{{route('product', ['slug' => $promotion->slug])}}">
                <div class="box-img-product">
                    @if($promotion->images()->first())
                    <img src="{{asset('uploads/products/original')}}/{{$promotion->images()->first()->file}}"
                        alt="{{$promotion->name}}">
                    @endif
                </div>
                <a href="{{route('product', ['slug' => $promotion->slug])}}">
                    <div class="box-title-product">
                        <h2> {{$promotion->name}}</h2>
                        <h4>R$ {{convertMoneyUsaToBrazil($promotion->promotional_price)}} <span class="product-price">R$
                                {{convertMoneyUsaToBrazil($promotion->price)}}</span> </h4>
                        <h5>6x de R$ {{convertMoneyUsaToBrazil($promotion->promotional_price / 6)}}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <h3 class="block-title">Categorias em Destaque</h3>
        </div>
    </div>
    <div class="row">
        <?php
        $numOfCols = 3;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        ?>
        @foreach($featuredCategories as $featuredCategory)
        <div class="col-md-{{$bootstrapColWidth}}">
            <div class="box-title-category">
                <p>{{$featuredCategory->name}}</p>
            </div>
        </div>
        @php($rowCount++)
        @if($rowCount % $numOfCols == 0)
    </div>
    <div class="row">
        @endif
        @endforeach
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <h3 class="block-title">Novidades</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="promotion-carousel">
                @foreach($promotions as $promotion)
                <div class="box-product" data-url="{{route('product', ['slug' => $promotion->slug])}}">
                    <div class="box-img-product">
                        @if($promotion->images()->first())
                        <img src="{{asset('uploads/products/original')}}/{{$promotion->images()->first()->file}}"
                            alt="{{$promotion->name}}">
                        @endif
                    </div>
                    <div class="box-title-product">
                        <h2>{{$promotion->name}}</h2>
                        <h4>R$ {{convertMoneyUsaToBrazil($promotion->promotional_price)}} <span class="product-price">R$
                                {{convertMoneyUsaToBrazil($promotion->price)}}</span> </h4>
                        <h5>6x de R$ {{convertMoneyUsaToBrazil($promotion->promotional_price / 6)}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <h3 class="block-title">Promoção Relâmpago</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="promotion-carousel">
                @foreach($promotions as $promotion)
                <div class="box-product" data-url="{{route('product', ['slug' => $promotion->slug])}}">
                    <div class="box-img-product">
                        @if($promotion->images()->first())
                        <img src="{{asset('uploads/products/original')}}/{{$promotion->images()->first()->file}}"
                            alt="{{$promotion->name}}">
                        @endif
                    </div>
                    <div class="box-title-product">
                        <h2>{{$promotion->name}}</h2>
                        <h4>R$ {{convertMoneyUsaToBrazil($promotion->promotional_price)}} <span class="product-price">R$
                                {{convertMoneyUsaToBrazil($promotion->price)}}</span> </h4>
                        <h5>6x de R$ {{convertMoneyUsaToBrazil($promotion->promotional_price / 6)}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">

</script>
@endsection