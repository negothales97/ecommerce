@extends('admin.templates.default')

@section('title', 'Editar Depoimento')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Meu dados</h1>
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
                        <form action="{{route('admin.account.update')}}"
                            method="post">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="input-name">Nome</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                                value="{{old('name', $admin->name)}}" name="name" id="input-name" required>
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
                                            <label for="input-email">E-mail</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                                                value="{{old('email', $admin->email)}}" name="email" id="input-email" required>
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
                                            <label for="input-password">Senha</label>
                                            <input type="password"
                                                class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                                                name="password" id="input-password">
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="input-password_confirmation">Confirmação de Senha</label>
                                            <input type="password"
                                                class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                                                name="password_confirmation" id="input-password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p><small>Somente preencher a senha, caso deseje realizar alteração.</small></p>
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