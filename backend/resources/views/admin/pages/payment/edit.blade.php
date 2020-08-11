@extends('admin.templates.default', ['activePage' => 'payment', 'titlePage' => __('Pagamento')])

@section('title', 'Pagamento')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-1 text-dark">Pagamento</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
            <form action="{{route('admin.payment.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Cartão de Crédito</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="minimum_value_credit_card">Valor mínimo da parcela</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">R$</span>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control input-money {{ $errors->has('minimum_value_credit_card') ? 'is-invalid' : '' }}"
                                                        name="minimum_value_credit_card" id="minimum_value_credit_card"
                                                        value="{{ old('minimum_value_credit_card', convertMoneyUsaToBrazil($payment->minimum_value_credit_card)) }}">
                                                </div>
                                                @if ($errors->has('minimum_value_credit_card'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('minimum_value_credit_card') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="max_parcel">Máximo de parcelas</label>
                                                <select name="max_parcel" id="max_parcel"
                                                    class="form-control {{ $errors->has('max_parcel') ? 'is-invalid' : '' }}">
                                                    <option disabled selected>Selecione..</option>
                                                    <option value="1" {{ old('max_parcel', $payment->max_parcel) == 1 ? 'selected' : '' }}>
                                                        1
                                                    </option>
                                                    <option value="2" {{ old('max_parcel', $payment->max_parcel) == 2 ? 'selected' : '' }}>
                                                        2
                                                    </option>
                                                    <option value="3" {{ old('max_parcel', $payment->max_parcel) == 3 ? 'selected' : '' }}>
                                                        3
                                                    </option>
                                                    <option value="4" {{ old('max_parcel', $payment->max_parcel) == 4 ? 'selected' : '' }}>
                                                        4
                                                    </option>
                                                    <option value="5" {{ old('max_parcel', $payment->max_parcel) == 5 ? 'selected' : '' }}>
                                                        5
                                                    </option>
                                                    <option value="6" {{ old('max_parcel', $payment->max_parcel) == 6 ? 'selected' : '' }}>
                                                        6
                                                    </option>
                                                    <option value="7" {{ old('max_parcel', $payment->max_parcel) == 7 ? 'selected' : '' }}>
                                                        7
                                                    </option>
                                                    <option value="8" {{ old('max_parcel', $payment->max_parcel) == 8 ? 'selected' : '' }}>
                                                        8
                                                    </option>
                                                    <option value="9" {{ old('max_parcel', $payment->max_parcel) == 9 ? 'selected' : '' }}>
                                                        9
                                                    </option>
                                                    <option value="10" {{ old('max_parcel', $payment->max_parcel) == 10 ? 'selected' : '' }}>
                                                        10
                                                    </option>
                                                </select>
                                                @if ($errors->has('max_parcel'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('max_parcel') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="max_interest">Parcelas sem juros</label>
                                                <select name="max_interest" id="max_interest"
                                                    class="form-control {{ $errors->has('max_interest') ? 'is-invalid' : '' }}">
                                                    <option disabled selected>Selecione..</option>
                                                    <option value="1" {{ old('max_interest', $payment->max_interest) == 1 ? 'selected' : '' }}>
                                                        1
                                                    </option>
                                                    <option value="2" {{ old('max_interest', $payment->max_interest) == 2 ? 'selected' : '' }}>
                                                        2
                                                    </option>
                                                    <option value="3" {{ old('max_interest', $payment->max_interest) == 3 ? 'selected' : '' }}>
                                                        3
                                                    </option>
                                                    <option value="4" {{ old('max_interest', $payment->max_interest) == 4 ? 'selected' : '' }}>
                                                        4
                                                    </option>
                                                    <option value="5" {{ old('max_interest', $payment->max_interest) == 5 ? 'selected' : '' }}>
                                                        5
                                                    </option>
                                                    <option value="6" {{ old('max_interest', $payment->max_interest) == 6 ? 'selected' : '' }}>
                                                        6
                                                    </option>
                                                    <option value="7" {{ old('max_interest', $payment->max_interest) == 7 ? 'selected' : '' }}>
                                                        7
                                                    </option>
                                                    <option value="8" {{ old('max_interest', $payment->max_interest) == 8 ? 'selected' : '' }}>
                                                        8
                                                    </option>
                                                    <option value="9" {{ old('max_interest', $payment->max_interest) == 9 ? 'selected' : '' }}>
                                                        9
                                                    </option>
                                                    <option value="10" {{ old('max_interest', $payment->max_interest) == 10 ? 'selected' : '' }}>
                                                        10
                                                    </option>
                                                </select>
                                                @if ($errors->has('max_interest'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('max_interest') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- ./col -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Boleto</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="boleto_active">Boleto Bancário</label>
                                                <select name="boleto_active" id="boleto_active"
                                                    class="form-control {{ $errors->has('boleto_active') ? 'is-invalid' : '' }}">
                                                    <option disabled selected>Selecione..</option>
                                                    <option value="1" {{ old('boleto_active', $payment->boleto_active) == 1 ? 'selected' : '' }}>
                                                        Ativado
                                                    </option>
                                                    <option value="0" {{ old('boleto_active', $payment->boleto_active) == 0 ? 'selected' : '' }}>
                                                        Desativado
                                                    </option>
                                                </select>
                                                @if ($errors->has('boleto_active'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('boleto_active') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="minimum_value_boleto">Valor mínimo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">R$</span>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control input-money {{ $errors->has('minimum_value_boleto') ? 'is-invalid' : '' }}"
                                                        name="minimum_value_boleto" id="minimum_value_boleto"
                                                        value="{{ old('minimum_value_boleto', convertMoneyUsaToBrazil($payment->minimum_value_boleto)) }}">
                                                </div>
                                                @if ($errors->has('minimum_value_boleto'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('minimum_value_boleto') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="use_discount_boleto">Usar desconto no boleto</label>
                                                <select name="use_discount_boleto" id="use_discount_boleto"
                                                    class="form-control {{ $errors->has('use_discount_boleto') ? 'is-invalid' : '' }}">
                                                    <option disabled selected>Selecione..</option>
                                                    <option value="1"
                                                        {{ old('use_discount_boleto',$payment->use_discount_boleto) == 1 ? 'selected' : '' }}>
                                                        Sim
                                                    </option>
                                                    <option value="0"
                                                        {{ old('use_discount_boleto',$payment->use_discount_boleto) == 0 ? 'selected' : '' }}>
                                                        Não
                                                    </option>
                                                </select>
                                                @if ($errors->has('use_discount_boleto'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('use_discount_boleto') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="percentage_discount_boleto">Porcentagem de desconto</label>
                                                <div class="input-group">
                                                    <input type="text"
                                                        class="form-control input-money {{ $errors->has('percentage_discount_boleto') ? 'is-invalid' : '' }}"
                                                        name="percentage_discount_boleto" id="percentage_discount_boleto"
                                                        value="{{ old('percentage_discount_boleto', convertMoneyUsaToBrazil($payment->percentage_discount_boleto)) }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                                @if ($errors->has('percentage_discount_boleto'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('percentage_discount_boleto') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- ./col -->
                    </div>
                    <div class="row">
                        <div class="col-12 mb-5">
                            <button class="btn btn-primary float-right">Atualizar</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
