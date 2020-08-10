@extends('customer.templates.default')
@section('content')
<section class="content">
    <section class="promotions">
        <div class="container">
            <h2>{{$category->name}}</h2>
            <div class="slider">
                <button class="prev-carousel"><i class="fas fa-chevron-left"></i></button>
                <button class="next-carousel"><i class="fas fa-chevron-right"></i></button>
                <div class="slider-carousel">
                    @foreach($category->products as $product)
                    @component('customer.components.product', ['product' => $product])
                    @endcomponent
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-about">
                        <h2>Sobre a categoria</h2>
                        <p>
                            {{$category->description}}
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