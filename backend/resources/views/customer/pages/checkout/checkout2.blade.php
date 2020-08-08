@extends('customer.templates.default')
@section('content')

<section class="content">
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-register">
                        <span>Cadastro</span>
                    </div>
                    <div class="box-register box-register-with-title">
                        <form>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Criar uma senha</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="verifypassword">Confirmar senha</label>
                                <input type="password" class="form-control" id="verifypassword" name="verifypassword">
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fisica" name="pessoa" class="custom-control-input">
                                <label class="custom-control-label" for="fisica">Pessoa física</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="juridica" name="pessoa" class="custom-control-input">
                                <label class="custom-control-label" for="juridica">Pessoa jurídica</label>
                            </div>
                            <div class="form-group">
                                <label for="name">Nome completo</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf">
                            </div>
                            <div class="form-group">
                                <label for="date">Data de nascimento</label>
                                <input type="text" class="form-control" id="date" name="data">
                            </div>
                            <div class="form-group">
                                <label for="celphone">Celular</label>
                                <input type="text" class="form-control" id="celphone" name="celphone">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="title-register">
                        <span>Entrega</span>
                    </div>
                    <div class="box-register box-register-with-title">
                        <form>
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep">
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                First radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Second radio
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label for="address">Endereço</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="number">Número</label>
                                <input type="text" class="form-control" id="number" name="number">
                            </div>
                            <div class="form-group">
                                <label for="complement">Complemento</label>
                                <input type="text" class="form-control" id="complement" name="complement">
                            </div>
                            <div class="form-group">
                                <label for="district">Bairro</label>
                                <input type="text" class="form-control" id="district" name="district">
                            </div>
                            <div class="form-group">
                                <label for="state">Estado</label>
                                <input type="text" class="form-control" id="state" name="state">
                            </div>
                            <div class="form-group">
                                <label for="city">Cidade</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="title-register">
                        <span>Pagamento</span>
                    </div>
                    <div class="box-register box-register-with-title">
                        <form>
                            <img id="card-checkout" src="{{ asset('img/card-checkout.png') }}" alt="Cartão">
                            <div class="form-group">
                                <label for="number-card">Número do cartão de crédito</label>
                                <input type="text" class="form-control" id="number-card" name="number-card" placeholder="0000 0000 0000 0000">
                            </div>
                            <div class="form-group">
                                <label for="validity">Validade</label>
                                <input type="text" class="form-control" id="validity" name="validity" placeholder="MM/AA">
                            </div>
                            <div class="form-group">
                                <label for="name-card">NOme escrito no cartão</label>
                                <input type="text" class="form-control" id="name-card" name="name-card">
                            </div>
                            <div class="form-group">
                                <label for="code-security">Código de segurança</label>
                                <input type="text" class="form-control" id="code-security" name="code-security" placeholder="CVV">
                            </div>
                            <div class="form-group">
                                <label for="parcels">Número de parcelas</label>
                                <select class="form-control" id="parcels" name="parcels">
                                    <option>6x de R$31,65 sem juros</option>
                                    <option>6x de R$31,65 sem juros</option>
                                    <option>6x de R$31,65 sem juros</option>
                                    <option>6x de R$31,65 sem juros</option>
                                </select>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="delivery">
                                <label class="custom-control-label" for="delivery">Endereço de entrega igual ao de cobrança</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection
@section('scripts')
<script type="text/javascript">
    $('.link-content').on('click', function(e) {
        let id = $(this).data('id');
        axios.get(`api/click/${id}`)
            .then(response => console.log(response))
            .catch(error => console.log(error))
    });
</script>
@endsection