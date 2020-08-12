@extends('customer.templates.default')
@section('content')

    <section class="content">
        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <div class="box-register">
                            <p>Para continuar, informe seu e-mail</p>
                        <form method="post" action="{{url('customer/login')}}">
                            @csrf
                            <input type="hidden" name="checkout" value="true">
                                <div class="form-group">
                                    <input type="email" name="email" id="input-email" placeholder="Seu e-mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="input-password" class="display-none"
                                        placeholder="Informe a senha">
                                </div>
                                <button type="button" class="continue-email">Continuar</button>
                                <button type="submit" class="submit-email display-none">Continuar</button>
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
    <script type="text/javascript">
        $('.continue-email').on('click', function(e) {
            e.preventDefault();
            let email = $("#input-email").val();
            makeConsult(email);
        });
        const makeConsult = async (email) => {
            let customer = await validateEmail(email);
            if (customer) {
                $("#input-password").removeClass('display-none');

                $(".continue-email").addClass('display-none');
                $(".submit-email").removeClass('display-none');

            }
        }
        const validateEmail = async (email) => {
            return await axios.get(`{{ route('api.checkout.consult') }}`, {
                    params: {
                        email
                    }
                })
                .then(response => {
                    return response.data;
                })
                .catch(error => {
                    window.location.href = `{{ route('cart.checkout.index') }}`;
                    return null;
                });
        }

    </script>
@endsection
