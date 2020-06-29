@extends('customer.templates.default')
@section('content')
<section class="container p-section">
    <div class="row">
        <div class="col">
            <h3 class="block-title text-center">{{$product->name}}</h3>
            <p class="text-center">Fone de ouvido para jogos com alto-falantes de 50 mm e som suround 7.1</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="owl-carousel" id="img-carousel">
                @forelse($product->images as $image)
                <div class="box-product">
                    <div class="box-img-product">
                        <img src="{{$image->link}}" alt="{{$product->name}}">
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</section>

<section class="container p-section">
    <div class="row">
        <div class="col">
            <h3 class="block-title">Especificações técnicas</h3>
            {!!$product->description!!}
            <form action="{{route('cart.store')}}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="text" name="qty">
                <button class="btn btn-primary btn-cart">
                    Adicionar ao carrinho
                </button>
            </form>
        </div>
    </div>
</section>

@endsection