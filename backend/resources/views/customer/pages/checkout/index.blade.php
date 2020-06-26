@extends('customer.templates.default')
@section('content')

<section class="checkout">
    <div class="container">

        <div class="box">
            <div class="box-header bg-gradient">
                <h5 class="box-title">Cadastro</h5>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="input-email">E-mail</label>
                            <input type="text" class="form-control" id="input-email" name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="input-password">Criar uma senha</label>
                            <input type="text" class="form-control" id="input-password" name="password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="input-password_confirmation">Confirmar senha</label>
                            <input type="text" class="form-control" id="input-password_confirmation"
                                name="password_confirmation">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="type" class="form-check-input" id="radio-pf">
                            <label for="radio-pf" class="form-check-label">Pessoa física</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="type" class="form-check-input" id="radio-pj">
                            <label for="radio-pj" class="form-check-label">Pessoa física</label>
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
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="input-city">CPF</label>
                            <input type="text" class="form-control" id="input-city" name="city">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="input-document_number">CNPJ</label>
                            <input type="text" class="form-control" id="input-document_number" name="document_number">
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
                            <label for="input-password_confirmation">Celular</label>
                            <input type="text" class="form-control" id="input-password_confirmation"
                                name="password_confirmation">
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
        <div class="box">
            <div class="box-header bg-gradient">
                <h5 class="box-title">Pagamento</h5>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="radio">
                                </div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection