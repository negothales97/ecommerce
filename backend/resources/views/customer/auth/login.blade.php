@extends('customer.templates.default')
@section('content')

<section class="content">
    <section class="checkout">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-4">
                    <div class="title-register">
                        <span>Login</span>
                    </div>
                    <div class="box-register box-register-with-title">
                        <form method="post" action="{{url('customer/login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Criar uma senha</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit">Continuar</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" onclick="window.location.href='{{url('customer/register')}}'">Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection