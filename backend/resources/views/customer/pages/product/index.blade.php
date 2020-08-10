@extends('customer.templates.default')
@section('content')
<section class="content">
    <section class="promotions">
        <div class="container">
            <h2>{{$product->name}}</h2>
            <form action="{{route('cart.store')}}" method="post">
                @csrf
                <div class="row">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <div class="col-6">
                        <button class="btn btn-primary">Comprar Agora</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-about">
                        <h2>Sobre o produto</h2>
                        <p>
                            {!!$product->description!!}
                        </p>
                    </div>
                </div>
                @component('customer.components.newsletter')
                @endcomponent
            </div>
        </div>
    </section>
</section>
@component('customer.components.social-media')
@endcomponent



@endsection