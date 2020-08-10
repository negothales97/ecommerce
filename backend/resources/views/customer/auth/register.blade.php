@extends('customer.templates.default')
@section('content')

<section class="content">
    <section class="checkout">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-4">
                    <div class="title-register">
                        <span>Cadastro</span>
                    </div>
                    <div class="box-register box-register-with-title">
                        <form method="post" action="{{url('customer/register')}}">
                        @csrf
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Criar uma senha</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar senha</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Nome completo</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="birthday">Data de nascimento</label>
                                <input type="text" class="form-control input-date" id="birthday" name="birthday" required>
                            </div>
                            <div class="form-group">
                                <label for="cellphone">Celular</label>
                                <input type="text" class="form-control input-phone" id="cellphone" name="cellphone" required>
                            </div>
                            <button>Continuar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection