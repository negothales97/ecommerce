@extends('customer.templates.default')
@section('content')

<section class="content">
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="box-register">
                        <p>Para continuar, informe seu e-mail</p>
                        <form>
                        
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Seu e-mail">
                            </div>
                            <!-- <div class="form-group">
                                <input type="email" name="email" placeholder="Seu e-mail">
                            </div> -->
                            <button type="button" onclick="window.location.href='{{route('cart.checkout.index')}}';">Continuar</button>
                        </form>
                    </div>
                    <h5>Usamos seu e-mail de forma segura para</h5>
                    <ul>
                        <li><img src="{{ asset('img/check.png') }}" alt="Check">Identificar seu perfil</li>
                        <li><img src="{{ asset('img/check.png') }}" alt="Check">Notificar sobre o andamento do seu
                            pedido</li>
                        <li><img src="{{ asset('img/check.png') }}" alt="Check">Gerenciar seu histórico de compras</li>
                        <li><img src="{{ asset('img/check.png') }}" alt="Check">Acelerar o preechimento de suas
                            informações</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection
@section('scripts')

@endsection