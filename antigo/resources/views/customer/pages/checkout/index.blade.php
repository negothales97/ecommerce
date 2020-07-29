@extends('customer.templates.default')
@section('content')

<section class="checkout">
    <div class="container-fluid">
        <form action="{{route('checkout')}}" method="post">
        @csrf
            <div class="row">
                <div class="col-md-4">

                    <div class="box">
                        <div class="box-header bg-gradient">
                            <h5 class="box-title">Cadastro</h5>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-email">E-mail</label>
                                        <input type="email" class="form-control" id="input-email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-password">Criar uma senha</label>
                                        <input type="password" class="form-control" id="input-password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-password_confirmation">Confirmar senha</label>
                                        <input type="password" class="form-control" id="input-password_confirmation"
                                            name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" checked name="type" class="form-check-input" id="radio-pf">
                                        <label for="radio-pf" class="form-check-label">Pessoa física</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="type" class="form-check-input" id="radio-pj">
                                        <label for="radio-pj" class="form-check-label">Pessoa Jurídica</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-full_name">Nome completo</label>
                                        <input type="text" class="form-control" id="input-full_name" name="full_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="div-input-cpf">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-cpf">CPF</label>
                                        <input type="text" class="form-control input-cpf" id="input-cpf"
                                            name="document_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row display-none" id="div-input-cnpj">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-cnpj">CNPJ</label>
                                        <input type="text" class="form-control input-cnpj " id="input-cnpj" name="document_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-birthdate">Data de nascimento</label>
                                        <input type="text" class="form-control" id="input-birthdate" name="birthdate">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-phone">Celular</label>
                                        <input type="text" class="form-control input-phone" id="input-phone"
                                            name="phone">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-header bg-gradient">
                            <h5 class="box-title">Entrega</h5>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-zip_code">CEP</label>
                                        <input type="text" class="form-control" id="input-zip_code" name="zip_code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Escolha a forma de entrega</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" value="Retirada na loja"
                                                name="delivery">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-street">Endereço</label>
                                        <input type="text" class="form-control" id="input-street" name="street">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-number">Número</label>
                                        <input type="text" class="form-control" id="input-number" name="number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-complement">Complemento</label>
                                        <input type="text" class="form-control" id="input-complement" name="complement">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-district">Bairro</label>
                                        <input type="text" class="form-control" id="input-district" name="district">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-uf">Estado</label>
                                        <input type="text" class="form-control" id="input-uf" name="uf">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-city">Cidade</label>
                                        <input type="text" class="form-control" id="input-city" name="city">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box">
                        <div class="box-header bg-gradient">
                            <h5 class="box-title">Pagamento</h5>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-12">
                                    <label>Formas de pagamento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="radio">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="payment_method">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Total</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                R$
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="total"
                                            value="{{convertMoneyUsaToBrazil($total)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Número do cartão de credito</label>
                                    <input type="text" class="form-control" name="number_card">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Validade</label>
                                    <input type="text" class="form-control" name="expiration_date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Nome escrito no cartão</label>
                                    <input type="text" class="form-control" name="name_card">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Número de parcelas</label>
                                    <select name="parcel" class="form-control">
                                        <option value="1">1X</option>
                                        <option value="2">2X</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="type" class="form-check-input" id="radio-same-address">
                                        <label for="radio-same-address" class="form-check-label">Endereço de entrega igual ao de
                                            cobrança</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-success">Finalizar Compra</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection