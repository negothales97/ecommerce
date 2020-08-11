@extends('admin.templates.default', ['activePage' => 'customer', 'titlePage' => __('Clientes')])

@section('title', 'Atualizar Cliente')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-1 text-dark">Atualizar Cliente</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">
                            <form action="{{ route('admin.customer.update', ['customer' => $customer->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">Nome</label>
                                                <input type="text"
                                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                    name="name" id="name" value="{{ old('name', $customer->name) }}">
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email"
                                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                    name="email" id="email" value="{{ old('email', $customer->email) }}">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="birthday">Data de nascimento</label>
                                                <input type="text"
                                                    class="form-control input-date {{ $errors->has('birthday') ? 'is-invalid' : '' }}"
                                                    name="birthday" id="birthday"
                                                    value="{{ old('birthday', convertDateUsaToBrazil($customer->birthday)) }}">
                                                @if ($errors->has('birthday'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('birthday') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="cellphone">Telefone</label>
                                                <input type="text"
                                                    class="form-control input-phone {{ $errors->has('cellphone') ? 'is-invalid' : '' }}"
                                                    name="cellphone" id="cellphone"
                                                    value="{{ old('cellphone', $customer->cellphone) }}">
                                                @if ($errors->has('cellphone'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('cellphone') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="document_type">Tipo de Documento</label>

                                                <select name="document_type"
                                                    class="form-control {{ $errors->has('document_type') ? 'is-invalid' : '' }}"
                                                    id="document_type">
                                                    <option disabled selected>Selecione..</option>
                                                    <option value="cpf"
                                                        {{ $customer->document_type == 'cpf' ? 'selected' : '' }}>CPF
                                                    </option>
                                                    <option value="cnpj"
                                                        {{ $customer->document_type == 'cnpj' ? 'selected' : '' }}>CNPJ
                                                    </option>

                                                </select>
                                                @if ($errors->has('document_type'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('document_type') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Documento</label>
                                                <input type="text"
                                                    class="form-control input-cpf {{ $customer->document_type == 'cnpj' ? 'display-none' : '' }} {{ $errors->has('document_number') ? 'is-invalid' : '' }}"
                                                    name="document_number" id="cpf" {{ $customer->document_type == 'cnpj' ? 'disabled' : '' }} 
                                                    value="{{ old('document_number', $customer->document_number) }}">
                                                <input type="text"
                                                    class="form-control input-cnpj {{ $customer->document_type == 'cpf' || $customer->document_type == null ? 'display-none' : '' }} {{ $errors->has('document_number') ? 'is-invalid' : '' }}"
                                                    name="document_number" id="cnpj"
                                                    {{ $customer->document_type == 'cpf' || $customer->document_type == null ? 'disabled' : '' }}
                                                    value="{{ old('document_number', $customer->document_number) }}">
                                                @if ($errors->has('document_number'))
                                                    <span class="help-block">
                                                        <small>
                                                            <strong>{{ $errors->first('document_number') }}</strong>
                                                        </small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary float-right">Atualizar</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('#document_type').on('change', function() {
            let documentType = $(this).val();
            if (documentType == "cpf") {
                $("#cnpj").addClass('display-none');
                $("#cpf").removeClass('display-none')

                $("#cnpj").attr('disabled',true);
                $("#cpf").attr('disabled',false);
            } else {
                $("#cpf").addClass('display-none');
                $("#cnpj").removeClass('display-none');

                $("#cnpj").attr('disabled',false);
                $("#cpf").attr('disabled',true)
            }
        });

    </script>
@endsection
