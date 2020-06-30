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
<section class="container p-section">
    <div class="row">
        <div class="col">
            <h3 class="block-title">Promoções</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="products-carousel">
                @foreach($promotions as $promotion)

                <div class="box-product" data-url="{{route('product', ['slug' => $promotion->slug])}}">
                    <div class="box-img-product">
                        @if($promotion->images()->first())
                        <img src="{{$promotion->images()->first()->file}}" alt="{{$promotion->name}}">
                        @endif
                    </div>
                    <div class="box-title-product">
                        <h2>{{$promotion->name}}</h2>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endsection