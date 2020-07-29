@extends('customer.templates.default')
@section('content')
<section class="container p-section">
    <section id="box-title">
        <div class="container">
            <div class="row ">
                <div class="col d-flex justify-content-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{#}">Home</a></li>
                            <li class="breadcrumb-item">
                                {{$product->name}}</a>
                            </li>

                            @if($product->categories->first())
                            @if($product->categories->first()->category_id == null)
                            <li class="breadcrumb-item active" aria-current="page">
                                {{$product->categories->first()->name}}</li>
                            @else
                            <li class="breadcrumb-item active">
                                <a
                                    href="{{route('company',['category'=> $product->categories->first()->category->slug,'company' => $product->company->slug])}}">
                                    {{$product->categories->first()->category->name}}
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{$product->categories->first()->name}}</li>
                            @endif
                            @endif
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </section>

    <div class="row">
        <div class="col">
            <h3 class="block-title text-center">{{$product->name}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div>
                <div class="box-product">
                    <div class="box-img-product">
                @foreach($product->images as $image)
                        <img src="{{asset('uploads/products/original/'.$image->file)}}" alt="{{$product->name}}">
                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container p-section">
    <div class="row">
        <div class="col">
            <div>
                <h4>R$ {{convertMoneyUsaToBrazil($product->promotional_price)}} <span class="product-price">R$
                        {{convertMoneyUsaToBrazil($product->price)}}</span> </h4>
                <h5>6x de R$ {{convertMoneyUsaToBrazil($product->promotional_price / 6)}}</h5>
            </div>
            
            <div>
                <form action="{{route('cart.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-primary btn-cart">
                        Comprar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection