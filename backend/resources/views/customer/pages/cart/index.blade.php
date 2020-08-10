@extends('customer.templates.default')
@section('content')
<section class="content">
    <section class="promotions">
        <div class="container">
            <h2>Carrinho</h2>
            <div class="row">
                <div class="col-12">
                    <div class="box-info-budget" style="margin-top: 0;">
                        <p class="title"><b>Informações Importantes</b></p>
                        <p>Somos uma empresa b2b e vendemos somente para empresas.</p>
                        <p>O prazo de produção do brinde varia com a personalização e disponibilidade de estoque.
                        </p>
                        <p>Para assinatura do contrato de compra, entre em contato com o seu vendedor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 95px;"></th>
                                <th scope="col">Nome</th>
                                <!--<th scope="col">Referência</th>-->
                                <th scope="col" style="width: 150px;">Quantidade</th>
                                Mother <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $key => $item)
                            <tr>
                                <td>
                                    <a href="{{ route('product', ['slug' => $item['product']->slug])}}">
                                        @if($item['product']->mainProductImage())
                                        <img class="image-product-cart"
                                            src="{{asset('uploads/products/original/'.$item['product']->mainProductImage()->file)}}"
                                            alt="Modelo">
                                        @else
                                        <img class="image-product-cart" src="{{asset('img/slider.jpg')}}" alt="Modelo">
                                        @endif
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('product', ['slug' => $item['product']->slug])}}">
                                        {{$item['product']->name}}
                                    </a>
                                </td>

                                <td>
                                    <input type="hidden" name="product-id" class="product-id"
                                        value="{{$item['product']->id}}" data-key="{{$key}}">
                                    <div class="cart-qty-group">
                                        <div class="icon">
                                            <input type="text" name="quantity[{{$item['cart_key']}}]" min="0"
                                                class="form-control input-qty" data-key="{{$key}}"
                                                value="{{$item['quantity']}}"
                                                data-min-qty="{{$item['product']->min_qty}}" style="width: 90px;">
                                            <i class="fa fa-check-circle" aria-hidden="true" style="display: none;"></i>
                                            <i class="fa fa-times-circle" aria-hidden="true" style="display: none;"></i>
                                        </div>
                                    </div>
                                </td>
                                <td>

                                    <a href="{{ route('cart.delete.product', ['id' => $item['cart_key']])}}"
                                        title="Excluir" class="act-list act-delete">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row" style="margin-bottom: 30px;">
                <div class="col-12">
                    <button type="button" class="btn-left-more-products"
                        onclick="window.location.href='{{ route('home')}}';"><i class="fa fa-arrow-circle-left"
                            aria-hidden="true"></i> Escolher mais produtos</button>
                    <button type="button" class="btn-right-cart"
                        onclick="window.location.href='{{route('cart.checkout.email')}}';">
                        Finalize agora mesmo <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
</section>
@component('customer.components.social-media')
@endcomponent



@endsection